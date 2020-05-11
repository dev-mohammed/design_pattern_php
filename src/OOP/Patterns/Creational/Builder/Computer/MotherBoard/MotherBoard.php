<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard;


use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

class MotherBoard
{
    private  $cpu;
    private  $ram;
    private  $gpu;
    private  $sockets;
    private  $networkCard;
    private  $disk;


    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu         = $cpu;
        $this->ram         = $ram;
        $this->gpu         = $gpu;
        $this->sockets     = $sockets;
        $this->networkCard = $networkCard;
        $this->disk        = $disk;
    }

    /**
     * @return CPU
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return RAM
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @return GPU
     */
    public function getGpu()
    {
        return $this->gpu;
    }

    /**
     * @return Sockets
     */
    public function getSockets()
    {
        return $this->sockets;
    }

    /**
     * @return NetworkCard
     */
    public function getNetworkCard()
    {
        return $this->networkCard;
    }

    /**
     * @return Disk
     */
    public function getDisk()
    {
        return $this->disk;
    }


}