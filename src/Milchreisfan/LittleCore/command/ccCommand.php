<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class ccCommand extends Command
{

    public function __construct()
    {
        parent::__construct("chatclear", "Leere den Chat!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.cc")) {
                $player->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage("§8[§bCore§8] §3» §4Der Chat wird nun gelöscht!");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3»§r");
                $p->sendMessage("§8[§bCore§8] §3» §4Der Chat wurde geleert!");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}