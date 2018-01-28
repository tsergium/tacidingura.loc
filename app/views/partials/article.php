<div class="panel panel-default">
    <div class="panel-heading"><h2><a href="/article/<?php echo $article->id ?>"><?php echo $article->name ?></a></h2></div>
    <div class="panel-body nopadding">
        <?php if($article->type == 'embed' || $article->type == 'video'):?>
            <?php
            if($article->image)
            {
                echo "<img class='img-responsive' src='http://".$_SERVER['SERVER_NAME']."/media/catalog/video/big/" . $article->video_image."' alt='".$article->name."' title='".$article->name."' />";
            }
            elseif(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $article->video_url, $match))
            { // youtube thumb
                $video_id = $match[1];
                $yt_image_qualities = array('maxresdefault', 'hqdefault', 'mqdefault');
                foreach($yt_image_qualities as $image_quality)
                {
                    if(@getimagesize( ('http://i.ytimg.com/vi/'. $match[1]. '/'.$image_quality.'.jpg') ) )
                    {
                        echo "<i><img data-youtube-id='$match[1]' class='img-responsive js-lazy-youtube' src='http://i.ytimg.com/vi/$video_id/$image_quality.jpg' alt='".$article->name."' title='".$article->name."' /></i>";
                        break; //exiting
                    }
                }
            }
            else
            { // vimeo thumb
//                sscanf(parse_url($url, PHP_URL_PATH), '/%d', $video_id);
//                $hash = unserialize(file_get_contents('http://vimeo.com/api/v2/video/'. $video_id .'.php'));
//                $hqUrl = $hash[0]['thumbnail_large'];
//                $hqtumb = "<img class='img-responsive' src='".$hqUrl."' alt='%s' title='%s' />";
//                $html = "";
//                $html .= sprintf($hqtumb, $name, $name);
            }
            ?>
        <?php endif ?>
        <p class="col-md-12"><?php echo $article->description ?></p>
    </div>
</div>
