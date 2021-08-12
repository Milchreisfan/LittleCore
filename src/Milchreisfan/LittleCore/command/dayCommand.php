<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class dayCommand extends Command
{

    public function __construct()
    {
        parent::__construct("day", "Change the time to day!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.day")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permission"));
                return;
            }
            $player->getLevel()->setTime(1000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage(Main::PREFIX . $c->get("timechange-day"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}
