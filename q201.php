<?php
class Car {
    public $make = 'Toyota';
    public $model = 'Camry';

    public function startEngine() {
        return 'Engine started';
    }

    private function stopEngine() {
        return 'Engine stopped';
    }
}

$myCar = new Car();

echo 'Class name: ' . get_class($myCar) . "\n";

$methods = get_class_methods($myCar);
echo "Public methods: \n";
foreach ($methods as $method) {
    echo $method . "\n";
}

$vars = get_object_vars($myCar);
echo "Public properties: \n";
foreach ($vars as $key => $value) {
    echo $key . " => " . $value . "\n";
}

$methodToCheck = 'startEngine';
if (method_exists($myCar, $methodToCheck)) {
    echo "Method $methodToCheck exists\n";
} else {
    echo "Method $methodToCheck does not exist\n";
}
?>
