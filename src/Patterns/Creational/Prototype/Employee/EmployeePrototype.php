<?php


namespace App\Patterns\Creational\Prototype\Employee;


use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomProjectPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;

class EmployeePrototype implements Prototype
{
    private $profileData;
    private $salary;
    private $privilages;

    /**
     * EmployeePrototype constructor.
     * @param $profileData
     * @param $salary
     * @param $privilages
     */
    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privilages)
    {
        $this->profileData = $profileData;
        $this->salary      = $salary;
        $this->privilages  = $privilages;
    }

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }

    /**
     * @return Privileges
     */
    public function getPrivilages(): Privileges
    {
        return $this->privilages;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }




    public function __clone()
    {
        $this->privilages->clearPrivileges();
        $this->privilages->addPrivilege(new WebProjectPrivilege());
        $this->privilages->addPrivilege(new ServerRoomProjectPrivilege());

        $this->salary->setSalary(1500);
        $this->salary->setTax(0.1);
        $this->salary->setMedicalInsurance(200);


        $this->profileData->setAge(29);
        $this->profileData->setMobileNumber(0);
        $this->profileData->setTelephoneNumber(0);
        $this->profileData->setSlackAccount('slack.account');
        $this->profileData->setName('Default Employee Name');

        return $this;
    }
}