<?php

namespace App\Controllers;

use Liman\Toolkit\RemoteTask\TaskManager;

class TaskController
{
	public function runTask()
	{
		$taskName = request('name');
		$attributes = (array) json_decode(request('attributes'));
		return respond(TaskManager::get($taskName, $attributes)->run());
	}

	public function checkTask()
	{
		$taskName = request('name');
		$attributes = (array) json_decode(request('attributes'));
		return respond(TaskManager::get($taskName, $attributes)->check());
	}
}
