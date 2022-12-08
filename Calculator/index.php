<?php
//Class
class Calculator {
//Define variables
  public $number1;
  public $number2;
  public $operator;
//Constructor
  function __construct($value1, $value2, $oper) {
  //Initialize variables
    $this->number1 = $value1;
    $this->number2 = $value2;
    $this->operator= $oper;
  }
  //Function
  public function calculate_result() {
    //Switch StateMent Start
    switch ($this->operator) {
      //Case +
        case '+':
        echo $this->number1 + $this->number2;
        break;
        //Case -
        case '-':
        echo $this->number1 - $this->number2;
        break;
        //Case *
        case '*':
        echo $this->number1 * $this->number2; 
        break;
        //Case /
        case '/':
          //If the operator is equal 0
          if($this->number2 == 0)
          {
            echo -1;
          }
          else
          {
            //Else if the operator
            echo $this->number1 / $this->number2;
          }
        break;
        //defualt operator
        default:
        echo 0;
      }
  }
}
//Create Object
$obj = new Calculator( 50, 13, "+");
//Call Function
echo "<p>+ Operator</p>";
$obj->calculate_result();
echo "<br>";
$obj = new Calculator( 12, 3, "-");
echo "<p>- Operator</p>";
$obj->calculate_result();
echo "<br>";
$obj = new Calculator( 10, 13, "*");
echo "<p>* Operator</p>";
$obj->calculate_result();
echo "<br>";
$obj = new Calculator( 50, 0, "/");
echo "<p>/ by 0</p>";
$obj->calculate_result();
echo "<br>";
$obj = new Calculator( 50, 10, "/");
echo "<p>/ Operator</p>";
$obj->calculate_result();
echo "<br>";
$obj = new Calculator( 20, 10, "%");
echo "<p>Other Operator</p>";
$obj->calculate_result();
?>