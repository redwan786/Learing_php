<?php
class Car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        echo "Hello" . PHP_EOL;
        echo "\n";
        return "This is a " . $this->color . " " . $this->model . PHP_EOL;
    }
}

$myCar = new Car("red","volvo!");
var_dump($myCar);
echo $myCar->message();


$str = "Hello World from Bangladesh";
echo strlen($str) . PHP_EOL;
echo str_word_count($str) . PHP_EOL;
echo strpos($str, "from");



?>