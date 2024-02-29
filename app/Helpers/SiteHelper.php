<?php

namespace App\Helpers;

use App\Models\blog;
use App\Models\Media;
use App\Models\Testimonial;

class SiteHelper
{
    public static function settings()
    {
        $Settings = array();
        $Settings['Email'] = '';
        $Settings['Phone'] = '';
        $Settings['Address'] = '';
        $Settings['PrimaryColor'] = '#192d67';
        $Settings['SecondaryColor'] = '#1059BB';
        $Settings['Currency'] = 'SAR';
        $Settings['PageTitle'] = 'The Armour Lab - Data Analytics';
        return $Settings;
    }
    public static function get_blogs($limit = false)
    {
        if ($limit) {
            return blog::latest("created_at")->get();
        } else {
            return blog::latest("updated_at")->paginate($limit);
        }
    }

    public static function get_media()
    {
        return Media::latest("created_at");
    }
    public static function  get_ppf_media()
    {
        return Media::where("category", "ppf")->latest("created_at")->get();
    }
    public static function  get_cc_media()
    {
        return Media::where("category", "cc")->latest("created_at")->get();
    }
    public static function  get_wt_media()
    {
        return Media::where("category", "wt")->latest("created_at")->get();
    }

    public static function getTestimonials()
    {
        return Testimonial::all();
    }
}
