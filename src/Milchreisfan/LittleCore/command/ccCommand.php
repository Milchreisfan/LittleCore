<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class ccCommand extends Command
{

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("chatclear", "Clear the chat!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender;

            if (!$this->testPermission($sender, $this->getPermission())) return;

            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage(Main::PREFIX . $c->get("chatclear-start"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatchlear-clearing"));
                $p->sendMessage(Main::PREFIX . $c->get("chatclear-end"));
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}