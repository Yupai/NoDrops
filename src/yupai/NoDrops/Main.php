<?php

namespace yupai\NoDrops;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {

    public function OnEnable(){
        $this->saveDefaultConfig();
        $this->reloadConfig();
        $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        $this->getLogger()->info(TextFormat::GREEN . "NoDrops by Yupai Enable!");
    }

    public function OnDisable(){
        $this->getLogger()->info(TextFormat::RED . "NoDrops by Yupai Disable!");
    }

    public function onDrop(PlayerDropItemEvent $event){
        $nds = $this->getConfig;
        $enable = $nds->get("Select_true_or_false")
        $player = $event->getPlayer();
        $event->setCancelled($enable);
    } 
}
