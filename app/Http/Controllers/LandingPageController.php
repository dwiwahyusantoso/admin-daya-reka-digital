<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function setting()
    {
    	$data['page'] = LandingPage::first();
    	return view('admin.landing-page.setting', $data);
    }

    public function settingStore(Request $request)
    {
    	$page = LandingPage::first();
    	if (!$page) {
    		$page = new LandingPage();
    	} 
    	$page->mode = $request->mode;
    	$page->content1 = $request->content1;
    	$page->content2 = $request->content2;
    	$page->content3 = $request->content3;
    	$page->image1 = $request->image1;
    	$page->image2 = $request->image2;
    	$page->image3 = $request->image3;
    	if ($page->save()) {
    		return redirect()->route('landing_page.setting');
    	}
    	return redirect()->route('landing_page.setting');
    }

    public function preview()
    {
    	$data['page'] = LandingPage::first();
    	return view('admin.profil.index', $data);
    }
}
