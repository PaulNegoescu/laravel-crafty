<?php 
class Crafty_Base_Controller extends Base_Controller {
	public $restful = true;

	public function get_index($result = '', array $prevCommands = array())
	{
		$view = View::make('crafty::index');

		$view["prevCommands"] = $prevCommands;
		$view["result"]       = $result;

		return $view;
	}

	public function post_index() {
		$baseCommand  = 'php artisan ';
		$userCommand  = Input::get('submit');
<<<<<<< Updated upstream
		$fullCommand  = $baseCommand.escapeshellarg($userCommand);
		$extraCommand = Input::get($userCommand . 'Params');
=======
		$fullCommand  = $baseCommand.$userCommand;
		$extraParams  = Input::get(Input::get('submit') . 'Params');
		$extraCommand = Input::get(Input::get('submit') . 'Cmd');
>>>>>>> Stashed changes
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
		$newPrevCommand  = array(array('command' => $fullCommand, 'result' => $result));
		$prevCommands    = array_merge($prevCommands, $newPrevCommand);

		return $this->get_index($result, $prevCommands);
	}
}