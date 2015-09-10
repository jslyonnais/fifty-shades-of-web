<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fifty Shades of Web</title>

    <meta name="description" content="Fifty SHades of Web - Grey variant using PostCSS For">
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICONS -->

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:title" content="Fifty Shades of Web<"/>
    <!-- <meta property="og:image" content=""/> -->
    <meta property="og:description" content="Because grey matter" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://fiftyshadesofweb.com"/>
    <meta property="og:site_name" content="Fifty Shades of Web"/>


    <!-- TWITTER OPEN GRAPH -->
    <meta name="twitter:title" content="Fifty Shades of Web" />
    <meta name="twitter:url" content="http://fiftyshadesofweb.com" />

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-65578800-1', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>

    

    <h1 class="title">Fifty Shades of <span class="title--highlight">Web</span></h1>
    <div class="tagline">a PostCSS demonstration by <a href="https://github.com/jslyonnais" target="_blank" class="tagline__link" title="Awesome frontend developer">Jean-Simon Lyonnais</a></div>
    <div class="shades__container">
        <?php foreach (range(1, 50) as $number) { ?>
            <div class="shades__item">
                <div class="shades__color shades__color--<?php echo $number ?>">
                    <svg class="shades__icon">
                        <use xlink:href="#icon-color-palette"></use>
                   </svg>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <?php include_once('assets/images/svg/svg-sprites/svg.svg'); ?>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="./assets/js/min/scripts.min.js"></script>

</body>
</html>
