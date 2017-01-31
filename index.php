<?php
require __DIR__ . '/vendor/autoload.php';
$tr=new Source\Translater();
$res=$tr->translate("en","uk","Hello world");
echo $res;
echo "<br>";
$source = 'en';
$target = 'uk';
$text = 'take off';
$trans = new Statickidz\GoogleTranslate();
$result = $trans->translate($source, $target, $text);
echo $result;
