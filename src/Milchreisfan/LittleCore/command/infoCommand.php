<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\Config;

class infoCommand extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("info", "Show informations about the server!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->sendMessage(Main::PREFIX . $c->get("information"));
        }
        $sender->sendMessage($c->get("console"));
    }
}