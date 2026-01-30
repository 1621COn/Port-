<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBPAGE_LOGIN</title>
</head>
<style>
    body
    {
        background-image: url();
        background-repeat: no-repeat;
        
        background-size: cover;
        background-attachment: fixed;
    }
    .login
    {
        text-align: center;
        
    }
    .username{
        text-align: center;
        position: relative;
        right: -30rem;
       
    }

    .password
    {
        text-align: center;
        position: relative;
        right: -19rem;
         bottom: -4rem;
    }
    .Submit
    {
        text-align: center;
        position: relative;
        bottom: -10rem;
        right: -10rem;
    }
</style>
<body>
    <h1 class = "login">Login</h1>


        
   <form  method="post">
   <input type="text" id="username" name="username"
    class="username" required>
    <input type="text" id="password" name="password"
    class="password" required>
     <input type="submit" value="Submit" class = "Submit">
    </form>

     <?php
     include("data.php");
     session_start();
     
     
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
 $UFquery =  $conn->prepare("SELECT user_id, user_name, pass_word FROM USERS WHERE user_id = :id");
  
  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["username"]; 
         $pass = $_POST["password"];
            
        if($name == $zulu && $pass == $PI)
            {
                
                if($pass == $PI){
                   $_SESSION["T"] = $zulu;           
                 //  echo $_SESSION["T"]; 
                   header("Location: dashboard.php");
                }
             
               
                exit();
            }
        if($name == $Zero && $pass == $Fox){
            
           
            if($pass == $Fox){
                  $_SESSION["T"] = $Zero;  
           // echo $Zero . $Fox;
            header("Location: dashboard.php");   
            }
         
             exit();
        }               
    
    
    }
     
     
     
     
     
     
     ?>
    
</body>
</html>