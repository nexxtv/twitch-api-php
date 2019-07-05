<?php

declare(strict_types=1);

namespace NewTwitchApi\Resources;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class VideosApi extends AbstractResource
{

    public function getVideos($videoID,$userID):ResponseInterface{

        $params = [
            ['key' => 'user_id', 'value' => $userID],
            ['key' => 'first', 'value' => 25],
            ['key' => 'type', 'value' => 'all']
        ];


        return $this->callApi('videos',$params);
    }

}