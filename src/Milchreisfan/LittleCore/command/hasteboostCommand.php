<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\utils\TextFormat;
use Datetime;
use pocketmine\utils\Config;

class hasteboostCommand extends Command {

    public function __construct()
    {
        parent::__construct("hasteboost", "Enable an haste boost!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            $player = $sender->getPlayer();
            if(!$player->hasPermission("lc.hasteboost")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $eff = new EffectInstance(Effect::getEffect(3), 6000, 1, false);
                $p->addEffect($eff);
                $p->sendMessage(Main::PREFIX . $c->get("hasteboost"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}