<?php namespace App\Models\Traits;

trait RoutesTrait {

    
    public function getViewLink(){
        return route($this->routesPrefix . '.view',['id'=>$this->getId()]);
    }

    public function getEditLink(){
        return route($this->routesPrefix . '.edit',['id'=>$this->getId()]);
    }

    public function getCreateLink(){
        return route($this->routesPrefix . '.create');
    }

    public function getEditPostLink(){
        return route($this->routesPrefix . '.editPost',['id'=>$this->getId()]);
    }

    public function getCreatePostLink(){
        return route($this->routesPrefix . '.createPost');
    }

    public function getDeletePostLink(){
        return route($this->routesPrefix . '.deletePost',['id'=>$this->getId()]);
    }
}