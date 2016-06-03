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
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">
                    <img alt="Brand" src="../img/logo.png">
                  </a>
                </div>
              </div>
            </nav>       
        </header>

        <br/>
        <br/>

        <main role="main">




            <div class="container">
                <div class="row">
                <section class="content-tertiary col-md-3"></section>
                
                <section class="content-secondary col-md-6">
                    <form role="form" id="form1" name="form1" method="post" action="article.add.handle.php">

                            <div class="form-group">
                              <label for="title">标题</label>
                              <input type="text" class="form-control" id="title" name="title" 
                                 placeholder="请输入标题">
                           </div>
                                              
                           <div class="form-group">
                              <label for="author">作者</label>
                              <input type="text" class="form-control" id="author" name="author" 
                                 placeholder="请输入作者">
                           </div>

                          <div class="form-group">
                            <label for="description">文章简介</label>
                            <textarea class="form-control" rows="3" name="description" id="description" placeholder="内容...（小于100字）"></textarea>
                          </div>
                        
                          <div class="form-group">
                            <label for="content">文章内容</label>
                            <textarea class="form-control" rows="10" name="content" id="content" placeholder="文章内容..."></textarea>
                          </div>

                          <button type="submit" class="btn btn-default pull-right">提交</button>

                    </form>

                </section>

                <section class="content-tertiary col-md-3"></section>
                
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