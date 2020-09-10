<?php

$tags = get_meta_tags('https://www.domain.com/');

include("simple_html_dom.php");
$html = file_get_html("https://www.domain.com/");
$title =$html->find('title',0)->plaintext;
if(empty($title))
  $title = "null";
if(empty($tags['author']))
   $tags['author'] = "null";
  if(empty($tags['keywords']))
  $tags['keywords'] = "null";
  if(empty($tags['description']))
  $tags['description'] = "null";
  echo '<b>'.'Title: '.'</b>' .$title." <br> ";
echo "Author: ". $tags['author']." <br> ";
echo "Keywords: ".$tags['keywords']." <br> ";  ;
echo "Description: ".$tags['description']." <br> ";

?>
