<?php

use Curl\Curl;

Route::group(['namespace' => 'Web', 'as' => 'web.' ], function () {
 

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('interacao', 'InteracaoController');
    Route::get('privacidade', 'HomeController@privacidade')->name('privacidade');
    Route::get('termos', 'HomeController@termos')->name('termos');

    Route::get('/login', function() {  
        return view('demo.auth.login');
    });
    

    Route::get('/recurso', function() {  


        $url = 'https://medium.com/feed/@unitbox';
        $feeds = file_get_contents($url);
        
        $feeds = str_replace("<content:encoded>","<contentEncoded>",$feeds);
        $feeds = str_replace("</content:encoded>","</contentEncoded>",$feeds);
        $rss = simplexml_load_string($feeds, null, LIBXML_NOCDATA);
        
        $stories = [];
        foreach ($rss->channel->item as $entry) {
            $story = [
                'guid' => (string)$entry->guid,
                'title' => (string)$entry->title,
                'link' => (string)$entry->link,
                'pubDate' => convertDateFormat((string)$entry->pubDate),
                'image' => convertImageContent((string)$entry->contentEncoded),
            ];

            $stories[] = $story;
        }

        dd($stories);
        
    });
});

function convertDateFormat($oldDate)
{
    // corrige a data
    $old_date_timestamp = strtotime($oldDate);
    $new_date = date('Y-m-d H:i:s', $old_date_timestamp);

    return $new_date;
}

function convertImageContent($contentPost)
{
    // preg_match_all( '@src="([^"]+)"@' , $teste, $match );
    $fileImageresponse = '';
    $extentionAllowed = array('gif', 'png', 'jpg', 'jpeg');

    preg_match( '@src="([^"]+)"@' , $contentPost, $match);

    $src = array_pop($match);
    $extensionImage = fileExtension($src);
    
    if (!in_array($extensionImage, $extentionAllowed)) {
        $fileImageresponse = "error";
    } else {
        $fileImageresponse = $src;
    }

    return $fileImageresponse;

}

function fileExtension($s) {
    $n = strrpos($s,".");
    return ($n===false) ? "" : substr($s,$n+1);
}

Route::group(['namespace' => 'Products\AboutMe', 'as' => 'aboutme.', 'prefix' => 'about'], function () 
{
    Route::get('/', 'HomeController@index')->name('home');

});
