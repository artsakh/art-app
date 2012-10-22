<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/b/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php print $title; ?></title>
        <meta name="description" content="<?php print $description; ?>">
        <meta name="author" content="<?php print $author; ?>">

        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

        <!-- CSS: implied media=all -->
        <!-- CSS concatenated and minified via ant build script-->
        <link rel="stylesheet" href="<?php print $style; ?>">
        <link rel="stylesheet" href="<?php print $grid; ?>">
        <link rel="stylesheet" href="<?php print $main; ?>">
        <!-- end CSS-->

        <script src="js/libs/modernizr.js"></script>
    </head>

    <body>

        <div id="container">
            <header>

            </header>
            <div id="main" role="main">
                <?php
                /* $total = count($alfabet);
                  for ($i=0; $i < $total; $i++) {
                  //print "<p>$key: $value</p>";
                  print "The value is $alfabet[$i]";
                  } */

                /* foreach ($meta as $value) {
                  print "<p>$key: $value</p>";
                  } */

                print $var1;
                print "The author is $var1";
                //var_dump(var1);
                ?>
            </div>
            <footer>

            </footer>
        </div> <!--! end of #container -->


        <!-- JavaScript at the bottom for fast page loading -->
        <script src="js/libs/jquery.js"></script>


        <!-- scripts concatenated and minified via ant build script-->
        <script defer src="js/plugins.js"></script>
        <script defer src="js/script.js"></script>
        <!-- end scripts-->


        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
             chromium.org/developers/how-tos/chrome-frame-getting-started -->
        <!--[if lt IE 7 ]>
          <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
          <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->

    </body>
</html>
