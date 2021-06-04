<?php

namespace Milchreisfan\LittleCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\SimpleCommandMap;
use pocketmine\utils\TextFormat as c;
use pocketmine\Server;
use pocketmine\Player;
# Command #
use Milchreisfan\LittleCore\command\ccCommand;
use Milchreisfan\LittleCore\command\dayCommand;
use Milchreisfan\LittleCore\command\ecCommand;
use Milchreisfan\LittleCore\command\feedCommand;
use Milchreisfan\LittleCore\command\flyCommand;
use Milchreisfan\LittleCore\command\gm0Command;
use Milchreisfan\LittleCore\command\gm1Command;
use Milchreisfan\LittleCore\command\gm2Command;
use Milchreisfan\LittleCore\command\gm3Command;
use Milchreisfan\LittleCore\command\healCommand;
use Milchreisfan\LittleCore\command\midnightCommand;
use Milchreisfan\LittleCore\command\nightCommand;
use Milchreisfan\LittleCore\command\noonCommand;
use Milchreisfan\LittleCore\command\sunriseCommand;
use Milchreisfan\LittleCore\command\sunsetCommand;

class Main extends PluginBase implements Listener {

    public function onEnable() {

        $this->getServer()->getCommandMap()->registerAll("littlecore", [
            new ccCommand(),
            new dayCommand(),
            new ecCommand(),
            new feedCommand(),
            new flyCommand(),
            new gm0Command(),
            new gm1Command(),
            new gm2Command(),
            new gm3Command(),
            new healCommand(),
            new midnightCommand(),
            new nightCommand(),
            new noonCommand(),
            new sunriseCommand(),
            new sunsetCommand()
        ]);
        $this->getLogger()->info("LittleCore ist aufgewacht! - By Milchreisfan");
    }

    public function onDisable() {

        $this->getScheduler()->cancelAllTasks();
        $this->getLogger()->error("LittleCore ist eingeschlafen! - Error - Kontaktiere Milchreisfan bei GitHub!");
    }

    public function registerPermission(): void
    {
        DefaultPermissions::registerPermission(new Permission("lc.cc"));
        DefaultPermissions::registerPermission(new Permission("lc.day"));
        DefaultPermissions::registerPermission(new Permissiom("lc.ec"));
        DefaultPermissions::registerPermission(new Permission("lc.feed"));
        DefaultPermissions::registerPermission(new Permission("lc.fly"));
        DefaultPermissions::registerPermission(new Permission("lc.gm0"));
        DefaultPermissions::registerPermission(new Permission("lc.gm1"));
        DefaultPermissions::registerPermission(new Permission("lc.gm2"));
        DefaultPermissions::registerPermission(new Permission("lc.gm3"));
        DefaultPermissions::registerPermission(new Permission("lc.heal"));
    	DefaultPermissions::registerPermission(new Permission("lc.midnight"));
        DefaultPermissions::registerPermission(new Permission("lc.night"));
        DefaultPermissions::registerPermission(new Permission("lc.noon"));
        DefaultPermissions::registerPermission(new Permission("lc.sunrise"));
        DefaultPermissions::registerPermission(new Permission("lc.sunset"));
    }
}