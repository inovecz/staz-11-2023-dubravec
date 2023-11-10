<?php

namespace App\Models;

class Client extends Model
{

    public $routesPrefix = 'clients';

    protected $fillable = [
        "name",
        "email",
        "phone_number"
    ];

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }
}
