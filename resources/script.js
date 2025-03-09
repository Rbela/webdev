console.log ('Hello, world!')

var myName = 'John';
//let myName = 'John';

let number = true;

let isTrue = true;
let isFalse = false

let i = 1;

let cisloJedna = 5;
let cisloDve = 10;

// Výpočet se nikam neuložil
cisloJedna + cisloDve;

// Nyní ano
let noveCislo = cisloJedna * cisloDve;

let ahoj = "Ahoj";
let svete = "světe";

//dokonce můžeme přidávat i věci, které nemáme v proměnných
// pokud jsou stejného datového typu
let zprava = ahoj ; " " + svete;

let promenna = "nastavená hodnota";

const konstanta = "Hodnota, kterou můžu změnit";

konstanta = "Nemůžu změnit";

// vytvoření funkce bez argumentů - prázdné kulaté závorky
function vypisCislo () {
    console.log(10); //zde používáme předpřipravené funkce z prohlížeče
}

// a použití vytvoření funkce - tzv. volání
vypisCislo();

//vytvoření funkce se dvěma argumenty
function secti(a, b){ 

    // zde vypočtenou hodnotu takzvaně vrátíme z funkce pomocí return
    return a + b;
}

secti(5, 10);
secti(5, 1);
secti(10, 154);
secti(10, 10);

let vypocteno = secti(7, 8);

if (1 < 2){

    console.log('1 je menší než 2');
}else{
    console.log('1 není menší než 2');
    }
    
    if (1<2){
        console.log('1 je menší než 2');
    }else if{(1<3) {
        console.log('1 je menší než 3');
    }

switch (p) {
    case 1: //toto vlastně znamená p === 1 ?
        console.log('První místo');
    break;
case 2:
    console.log('Druhé místo');
    break;
case 3:
    console.log('Třetí místo');
    break;
case 4: // case si můžete představit jako elseif
console.log('Bramborová medaile');
break;
default: // default jako else
console.log('Děkujeme za účast');
}


let pole = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

let poleJmen = [
    'John',
     'Jane',
      'Jack',
      'Jill'
    ];

    let polePoli = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

let poleRuznychDatovychTypu = [
    1,
    'John',
    true ,
    [1, 2, 3]
];

let person = {
    jmeno: 'John',
    prijmeni: 'Doe',
    vek: 30,
    pohlavi: 'muž',
    zamestnan: true
};

person.jmeno;
person.vek;

let Element = {
tag: 'div',
text: 'Ahoj světe',
class: 'container',
id: 'element',
style: 'color:red;',
children: 
 

{
    tag: 'p',
    text: 'Lorem ipsum',
    class: 'paragraph bg-gray-500',
    id: 'paragraph',
    style: 'font-size: 16px;'
 },



console.log(myName)