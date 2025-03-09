<?php


$promena = "string";
$number = 1;

$pole = ['jedna', 'dva', 'tri'];


$bool = true;
$bool = false;

const MOJE_KONSTANTA = 100;


function pozdrav()
{
    return "Hello world";
}


pozdrav();

//toto je jednořádkový komentář

/*
    Je víceřádkový komentář
    tady to je taky komentář
*/
function podravJmenem(string $name, string $lastname): string
{
    return "Dobrý den, $name $lastname";
}


function secti(int $a, int $b,  int $c = NULL): string|int
{
    return $a + $b + $c;
}


secti(2, 2, 3);


$pole = ['jedna', 'dvě', 'tři']; // indexované pole

$associativniPole = [ // ascociativní
    'name' => 'Tomáš',
    'prijmeni' => 'Zaharowski',
    'role' => 'lektor',
    'vek' => 31,
];


$pole[0];
$associativniPole['role'];

$multidimenzionalniPole = [
    'name' => 'Tomáš',
    'prijmeni' => 'Zaharowski',
    'role' => 'lektor',
    'vek' => 31,
    'rodina' => [
        'manzelka' => 'Lucie', 
        'syn' => 'Jáchym',
        'dcera' => NULL,
        ]
    ];


    $multidimenzionalniPole['rodina']['manzelka'];

    $hodnota = 7;

    if($hodnota > 9){
        echo "Hodnota je větší";
    }else{
        echo "Hodnota je menší"; 
        echo "<br>";
    }



class Person 
{
    public string $name;
    public string $lastname;

    public function __construct(string $name, string $lastname) 
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function pozdrav(): string 
    {
        return "Ahoj já jsem $this->name $this->lastname";        
    }

    public function zamavej()
    {
        echo "🫶🏻";
    }
}


class User extends Person
{
    public string $role = "admin";

    public function pozdravJakoUser()
    {
        echo "Ahoj já jsem User";
    }

    public function pozdrav(): string 
    {
        return "jsem přepsaná metoda";
    }
}


$tom = new Person("Tomáš", "Zaharowski");
$martin = new Person("Martin", "Netolický");
$natka = new Person("Naty", "Kolářová");


echo $tom->name; echo "<br>"; // Tomáš 
echo $martin->name; echo "<br>"; // Martin
echo $natka->pozdrav(); echo "<br>"; // Ahoj já jsem Naty Kolářová

$tom->zamavej(); echo "<br>";


$user = (new User("Josef", "Kořenář"));

echo $user->name;
$user->pozdravJakoUser();

echo $user->pozdrav();

echo $user->role;


echo "<pre>";
print_r($_GET);
echo "</pre>";


$_POST;
$_GET;
$_REQUEST;
$_SERVER;