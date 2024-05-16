<?php

namespace App\Helpers;

use App\Models\Banner;

class BannerHelper
{
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    function getHomeBanner()
    {
        $homeBgBanner = $this->banner->where('banner_title', 'Homepage Bg Image')->first();
        return $homeBgBanner;
    }
    function getPagesBanner()
    {
        $pageBgBanner = $this->banner->where('banner_title', 'Pages Bg Image')->first();
        return $pageBgBanner;
    }
}
