<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class nightCommand extends Command
{

    public function __construct()
    {
        parent::__construct("night", "Ändere die Zeit zu Nacht!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.night")) {
                $player->sendMessage("§8[§bCore§8] §3» §4Du hast keine Berechtigung für diesen Befehl!");
                return;
            }
            $player->getLevel()->setTime(16000);
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage("§8[§bCore§8] §3» §eDer Spieler" . "§6 " . $player->getName() . "§e" . " hat die Zeit zu Nacht geändert!");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}
