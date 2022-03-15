<?php

// API config 
$Channel_ID = 'UCnRB8V1480GNyKfK5EIQhZg'; 
$Max_Results = 1; 
 
// Get videos from channel by YouTube Data API 
$apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$Channel_ID.'&maxResults='.$Max_Results.'&key='.$API_Key.''); 
if($apiData){ 
    $videoList = json_decode($apiData); 
}else{ 
    echo 'Invalid API key or channel ID.'; 
}

if(!empty($videoList->items)){ 
    foreach($videoList->items as $item){ 
        // Embed video 
        if(isset($item->id->videoId)){ 
            $id = $item->id->videoId; 
        } 
    } 
}else{ 
    $id = 'YdeIKAREgKE';
}
?>
<div class="wrapper wrapper--video">
	<div class="wrapper--video_restrict flow">
		<img src="/assets/images/video.svg" alt="Watch the Video" />
		<iframe
		  width="560"
		  height="315"
		  src="https://www.youtube.com/embed/<?= $id ?>&autoplay=1"
		  srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?= $id ?>?autoplay=1><img src=https://img.youtube.com/vi/<?= $id ?>/hqdefault.jpg alt='Sanctuary Foundation'><span>▶</span></a>"
		  frameborder="0"
		  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
		  allowfullscreen
		  title="Sanctuary Foundation" 
		  loading="lazy"
		></iframe>
	</div>
</div>