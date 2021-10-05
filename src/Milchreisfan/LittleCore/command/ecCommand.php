<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\block\BlockFactory;
use pocketmine\block\BlockLegacyIds;
use pocketmine\block\tile\TileFactory;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\utils\Config;

class ecCommand extends Command {

    public function __construct()
    {
        parent::__construct("ec", "Open your enderchest!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender;
            if (!$player->hasPermission("lc.ec")) {
                $player->sendMessage(Main::PREFIX . $c->get("no-permissions"));
                return;
            }
            $nbt = new CompoundTag("", [new StringTag("id", TileFactory::getInstance()->get(BlockLegacyIds::CHEST)), new StringTag("CustomName", "EnderChest"), new IntTag("x", (int)floor($sender->getPosition()->getX())), new IntTag("y", (int)floor($sender->getPosition()->getY()) - 4), new IntTag("z", (int)floor($sender->getPosition()->getZ()))]);
			$tile = TileFactory::getInstance()->createFromData($sender->getWorld(), $nbt);
			$block = BlockFactory::getInstance()->get(BlockLegacyIds::ENDER_CHEST);
			$block->x = (int)$tile->getPosition()->getX();
			$block->y = (int)$tile->getPosition()->getY();
			$block->z = (int)$tile->getPosition()->getZ();
			$block->level = $tile->getWorld();
			$block->level->sendBlocks([$sender], [$block]);
			//$sender->getEnderInventory()->setHolderPosition($tile);
			$sender->setCurrentWindow($sender->getEnderInventory());
            $sender->sendMessage(Main::PREFIX . $c->get("enderchest"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}