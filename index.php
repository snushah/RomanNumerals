<?php
  include("roman_numeral.class.php");
?>  

<html>
<head>
<title>Convert Roman to Numeral / Numeral to Roman</title>
<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

em {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>
  <h1>Convert Roman to Numeral / Numeral to Roman</h1>
  <form action='' method='post'>
    <label>Enter Roman / Numeral value </label>
    <em>Please enter between 1 and 3999 values</em>
    <div>
    <input type='text' value='<?=isset($_POST['roman_numeral'])?$_POST['roman_numeral']:'';?>' name='roman_numeral'>
    <input type='submit' value='Convert'>
    </div>
    <?php
    
 
      if(isset($_POST['roman_numeral']) AND !empty($_POST['roman_numeral']))
      {
        $obj  = new converter;
        if(is_numeric($_POST['roman_numeral']) AND $_POST['roman_numeral']>0)
        {
          $value =  $obj->generate($_POST['roman_numeral']);
        }
        else
        $value = $obj->parse($_POST['roman_numeral']);
        
        if($value)
        {
          echo "<h2>{$value}</h2>";
        }
        else
        echo "<h2>Invalid Value</h2>";
        
      }  
      
    ?>
  </form>
  <div> Developed by <a href='http://www.snushah.com'>Syed Shah</a></div>
</body>
</html>