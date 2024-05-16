<?php

namespace App\Http\Controllers\Website;

use App\Models\DynamicPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutUsController extends Controller
{
    public function __construct(DynamicPage $pages)
    {
        $this->pages = $pages;
    }
    public function index()
    {
        $pages = $this->pages->get();
        return view('website.about.aboutus', compact('pages'));
    }
}
