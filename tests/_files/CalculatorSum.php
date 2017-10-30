<?php
class CalculatorSum
{
    private $a;
    private $b;
    /**
     * CalculatorSum constructor.
     */
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function add()
    {
        return $this->a + $this->b;
    }
}
