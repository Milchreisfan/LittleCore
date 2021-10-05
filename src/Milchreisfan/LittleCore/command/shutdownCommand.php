<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class shutdownCommand extends Command
{
    public function __construct()
    {
        parent::__construct("shutdown", "Crash the Server!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if($sender instanceof Player) {
            $player = $sender;
            if(!$player->hasPermission("lc.shutdown")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $player->sendMessage(Main::PREFIX . $c->get("shutdownstart"));
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
                $p->sendPopup($c->get("shutdown-popup"));
                $p->sendTitle($c->get("shutdown-title"));
                $p->sendMessage(Main::PREFIX . $c->get("shutdown-message"));
            }
            $player->sendMessage(Main::PREFIX . $c->get("shutdown-now"));
            Main::getInstance()->getServer()->shutdown();
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
        $sender->sendMessage("Bruh just stop the server xd");
    }
}