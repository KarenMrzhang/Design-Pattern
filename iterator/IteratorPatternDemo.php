<?php
require_once "./NameIterator.php";
/**
 * Author: KarenMrzhang
 * Date: 2019/10/21
 */
$namesRepository = new NameRepository();
for ($item = $namesRepository->getIterator();$item->hasNext();) {
    $name = (String)$item->next();
    echo "Name : " . $name . "\n";
}
