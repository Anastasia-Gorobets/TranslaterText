<?php
namespace Source;
use Stichoza\GoogleTranslate\TranslateClient;
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 31.01.2017
 * Time: 15:57
 */
class Translater
{
    public function translate($from,$to,$text){

        $from=empty($from)?null:$from;
        $tr = new TranslateClient($from, $to);
        echo $tr->translate($text);
    }

}