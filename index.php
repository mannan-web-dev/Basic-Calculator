<?php


$num="";
$operator ="";
$result ="";
$cookie_name1="num";
$cookie_value1="";
$cookie_name2="op";
$cookie_value2="";

echo " Basic Calculator";


if( isset($_POST['dispaly'])){
    $num =$_POST['dispaly'];
}
else{
    $num='';
}

if(isset($_POST['submit'])){
    $num =$_POST['dispaly'] .$_POST['submit'];
}
else{
    $num='';
}

if( isset($_POST['op'])){
    $cookie_value1 =$_POST['dispaly'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");


    $cookie_value2 =  $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");

    $num ="";
}

if(isset($_POST['equals'])){
    $num =$_POST['dispaly'];

     switch($_COOKIE['op']){
        case  "+":
            $result = $_COOKIE['num'] + $num ;
            break;
        case  "/":
            $result = $_COOKIE['num'] / $num;
            break;

        case "-":
            $result =  $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num']* $num;
            break;
            
    }

    $num = $result;   

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

  <form action="#" method="post" style="margin-left: 300px;" >
    <table border="1">
        <tr>
            <td colspan="4">
                <input type="text" name="dispaly" value=<?php echo $num; ?>>
            </td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="7" style="width: 10px;"/></td>
            <td> <input type="submit" name="submit" value="8"/></td>
            <td> <input type="submit" name="submit" value="9"/></td>
            <td> <input type="submit" name="op" value="/"/></td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="4"/></td>
            <td> <input type="submit" name="submit" value="5"/></td>
            <td> <input type="submit" name="submit" value="6"/></td>
            <td> <input type="submit" name="op" value="+"/></td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="1"/></td>
            <td> <input type="submit" name="submit" value="2"/></td>
            <td> <input type="submit" name="submit" value="3"/></td>
            <td> <input type="submit" name="op" value="-"/></td>
        </tr>
        <tr>
            <td> <input type="submit" name="submit" value="0"/></td>
            <td> <input type="submit" name="submit" value="c"/></td>
            <td> <input type="submit" name="equals" value="="/></td>
            <td> <input type="submit" name="op" value="*"/></td>
        </tr>
    
       </table>

  </form>
    
</body>
</html>