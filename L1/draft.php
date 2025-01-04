<?php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        echo "Hello" . PHP_EOL;
        echo "\n";
        return "This is a " . $this->color . " " . $this->model . PHP_EOL;
    }
}

$myCar = new Car("red", "volvo!");
var_dump($myCar);
echo $myCar->message();

$str = "Hello World from Bangladesh";
echo strlen($str) . PHP_EOL;
echo str_word_count($str) . PHP_EOL;
echo strpos($str, "from") . PHP_EOL;

function modifyArray($arr) {
    foreach ($arr as $index => $value) {
        $arr[$index] = $value * 2;
    }
    return $arr;
}

$data = [1, 2, 3, 4];
$newData = modifyArray($data);

print_r($data);
print_r($newData);

function modifyArray2(&$arr2) { // Correct parameter name
    foreach ($arr2 as $index => $value) { // Use $arr2 here
        $arr2[$index] = $value * 2;
    }
    return $arr2;
}

$data2 = [1, 2, 3, 4];
$newData2 = modifyArray2($data2);

print_r($data2);
print_r($newData2);
?>