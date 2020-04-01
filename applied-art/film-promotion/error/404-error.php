<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116613048-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-116613048-1');
    </script>
    
    <title>Error 404 | Monsters Inc</title>
    <meta name="description" content="This is the 404 page error. If you are here it's a mistake. Go back or go to the homepage.">
    

    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!-- END-RESPONSIVE -->

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <!-- END-FONTS -->
    
    <!-- CSS -->
    <link href="/applied-art/film-promotion/css/style.css" rel="stylesheet" />
    <!-- END-CSS -->
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">


    <!-- END-FAVICON -->
</head>

<body>

    <?php $page = 'home'; include($_SERVER['DOCUMENT_ROOT'].'/applied-art/film-promotion/includes/header.inc.php');?> 

    <!-- MAIN --> 
    <main role="main">

        <!-- ERROR-PAGE --> 
        <div class="error-page">

            <h1>Page not found!</h1>
            <img src="/applied-art/film-promotion/img/error-404.jpg" alt="illustration-monsters-scared">

            <!-- TEXT-ERROR-PAGE -->
            <div class="text-error-page">
                <h2>Error 404</h2>
                <p><bold>Run away with us!</bold><br>
                We are <i>scared</i> of inexisting pages.</p>
                <ul>
                    <li><a href="javascript:history.go(-1)">Go back</a></li> 
                    <li><a href="/applied-art/film-promotion/index.php">Homepage</a></li>
                    <li><a href="/applied-art/film-promotion/tickets.php">Book ticket</a></li>
                </ul>
            </div> 
            <!-- END-TEXT-ERROR-PAGE --> 

        </div>
        <!-- END-ERROR-PAGE -->
   
    </main>
    <!-- END MAIN -->
  
    <? include($_SERVER['DOCUMENT_ROOT'].'/applied-art/film-promotion/includes/footer.inc.php');?>  

<!-- END BODY -->
</body>
<!-- END HTML -->
</html>

