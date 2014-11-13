<div class="panel panel-default">
    <div class="panel-heading"><?php echo $article->name ?></div>
    <div class="panel-body">
        <?php if($article->type == 'embed'):?>
            <?php
            $videoResult = Video::where('productId', $article->id)->first();
            if(NULL != $videoResult) {
                if($videoResult->image)
                {
                    echo "<img class='img-responsive' src='http://media.".$_SERVER['SERVER_NAME']."/catalog/video/big/" . $videoResult->image."' alt='".$article->name."' title='".$article->name."' />";
                }
                elseif(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videoResult->url, $match))
                { // youtube thumb
                    $video_id = $match[1];
                    $yt_image_qualities = array('maxresdefault', 'hqdefault', 'mqdefault');
                    foreach($yt_image_qualities as $image_quality)
                    {
                        if(@getimagesize( ('http://i.ytimg.com/vi/'. $match[1]. '/'.$image_quality.'.jpg') ) )
                        {
                            echo "<img class='img-responsive' src='http://i.ytimg.com/vi/$video_id/$image_quality.jpg' alt='".$article->name."' title='".$article->name."' />";
                            break; //exiting
                        }
                    }
                }
                else
                { // vimeo thumb
                    sscanf(parse_url($url, PHP_URL_PATH), '/%d', $video_id);
                    $hash = unserialize(file_get_contents('http://vimeo.com/api/v2/video/'. $video_id .'.php'));
                    $hqUrl = $hash[0]['thumbnail_large'];
                    $hqtumb = "<img class='img-responsive' src='".$hqUrl."' alt='%s' title='%s' />";
                    $html = "";
                    $html .= sprintf($hqtumb, $name, $name);
                }
            }
        ?>
        <?php endif ?>
    </div>
</div>
