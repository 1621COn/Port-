<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistance</title>
</head>
<style>
    .centermsg{
        text-align: center;
    }
</style>
<body>
    
    <h1> Assistance:</h1>
    <?php
    $exp = "This is a list of common error messages.";
    echo "<p class= 'centermsg'>". $exp. "</p>". "<br>", "<br>", "<br>"; 
        class CError
        {
            public $String;
            public $ERORCODE;
            public $MSG;
                public function __construct($String, $ERORCODE, $MSG)
                {
                    $this->String = $String;
                    $this->ERORCODE = $ERORCODE;
                    $this->MSG = $MSG;
                }
                public function __displaymsg()
                {
                    echo  $this->String ,$this->ERORCODE ,":"," ",$this->MSG, "<br>", "<br>";

                }


        }
        $ErrorOne = new CError("ERROR","0443","This is an error that means invalid account. 
        FIX: Make an account.");
        $ErrorOne ->__displaymsg();
        $ErrorTwo = new CError("ERROR","331","Invalid Passcode/Email Address. Please refer to forgot password to reset, or create a account if you think it is the email at fault. FIX: check spelling");
        $ErrorTwo->__displaymsg();
    ?>
    
    
</body>
</html>