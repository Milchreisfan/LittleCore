<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class itemidCommand extends Command
{
    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("itemid", "Show the ItemID!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender;

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $sender->sendMessage(Main::PREFIX . "§fThe item-id is: §a" . $player->getInventory()->getItemInHand()->getID());
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}