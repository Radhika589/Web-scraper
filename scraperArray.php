<?php

$tags = get_meta_tags('https://www.domain.com/');

include("simple_html_dom.php");
$html = file_get_html("https://www.domain.com/");
echo 'Title: ' .$html->find('title',0)->plaintext." <br> ";

if(empty($tags['author']))
   $tags['author'] = "null";
echo "Author: ". $tags['author']." <br> ";
echo "Keywords: ".$tags['keywords']." <br> ";  ;
echo "Description: ".$tags['description']." <br> ";

?>
