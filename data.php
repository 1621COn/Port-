<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $Fortune; 
    
     $host = "/var/run/postgresql";
         $port = 5432;
         $user = "postgres";
         $pass_word = "pass";
         $dbname = "postgres";
       
try{
    $dst ="pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dst, $user, $pass_word, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}catch(PDOException $e){
    echo "". $e->getMessage();
}
class Random
{
private $RDATA;
 private $CONGRUDATA;
 private $INTSTR;
 private $CONGRUDATARO;
 private $Rarray;
 private $placeholder;
 private $CONF;
 private $STR;
 private $Carray;
  private $placeholder2;   


 
 
    public function getRandom()
    {
    
   
    
    $CONGRUDATA = mt_rand(min: 1, max:10000);
    $CONGRUDATARO = mt_rand(100, $CONGRUDATA);
    $placeholder = $CONGRUDATA + $CONGRUDATARO;
    $INTSTR = (string)$placeholder;
  
    $Rarray = str_split($INTSTR);
  

     $CONGRUDATA2 = mt_rand(min: 1, max:10000);
    $CONGRUDATARO2 = mt_rand(100, $CONGRUDATA2);
    $placeholder2 = $CONGRUDATA + $CONGRUDATARO2;
      $STR = (string) $placeholder2;
          $Carray = str_split($STR);

      $CONGRUDATA3 = mt_rand(min: 1, max:10000);
    $CONGRUDATARO3 = mt_rand(100, $CONGRUDATA3);
    $placeholder3 = $CONGRUDATA3 + $CONGRUDATARO3;
      $STR2 = (string) $placeholder3;
          $Farray = str_split($STR2);
      
          $CONGRUDATA0 = mt_rand(min: 0, max:99);
    $CONGRUDATARO0 = mt_rand(0, $CONGRUDATA0);
    $placeholder0 = $CONGRUDATA0 + $CONGRUDATARO0;
      $STR0 = (string) $placeholder0;
          $Zarray = str_split($STR0);
    for($i = 0; $i < count($Zarray); $i++)
        {
                echo $Zarray[$i];
        }
        echo "-";
    for($i = 0; $i < count($Rarray);  $i++)
        {
            
                  echo $Rarray[$i];
                 
        }
                echo "-";
                
     for($i = 0; $i < count($Carray);  $i++)
        {
            
                  echo $Carray[$i];
                 
        }
                echo "-";
     for($i = 0; $i < count($Farray);  $i++)
        {
            
                  echo $Farray[$i];
                 
        }
              
    }
}


$AO3 = 75.12; 
$AO2 = 521.35;
 $AO = 265.12;

 $query =  $conn->prepare("SELECT user_id, user_name, pass_word FROM USERS WHERE user_id = :id");
 $secondquery = $conn->prepare("SELECT user_id, user_name, pass_word FROM USERS where user_id = :ID");
 $thirdquery = $conn->prepare("SELECT id, amount_due, credit_num FROM AMOUNTS WHERE id = :id");
 $fourthquery = $conn->prepare("SELECT id, amount_due, credit_num FROM AMOUNTS WHERE id = :id");
 $query ->bindValue(':id', 1);
 $query->execute();
$secondquery -> bindValue(':ID', 2);
$secondquery -> execute();
$thirdquery -> bindValue(':id', 11);

$thirdquery -> execute();
$fourthquery -> bindValue(':id',12);
 while($row = $query->fetch(PDO::FETCH_ASSOC)){
 //echo ''. $row['user_id'] .''. $row['user_name'];
 $user_name =$row['user_name'];
 $pass__word = $row['pass_word'];
 


}
while($secondrow = $secondquery->fetch(PDO::FETCH_ASSOC)){
$U_N2 = $secondrow['user_name'];
$P_W = $secondrow['pass_word'];

}

 while($thirdrow = $thirdquery ->fetch(PDO::FETCH_ASSOC))
    {
        $credit_sum = $thirdrow['credit_num'];
        $credit_due = $thirdrow['amount_due'];
    }  
while($Fourthrow = $fourthquery -> fetch(PDO::FETCH_ASSOC)){
    $credit_sum2 = $Fourthrow['credit_num'];
    $credit_due2 = $Fourthrow['amount_due'];

}

  $zulu = $user_name;
  $PI = $pass__word;
  $Zero = $U_N2;
  $Fox = $P_W;
    ?>
    
</body>
</html>