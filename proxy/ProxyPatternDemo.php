<?php
require_once "./Image.php";

/**
 * Author: Karen
 * Date: 2019/10/16 0016
 */

$image = new ProxyImage("test_10mb.jpg");
$image->display();    // 图像将从磁盘加载
echo "\n";
$image->display();
