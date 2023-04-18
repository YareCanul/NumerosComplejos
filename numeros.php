<?php

class Complex {

    private $real;
    private $imaginary;

    public function __construct($real, $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function add($complex) {
        $real = $this->real + $complex->real;
        $imaginary = $this->imaginary + $complex->imaginary;
        return new Complex($real, $imaginary);
    }

    public function subtract($complex) {
        $real = $this->real - $complex->real;
        $imaginary = $this->imaginary - $complex->imaginary;
        return new Complex($real, $imaginary);
    }

    public function multiply($complex) {
        $real = ($this->real * $complex->real) - ($this->imaginary * $complex->imaginary);
        $imaginary = ($this->real * $complex->imaginary) + ($this->imaginary * $complex->real);
        return new Complex($real, $imaginary);
    }

    public function divide($complex) {
        $real = (($this->real * $complex->real) + ($this->imaginary * $complex->imaginary)) / (($complex->real * $complex->real) + ($complex->imaginary * $complex->imaginary));
        $imaginary = (($this->imaginary * $complex->real) - ($this->real * $complex->imaginary)) / (($complex->real * $complex->real) + ($complex->imaginary * $complex->imaginary));
        return new Complex($real, $imaginary);
    }

    public function getReal() {
        return $this->real;
    }

    public function getImaginary() {
        return $this->imaginary;
    }

    public function __toString() {
        if ($this->imaginary >= 0) {
            return $this->real . ' + ' . $this->imaginary . 'i';
        } else {
            return $this->real . ' - ' . abs($this->imaginary) . 'i';
        }
    }

}

// Ejemplo de uso:

//$complex1 = new Complex(2, 3);
//$complex2 = new Complex(1, -1);

//echo 'Suma: ' . $complex1->add($complex2) . '<br>';
//echo 'Resta: ' . $complex1->subtract($complex2) . '<br>';
//echo 'Multiplicación: ' . $complex1->multiply($complex2) . '<br>';
//echo 'División: ' . $complex1->divide($complex2) . '<br>';

?>
