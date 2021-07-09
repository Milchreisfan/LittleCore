<?php

namespace Milchreisfan\LittleCore\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\block\Block;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\tile\EnderChest;
use pocketmine\tile\Tile;

class ecCommand extends Command {

    public function __construct()
    {
        parent::__construct("ec", "Öffne deine Enderchest!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player) {
            $player = $sender->getPlayer();
            if (!$player->hasPermission("lc.ec")) {
                $player->sendMessage("§8[§bCore§8] §3» §4Du hast keine Rechte für diesen Befehl!");
                return;
            }
            $nbt = new CompoundTag("", [new StringTag("id", Tile::CHEST), new StringTag("CustomName", "EnderChest"), new IntTag("x", (int)floor($sender->x)), new IntTag("y", (int)floor($sender->y) - 4), new IntTag("z", (int)floor($sender->z))]);
			$tile = Tile::createTile("EnderChest", $sender->getLevel(), $nbt);
			$block = Block::get(Block::ENDER_CHEST);
			$block->x = (int)$tile->x;
			$block->y = (int)$tile->y;
			$block->z = (int)$tile->z;
			$block->level = $tile->getLevel();
			$block->level->sendBlocks([$sender], [$block]);
			$sender->getEnderChestInventory()->setHolderPosition($tile);
			$sender->addWindow($sender->getEnderChestInventory());
            $sender->sendMessage("§8[§bCore§8] §3» §fDu hast deine Enderchest geöffnet!");
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Diesen Befehl kannst du nur Ingame ausführen.");
    }
}