<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class nightCommand extends Command
{

    public function __construct()
    {
        parent::__construct("night", "Change the time to night!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender;
            if (!$player->hasPermission("lc.night")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $player->getWorld()->setTime(16000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage(Main::PREFIX . $c->get("timechange-night"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}
