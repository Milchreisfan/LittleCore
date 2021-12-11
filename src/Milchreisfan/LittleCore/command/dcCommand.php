<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\block\BlockFactory;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\Config;
use pocketmine\world\particle\BlockBreakParticle;

class dcCommand extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("dcinvite", "Show the discord invite!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->sendMessage(Main::PREFIX . $c->get("dcinvite"));
            $sender->getWorld()->addParticle($sender->getPosition()->asVector3(), new BlockBreakParticle(BlockFactory::getInstance()->get(57)));
        }
        $sender->sendMessage($c->get("console"));
    }
}