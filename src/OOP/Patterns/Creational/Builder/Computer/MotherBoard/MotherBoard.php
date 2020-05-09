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
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * MotherBoard constructor.
     * @param CPU $cpu
     * @param RAM $ram
     * @param GPU $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     * @param Disk $disk
     */
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
    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    /**
     * @return RAM
     */
    public function getRam(): RAM
    {
        return $this->ram;
    }

    /**
     * @return GPU
     */
    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    /**
     * @return Sockets
     */
    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    /**
     * @return NetworkCard
     */
    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
        return $this->disk;
    }


}