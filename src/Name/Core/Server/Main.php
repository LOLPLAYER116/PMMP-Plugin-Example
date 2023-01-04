<?php

declare(strict_types=1);

namespace Name\Core\Server;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onLoad(): void {
		$this->getLogger()->info(">> Loading Core <<");
	}

	public function onEnable(): void {
		$this->getLogger()->info("Version: 1.0.0");
		$this->getLogger()->info("Api: 4.0.0");
		$this->getLogger()->info("Author: MYcreeper876/MYmaipian876");
		$this->getLogger()->info(">> Core Online <<");
	}

	public function onDisable(): void {
		$this->getLogger()->info(">> Core Offline <<");
		$this->getLogger()->info(">> Thanks To Use Core <<");
	}
}
