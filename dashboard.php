<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

<style>

.Welcome{
    text-align: right;
    position: relative;
    left: -3rem;

}
.User{
    text-align: right;
    position: relative;
    left: -5rem;
    bottom: 1.45rem;

}
.item1
{
    text-align: left;
}
.item2
{
    text-align: center;
}
.fcred
{
    position: relative;
    bottom: -25.98rem;
    right: -2rem;
}
.Tvcred
{
    text-align: center;
    position: relative;
    right: -18rem;
    bottom: -24.5rem;
}
.Submit{
    text-align: right;
    position:relative;
    bottom: -29.7rem;
    left: -5rem;
}
.item3
{
    text-align: right;
}
.Submit2
{
    text-align: right;
    position: relative;
    bottom: -28.7rem;
    right: -10.7rem;
}
.Famount
{
    text-align: left;
    position: relative;
    bottom: -21.0rem;
    right: -4.7rem;

}
.Famount2
{
    text-align: left;
    position: relative;
    bottom: -22.1rem;
    right: -20.7rem;

}
.Submit3
{
    text-align: right;
    position: relative;
    right: -26rem;
    bottom: -27rem;
}
.SBcred
{
    text-align: right;
    position: relative;
    right: -33rem;
    bottom: -23rem;
}
.Famount3
{
    text-align: center;
    position: relative;
    right: -4rem;
    bottom: -23rem;
}
</style>

</head>
<body>
    <form  method="post">
   <input type="password" id="fcred" name="fcred"
    class="fcred" >
     <input type="submit" value="Submit" class = "Submit">
    </form>
      
    <form  method="post">
   <input type="password" id="Tvcred" name="Tvcred"
    class="Tvcred" > <input type="submit" value="Submit" class = "Submit2">
    </form>
    <form  method="post">
   <input type="password" id="SBcred" name="SBcred"
    class="SBcred" > <input type="submit" value="Submit" class = "Submit3">
    </form>
     <?php
          $host = "/var/run/postgresql";
         $port = 5432;
         $user = "postgres";
         $pass_word = "pass";
         $dbname = "postgres";
       
try{
    $dst ="pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dst, $user, $pass_word, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}catch(PDOException $e){
    echo "This". $e->getMessage();
}
        include("data.php");
        include("ALT_LOG");
        session_start(); 
       
        if($_SESSION["T"] == $zulu){
            
        
        $id = 11;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['fcred'];
        if ($username == $credit_sum) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO, PDO::PARAM_STR);
            $stmt->execute();
             header("Location:ThankYou!.php");
        }
    
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['Tvcred'];
        if ($username == $credit_sum) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO2, PDO::PARAM_STR);
            $stmt->execute();
             header("Location:ThankYou!.php");
        }
    
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['SBcred'];
        if ($username == $credit_sum) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO3, PDO::PARAM_STR);
            $stmt->execute();
             header("Location:ThankYou!.php");
        }
    
}
        
        
        
        }
        if($_SESSION ['T'] == $Zero) {
        
        $id = 12;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['fcred'];
        if ($username == $credit_sum2) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO, PDO::PARAM_STR);
            $stmt->execute();
             header("Location:ThankYou!.php");
        }
    
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['Tvcred'];
        if ($username == $credit_sum2) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO2, PDO::PARAM_STR);
            $stmt->execute();
            header("Location:ThankYou!.php");
        }
    
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['SBcred'];
        if ($username == $credit_sum2) {
              $sql = "UPDATE AMOUNTS SET amount_due = amount_due +:due WHERE id = :id";
              $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':due', $AO3, PDO::PARAM_STR);
            $stmt->execute();
             header("Location:ThankYou!.php");
        }
    
}
        
        
        
        }
        
        
       
        
        
        
        
 ?>
    <div class = "Famount3">Cost:<?php echo " ". $AO3;?>!</div> 
    <div class = "Famount2">Cost:<?php echo " ". $AO2;?>!</div>
    <div class = "Famount">Cost:<?php echo " ". $AO;?>!</div>
    <div class="Welcome ">Welcome<?php echo " ". $_SESSION["T"];?>!</div>
    <img src="istockphoto-489936720-612x612.jpg" alt="" class = "item1">
    <img src="smart-tv-3889141_640.png" alt="" class = "item2">
     <img src="pngtree-soundbar-with-transparency-background-png-image_20453289.png" alt="" class = "item3">
</body>
</html>