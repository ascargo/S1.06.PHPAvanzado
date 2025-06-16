<?php
Class Calculator {
    public function __call($name, $args) {
        switch($name) {
            case 'add' :
                return $args[0] + $args[1];
            case 'substract' :
                return $args[0] - $args[1];
            case 'multiply' :
                return $args[0] * $args[1];
            case 'divide' :
                return $args[0] / $args[1];
            default:
                throw new BadMethodCallException("Method $name not supported.");
        }
    }
}

$operation = new Calculator();
echo "The result is: " . $operation->add(1,5);
?>