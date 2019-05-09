<?php
namespace system\framework\library;

class Load
{
    public function model($model)
    {
        $modelClass = '\\app\\models\\' . $model;
        $this->$model = new $modelClass();
    }

    public function helper()
    {

    }
}
