<?php

require 'classesEx8/classPerson.php';
require 'classesEx8/classBook.php';



// $p1->setName('Matheus');
// $p1->gender = 'M';
// $p1->age = 25 ;
$person1 = new Person('Matheus', 'M', 25);
$person2 = new Person('Bia', 'F', 24);
$person3 = new Person('Nathalia', 'F', 22);
echo "------PEOPLE------<br />";
echo $person1->getPersonDetails();
echo $person1->getBirthday();
echo "<br /><br />";
echo $person2->getPersonDetails();
echo $person2->getBirthday();
echo "<br /><br />";
echo $person3->getPersonDetails();
echo $person3->getBirthday();

$book1 = new Book('Uma aventura legal', 'fulano', 400, 67, true, 'Matheus');
$book2 = new Book('Um drama bacana', 'ciclano', 356, 1, false, 'Bia');
$book3 = new Book('Uma romance chato', 'beltrano', 254, 43, true, 'Nathalia');
$book4 = new Book('Duna', 'seu zé da ficção', 564, 457, true, 'Thiago');
echo "<br /><br />------BOOKS------<br /><br />";
echo $book1->getDetails();
echo "<br /><br />";
echo $book2->getDetails();
echo "<br /><br />";
echo $book3->getDetails();
echo "<br /><br />";
echo $book4->getDetails();