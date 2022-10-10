<?php
 include ('code.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coding.css">
</head>
<body>
    <div class="main">
        <h1 style="margin: 0;"> <U>CURRENCY - CONVERTER</U></h1>
            <div class="inner">
                <form action="" method="post">
                    <I>FROM</I><br/>
                    <input type="text" name="from"><br/><br/>

                    <I>TO</I><br/>
                    <input type="text" name="to"><br/><br/>
                    
                    <I>AMOUNT</I><br/>
                    <input type="text" name="amount"><br/><br/>  

                    <input class="button" type="submit" name="submit"  value="CONVERT">
                    <br/><br/>
                </form>
                    <?php
                        if($convert)
                        {
                            echo "$amount $from=$convert $to";
                        }
                    ?>

            </div>

    </div>

</body>
</html>