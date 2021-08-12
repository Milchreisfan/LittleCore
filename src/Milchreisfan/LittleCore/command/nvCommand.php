<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class nvCommand extends Command
{
    public function __construct()
    {
        parent::__construct("nv", "Enable night vision!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            if (!$sender->hasPermission("lc.nv")) {
                $sender->sendMessage($c->get(Main::PREFIX . "no-permissions"));
                return;
            }
            $sender->sendMessage(Main::PREFIX . $c->get("night-vision"));
            $eff = new EffectInstance(Effect::getEffect(16), 6000, 3, false);
            $sender->addEffect($eff);
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}