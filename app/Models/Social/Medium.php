<?php

namespace App\Models\Social;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    public function getStories()
    {
        $url = 'https://medium.com/feed/@unitbox';
        $feeds = file_get_contents($url);

        $feeds = str_replace("<content:encoded>", "<contentEncoded>", $feeds);
        $feeds = str_replace("</content:encoded>", "</contentEncoded>", $feeds);
        $rss = simplexml_load_string($feeds, null, LIBXML_NOCDATA);

        $stories = [];

        foreach ($rss->channel->item as $entry) {
            $story = [
                'author' => (string)$rss->channel->title,
                'author_url_image' => (string)$rss->channel->image->url,
                'story' => [
                'guid' => (string)$entry->guid,
                'title' => (string)$entry->title,
                'link' => (string)$entry->link,
                'pubDate' =>  $this->convertDateFormat((string)$entry->pubDate),
                'image' => $this->convertImageContent((string)$entry->contentEncoded),
            ]];

            $stories[] = $story;
        }

        $object = json_decode(json_encode($stories), false);

        return $object;
    }

    private function convertDateFormat($oldDate)
    {
        // corrige a data
        $old_date_timestamp = strtotime($oldDate);
        $new_date = date('Y-m-d H:i:s', $old_date_timestamp);

        return $new_date;
    }

    private function convertImageContent($contentPost)
    {
        // preg_match_all( '@src="([^"]+)"@' , $teste, $match );
        $fileImageresponse = '';
        $extentionAllowed = array('gif', 'png', 'jpg', 'jpeg');

        preg_match('@src="([^"]+)"@', $contentPost, $match);

        $src = array_pop($match);
        $extensionImage = $this->fileExtension($src);

        if (!in_array($extensionImage, $extentionAllowed)) {
            $fileImageresponse = "error";
        } else {
            $fileImageresponse = $src;
        }

        return $fileImageresponse;
    }

    private function fileExtension($s)
    {
        $n = strrpos($s, ".");
        return ($n===false) ? "" : substr($s, $n+1);
    }
}
