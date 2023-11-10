<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as DefaultModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Traits\ModelTrait;
use App\Models\Traits\RoutesTrait;

class Model extends DefaultModel
{

    use HasFactory, ModelTrait, RoutesTrait;

    public $routesPrefix = '';


}