<?php

declare(strict_types=1);

namespace TutorialPlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

    public function onEnable() : void{
        $this->getLogger()->info(TextFormat::GREEN . "TutorialPlugin Enabled");
    }

    public function onDisable() : void{
        $this->getLogger()->info(TextFormat::RED . "TutorialPlugin Disabled");
    }
}