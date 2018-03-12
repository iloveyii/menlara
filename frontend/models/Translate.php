<?php

namespace frontend\models;


class Translate
{
    // private $url = 'https://en.bab.la/conjugation/swedish/anstr%C3%A4nga';
    private $url = 'https://en.bab.la/conjugation/swedish/%s';

    public function __construct()
    {

    }

    public function toEn($word)
    {
        $regex = '/(\s*<li><a .*>(.*)<\/a><\/li>\s*)/U';
        $translated = $this->getData(sprintf($this->url, $word), $regex);
        $multiWords = null;

        if(is_array($translated)) {
            $multiWords = array_map(function($a){
                return $a[2];
            }, $translated);

            return implode(', ', $multiWords);
        }

        return $multiWords;
    }


    private function getData($url, $regex)
    {
        $regexDiv = '/<p class="lead">Translations \(English\)[\s\S]*<\/ul>/U';
        $str = @file_get_contents($url);
        preg_match($regexDiv, $str, $matchesDiv);
        if( count($matchesDiv) < 1) {
            return null;
        }
        $str = $matchesDiv[0];

        preg_match_all($regex, $str, $matches, PREG_SET_ORDER, 0);

        return $matches;
    }
}
