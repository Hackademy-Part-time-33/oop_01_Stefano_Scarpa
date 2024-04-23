<?php

class Company{
    public $name;
    public $location;
    public $tot_employes;
    public $avg_salary;
    public static $companyCounter = 0;

    public function __construct($_name, $_location, $_tot_employes, $_avg_salary)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employes = $_tot_employes;
        $this->avg_salary = $_avg_salary;
        $this->infoCompany();
        self::$companyCounter++;

    }

    public static function totCompany (){
        echo "Il numero totale delle compagnie è " . self::$companyCounter . "\n";
    }

    public function infoCompany(){
        if ($this->tot_employes == 0) {
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti \n";
        } else {
            echo "L’ufficio $this->name con sede in $this->location ha ben $this->tot_employes dipendenti \n";
        };
    }

    public function expence ($month) {
        $totExpence = $month * $this->avg_salary * $this->tot_employes;
        return $totExpence;
    }

    public function showExpence ($month = 12) {
        echo "La spesa dell'azienza $this->name per $month mesi è " . $this->expence($month) . "€ \n";
    }
}
$company1 = new Company('Aulab', 'Bari', '50', 1500);
$company2 = new Company('Closer', 'Milano', '100', 2000);
$company3 = new Company('Il piccolo principe', 'Roma', '0', 1500);
$company4 = new Company('Microsoft', 'San Francisco', '1000', 2500);
$company5 = new Company('Apple', 'Torino', '700', 3000);

Company::totCompany();

$company1->showExpence();
$company2->showExpence(10);
$company3->showExpence(20);
$company4->showExpence(24);
$company5->showExpence(6);