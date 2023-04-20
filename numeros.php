<?php
// función para encontrar el MCD
function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return abs($a);
}

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
        $numerator_real = ($this->real * $complex->real) + ($this->imaginary * $complex->imaginary);
        $numerator_imaginary = ($this->imaginary * $complex->real) - ($this->real * $complex->imaginary);
        $denominator_real = ($complex->real * $complex->real) + ($complex->imaginary * $complex->imaginary);
        $denominator_imaginary = -1 * ($complex->imaginary * $complex->real) + ($complex->real * $complex->imaginary); // conjugado del denominador
    
        $common_factor = $denominator_real + $denominator_imaginary;
    
        $numerator_real_num = $numerator_real;
        $numerator_real_denom = $common_factor;
        $numerator_imaginary_num = $numerator_imaginary;
        $numerator_imaginary_denom = $common_factor;
    
        // construye la cadena de fracción
        $fraction = '';
        if ($numerator_real_num != 0) {
            $fraction .= '('. $numerator_real_num . '/' . $numerator_real_denom.')';
        }
    
        if ($numerator_imaginary_num != 0) {
            if ($fraction != '') {
                $fraction .= ' - ';
            }
    
            if ($numerator_imaginary_denom != 1) {
                $fraction .= '('. $numerator_imaginary_num . '/' . $numerator_imaginary_denom.')';
            } else {
                $fraction .= $numerator_imaginary_num;
            }
    
            $fraction .= 'i';
        }
    
        if ($fraction == '') {
            $fraction = '0';
        }
    
        return $fraction;
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
