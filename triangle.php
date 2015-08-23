<?php
class Triangle
{
    private $side1;
    private $side2;
    private $side3;

    function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    function setSide1($side1)
    {
        $this->side1 = $side1;
    }
    function getSide1()
    {
        return $this->side1;
    }

    function setSide2($side2)
    {
        $this->side2 = $side2;
    }
    function getSide2()
    {
        return $this->side_2;
    }

    function setSide3($side3)
    {
        $this->side3 = $side3;
    }
    function getSide3()
    {
        return $this->side3;
    }

    function noTriangle()
    {
        $noTri1 = ($this->side1 > ($this->side2 + $this->side3));
        $noTri2 = ($this->side2 > ($this->side1 + $this->side3));
        $noTri3 = ($this->side3 > ($this->side2+ $this->side1));

        if($noTri1 || $noTri2 || $noTri3) {
            return true;
        } else {
            return false;
        }
    }

    function nameTriangle()
    {
        if(($this->side1 == $this->side2) && ($this->side1 == $this->side3)) {
            return "Your Triangle is Equilateral";
        } elseif(($this->side1 == $this->side2) || ($this->side1 == $this->side3) || ($this->side3 == $this->side2)) {
            return "Your Triangle is Isosceles";
        } else {
            return "Your Triangle is Scalene";
        }
    }
}

$triangle = new Triangle($_GET['side1'], $_GET['side2'], $_GET['side3']);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Triangle</title>
</head>
<body>
    <div class="container">
        <h1>Was it a Triangle?</h1>
        <?php
            if($triangle->noTriangle()){
                echo "<h1>Sorry, those lengths don't make a Triangle</h1>";
            } else {
                echo "<h1>" . $triangle->nameTriangle() . "</h1>";
            }
        ?>
    </div>
</body>
</html>
