<?php
/**
 * Created by PhpStorm.
 * User: ruimin
 * Date: 16/5/10
 * Time: 11:58
 */

namespace App\Http\Controllers;

use App\Services\ISearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function query(Request $request, ISearchService $service)
    {
        $query = $request->input('query');
        $page = $request->input('page', 1);

//        return $service->searchByQueryAndPage($query, $page);
        return response($service->searchByQueryAndPage($query, $page), 200, ['content-type' => 'application/json; charset=UTF-8']);
    }
}