<?php
/**
 * Created by PhpStorm.
 * User: ruimin
 * Date: 16/5/10
 * Time: 13:43
 */

namespace App\Services;


interface ISearchService
{
    /**
     * Search by query and page number
     * @param $query
     * @param $page
     * @return mixed
     */
    public function searchByQueryAndPage($query, $page);
}