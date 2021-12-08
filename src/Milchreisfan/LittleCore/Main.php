<?php

/**
 * LittleCore - By Milchreisfan
 * https://github.com/Milchreisfan
 */

namespace Milchreisfan\LittleCore;

use Milchreisfan\LittleCore\command\dcCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\SingletonTrait;
use pocketmine\utils\TextFormat;
use pocketmine\player\Player;
# Command #
use Milchreisfan\LittleCore\command\ccCommand;
use Milchreisfan\LittleCore\command\dayCommand;
use Milchreisfan\LittleCore\command\ecCommand;
use Milchreisfan\LittleCore\command\feedCommand;
use Milchreisfan\LittleCore\command\flyCommand;
use Milchreisfan\LittleCore\command\frCommand;
use Milchreisfan\LittleCore\command\gm0Command;
use Milchreisfan\LittleCore\command\gm1Command;
use Milchreisfan\LittleCore\command\gm2Command;
use Milchreisfan\LittleCore\command\gm3Command;
use Milchreisfan\LittleCore\command\hasteboostCommand;
use Milchreisfan\LittleCore\command\healCommand;
use Milchreisfan\LittleCore\command\infoCommand;
use Milchreisfan\LittleCore\command\itemidCommand;
use Milchreisfan\LittleCore\command\invCommand;
use Milchreisfan\LittleCore\command\jumpCommand;
use Milchreisfan\LittleCore\command\midnightCommand;
use Milchreisfan\LittleCore\command\newsCommand;
use Milchreisfan\LittleCore\command\nightCommand;
use Milchreisfan\LittleCore\command\noonCommand;
use Milchreisfan\LittleCore\command\nvCommand;
use Milchreisfan\LittleCore\command\shutdownCommand;
use Milchreisfan\LittleCore\command\sunriseCommand;
use Milchreisfan\LittleCore\command\sunsetCommand;
use Milchreisfan\LittleCore\command\speedCommand;
use Milchreisfan\LittleCore\command\vanishCommand;
use Milchreisfan\LittleCore\command\wbCommand;

class Main extends PluginBase implements Listener
{
    use SingletonTrait;

    public const PREFIX = "§8[§bCore§8] §3»"; #realy? > ??

    public function onLoad(): void
    {
        self::setInstance($this);
    }

    public function onEnable(): void
    {    
        $this->saveResource("messages.yml");
        $this->getServer()->getCommandMap()->registerAll("littlecore", [
            new ccCommand("lc.cc"),
            new dayCommand("lc.day"),
            new dcCommand("lc.dinvite"),
            new ecCommand("lc.ec"),
            new feedCommand("lc.feed"),
            new flyCommand("lc.fly"),
            new frCommand("lc.fr"),
            new gm0Command("lc.gm0"),
            new gm1Command("lc.gm1"),
            new gm2Command("lc.gm2"),
            new gm3Command("lc.gm3"),
            new hasteboostCommand("lc.hasteboost"),
            new healCommand("lc.heal"),
            new infoCommand("lc.info"),
            new itemidCommand("lc.itemid"),
            new invCommand("lc.inv"),
            new jumpCommand("lc.jump"),
            new midnightCommand("lc.midnight"),
            new newsCommand("lc.news"),
            new nightCommand("lc.night"),
            new noonCommand("lc.noon"),
            new nvCommand("lc.nv"),
            new shutdownCommand("lc.shutdown"),
            new sunriseCommand("lc.sunrise"),
            new sunsetCommand("lc.sunset"),
            new speedCommand("lc.speed"),
            new vanishCommand("lc.vanish"),
            new wbCommand("lc.wb")
        ]);
        $this->getLogger()->info(self::PREFIX . "LittleCore ist aufgewacht! - By Milchreisfan");
    }

    public function onDisable(): void
    {
        $this->getScheduler()->cancelAllTasks();
        $this->getLogger()->error(self::PREFIX . "LittleCore ist eingeschlafen! - Kontaktiere Milchreisfan bei GitHub!");
    }

    public function formatText(Player $player, string $text): string
    {
        $text = str_replace(['&0', '&1', '&2', '&3', '&4', '&5', '&6', '&7', '&8', '&9', '&a', '&b', '&c', '&d', '&e', '&f', '&k', '&l', '&m', '&n', '&o', '&r'], [TextFormat::BLACK, TextFormat::DARK_BLUE, TextFormat::DARK_GREEN, TextFormat::DARK_AQUA, TextFormat::DARK_RED, TextFormat::DARK_PURPLE, TextFormat::GOLD, TextFormat::GRAY, TextFormat::DARK_GRAY, TextFormat::BLUE, TextFormat::GREEN, TextFormat::AQUA, TextFormat::RED, TextFormat::LIGHT_PURPLE, TextFormat::YELLOW, TextFormat::WHITE, TextFormat::OBFUSCATED, TextFormat::BOLD, TextFormat::STRIKETHROUGH, TextFormat::UNDERLINE, TextFormat::ITALIC, TextFormat::RESET], $text);

        return $text;
    }
}