<?php

declare(strict_types=1);

namespace NewTwitchApi\Resources;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class VideosApi extends AbstractResource
{

    public function getVideos($videoID,$userID){

        $params = [];
        $params['id'] = $videoID;
        $params['user_id'] = $userID;


        $this->callApi('videos?id='.$videoID.'&user_id='.$userID);
    }

}