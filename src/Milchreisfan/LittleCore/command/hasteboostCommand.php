<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\data\bedrock\EffectIdMap;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class hasteboostCommand extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("hasteboost", "Enable an haste boost!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            $player = $sender;

            if (!$this->testPermission($sender, $this->getPermission())) return;

            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $eff = new EffectInstance(EffectIdMap::getInstance()->fromId(3), 6000, 1, false);
                $p->getEffects()->add($eff);
                $p->sendMessage(Main::PREFIX . $c->get("hasteboost"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}