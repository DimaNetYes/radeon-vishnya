<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class YoutubeService
{
    private string $channelId = 'UCqc-qJ0xpcgiwIr2MxKoEkg';

    public function latestVideos()
    {
        return Cache::remember('youtube.latest', now()->addMinutes(30), function () {

            $url = "https://www.youtube.com/feeds/videos.xml?channel_id={$this->channelId}";

            $response = Http::get($url);

            $xml = simplexml_load_string($response->body());

            $entries = [];

            foreach ($xml->entry as $entry) {
                $entries[] = $entry;
            }

            return collect($entries)
                ->take(3)
                ->map(function ($entry) {

                    $yt = $entry->children('yt', true);

                    $videoId = (string) $yt->videoId;

                    return [

                        'title' => (string) $entry->title,

                        'published' => Carbon::parse($entry->published)
                            ->format('d.m.Y'),

                        'url' => (string) $entry->link->attributes()->href,

                        'thumbnail' => "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg",

                    ];

                });

        });

    }
}