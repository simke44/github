<?php

class racunjanje {
    public $a ;
    public $b ;
    public $operator;
    function __construct($a, $b, $operator)
    {
      $this->a =$a;
      $this->b =$b;
      $this ->operator =$operator;
      }
    function VratiRezultat()
    {
      switch ($this->operator) {
        case '+':
          return  $this->a + $this->b ;
          break;
        case '-';
          return  $this->a - $this->b;
          break;
        case '*':
          return  $this->a * $this->b ;
          break;
        case '/';
          return  $this->a / $this->b ;
          break;
      }

     }

}
$cal = new racunjanje ($_POST['prvi'],$_POST['drugi'],$_POST['operacija']);

if (!isset($_POST['submit']))
{

    $rezultat = $cal->VratiRezultat();
    echo $rezultat;
}
