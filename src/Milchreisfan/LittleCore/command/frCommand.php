<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\data\bedrock\EffectIdMap;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class frCommand extends Command
{
    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("fr", "Enable fire resistance!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->sendMessage(Main::PREFIX . $c->get("fr"));
            $eff = new EffectInstance(EffectIdMap::getInstance()->fromId(12), 6000, 3, false);
            $sender->getEffects()->add($eff);
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}