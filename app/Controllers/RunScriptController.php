<?php
namespace App\Controllers;

use Liman\Toolkit\OS\Distro;
use Liman\Toolkit\Shell\Command;


class RunScriptController
{
	public function run()
	{
       if (request('path')) {
            $path = 'gcc '. getPath(request('path')) . ' && ./a.out';
            $command = Command::runSudo($path);
            unlink(getPath(request('path')));
            return ($command);
       }
       return null;
	}
}
