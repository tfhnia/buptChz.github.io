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
        <style type="text/css">
            .nav-pills{
                margin-top: 10px;
            }
        </style>
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
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="120"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><a href="home.html">主页<span class="sr-only">(current)</span></a></li>
                        <li><a href="blog.html">个人主页</a></li>
                        <li><a href="#">活动</a></li>
                        <li class="active"><a href="#">博客</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">收藏<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">书签</a></li>
                            <li><a href="#">资料</a></li>
                            <li><a href="#">资源</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">项目</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">查找</button>
                      </form>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">信息<span class="badge">4</span></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">管理</a></li>
                            <li><a href="#">邀请</a></li>
                            <li><a href="#">设置</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">登出</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              
            </nav>
        </header>


        <?php
            require_once('connect.php');
            
            $query = mysql_query("select * from article where id=1");
            $data = mysql_fetch_assoc($query);


            // 把参数信息传递过来，在入库之前对所有的信息进行校验

        ?>


        <main role="main">
            
            <div class="container row">
                <section class="col-md-3"></section>
                <section class="col-md-6">
                    <h2>题目：</h2>
                    <h3>作者：XXX</h3>
                </section>
                <section class="col-md-3"></section>
            </div>

            <div class="container">
                <div class="row">
                    <section class="content-secondary col-md-3">
                        </br>
                        </br>
                        </br>
                        <div class="list-group pull-left">
                          <a href="#" class="list-group-item active">
                            Cras justo odio
                          </a>
                          <a href="#" class="list-group-item">Dapibus ac dsvs zfacilisis in</a>
                          <a href="#" class="list-group-item">Morbi leo ri sd sus</a>
                          <a href="#" class="list-group-item">Porta ac cons d ssectetur ac</a>
                          <a href="#" class="list-group-item">Vestibulum at  sd sdceros</a>
                        </div>
                    </section>

                    <section class="content-secondary col-md-7">
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>                 
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>                
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <h3>Welcome!</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
                    <p><a class="btn btn-primary pull-right" href="#">Read more <span class="icon fa fa-arrow-circle-right"></span></a></p>

                    <h3>Recent Updates</h3>
                    <p>Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>                                           
                    </section>

                    <section class="content-secondary col-md-2">
                        <!--Nothing here!-->                 
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