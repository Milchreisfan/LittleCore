<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class feedCommand extends Command {

    public function __construct()
    {
        parent::__construct("feed", "Fülle deine Hungerleiste auf!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.feed")) {
                $sender->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            $sender->setFood(20);
            $sender->sendMessage("§8[§bCore§8] §3» §fDeine Hungerleiste wurde aufgefüllt!");
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}