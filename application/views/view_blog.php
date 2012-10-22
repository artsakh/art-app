<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" media="all" href="style.css" />
    </head>

    <body>

        <h1><?php echo $heading; ?></h1>
        <p>… Your HTML content here …</p>
        <ul>
            <li><?php print $todo . "<br />"; ?></li>
            <br />
            <?php
            foreach ($todo as $value)
            {
                print "<li>$value</li>";
            }
            ?>
        </ul>

        <ul>
            <?php foreach ($todo as $item): ?>

                <li><?php echo $item; ?></li>

            <?php endforeach; ?>
        </ul>

    </body>
</html>