<?php
require __DIR__ . '/vendor/autoload.php';
$tr=new Source\Translater();
$res=$tr->translate("en","uk","Hello world");
echo $res;