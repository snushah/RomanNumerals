<?php

  interface RomanNumeralGenerator {
    public function generate($integer); // convert from int -> roman
    public function  parse($string); // convert from roman -> int
    
}

class converter implements RomanNumeralGenerator{
 private $code;
  function __construct() {
  // Roman Characters and values 
    $code = array(  'M'=>1000, 
                    'CM'=>900, 
                    'D'=>500, 
                    'CD'=>400, 
                    'C'=>100, 
                    'XC'=>90, 
                    'L'=>50, 
                    'XL'=>40, 
                    'X'=>10, 
                    'IX'=>9, 
                    'V'=>5, 
                    'IV'=>4, 
                    'I'=>1);
    $this->code = $code;         //             
    } 
function generate($integer) 
{         
    if($integer<1 || $integer>3999)     // If entered value is over 3999 then quit;
    return false;
    $string = '';         // Start with an empty string; 
    while($integer > 0)   // A loop to run until 'entered value'  become zero;     
    { 
                                                  
        foreach($this->code as $key=>$val)  //Ok! Now We are in another loop to check if entered value is greater or equal to the roman value
        {                                   // If yes then get a character and subtract into the entered value and break this inner loop.
            if($integer >= $val) 
            {                         // from  the top if the integer
                $integer -= $val; 
                $string .= $key; 
                break; 
            } 
        } 
    } 
             // finally we will get the roman character(s).
    return $string; 
} 
function parse($string) 
{

     $integer = 0;
     $pos = strlen($string)-1;    // Get the end position of the string.
               
  while($pos>-1)
  {
   if($pos>0)
   {                                 // Check 2 Characters..in Roman Codes  Array
    $chars = $string[$pos-1].$string[$pos];
    if(array_key_exists($chars,$this->code )) // if exist then get the value and update niddle position.
    {
       $integer+= $this->code[$chars];  
       $pos=$pos-2;
       continue;    
   
    }
   }
                                    // checking into the 1 Characters.. Romoan Codes Array
    $char = $string[$pos];
    if(array_key_exists($char,$this->code ))
    {       
        $integer+= $this->code[$char];
            
    }     
    $pos--;  
    }
    /*** return the res ***/
    if($integer>3999)
    return false;
    return $integer;
    }   
}
  
?>