<?php

declare(strict_types=1);

namespace GamerMJay\All-or-nothing;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool
    {
        switch ($command->getName()) {
            case "aon":
                $sender->sendMessage("§8[§4AON§8] §cThe limit is:");
                $sender->sendMessage("§8[§4AON§8] §e" . rand(500, 50000000) . "§e Money");
                return true;
            default:
                return false;
        }
    }
}
