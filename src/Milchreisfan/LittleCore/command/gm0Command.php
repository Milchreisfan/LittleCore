<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\GameMode;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class gm0Command extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("gm0", "Switch your gamemode to survival!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->setGamemode(GameMode::SURVIVAL());
            $sender->sendMessage(Main::PREFIX . $c->get("gm0"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}