
<?php
  class Rectangle {



    public $base;
    public $altezza;

    public function __construct($base,$altezza){


      $this -> base = $base;
      $this -> altezza = $altezza;
    }

    public function area() {

      return $this -> base * $this -> altezza;

    }
    public function perimetro(){
      return 2 * $this -> base + 2 * $this -> altezza;

    }


  }
  $rectangle1 = new Rectangle (10,5);
  $rectangle2 = new Rectangle (2,4);


  class Circle {

    public $raggio;

    public function _construct($raggio){
      $this -> raggio = $raggio;
    }

    public function getArea(){

      return $this -> raggio * $this -> raggio * pi();

    }
    public function getPer(){
      return 2 * $this -> raggio * pi();
    }


  }

  $circle1 = new Circle(5);
  $circle2 = new Circle(7);

  echo 'c area: ' . $circle1 -> getArea() . "<br>";


  class Movie {

    public $title;
    public $subtitle;
    public $author;

    public function _construct($title,$subtitle,$author) {

      $this -> title = $title;
      $this -> subtitle = $subtitle;
      $this -> author = $author;
    }
    // da scrivere la _tostring


  }

  $m1 = new Movie('matrix', "K R");


?>
