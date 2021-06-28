<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\utils\TextFormat;

class nvCommand extends Command
{
    public function __construct()
    {
        parent::__construct("nv", "Aktiviere Nachtsicht!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player) {
            if (!$sender->hasPermission("lc.nv")) {
                $sender->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            $sender->sendMessage("§8[§bCore§8] §3» §fNachtsicht wurde für 5 Minuten aktiviert!");
            $eff = new EffectInstance(Effect::getEffect(16), 6000, 3, false);
            $sender->addEffect($eff);
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}