<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\utils\TextFormat;

class hasteboostCommand extends Command {

    public function __construct()
    {
        parent::__construct("hasteboost", "Aktiviere einen Abbaugeschwindkeits-Boost!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player) {
            $player = $sender->getPlayer();
            if(!$player->hasPermission("lc.hasteboost")) {
                $player->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $eff = new EffectInstance(Effect::getEffect(3), 6000, 1, false);
                $p->addEffect($eff);
                $p->sendMessage("§8[§bCore§8] §3» §eDer Spieler" . "§6 " . $player->getName() . "§e" ." hat einen Abbaugeschwindigkeitesbooster aktiviert! Jeder hat nun 5 Minuten Eile.");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}