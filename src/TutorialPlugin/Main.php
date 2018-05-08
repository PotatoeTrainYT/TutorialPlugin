<?php

declare(strict_types=1);

namespace TutorialPlugin;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

    public function onEnable() : void{
        $this->getLogger()->info(TextFormat::GREEN . "TutorialPlugin Enabled");
    }

    public function onDisable() : void{
        $this->getLogger()->info(TextFormat::RED . "TutorialPlugin Disabled");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch(strtolower($label)){
            case "heal":
                if(!$sender instanceof Player) return false;
                if($sender->hasPermission("tutorialplugin.heal")){
                    $sender->setHealth(20);
                    $sender->sendMessage(TextFormat::GREEN . "You have been healed");
                }else{
                    $sender->sendMessage(TextFormat::RED . "You don't have permission to use this command");
                }
                break;
        }
        return true;
    }
}