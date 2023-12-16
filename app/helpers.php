<?php

use App\Models\Media;

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
