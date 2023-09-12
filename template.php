<?php
$conn= mysqli_connect("localhost","root","","calculator");

if(isset($_POST['subm'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['op'];

    switch($op){
        case "addittion":
            $num3=$num1+$num2;
            break;
        case "subtraction":
            $num3=$num1-$num2;
            break;
        case "multiplication":
             $num3=$num1*$num2;
            break;
        case "division":
            $num3=$num1/$num2;
            break;
        default:
            $num3="please select an operator";
    }
    $ins = "INSERT INTO cal VALUES ('$num1','$num2','$op','$num3')";
    $result = mysqli_query($conn,$ins);
    if($result)
    {
        echo "well done";
    }
    else
    {
        echo "something went wrong";
    }

}

?>
