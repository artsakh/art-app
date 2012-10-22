<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Site Controller & View</title>
    <meta name="description" content="Site Controller & View">
    <meta name="author" content="Arthur">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>
<body>
    <div id="container">
        <header>

        </header>
        <div id="main" role="main">
            <p>This view has been loaded</p>

            <pre>
                <?php print_r($records_test); ?>
            </pre>

            <pre>
                <?php print_r($records_users); ?>
            </pre>

            <?php foreach ($records_test as $row) : ?>
                <h3><?php echo $row->title; ?></h3>            
            <?php endforeach; ?>
            <br />
            <?php foreach ($records_users as $row) : ?>
                <h3><?php echo $row->name; ?></h3>            
            <?php endforeach; ?>

            <?php foreach ($records_test as $row) : ?>
                <h1><?php echo $row->title; ?></h1>
            <?php endforeach; ?>   
        </div>
        <footer>

        </footer>
    </div>
</body>
</html>