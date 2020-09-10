<?php

 include_once("./simple_html_dom.php");

 $html = file_get_html('https://www.domain.com/');

 $doc = new DOMDocument();
 @$doc->loadHTML($html);
 $nodes = $doc->getElementsByTagName('title');

 $title = $nodes->item(0)->nodeValue;

 $metas = $doc->getElementsByTagName('meta');

 for ($i = 0; $i < $metas->length; $i++)
 {
     $meta = $metas->item($i);
     if($meta->getAttribute('name') == 'description')
         $description = $meta->getAttribute('content');
     if($meta->getAttribute('name') == 'keywords')
         $keywords = $meta->getAttribute('content');
     if($meta->getAttribute('name') == 'author')
             $keywords = $meta->getAttribute('content');
 }

 echo "Title: $title". '<br><br/>';
 echo "Description: $description". '<br/><br/>';
 echo "Keywords: $keywords";


 ?>
