<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class healCommand extends Command {

    public function __construct()
    {
        parent::__construct("heal", "Fülle deine Herzensleiste auf!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.heal")) {
                $sender->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            $sender->setHealth(20);
            $sender->sendMessage("§8[§bCore§8] §3» §fDeine Herzensleiste wurde aufgefüllt!");
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}