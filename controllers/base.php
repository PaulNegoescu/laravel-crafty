<?php 
class Laravel_Crafty_Base_Controller extends Base_Controller {
	public $restful = true;

	public function get_index()
	{
		$migrateParams = array(
			''            => array('Everything', false),
			'application' => array('Application', false),
			'bundle'      => array('Bundle', false)
		);
		$migrateParams[Input::old("migrateParams")][1] = true;

		$generateCmd = array(
			'resource'   => array('Resource', false),
			'controller' => array('Controller', false),
			'model'      => array('Model', false),
			'migration'  => array('Migration', false),
			'view'       => array('View', false)
		);
		$whichCmd = (string)Input::old("generateCmd");
		empty($whichCmd) ? $whichCmd = 'resource' : '';
		$generateCmd[$whichCmd][1] = true;

		$view = View::make('laravel-crafty::index');

		$view['prevCommands']  = (array)Session::get('prevCommands');
		$view['result']        = (string)Session::get('result');
		if (function_exists('gzuncompress') && strlen($view['result']) > 0) {
			$view['result']    = gzuncompress($view['result']);
		}
		$view['migrateParams'] = $migrateParams;
		$view['generateCmd']   = $generateCmd;

		return $view;
	}

	public function post_index() {
		$baseCommand  = 'php artisan ';
		$userCommand  = Input::get('submit');
		$fullCommand  = $baseCommand.$userCommand;
		$extraParams  = Input::get(Input::get('submit') . 'Params');
		$extraCommand = Input::get(Input::get('submit') . 'Cmd');
		$prevCommands = Input::get('prevCommands');

		//if we have an extra command (after a colon)
		if(!empty($extraCommand)) {
			$fullCommand = $fullCommand . ':' . $extraCommand;
		}
		//if an input like migrate:makeParams is set add the params to the command
		if(!empty($extraParams)) {
			$fullCommand = $fullCommand . ' ' . $extraParams;
		}

		$result = trim(shell_exec(escapeshellcmd($fullCommand)));

		if(!$result) {
			$result = 'Nothing happened!';
		}

		if(!empty($prevCommands)) {
			$prevCommands = json_decode(html_entity_decode($prevCommands), true);
		}
		$prevCommands[] = $fullCommand;

		if(function_exists('gzcompress')) {
			$result = gzcompress($result);
		}

		return Redirect::to_action('laravel-crafty::base@index')->with("prevCommands", $prevCommands)->with("result", $result)->with_input();
	}
}