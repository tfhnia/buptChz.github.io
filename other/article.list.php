<?php
    require_once('connect.php');
    $sql = "select * from article order by dateline desc";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)){
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
    }else{
        $data = array();
    }
?>

<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Main Style Sheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Modernizr -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- Respond.js for IE 8 or less only -->
        <!--[if (lt IE 9) & (!IEMobile)]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!--[if lte IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header role="banner">
            <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Bootstrappin'" width="120"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">首页</a></li>
                        <li class="active"><a href="index.html#features">通道</a></li>
                        <li><a href="home.html">个人主页</a></li>
                        <li><a href="#signup">注册</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
              </div><!--/.container -->
            </nav>
        </header>

        </br>
        </br>
        </br>


        <main role="main">
            <div class="container">
                <div class="row">
                    <section class="content-secondary col-md-3">
                        
                    </section>

                    <section class="content-secondary col-md-6">
                        <ul class="list-group">
<?php
    if(!empty($data)){
        foreach ($data as $value) {

?>
                          <li class="list-group-item"><?php echo $value['title']?><a href="article.modify.php?id=<?php echo $value['id'];?>" class="navbar-link pull-right">修改</a> <a href="article.del.php?id=<?php echo $value['id'];?>" class="navbar-link pull-right">删除</a></li>
<?php
    }
}
?>
                        </ul>                     
                    </section>

                    <section class="content-secondary col-md-3">
                                            
                    </section>
                </div>
            </div>
            
        </main>


        <footer role="contentinfo">

            <p><a href="index.html"><img src="img/logo.png" width="80" alt="Bootstrappin'"></a></p>

            <ul class="social">
              <li><a href="#" title="Twitter Profile"><span class="icon fa fa-twitter"></span></a></li>
              <li><a href="#" title="Facebook Page"><span class="icon fa fa-facebook"></span></a></li>
              <li><a href="#" title="LinkedIn Profile"><span class="icon fa fa-linkedin"></span></a></li>
              <li><a href="#" title="Google+ Profile"><span class="icon fa fa-google-plus"></span></a></li>
              <li><a href="#" title="GitHub Profile"><span class="icon fa fa-github-alt"></span></a></li>
            </ul>

        </footer>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>