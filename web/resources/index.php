<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
        <?php
            $host_name = "localhost";
            $database = "Pruebas";
            $user = "root";
            $pass = "";
            $bd = mysqli_connect($host_name, $user, $pass, $database);
            if(mysqli_connect_errno()){
                echo "Error al conectar con la base de datos".mysqli_connect_error();
            }
        ?>
    </head>
    <body>
        <?php
        /*
        $consulta = "select * from mascotas";
        $query = mysqli_query($bd, $consulta);
        while($obj = mysqli_fetch_object($query)){
            echo'  <div class="col-md-3">
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-text">
                                    <h3>'.$obj -> mascotaId.'</h3>
                                    <p>' . $obj-> name.'</p>
                                    </div>
                                </div>
                                <div class="ratings">
                                <h4>' . $obj-> description.'€</h4>
                                   <p>
                                   <button type="button" class="btn btn-success" style="display: block; width: 100%;">
                                   <i class="fa fa-shopping-cart fa-lg"></i> </button>
                                   </p>
                                </div>
                            </div>
                        </div>';
        }
         * 
         */
        ?>
       
       
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>