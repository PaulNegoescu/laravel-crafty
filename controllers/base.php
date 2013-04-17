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
		$userCommand  = escapeshellarg(Input::get('submit'));
		$fullCommand  = $baseCommand.$userCommand;
		$extraCommand = Input::get(Input::get('submit') . 'Params');
		$prevCommands = Input::get('prevCommands');

		//if an input like migrate:makeParams is set add the params to the command
		if(!empty($extraCommand)) {
			$fullCommand = $fullCommand . ' ' . escapeshellarg($extraCommand);
		}

		$result = trim(shell_exec($fullCommand));

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