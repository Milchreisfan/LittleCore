<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\GameMode;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class gm2Command extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("gm2", "Switch your gamemode to adventure!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->setGamemode(GameMode::ADVENTURE());
            $sender->sendMessage(Main::PREFIX . $c->get("gm2"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}