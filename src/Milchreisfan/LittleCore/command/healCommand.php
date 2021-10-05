<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class healCommand extends Command {

    public function __construct()
    {
        parent::__construct("heal", "Heal yourself!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.heal")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->setHealth(20);
            $sender->sendMessage(Main::PREFIX . $c->get("heal"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}