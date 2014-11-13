<?php
$postId = $article->id;
$name = $article->name;
function videoThumb($postId, $name = NULL, $justLink = NULL)
{
    $yt_image_qualities = array('maxresdefault', 'hqdefault', 'mqdefault');

    // BEGIN: Fetch video from db
    $videoModel = new Default_Model_Video();
    $videoSelect = $videoModel->getMapper()->getDbTable()->select()
        ->where('productId = ?', $postId);
    $videoResult = $videoModel->fetchAll($videoSelect);
    // END: Fetch video from db
    $hqtumb = "<img class='img-responsive' src='%s' alt='%s' title='%s' />";
    $html = "";
    if(NULL != $videoResult) {
        $url = $videoResult[0]->getUrl();
        $match = array();
        if($videoResult[0]->getImage())
        {
            $hqUrl = 'http://media.'.$_SERVER['SERVER_NAME']."/catalog/video/big/" . $videoResult[0]->getImage();
            $html = "<img class='img-responsive' src='".$hqUrl."' alt='".$name."' title='".$name."' />";
        }
        elseif(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
        { // youtube thumb

            $video_id = $match[1];

            foreach($yt_image_qualities as $image_quality)
            {
                if(@getimagesize( ('http://i.ytimg.com/vi/'. $video_id. '/'.$image_quality.'.jpg') ) )
                {
                    $hqUrl = "http://i.ytimg.com/vi/$video_id/$image_quality.jpg";
                    break; //exiting
                }
            }

            $hqUrl = sprintf($hqUrl, $video_id);
            $html .= sprintf($hqtumb, $hqUrl, $name, $name);
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

    if(NULL != $justLink) {
        return $hqUrl;
    }else{
        echo $html;
    }
}