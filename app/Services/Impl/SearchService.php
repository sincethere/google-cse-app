<?php
/**
 * Created by PhpStorm.
 * User: ruimin
 * Date: 16/5/10
 * Time: 13:47
 */

namespace App\Services\Impl;

use App\Services\ISearchService;
use GuzzleHttp\Client;

class SearchService implements ISearchService
{

    /**
     * Search by query and page number
     * @param $query
     * @param $page
     * @return mixed
     */
    public function searchByQueryAndPage($query, $page)
    {
        $client = new Client();

        $apiKey = env('GOOGLE_API_KEY', 'GOOGLE_API_KEY');
        $cseId = env('GOOGLE_CSE_ID', 'GOOGLE_CSE_ID');
        $start = $page * 10 - 9;

        $res = $client->request('GET', "https://www.googleapis.com/customsearch/v1?key=$apiKey&cx=$cseId&q=$query&start=$start");

//        echo $res->getStatusCode();exit();
        $body = $res->getBody();
        return $body;
    }
}