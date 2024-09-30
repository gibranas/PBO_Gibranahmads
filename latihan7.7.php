<?php
class Employee {
    var $name;
    var $yearsWorked;
    var $salary;

    public function __construct($name, $yearsWorked) {
        $this->name = $name;
        $this->yearsWorked = $yearsWorked;
        $this->salary = 1000000; 
    }

    public function getName() {
        return $this->name;
    }

    public function calculateSalary() {
        return $this->salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Programmer extends Employee {
    public function calculateSalary() {
        if ($this->yearsWorked < 1) {
            $this->salary = 1000000; 
        } elseif ($this->yearsWorked >= 1 && $this->yearsWorked <= 10) {
            $this->salary = 1000000 + (0.01 * $this->yearsWorked * 1000000);
        } else {
            $this->salary = 1000000 + (0.02 * $this->yearsWorked * 1000000);
        }
        return $this->salary;
    }
}

class Director extends Employee {
    public function calculateSalary() {
        $this->salary = 1000000 + (0.5 * $this->yearsWorked * 1000000) + (0.1 * $this->yearsWorked * 1000000);
        return $this->salary;
    }
}

class WeeklyEmployee extends Employee {
    private $itemPrice;
    private $totalStock;
    private $stockSold;

    public function __construct($name, $yearsWorked, $itemPrice, $totalStock, $stockSold) {
        parent::__construct($name, $yearsWorked);
        $this->itemPrice = $itemPrice;
        $this->totalStock = $totalStock;
        $this->stockSold = $stockSold;
    }

    public function calculateSalary() {
        $percentageSold = ($this->stockSold / $this->totalStock) * 100;
        if ($percentageSold > 70) {
            $bonus = 0.10 * $this->itemPrice;
        } else {
            $bonus = 0.03 * $this->itemPrice;
        }
        $this->salary = $this->stockSold * ($this->itemPrice + $bonus) * 1000;
        return $this->salary;
    }
}

$programmer = new Programmer("programmer", 5);
echo "Gaji Programmer " . $programmer->getName() . ": " . $programmer->calculateSalary() . "<br>";

$director = new Director("Director", 8);
echo "Gaji Direktur " . $director->getName() . ": " . $director->calculateSalary() . "<br>";

$weeklyEmployee = new WeeklyEmployee("Karyawan", 2, 50, 100, 80);
echo "Gaji Pegawai Mingguan " . $weeklyEmployee->getName() . ": " . $weeklyEmployee->calculateSalary() . "<br>";
?>
