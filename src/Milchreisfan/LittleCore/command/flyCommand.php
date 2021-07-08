<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class flyCommand extends Command
{
    public function __construct()
    {
        parent::__construct("fly", "Aktiviere/Deaktiviere Fliegen!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player) {
            if (!$sender->hasPermission("lc.fly")) {
                $sender->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            if($sender->getAllowFlight()) {
                $sender->setAllowFlight(false);
                $sender->setFlying(false);
                $sender->sendMessage("§8[§bCore§8] §3» §4Fliegen wurde deaktiviert!");
            }else{
                $sender->setAllowFlight(true);
                $sender->sendMessage("§8[§bCore§8] §3» §fFliegen wurde aktiviert!");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}