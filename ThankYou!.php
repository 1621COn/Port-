<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Thank you!"; ?></title>
</head>

<style>
    
.TY
{
    text-align: center;
    position: relative;
    bottom: -10rem;
    left: -120px;
}
.ON
{
    text align: center; 
    position: relative;
    bottom: -15rem;
    right: -18rem;
    font-size: 2rem;
}

</style>

<body>
    
   

    <?php 
    require_once("data.php");
    session_start();

    if($_SESSION["T"])
        {
            //echo $_SESSION["T"];
        }
    
       
       
      
        //$CONGRUDATA = mt_rand(0, $RDATA);
       //$CONGRUDATA2 = mt_rand(0, $CONGRUDATA);
       $var = new Random();
       
    ?>
     <h1 class ="TY"><?php echo "Thank you ". $_SESSION["T"]. "!"; ?></h1>
     <div class = "ON">Receipt Number: <?php echo $var->getRandom();?> </div>
</body>
</html>