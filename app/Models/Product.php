<?php

namespace App\Models;

class Product extends Model
{

    public $routesPrefix = 'products';

    protected $fillable = [
        "name",
        "supplier",
        "cost",
        "category_id"
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSupplier() {
        return $this->supplier;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

}
