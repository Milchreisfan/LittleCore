<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class gm0Command extends Command {

    public function __construct()
    {
        parent::__construct("gm0", "Switch your gamemode to survival!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.gm0")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->setGamemode(0);
            $sender->sendMessage(Main::PREFIX . $c->get("gm0"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}