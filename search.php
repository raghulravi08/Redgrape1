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

$Emp_No = $_POST['Emp_No'];
if(!empty($Emp_No))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "employee_table";
      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
       if(mysqli_connect_error()){
         die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
         }
         else{ 
            $sql = "SELECT * FROM login1 WHERE Emp_No = $Emp_No";
            $result = $conn->query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);
              
              if(mysqli_num_rows($result)==0){
                 printf("User doesn't exist!");
                 }
                 elseif (mysqli_num_rows($result)==1){
                    if(!$row){ 
                      printf("User no longer exists!");
                        }
                        else 
                        {
                             printf('Name: %s <br> Salary: %s <br> Designation: %s <br> Phn_No: %s', $row["Name"], $row["Salary"], $row["Designation"], $row["Phn_No"]);
                             mysqli_free_result($result);
                             }
                             }
                              mysqli_close($conn);
                            }
                               }else{
                                 echo "Enter the Employee Number!";
                                  die();
                                  }
                                  ?>

      </div>


   


</div>
 <footer><h4>Site usage policy</h4>
    </footer>
</body>
</html>

