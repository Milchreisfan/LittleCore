<?php

namespace Milchreisfan\LittleCore\command;

use Milchreisfan\LittleCore\Main;
use pocketmine\block\inventory\EnderChestInventory;
use pocketmine\block\tile\EnderChest;
use pocketmine\block\tile\TileFactory;
use pocketmine\block\VanillaBlocks;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\utils\Config;

class ecCommand extends Command {

    public function __construct(string $permission = null)
    {
        if ($permission !== null) {
            $this->setPermission($permission);
        }
        parent::__construct("ec", "Open your enderchest!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {

        $sender->sendMessage("§cThis command is deactivated because of bugs!");
        return;

        ##########################
        ##########################
        ##########################

        $c = new Config(Main::getInstance()->getDataFolder() . "messages.yml", Config::YAML);
        if ($sender instanceof Player) {
            $player = $sender;

            if (!$this->testPermission($sender, $this->getPermission())) return;

            $pos = $sender->getPosition();

            $nbt = CompoundTag::create()
            ->setTag("id", new StringTag(TileFactory::getInstance()->getSaveId(\pocketmine\block\tile\EnderChest::class)))
            ->setTag("CustomName", new StringTag("EnderChest"))
            ->setTag("x", new IntTag($pos->x))
            ->setTag("y", new IntTag($pos->y))
            ->setTag("z", new IntTag($pos->z))
            ->setTag("Pos", new ListTag([
                new DoubleTag($pos->x),
                new DoubleTag($pos->y),
                new DoubleTag($pos->z)
            ]));

            //$nbt = new CompoundTag("", [new StringTag("id", TileFactory::getInstance()->getSaveId(\pocketmine\block\tile\Chest::class)), new StringTag("CustomName", "EnderChest"), new IntTag("x", (int)floor($sender->getPosition()->getX())), new IntTag("y", (int)floor($sender->getPosition()->getY()) - 4), new IntTag("z", (int)floor($sender->getPosition()->getZ()))]);
			$tile = TileFactory::getInstance()->createFromData($player->getWorld(), $nbt);
            $tilePos = $tile->getPosition();
			$block = VanillaBlocks::ENDER_CHEST();
			$block->x = $tile->getPosition()->getX();
			$block->y = $tile->getPosition()->getY();
			$block->z = $tile->getPosition()->getZ();
			$block->world = $tile->getPosition()->getWorld();
            $block->world->setBlock($tilePos, $block, true);
            $block->world->getOrLoadChunkAtPosition($tilePos)->addTile($tile);


            $newTile = $tilePos->getWorld()->getTile($tile->getPosition());
            //$newTile->setViewerCount($newTile->getViewerCount() + 1);
			//$sender->getEnderInventory()->setHolderPosition($tile);
			$player->setCurrentWindow(new EnderChestInventory($newTile->getPosition(), $player->getEnderInventory()));
            $player->sendMessage(Main::PREFIX . $c->get("enderchest"));
            return;
        }
        $sender->sendMessage(TextFormat::RED . $c->get("console"));
    }
}