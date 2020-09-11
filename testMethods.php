<?php

$domain = "https://www.domain.com/";
$tags = get_meta_tags($domain);
include("simple_html_dom.php");
$html = file_get_html($domain);
$title =$html->find('title',0)->plaintext;

$titlevalue = true;
function scrape($domain) {
  $tags = get_meta_tags($domain);
  
  if($titlevalue) {
  echo '<b>'.'Title: '.'</b>' .$title." <br> ";
} else {
  echo "Title: ". $tags['Title'] = "null";
}
}
