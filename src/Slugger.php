<?php 
class Slugger {

    public function slugify(string $text):string{
        $text = strip_tags($text);
        $text = html_entity_decode($text);
        $text = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text);
        $text = preg_replace('/[^A-Za-z0-9\.\-]/',"",$text);
        $text = trim($text,$character_mask="-");




        return $text;
    }

































}