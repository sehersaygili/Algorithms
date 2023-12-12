<?php
//metni tersine çevirmek istiyorum
class Stack {
    private $stack = array();

    public function push($item) {
        array_push($this->stack, $item);
    }

    public function pop() {
        if ($this->isEmpty()) {
            return null;
        }
        return array_pop($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function size() {
        return count($this->stack);
    }
}

function reverseStack($stack) {
    $reversedStack = new Stack();

    while (!$stack->isEmpty()) {
        $item = $stack->pop();
        $reversedStack->push($item);
    }

    return $reversedStack;
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);

$reversedStack = reverseStack($stack);

while (!$reversedStack->isEmpty()) {
    echo $reversedStack->pop() . " "; // Son eklenenden başlayarak yığındaki öğeleri çıkarır ve ters sırayla yazdırır
}


?>