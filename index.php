<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
        <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

        <script type="text/javascript" src="http://dev.jtsage.com/jquery.mousewheel.min.js"></script>
        
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.datebox.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.flipbox.min.js"></script>

        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
        
        <script src="js/global.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->
        <script>
            try {
          } catch (error) {
            console.error("Your javascript has an error: " + error);
          }
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="main_page">
            <div data-role="content">
                <div style="width: 150px; height: 70px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8; margin: 0 auto;">
                    <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                </div>
                <h2 style="text-align: center;">
                    Get Home Faster
                </h2>
                <a id="fromAir" data-role="button" href="#searchWidget" data-icon="arrow-r" data-iconpos="right">
                    Ride FROM the Airport
                </a>
                <a id="toAir" data-role="button" href="#searchWidget" data-icon="arrow-r" data-iconpos="right">
                    Ride TO the Airport
                </a>
                <a data-role="button" href="#page1" data-icon="arrow-r" data-iconpos="right">
                    Check-in for your Shuttle
                </a>
                <a data-role="button" href="#page1" data-icon="arrow-r" data-iconpos="right">
                    My Account
                </a>
                <a data-role="button" href="#page1" data-icon="arrow-r" data-iconpos="right">
                    Customer Service
                </a>
                <a data-role="button" href="http://www.rrshuttle.com/index.html" data-icon="arrow-r" data-iconpos="right">
                    Visit Full Website
                </a>
            </div>
            <div data-role="footer" id="footer">
                <div data-role="controlgroup">
                    <a data-rol="button" id="fullSite" href="#" class="ui-btn-left">Full Website</a>
                    <a data-rol="button" id="privacy" href="#" class="ui-btn-right">Privacy Policy</a>
                </div>
                <div data-role="controlgroup" style="margin-top: 30px;">
                    <a data-rol="button" id="term" href="#">Term of Services</a>
                    <span id="copyright">Copyright 2013</span>
                </div>
            </div><!-- /footer -->
        </div>
        <?php
            include('searchWidget.php');
            include('orderSummary.php');
            include('customerInfo.php');
            include('confirm.php');
            include('error.php');
            include('login.php');
        ?>
    </body> 
</html>
