<?php


/**
 * 
 * lesson 1  in cocde course
 */

//Objects  

// $object = new stdClass;

// // $object->name = 'john';

// $object->name = ['John', 'Billy', 'Susan', 'Max'];

// foreach($object->name as $name ){
//     echo $name . '<br>';
// }




/**
 * lesson 2,3,4 in code Course 
 */

 require('Person.php');

//  $person = new Person;
//  $person->name ='Jone';
//  $person->age  = 20;

 //  echo $person->name . ' is ' . $person->age .' years old ';

//  $person = new Person('Jone',13);

// echo $person->sentence();



/**
 * Lesson 4 in course lesson 
 */
require('Bird.php');
require('Pigeon.php');
require('Penguin.php');
//$pigeon = new Pigeon(true,3);

// $penguin = new Penguin(false,3);
 
//echo $bird->legCount;

//echo $pigeon->legCount;

// if($penguin->canFly()){
//     echo" Penguin Can Fly";
// }else{
//     echo " Penguin Can not Fly";
// }



/**
 * lesson 5 in code course 
 */


//public , protected , private

// $penguin  = new Penguin(false,5);

// $penguin->foo();
// echo '<br>';
// $penguin->ifCan();



/**
 * Lesson 6 code Course  Dependency injection
 */

 
require('Lock.php');
require('Chest.php');


// $chest = new Chest();
// var_dump($chest->close());
// // $chest->close();


require('Database.php');
require('User.php');


// $user =  new User(new Database); 


//using static get instance function 
// $user = new User();

// $user->create(['name'=>'ali','email'=>'ali@email.com']);



/**
 * 
 * Interface => L7 
 * 
 */

 require('Collection.php');

//  $c = new Collection();

//  $c->add('Ali');
//  $c->add('Labib');



// // echo $c->toJson();

// //echo count($c);

// echo json_encode($c);



require('./interfaces/TalkInterface.php');

require('Dog.php');
require('Cat.php');


// $dog = new Dog();
// $cat = new Cat();
// echo $dog->talk();
// echo '<br>';
// echo $cat->talk();




/***
 * 
 * Magic Methods => L8
 * 
 */


//  $c = new Collection();

//  $c->add('Ali');
//  $c->add('Labib');
// //Using __set()
// $c->baz ='qux';

// // echo '<pre>'. print_r($c->all(),true);


// // echo $c->get('baz');
// //using __get()
// // echo $c->baz;
// // echo '<br>';

// // //Using call 
// // $c->func('ali','labib','mohamed');


// // Uing __toString()

// echo $c;


require('Foo.php');
require('Bar.php');

// $bar = new Bar();

// echo $bar->bar();
// echo '<br>';
// echo $bar->foobar();
// echo '<br>';
// echo $bar->xyz();


/**
 * Static Methods => L 10
 */


require('Statclass.php');

// echo StatClass::hello('Welcome');
// echo '<br>';
// echo StatClass::$bar;


/***
 * 
 * Method Chining => Lesson 11
 * 
 */

 require('Chainingclass.php');


 $ch = new Chainingclass();

 $ch->foo()->baz();
 