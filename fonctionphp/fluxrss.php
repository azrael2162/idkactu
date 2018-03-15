<?php
$url = "http://www.zdnet.fr/feeds/rss/actualites/informatique/";
$rss = simplexml_load_file($url);

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 $linkk=$item->link;
 $itemm=$item->title;
 $image=$item->enclosure['url'];
 $description=$item->description;





echo"
 <br/><br/>
   <div class='container'>
    <center>
       <div class='card mb-5'>
         <a href='$linkk'><strong><h3 class='card-header'>$itemm</h3></strong></a>
         <br/>
         <img width='300px' height='200px' display: block;' src='$image' alt='Card image'>
           <div class='card-body'>
             <p class='card-text'>$description</p>
             </div>
             <div class='card-footer text-muted'>
               $date <br/>
             </div>
         </div>
     </center>
   </div>";
}
?>
