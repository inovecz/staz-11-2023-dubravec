<?php

namespace App\Models;

class Category extends Model
{

    public $routesPrefix = 'categories';

    protected $fillable = [
        "name",
    ];

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

}
