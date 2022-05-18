<?php
namespace App\Controllers;

use Liman\Toolkit\Shell\Command;

class SystemInfoController
{
	public function get()
	{
		$systeminfo = Command::runSudo('lshw -html');
		return respond($systeminfo, strlen($systeminfo) ? 200 : 404);
	}

	public function install()
	{
		return respond(
            view('taskview.task', [
                'onFail' => 'onTaskFail',
                'onSuccess' => 'onTaskSuccess',
                'tasks' => [
                    0 => [
                        'name' => 'Lshw',
                        'attributes' => []
                    ]
                ]
            ]),
            200
        );
	}
}
