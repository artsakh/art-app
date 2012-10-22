<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>

        <div id="container">
            <a href="home">Home</a>
            <a href="about">About</a>
            <a href="getValues">DB</a>

            <h1>Welcome to CodeIgniter Home view!</h1>            

            <h2>Add</h2>
            <p><?php echo $var1 . " + " . $var2 . " = " . $addTotal; ?></p>

            <h2>Subtract</h2>
            <p><?php echo $var1 . " - " . $var2 . " = " . $subtractTotal; ?></p>

            <h2>Multiply</h2>
            <p><?php echo $var1 . " * " . $var2 . " = " . $multiplyTotal; ?></p>

            <h2>Divide</h2>
            <p><?php echo $var1 . " / " . $var2 . " = " . $divideTotal; ?></p>
            
            <?php $memorytime ?>
        </div>

    </body>
</html>