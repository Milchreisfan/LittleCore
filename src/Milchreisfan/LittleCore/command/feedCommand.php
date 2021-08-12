<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class feedCommand extends Command {

    public function __construct()
    {
        parent::__construct("feed", "Feed yourself!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.feed")) {
                $sender->sendMessage(Main::PREIFX . $c->get("no-permissions"));
                return;
            }
            $sender->setFood(20);
            $sender->sendMessage(Main::PREFIX . $c->get("feed"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}