<?php

namespace nietocjr\LaravelChatworkConnect;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class LaravelChatworkConnect
{
    public function __construct() {}

    public static function sendMessage(string $codeSource, string $title, string $message = ''): bool
    {
        $message = '[code]'.$codeSource.'[/code][info][title]'.$title.'[/title]'.$message.'[/info]';

        return self::request('messageServer', $message);
    }

    private static function request(string $action, string $message = ''): bool
    {
        $actionList = [
            'messageServer' => 'rooms/'.Config::get('chatwork-connect.lcc_room_id').'/messages',
        ];
        if (isset($actionList[$action]) === false) {
            return false;
        }
        $url = 'https://api.chatwork.com/v2/'.$actionList[$action];
        $header = [
            'x-chatworktoken' => Config::get('chatwork-connect.lcc_apikey'),
        ];
        $postData = ['body' => $message, 'self_unread' => 1];

        $response = Http::withHeaders($header)->asForm()->post($url, $postData);

        return $response->successful();
    }
}
