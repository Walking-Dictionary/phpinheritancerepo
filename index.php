<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

interface shapes {

	public function printShape();

}



class polygon implements shapes{ 
	protected $Num;

	function __construct($num) {

            $Num = $num;
			echo 'Am the constructor from the parent polygon class ';
			echo 'I implement the shapes interface<br>';

	}

	public function printShape() {
			echo 'If you override me you can print your shape<br>';

	}
}


trait area {

	
	public function calculateArea() { 

		return 'area calculated by area Trait :-|<br>';
	}

	public function printArea(){
	 
	 return ;
	
	}

}

trait perimeter {

	
	public function calculatePerimeter() { 

		return 'PERIMETER CALCULATED BY PERIMETER TRAIT :-|<br>';

	}

	public function printPerimeter(){
	 
	 return ;
	
	}

}


class Triangle  extends polygon { 
	use area;
	use perimeter;

	public function printShape() {
	echo ' I am a triangle, i overrode, i overrode my parent class print function <br>';

	}

}

class Rectangle  extends polygon
{
    use area;
    use perimeter;

    public function printShape()
    {
        echo ' <br>I am a Rectangle, i overrode my parent class print function<br>';
    }

}

class Square  extends polygon
{
    use area;
    use perimeter;

    public function printShape()
    {
        echo ' <br>I am a square, i overrode my parent class print function<br>';
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</head>

<body>
<div class = "container" >
    <div class = "col-md-4 offset-4">
        <h3> A small demo for PHP OOP</h3>
        <br><br>

    <hr>
    <?php
        $myTriangle = new Triangle(3);
        $myTriangle->printShape();
        echo $myTriangle->calculatePerimeter();
        echo $myTriangle->calculateArea();
    ?>
     <hr>
      <?php
        $myRectangle = new Rectangle(4);
        $myRectangle->printShape();
        echo $myRectangle->calculatePerimeter();
        echo $myRectangle->calculateArea();
    ?>
    <hr>
    <?php
        $mySquare = new Square(4);
        $mySquare->printShape();
        echo $mySquare->calculatePerimeter();
        echo $mySquare->calculateArea();
    ?>

    </div>
</div>
</body>
</html>


