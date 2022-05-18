<?php
namespace App\Controllers;

class TaskViewController
{
	public function run()
	{
		return respond(
            view('taskview.task', [
                'onFail' => 'onTaskFail',
                'onSuccess' => 'onTaskSuccess',
                'tasks' => [
                    0 => [
                        'name' => 'Example',
                        'attributes' => []
                    ]
                ]
            ]),
            200
        );
	}
}
