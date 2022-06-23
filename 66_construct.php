<?php

class person{
    public $name;
    public $age;
    function __construct($name="No Name",$age= 0){
        $this->name=$name;
        $this->age=$age;
    }
    function std(){
        echo $this->name ."-" . $this->age ."\n";
    }

}
$p1 = new person();
$p2 = new person("Aman Jha",19);
$p3 = new person("Ansh Singh",20);

$p1->std();
echo "<br>";
$p2->std();
echo "<br>";
$p3->std();
echo "<br>";

?>