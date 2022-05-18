<?php

namespace App\Tasks;

use Liman\Toolkit\Formatter;
use Liman\Toolkit\OS\Distro;
use Liman\Toolkit\RemoteTask\Task;
use Liman\Toolkit\Shell\Command;

class Example extends Task
{
	protected $description = "Task çalıştırılıyor...";
	protected $sudoRequired = true;

	public function __construct(array $attrbs=[])
	{
		$this->control = Distro::debian('apt|dpkg')
			->get();

		$this->command = Distro::debian(
			"apt install gcc -y"
		)->get();
		

		$this->attributes = $attrbs;
		$this->logFile = Formatter::run('/tmp/exampleTaskLog.txt');
	}
}