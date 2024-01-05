<?php

use App\Models\Media;
use Illuminate\Support\Facades\Artisan;
use App\Models\Setting;


function get_media()
{
    return Media::latest("created_at");
}
function get_gallery_media()
{
    return Media::where("is_gallery", "true")->where("type", "Like", "%image%")->where("status", 1)->latest("created_at");
}

function  get_ppf_media()
{
    return Media::where("is_gallery", "true")->where("type", "Like", "%image%")->where("category", "ppf")->where("status", 1)->latest("created_at")->get();
}
function  get_cc_media()
{
    return Media::where("is_gallery", "true")->where("type", "Like", "%image%")->where("category", "cc")->where("status", 1)->latest("created_at")->get();
}
function  get_wt_media()
{
    return Media::where("is_gallery", "true")->where("type", "Like", "%image%")->where("category", "wt")->where("status", 1)->latest("created_at")->get();
}

function randomColor()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT);
}


if (!function_exists('get_giveaway_status')) {
    function get_giveaway_status()
    {
        $previous_status = Setting::where('name','giveaway')->first();
        if ($previous_status) {
            return $previous_status->value;
        }
        return false;
    }
}
