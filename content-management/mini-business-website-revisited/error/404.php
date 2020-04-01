<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115542436-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-115542436-1');
    </script>
    <!-- End-Google-Analytics-->
    
    <title>404 Error Page | Clark's Healthy Food</title>
    
    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!-- END-RESPONSIVE -->
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
    <link href="/content-management/mini-business-website-revisited/css/stylesheet.css" rel="stylesheet" />
    <!-- END-FONTS -->
    
    <!-- STYLE -->
    <link href="/content-management/mini-business-website-revisited/css/style.css" rel="stylesheet" />
    <!-- STYLE -->

    <!-- FAVICON -->
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/site.webmanifest">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#9dd55b">
    <meta name="msapplication-TileColor" content="#428a42">
    <meta name="theme-color" content="#ffffff">
    <!-- END-FAVICON -->
</head>


<body>
    <? include($_SERVER['DOCUMENT_ROOT'].'/content-management/mini-business-website-revisited/includes/header.inc.php');?> 
    
    <!-- MAIN --> 
    <main>
        <!-- ERROR-404 -->
        <div class="page-not-found">
            <h1>Page not found!</h1>
            <img src="/content-management/mini-business-website-revisited/img/error-404.png" alt="page-not-found" class="error-404"> 
            
            <!-- NAVIGATION --> 
            <p>Sorry the page you're looking for cannot be found. <br>
                  Please use the navigation:<br></p>
              <ul>
                  <li><a href="/content-management/mini-business-website-revisited/index.php">Home</a></li>
                  <li><a href="/content-management/mini-business-website-revisited/about-us.php">About us</a></li><li><a href="/content-management/mini-business-website-revisited/products.php">Products</a></li>
                  <li><a href="/content-management/mini-business-website-revisited/offers.php">Offers</a></li>
                  <li><a href="/content-management/mini-business-website-revisited/contacts.php">Contacts</a></li>
              </ul>  
            <!-- END-NAVIGATION -->
            
        </div>
        <!-- END-ERROR-404 --> 
        
        <? include($_SERVER['DOCUMENT_ROOT'].'/content-management/mini-business-website-revisited/includes/scroll-on-top.inc.php');?> 
        
    </main>
    <!-- END MAIN -->
   
    <? include($_SERVER['DOCUMENT_ROOT'].'/content-management/mini-business-website-revisited/includes/footer.inc.php');?> 
</body>
<!-- END-BODY -->

</html>
<!-- END-HTML -->

    