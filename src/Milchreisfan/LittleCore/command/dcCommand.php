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

    public function __construct()
    {
        parent::__construct("dcinvite", "Show the discord invite!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            if(!$sender->hasPermission("lc.dcinvite")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->sendMessage(Main::PREFIX . $c->get("dcinvite"));
            $sender->getWorld()->addParticle($sender->getPosition()->asVector3(), new BlockBreakParticle(BlockFactory::getInstance()->get(57)));
        }
        $sender->sendMessage($c->get("console"));
    }
}