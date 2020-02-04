<?php

session_start();

$ergebnis="";

if($_POST) {
    $zahlOne = $_POST['input1'];
    $zahlTwo = $_POST['input2'];
    $operator = $_POST['Operator'];

    switch ($operator) {
        case '+':
            $ergebnis = $zahlOne + $zahlTwo;
            break;
        case '-':
            $ergebnis = $zahlOne - $zahlTwo;
            break;
        default:
            break;
    }
    $_SESSION[$zahlOne.$operator.$zahlTwo."=".$ergebnis]= $zahlOne.$operator.$zahlTwo."=".$ergebnis;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taschenrechner</title>
    <script src="validate.js" type="text/javascript"></script>

</head>
<body>
<form  action="Taschenrechner.php"  method="POST" >
    1.Zahl:<input type ="text" name="input1" value="">
    Operator: <select name="Operator">
        <option value ="+">+</option>
        <option value ="-">-</option>
    </select>
    2.Zahl: <input type="text" name="input2" value="">
</form>
 <?php echo "<br>Das Ergebniss = ".$ergebnis; ?><br />
    <?php
    echo "<br/>Historie: <br/>";
    foreach($_SESSION as $key=>$val){
        echo $val."<br>";
    }
    ;?>


</body>
</html>