<?php

namespace App\Resources\Classes;

interface DatabaseQueries{

    public function getAll($tableName);

    public function getAllById($tableName, $rowName, $id);

    public function getAllWithLimit($tableName, $limit);

    public function getAllAsc($tableName, $rowName);

    public function getAllDesc($tableName, $rowName);

    public function getAllByCategoryAsc($tableName, $catId, $rowName);

    public function getAllByCategoryDesc($tableName, $catId, $rowName);

    public function getAllWithLimitAsc($tableName, $rowName, $limit);

    public function getAllWithLimitDesc($tableName, $rowName, $limit);

    public function getAllByRecommendedAsc($tableName, $rcm, $rowName);

    public function getAllByRecommendedDesc($tableName, $rcm, $rowName);

    public function getAllByCategoryWithLimitAsc($tableName, $catId, $rowName, $limit);

    public function getAllByCategoryWithLimitDesc($tableName, $catId, $rowName, $limit);

}