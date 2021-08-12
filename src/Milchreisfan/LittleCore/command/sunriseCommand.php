<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class sunriseCommand extends Command
{

    public function __construct()
    {
        parent::__construct("sunrise", "Change the time to sunrise!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.sunrise")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $player->getLevel()->setTime(23000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage(Main::PREFIX . $c->get("timechange-sunrise"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}
