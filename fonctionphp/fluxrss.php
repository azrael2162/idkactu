<?php
$url = "http://www.zdnet.fr/feeds/rss/actualites/internet/";
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
       <div class='card mb-3'>
         <a href='$linkk'><strong><h3 class='card-header'>$itemm</h3></strong></a>
         <br/>
         <img width='600px' height='300px' display: block;' src='$image' alt='Card image'>
           <div class='card-body'>
             <p>$description</p>
             </div>
             <div class='card-footer text-muted'>
               $date <br/>
               <a href='https://twitter.com/share?ref_src=twsrc%5Etfw' class='twitter-share-button' data-show-count='false'>Tweet</a><script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>
               <script type='text/javascript' src='http://platform.linkedin.com/in.js'></script>
               <script type='in/share' data-counter='top'></script>
               <a target='_blank' title='Facebook' href='https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>' rel='nofollow' onclick='javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;'><img src='https://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png' alt='Facebook' /></a>
             </div>
         </div>
     </center>
   </div>";
}
?>
