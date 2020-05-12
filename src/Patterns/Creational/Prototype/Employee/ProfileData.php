<?php


namespace App\Patterns\Creational\Prototype\Employee;


class ProfileData
{
    private $name = 'Employee Name';
    private $age;
    private $address;
    private $telephoneNumber;
    private $mobileNumber;
    private $slackAccount;

    /**
     * ProfileData constructor.
     * @param string $name
     * @param $age
     * @param $address
     * @param $telephoneNumber
     * @param $mobileNumber
     * @param $slackAccount
     */
    public function __construct(string $name, $age, Address $address, $telephoneNumber, $mobileNumber, $slackAccount)
    {
        $this->name            = $name;
        $this->age             = $age;
        $this->address         = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber    = $mobileNumber;
        $this->slackAccount    = $slackAccount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * @return mixed
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @return mixed
     */
    public function getSlackAccount()
    {
        return $this->slackAccount;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @param mixed $telephoneNumber
     */
    public function setTelephoneNumber($telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }

    /**
     * @param mixed $mobileNumber
     */
    public function setMobileNumber($mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * @param mixed $slackAccount
     */
    public function setSlackAccount($slackAccount): void
    {
        $this->slackAccount = $slackAccount;
    }



}