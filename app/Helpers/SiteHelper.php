<?php

namespace App\Helpers;

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
}
