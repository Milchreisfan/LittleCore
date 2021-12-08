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

class gm3Command extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("gm3", "Switch your gamemode to spectator!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->setGamemode(GameMode::SPECTATOR());
            $sender->sendMessage(Main::PREFIX . $c->get("gm3"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}