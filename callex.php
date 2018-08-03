<?php
//CALLBACK EXAMPLE

function dummy(){
    print "called Dummy 1";
}

function dummy2(){
    print "called 2nd dummy";
}

function main($var){
    $var();
}

class obj{
    public function fn(){
        
    }

    public $k;
    public function setfn(callable $call){
        $this->fn = $call;
    }
    public function  show(){
        //$this->fn();
        print $this->k;
    }
    public function  setk(){
        $this->k = 6;
    }
}

main("dummy");

$k = "hai";
$one = new obj();
$one->setfn("dummy2");
$one->setk();
$one->show();


//$one->fn();
print "<br>";
var_dump($one);
$two = new obj();
$two->setfn("dummy");
print "<br>";
var_dump($two);
$two->fn;


?>