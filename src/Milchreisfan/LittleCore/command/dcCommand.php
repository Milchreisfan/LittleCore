<?php

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\level\particle\DestroyBlockParticle;

class dcCommand extends Command {

    public function __construct()
    {
        parent::__construct("dcinvite", "Show the discord invite!")
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config($this->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            if(!$sender->hasPermission("lc.dcinvite")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $sender->sendMessage(Main::PREFIX . $c->get("dcinvite"));
            $sender->getLevel()->addParticle(new DestroyBlockParticle($sender->asVector3(), Block::get(57)));
        }
        $sender->sendMessage($c->get("console"));
    }
}