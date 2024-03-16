<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller {

    public function update(Website $website) {

        $website->name = request('name');
        $website->email = request('email');
        $website->phone = request('phone');
        $website->country = request('country');
        $website->address_line_1 = request('address_line_1');
        $website->address_line_2 = request('address_line_2');
        $website->city = request('city');
        $website->state = request('state');
        $website->zip = request('zip');
        $website->facebook = request('facebook');
        $website->instagram = request('instagram');
        $website->tiktok = request('tiktok');
        $website->twitter = request('twitter');
        $website->linkedin = request('linkedin');
        $website->google = request('google');
        $website->youtube = request('youtube');
        $website->vimeo = request('vimeo');
        $website->etsy = request('etsy');
        $website->website_url = request('website_url');

        if(request('logo_square_1')) {
            $inputs['logo_square_1'] = request('logo_square_1')->store('app-images');
            $website->logo_square_1 = $inputs['logo_square_1'];
        }
        if(request('logo_square_2')) {
            $inputs['logo_square_2'] = request('logo_square_2')->store('app-images');
            $website->logo_square_2 = $inputs['logo_square_2'];
        }
        if(request('logo_horizontal_1')) {
            $inputs['logo_horizontal_1'] = request('logo_horizontal_1')->store('app-images');
            $website->logo_horizontal_1 = $inputs['logo_horizontal_1'];
        }
        if(request('logo_horizontal_2')) {
            $inputs['logo_horizontal_2'] = request('logo_horizontal_2')->store('app-images');
            $website->logo_horizontal_2 = $inputs['logo_horizontal_2'];
        }
        if(request('favicon')) {
            $inputs['favicon'] = request('favicon')->store('app-images');
            $website->favicon = $inputs['favicon'];
        }

        $website->analytics = request('analytics');
        $website->google_link_1 = request('google_link_1');
        $website->google_link_2 = request('google_link_2');
        $website->google_link_3 = request('google_link_3');
        $website->google_link_4 = request('google_link_4');
        $website->google_link_5 = request('google_link_5');

        $website->save();

        return back();

    }

}
