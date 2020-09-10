<?php
// Assuming the above tags are at www.example.com
include_once("./simple_html_dom.php");
$tags = get_meta_tags('http://www.domain.com');

$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('title');

$title = $nodes->item(0)->nodeValue;

// Notice how the keys are all lowercase now, and
// how . was replaced by  in the key.
if(empty($tags['author']))
   $tags['author'] = "null";
echo "Title: $title". '<br><br/>';
echo "Author:" .  $tags['author'].  "<br> <br>";       // name
echo "Keywords:" .  $tags['keywords'] . "<br> <br>";     // php documentation
echo "Description:" .  $tags['description'] ."<br> <br>";  // a php manual

?>
