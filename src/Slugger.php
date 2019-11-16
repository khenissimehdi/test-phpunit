<?php 
class Slugger {

  
    public function slugify(string $text):string{
        $text = strip_tags($text);
        $text = html_entity_decode($text);
       // $text = 'Regular ascii text + čćžšđ + äöüß + éĕěėëȩ + æø€ + $ + ¶ + @';
        $text = iconv("UTF-8", "ASCII//TRANSLIT", $text);
        $text=preg_replace('/[^a-zA-Z0-9]+/','-', $text);#
        $text=trim($text,$character_mask="-");
        $text=strtolower($text);




        return $text;
    }

































}