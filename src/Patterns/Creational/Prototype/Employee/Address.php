<?php


namespace App\Patterns\Creational\Prototype\Employee;


class Address
{
    private $longitude;
    private $latitude;
    private $streetName;
    private $city;
    private $country;
    private $buildingNumber;
    private $zipCode;

    /**
     * Address constructor.
     * @param $longitude
     * @param $latitude
     * @param $streetName
     * @param $city
     * @param $country
     * @param $buildingNumber
     * @param $zipCode
     */
    public function __construct($longitude, $latitude, $streetName, $city, $country, $buildingNumber, $zipCode)
    {
        $this->longitude      = $longitude;
        $this->latitude       = $latitude;
        $this->streetName     = $streetName;
        $this->city           = $city;
        $this->country        = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode        = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return mixed
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

}