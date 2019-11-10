<!--
<?php 
    if(isset($_POST['res'])){
     $res = $_POST['display'];
	 $res = eval('return '.$res.';');
    }
   ?> 


<html>
<head>
<title> Simple Calculator Using PHP - Web lab Program 8a</title>
<style>
input {
    background-color: #af4c7a; 
    border: none;
    color: white;
    width: 100%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}
</style>

</head>
   <body>
<center>
<h2> Calculator Using PHP</h2>
      <form name="calculator"  method="post">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" value="<?php if(isset($res)){ echo $res;}?>"  >
               </td>
            </tr>
            <tr>
               <td><input type="button"  value="1" onclick="calculator.display.value += '1'"></td>
               <td><input type="button"  value="2" onclick="calculator.display.value += '2'"></td>
               <td><input type="button"  value="3" onclick="calculator.display.value += '3'"></td>
               <td><input type="button"  value="+" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input type="button" value="4" onclick="calculator.display.value += '4'"></td>
               <td><input type="button" value="5" onclick="calculator.display.value += '5'"></td>
               <td><input type="button" value="6" onclick="calculator.display.value += '6'"></td>
               <td><input type="button" value="-" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input type="button" value="8" onclick="calculator.display.value += '8'"></td>
               <td><input type="button" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input type="button" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input type="button" value="c" onclick="calculator.display.value = ''"></td>
               <td><input type="button" value="0" onclick="calculator.display.value += '0'"></td>
               <td><input type="submit" value="=" name="res"></td>
               <td><input type="button" value="/" onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
		 
      </form>
</center>
   </body>
   
</html>
-->

<html>

<head>

<style>

table, td, th

{

border: 1px solid black;

width: 35%;

text-align: center;

background-color: DarkGray;

}

table { margin: auto; }

input,p { text-align:right; }

</style>

</head>

<body>

<form method="post">

<table>

<caption><h2> SIMPLE CALCULATOR </h2></caption>> <tr><td>First Number:</td><td><input type="text" name="num1" /></td>

<td	rowspan="2"><input	type="submit"	name="submit"
value="calculate"></td></tr>

<tr><td>Second	Number:</td><td><input	type="text"
name="num2"/></td></tr>

</form>


<?php

if(isset($_POST['submit'])) // it checks if the input submit is filled
{

$num1 = $_POST['num1'];

$num2 = $_POST['num2'];

if(is_numeric($num1)  and is_numeric($num1) ){

echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>";

echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>";

echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>";

echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";

echo "</table>";

}

else

{

echo"<script type='text/javascript' > alert(' ENTER VALID NUMBER');</script>";

}


}

?>

</body>

</html>
