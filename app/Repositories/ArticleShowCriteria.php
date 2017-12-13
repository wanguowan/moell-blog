<?php

namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: wan
 * Date: 12/13/17
 * Time: 10:18 PM
 */
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class ArticleShowCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->where('status','=', 1 );
        return $model;
    }
}