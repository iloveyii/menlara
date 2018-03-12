<?php

namespace frontend\models;


class Translate
{
    private $url = 'https://en.bab.la/conjugation/swedish/%s';

    public function __construct()
    {

    }

    public function toEn($word)
    {
        $translated = $this->getEnTranslations($word);
        $multiWords = [];

        if( ! empty($translated)) {
            $multiWords = array_map(function($a){
                return $a[2];
            }, $translated);

            return implode(', ', $multiWords);
        }

        return null;
    }


    private function getEnTranslations($word) : array
    {
        /**
         * First get the required DIV
         */
        $regexDiv = '/<p class="lead">Translations \(English\)[\s\S]*<\/ul>/U';
        $url = sprintf($this->url, $word);
        $str = @file_get_contents($url);
        preg_match($regexDiv, $str, $requiredDiv);

        if( count($requiredDiv) < 1) {
            return [];
        }

        /**
         * Get the translated words from requiredDiv
         */
        $str = $requiredDiv[0];
        $regex = '/(\s*<li><a .*>(.*)<\/a><\/li>\s*)/U';
        preg_match_all($regex, $str, $translations, PREG_SET_ORDER, 0);

        return array_slice($translations, 0, 8);
    }
}
