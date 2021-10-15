<?php


//classes
class Person {

    public $name;
    public $gender;
    public $age;

    public function getBirthday()
    {
        return " Name = {$this->name} <br /> Gender = {$this->gender}  <br /> Age = {$this->age}";    
    }
}

class Book {
    
    public $title;
    public $author;
    public $numberPages;
    public $page;
    public $open;
    public $reader;

    public function getDetails()
    {
        return " Title = {$this->title} <br /> Author = {$this->author}  <br /> Number of pages = {$this->numberPages} <br />  Page = {$this->page} <br />  Open = {$this->open} <br />  Reader = {$this->reader} ";
    }
}

echo "------PEOPLE------<br />";
// objetos
$p1 = new Person;
$p1->name = 'Matheus';
$p1->gender = 'M';
$p1->age = 25 ;
echo $p1->getBirthday();
echo "<br /><br />";

$p2 = new Person;
$p2->name = 'Bia';
$p2->gender = 'F';
$p2->age = 22;
echo $p2->getBirthday();
echo "<br /><br />";

$p3 = new Person;
$p3->name = 'Nathalia';
$p3->gender = 'F';
$p3->age = 24;
echo $p3->getBirthday();

echo "<br /><br />------BOOKS------<br /><br />";

$b1 = new Book;
$b1->title = 'Uma aventura legal';
$b1->author = 'fulano';
$b1->numberPages = 400;
$b1->page = 67;
$b1->open = true;
$b1->reader = 'Matheus';
echo $b1->getDetails();
echo "<br /><br />";

$b2 = new Book;
$b2->title = ' Um drama bacana';
$b2->author = 'ciclano';
$b2->numberPages = 356;
$b2->page = 1;
$b2->open = false;
$b2->reader = 'Bia';
echo $b2->getDetails();
echo "<br /><br />";

$b3 = new Book;
$b3->title = 'Um romance meloso';
$b3->author = 'beltrano';
$b3->numberPages = 254;
$b3->page = 42;
$b3->open = true;
$b3->reader = 'Nathalia';
echo $b3->getDetails();
echo "<br /><br />";

$b4 = new Book;
$b4->title = 'Uma ficção cientifica braba';
$b4->author = 'seu Ze da ficção';
$b4->numberPages = 567;
$b4->page = 345;
$b4->open = true;
$b4->reader = 'Matheus';
echo $b4->getDetails();