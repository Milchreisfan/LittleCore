<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class gm2Command extends Command {

    public function __construct()
    {
        parent::__construct("gm2", "Ändere deinen Spielmodus zu Abenteuer!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.gm2")) {
                $sender->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            $sender->setGamemode(2);
            $sender->sendMessage("§8[§bCore§8] §3» §fDein Spielmodus wurde zu Abenteuer geändert!");
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}