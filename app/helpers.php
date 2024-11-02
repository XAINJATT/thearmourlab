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
    return Media::where("is_gallery", "true")->where("status", 1)->latest("created_at");
}

function  get_ppf_media()
{
    return Media::where("is_gallery", "true")->where("category", "ppf")->where("status", 1)->latest("created_at")->get();
}
function  get_cc_media()
{
    return Media::where("is_gallery", "true")->where("category", "cc")->where("status", 1)->latest("created_at")->get();
}
function  get_wt_media()
{
    return Media::where("is_gallery", "true")->where("category", "wt")->where("status", 1)->latest("created_at")->get();
}
function  get_ir_media()
{
    return Media::where("is_gallery", "true")->where("category", "wt")->where("status", 1)->latest("created_at")->get();
}

function randomColor()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT);
}


if (!function_exists('get_giveaway_status')) {
    function get_giveaway_status($v = false)
    {
        if (!$v) {
            $previous_status = Setting::where('name', 'wheel')->first();
            if ($previous_status) {
                return $previous_status->value;
            }
            return false;
        } else {
            $previous_status = Setting::where('name', $v)->first();
            if ($previous_status) {
                return $previous_status->value;
            }
            return false;
        }
    }
}
