<?php 
$list = scandir("./");
$files = array();
foreach($list as $file) {
        $files[] = iconv('GBK', 'UTF-8', $file);//转成utf8
}
echo "<pre>";
print_r($files);
?>