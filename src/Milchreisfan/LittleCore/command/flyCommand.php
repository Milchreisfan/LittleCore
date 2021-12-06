<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class flyCommand extends Command
{
    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("fly", "Enable/Disable flying!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            if($sender->getAllowFlight()) {
                $sender->setAllowFlight(false);
                $sender->setFlying(false);
                $sender->sendMessage(Main::PREFIX). $c->get("fly-disable");
            }else{
                $sender->setAllowFlight(true);
                $sender->sendMessage(Main::PREFIX . $c->get("fly-enable"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}