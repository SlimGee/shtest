<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id='.config('services.sh.id').'&apikey='.config('services.sh.key'));

        $domains = $response->json('data');

        return view('home', [
            'domains' => $domains,
        ]);
    }
}
