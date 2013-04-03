<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>About</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cleartype" content="on">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
        <link rel="apple-touch-icon-precomposed" href="#">
        <link rel="shortcut icon" href="#">
        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="#">
        <meta name="msapplication-TileColor" content="#222222">


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/jquery-mobile.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/modernizr.js"></script>
    </head>
    <body>

    <div id="contact-handle" data-role="page">
    <div data-role="header">
    	<h1><i class="icon-home"></i> Header</h1>
    </div><!-- /#header -->

    <div id="contact-content" data-role="content">
    	<ul data-role="listview" data-inset="true">
    		<li>Your name: <?php echo $_POST["name"]; ?></li>
    		<li>Your email: <?php echo $_POST["email"]; ?></li>
    		<li>Time: <?php echo $_POST["select-choice-1"]; ?></li>
    	</ul>
    </div><!-- /#contact-page -->

    <div data-role="footer">
        <div data-role="navbar" class="nav-glyphish-example">
        <ul>
            <li><a href="index.html" id="home" data-icon="home" data-transition="slide">Home</a></li>
            <li><a href="about.html" id="about" data-icon="info" data-transition="flip">About</a></li>
            <li><a href="contact.html" id="contact" data-icon="star" data-transition="pop">Contact</a></li>

        </ul>
        </div>
    	<h1><i class="icon-coffee"></i> 2013 - jQuery Mobile starting template</h1>
    </div><!-- /#footer -->
    </div>

	  <script src="js/jquery.js"></script>
      <script src="js/jquery-mobile.js"></script>
       <script src="js/underscore.js"></script>
      <script src="js/script.js"></script>
    </body>
</html>
