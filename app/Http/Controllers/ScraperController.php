<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    private $results = array();

    public function scraper(){

        $client = new Client();
        $url = 'https://canblogsite.azurewebsites.net/';
        $page = $client->request('GET', $url);
        
        /*
        echo "<pre>";
        foreach ($page->filter('.title') as $title) {
            print_r($title->textContent);
            echo '<br>';
        }
        echo "</pre>";
        */

        $page->filter('.post')->each(function ($item){
            $this->results[$item->filter('h2')->text()] = $item->filter('.post-details')->text();
        });
        $data = $this->results;
        return $data;
    }
}
