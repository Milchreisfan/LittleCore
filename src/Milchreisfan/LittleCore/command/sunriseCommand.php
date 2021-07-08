<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class sunriseCommand extends Command
{

    public function __construct()
    {
        parent::__construct("sunrise", "Ändere die Zeit zu Sonnenaufgang!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.sunrise")) {
                $player->sendMessage("§8[§bCore§8] §3» §4Du hast keine Berechtigung dafür!");
                return;
            }
            $player->getLevel()->setTime(23000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage("§8[§bCore§8] §3» §fDie Zeit wurde zu Sonnenaufgang geändert!");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}
