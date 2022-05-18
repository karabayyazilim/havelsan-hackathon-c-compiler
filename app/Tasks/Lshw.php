<?php

namespace App\Tasks;

use Liman\Toolkit\Formatter;
use Liman\Toolkit\OS\Distro;
use Liman\Toolkit\RemoteTask\Task;
use Liman\Toolkit\Shell\Command;

class Lshw extends Task
{
	protected $description = "Lshw kuruluyor...";
	protected $sudoRequired = true;

	public function __construct(array $attrbs=[])
	{
		$this->control = Distro::debian('apt|dpkg')
			->get();

		$this->command = Distro::debian(
			"apt install lswh"
		)->get();
		

		$this->attributes = $attrbs;
		$this->logFile = Formatter::run('/tmp/exampleTaskLog.txt');
	}
}
