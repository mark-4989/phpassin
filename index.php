<?php 
//abstract class is when the parent class has a named method but needs its child class to fill out the task
// they start with the name abstract
// parent class
// abstract are used When defining a common structure for a group of related classes
// // To enforce a consistent interface across derived classes
// abstract class Detail {
//     public $name;
//     public function __construct($name) {
//         $this->name = $name;
//     }
//     abstract public function start(): string;
// }
// // child class
// class Naming extends Detail {
//     public function start () : string {
// return "Hello, I am $this->name";
//     }
// }
// class Age extends Detail {
//     public function start () : string {
//         return "and my age is $this->name";
//     }

// }
// class Work extends Detail {
//     public function start () : string {
//         return "and i am a $this->name by profession";
//     }
// }

// //object
// $naming = new Naming("John Doe");
// echo $naming->start ();

// $age = new Age("45");
// echo $age->start ();

// $work = new Work("accountant");
// echo $work->start ();


// traits
// traits are used to declare methods  that can be used in multiple classes
// traits are used when a class needs to inherit multiple behaviours

// trait Health {
//     public function exercise(){
//         echo "Working out is good ";
//     }
// }

// trait Health1 {
//     public function exercise1(){
//         echo "Eating a balanced diet is good for your health";
//     }
// }
 
// class Health2 {
//     use Health;
// }

// $obj = new Health2();
// $obj->exercise();
// echo"<br>";

// class Health3 {
//     use Health, Health1;
// }
// $obj1 = new Health3();
// $obj1->exercise();
// echo " and also ";
// $obj1->exercise1();
   

// static method are methods that belong to a class itself rather than to any instance of the class
// Static methods can be called directly - without creating a class first.
// Static methods are declared with the static keyword
class state {
    public static function greet() {
      echo "Hello From a static method! and property value is ";
    }
  
    public function __construct() {
        // here a static method can be accessed from a method in the same class using the  double colon (::)
      self::greet();
    }
  }
  
  new state();

//   static property are class-level variables that are shared across all instances of the class
// Static property can be called directly - without creating a class first. and are declared with the static keyword
// they are used  For defining class-wide constants that don't change during runtime
class Sprop {
    public static $value=4.6577;
    public function staticValue() {
                // here a static property can be accessed from a method in the same class using the  double colon (::)
      return self::$value;
    }
  }
  
  $pi = new Sprop();
  echo $pi->staticValue();

// Name spaces
