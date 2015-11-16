<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var111111';
    private   $private   = 'private var1111';
    function show() {
     
       foreach($this as $key => $value) {
           print "$key => $value\n";
       }
    }
    
}

/**
* 
*/
class Class1
{

    private  $myClass;
    public function __construct(){
      $this->myClass = new Myclass();
    }
    function show(){
      
      foreach($this->myClass as $key => $value) {
          print "$key => $value\n";
      }
   }
    
}

$class1 = new Class1();
$myclass = new MyClass();

$class1->show();

echo "\n";




?>