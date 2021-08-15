<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\level\Level;

class infoCommand extends Command {

    public function __construct()
    {
        parent::__construct("info", "Show informations about the server!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            if(!$sender->hasPermission("lc.info")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->sendMessage(Main::PREFIX . $c->get("information"));
        }
        $sender->sendMessage($c->get("console"));
    }
}