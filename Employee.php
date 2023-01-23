<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Wines Intranet-Home</title>
    <link rel="stylesheet" href="php.css">
    <link rel="icon" type="image" href="favicon.ico">


</head>

<body>
    <div class="container">
        
    <header>
        <span style="color:#00193c;font-size: 190%">DIRECT WINES</span>
        <span style="color:white;text-align:center">sharePoint</span>
     
        
       
     
  
    </header>
    <nav></nav>
    <section>
    
     <ul><li>Direct Wines Intranet</li>
        <li>UK</li>
    <li>USA</li>
<li>APAC</li>
<li>INDIA</li>
<li>DW Production</li>
<li>Wine Buying</li>
<li>Group Tech</li>
<li>Group Finance</li>
        </ul>
    </section>
    <div class="box2"> 
        <ul class="box6"><b><li class="box3">DIRECT WINES</li></b>
            <b><li class="box4">Direct Wines Intranet</li></b>
        <li class="box5">Home</li>
    <li class="box5">Business Updates</li>
    <li class="box5">Not following</li> </ul></div>

 </div>
<div class="table">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php

$Name=$_POST['Name'];
$Salary=$_POST['Salary'];
$Designation=$_POST['Designation'];
$Phn_No=$_POST['Phn_No'];

if(!empty($Name)||!empty($Salary)||!empty($Designation)||!empty($Phn_No))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="employee_table";

    $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    
    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno() .')' . mysqli_connect_error());
    }
    else{
        $SELECT="SELECT Phn_No From login1 Where Phn_No=? Limit 1";
        $INSERT="INSERT INTO login1( Name,Salary,Designation,Phn_No)values(?,?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("i",$Phn_No);
        $stmt->execute();
        $stmt->bind_result($Phn_No);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss",$Name,$Salary,$Designation,$Phn_No);
            $stmt->execute();
            $spam=$conn->insert_id;
            echo "New Record inserted successfully.<br> Welcome $Name and Your Employee ID is  ". $spam;
        }else{
            echo"Phone Number is already Registered";
        }
        echo '<script type ="text/JavaScript">';  
       
        echo '</script>';  
        $stmt->close();
        $conn->close();
    }
}
    else{
        echo"All feilds are required";
        die();
    }
    ?>

    
</div>


   


</div>
 <footer><h4>Site usage policy</h4>
    </footer>
</body>
</html>