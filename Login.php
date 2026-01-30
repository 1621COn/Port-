<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Creation</title>
</head>
<style>
     .USERENTER
    {
        text-align: center;
        
        position: relative;
        bottom: -125px;
    }
    .PASSENTER
    {
        text-align: center;
        position: relative;
        bottom: -210px;
    }

    .username
    {
        text-align: center;
        width: 300px;
        height: 25px;
        position: relative; right: -400px; 
        bottom: -120px;

    }
    .Account
    {
        text-align: center;
        position: relative;
        bottom: -100px;
    }
    .password
    {
         text-align: center;
        width: 300px;
        height: 25px;
        position: relative; right: -90px; 
        bottom: -240px;
    }
    .Submit
    {
         position: relative;
         text-align: center;
         right: -25px;
        bottom: -300px;
    }
    ,Created
    {
          text-align: center;
        position: relative;
        right: 300px;
        bottom: -300px;
    }
   

</style>
<body>
    
    <h1 class = "Account">Create An Account</h1>

    <div class = "USERENTER">Create Username</div>
    
    <div class = "PASSENTER">Create Password</div>
    
     
   <form  method="post">
   <input type="text" id="username" name="username"
    class="username" required>
    <input type="text" id="password" name="password"
    class="password" required>
     <input type="submit" value="Submit" class = "Submit">

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
    echo "". $e->getMessage();
}
 

    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
             $ID = 2;     
            $username = $_POST['username'];
            $password = $_POST['password'];
     
            
            // ------------------------NOTE:USE NAMES FROM COLUMMS -------
          
           
           
           
            $SQL = "INSERT INTO USERS(user_id, user_name, pass_word) VALUES (:ID, :USERNAME, :PASS)";
            $stmt = $conn->prepare($SQL);
            
            $stmt ->bindValue(':ID', $ID, PDO::PARAM_STR);
           
            
           
            $stmt->bindParam(':USERNAME', $username, PDO::PARAM_STR);
            $stmt->bindParam(':PASS', $password, PDO::PARAM_STR);
            $stmt->execute();
           echo "Account Created!";

        }


?>
 
</body>
</html>