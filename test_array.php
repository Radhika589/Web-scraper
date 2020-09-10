<?php

$tags = get_meta_tags('https://www.domain.com/%27);

include("simple_html_dom.php");
$html = file_get_html("https://www.domain.com/%22);
$title =$html->find('title',0)->plaintext;
//echo 'Title: ' .$html->find('title',0)->plaintext." <br> ";
if(empty($title))
  $title = "null";

if(empty($tags['author']))
  $tags['author'] = "null";

if(empty($tags['keywords']))
  $tags['keywords'] = "null";

if(empty($tags['description']))
  $tags['description'] = "null";

echo '<b>'.'Title: '.'</b>' .$title." <br> ";
echo '<b>'."Author: ".'</b>'. $tags['author']." <br> ";
echo '<b>'."Keywords: ".'</b>'. $tags['keywords']." <br> ";
echo '<b>'."Description: ".'</b>'. $tags['description']." <br> ";

?>
