<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class feedCommand extends Command {

    public function __construct()
    {
        parent::__construct("feed", "Feed yourself!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.feed")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->getHungerManager()->setFood(20);
            $sender->sendMessage(Main::PREFIX . $c->get("feed"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}