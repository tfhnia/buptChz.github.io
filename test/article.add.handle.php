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
        <script type="text/javascript">  
        delayURL("article.php"); //article.jsp 是N秒后要跳转的页面  
        </script> 
        <!-- Respond.js for IE 8 or less only -->
        <!--[if (lt IE 9) & (!IEMobile)]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <?php
            require_once('connect.php');
            print_r($_POST);
            // 把参数信息传递过来，在入库之前对所有的信息进行校验
            if (!(isset($_POST['title'])&&(!empty($_POST['title'])))) {
                echo "<script>alert('标题不能为空！');</script>'";
            }
            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $content = $_POST['content'];
            $dateline = time();
            echo "\n\n$dateline";
            $insertsql = "insert into article(title, author, description, content, dateline) values('$title','$author','$description','$content','$dateline')";
            echo $insertsql;
            if(!mysql_query($insertsql)) echo "\n 不成功！";;
        ?>





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