<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['guid', 'title', 'url_post', 'published_pub', 'url_image', 'content', 'social_origem', 'status', 'author', 'url_avatar_author'];

}
