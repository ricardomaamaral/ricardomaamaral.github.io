<?php

class Helper {

    public static function getTextIntrotext($introtext, $limit = null, $parseHtml = false){
      $d =  preg_replace("/<.*?>/", "", $introtext);
      if($limit > 0){
        return substr($d, 0, $limit)."...";
      }

      if($parseHtml) {
        return htmlspecialchars_decode($d);
      }
      return $d;
    }
    //
    public static function parseIntrotext($introtext, $parseHtml = false){
          $link_img = 'http://www.cnm.org.br/cms/images';
          $introtext = str_replace('"../', url('/'), $introtext);
          $introtext = str_replace('images', $link_img, $introtext);
          $introtext = str_replace('face="Verdana, Geneva, Arial, Sans-serif"', 'face="Arial"', $introtext);
          $introtext = str_replace('font-family: verdana, geneva;', '', $introtext);
          $introtext = str_replace('font-size: 10pt;', '', $introtext);
          $introtext = str_replace('{youtube}', '<iframe width="560" height="315" src="', $introtext);
          $introtext = str_replace('{/youtube}', '" frameborder="0" allowfullscreen style="margin: 20px auto;display: block; max-width: 100%;"></iframe>', $introtext);
          $introtext = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $introtext);
          if($parseHtml) {
            return htmlspecialchars_decode($introtext);
          }
          return $introtext;
    }
    //
    public static function getImageIntrotext($introtext){
        $doc = new \DOMDocument();
        $link_img = 'http://www.cnm.org.br/cms/images';
        $introtext = str_replace('images', $link_img, $introtext);
        @$doc->loadHTML(htmlspecialchars_decode($introtext));
        $imageTags = $doc->getElementsByTagName('img');
        $firstImg = $imageTags->item(0);
        if (!$firstImg) return false;
        return $firstImg->getAttribute('src');
    }
}
