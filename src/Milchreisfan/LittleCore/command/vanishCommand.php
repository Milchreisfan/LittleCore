<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class vanishCommand extends Command
{
    public function __construct()
    {
        parent::__construct("vanish", "Enable/Disable Vanish");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            if (!$sender->hasPermission("lc.vanish")) {
                $sender->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            if ($sender->isInvisible()) {
                $sender->sendMessage(Main::PREFIX . $c->get("vanish-enable"));
                $sender->setInvisible(true);
                $sender->setNameTagVisible(false);
                return;
            }
            if ($sender->isInvisible()) {
                $sender->sendMessage(Main::PREFIX . $c->get("vanish-disable"));
                $sender->setInvisible(false);
                $sender->setNameTagVisible(true);
                return;
            }
            $sender->sendMessage(TextFormat::RED . $c->get("console"));
        }
    }
}