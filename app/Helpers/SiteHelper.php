<?php

namespace App\Helpers;

use App\Models\blog;

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
    public static function get_blogs(){
        return blog::latest("created_at")->get();
    }
}
