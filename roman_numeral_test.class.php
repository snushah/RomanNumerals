<?php
  include 'roman_numeral.class.php';

    class converter_test extends PHPUnit_Framework_TestCase
  {
   public function test_generate_false()
    {
        $obj = new converter;     
        $integer = 0;    
        $string = $obj->generate($integer);
        $this->assertFalse($string);
        return $string;
    }
    public function test_check_equals()
    {
      $integer = 2590;    
      $obj = new converter;     
      $string = $obj->generate($integer);
      $parse  = $obj->parse($string); 
      $this->assertEquals($integer, $parse);
    
    }
 

  }
?>