<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_image', 'banner_heading', 'banner_title','banner_text','btn_name','btn_link'
    ];
}
