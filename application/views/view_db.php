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

            <h1>Welcome to CodeIgniter DB view!</h1>

            <?php
            print_r($results);
            ?>

            <br /><br />

            <?php
            foreach ($results as $row)
            {
                echo $row->id;
                echo $row->user;
                echo $row->title;
                echo "<br />";
            }
            ?>

            <br /><br />

            <?php
            foreach ($results as $row)
            {
                $id = $row->id;
                $user = $row->user;
                $title = $row->title;
                echo $id . ". " . $user . " :: " . $title . "<br />";
            }
            ?>

            <?php $memorytime ?>
        </div>

    </body>
</html>