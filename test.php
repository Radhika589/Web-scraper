<?php

class Scraper {

$domain = "https://www.domain.com/";
$tags = get_meta_tags($domain);
include("simple_html_dom.php");
$html = file_get_html($domain);
$title =$html->find('title',0)->plaintext;

function array scrape(String domain) {
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
}

function saveScrapedSite(title, description, author, keywords, content){

}

function isScrapedSiteChanged(title, description, author, keywords, content) {

}



}
// $domain = “www.domain.com”
// $scraper = new Scraper();
// $data = $scraper->scrape($domain);
// print_r($data); // [title, description, author, keywords]

$scraper = new Scraper();

?>
