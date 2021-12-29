<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Social\Medium;
use App\Models\Web\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Types\Integer;

class PostController extends Controller
{
    public function createPost()
    {
        $medium = new Medium();
        $postsMedium = $medium->getStories();
        Cache::forget('posts');

        foreach ($postsMedium as $post) {
            

            $yearPub = (int)date("Y",strtotime($post->story->pubDate));

            //dd($post->story->pubDate);
            if($yearPub >= 2021) {

                Post::updateOrCreate(
                    ['guid' => $post->story->guid],
                    
                    [
                    'author' =>  $post->author,
                    'url_avatar_author' =>  $post->author_url_image,     
                    'title' => $post->story->title, 
                    'url_post' => $post->story->link, 
                    'published_pub' => $post->story->pubDate,
                    'url_image' => $post->story->image,
                    'content' => '', 
                    'social_origem' => 'medium', 
                    'status' => true,
                    ]
                );
            }
        }

        Cache::set('posts', Post::all());

        dd("atualizado");
    }
}
