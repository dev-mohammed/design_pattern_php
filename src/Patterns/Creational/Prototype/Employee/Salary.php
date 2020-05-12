<?php


namespace App\Patterns\Creational\Prototype\Employee;


class Salary
{
    private $salary;
    private $tax;
    private $medicalInsurance;

    /**
     * Salary constructor.
     * @param $salary
     * @param $tax
     * @param $medicalInsurance
     */
    public function __construct($salary, $tax, $medicalInsurance)
    {
        $this->salary           = $salary;
        $this->tax              = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @return mixed
     */
    public function getMedicalInsurance()
    {
        return $this->medicalInsurance;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @param mixed $medicalInsurance
     */
    public function setMedicalInsurance($medicalInsurance): void
    {
        $this->medicalInsurance = $medicalInsurance;
    }






}