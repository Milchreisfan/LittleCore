<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class noonCommand extends Command
{

    public function __construct()
    {
        parent::__construct("noon", "Change the time to noon!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.noon")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $player->getLevel()->setTime(6000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage(Main::PREFIX . $c->get("timechange-noon"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}
