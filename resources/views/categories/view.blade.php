@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Categories - {{ $category->getId() }}</span>
        <a href=http://127.0.0.1:8000/categories/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail klienta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            {{ $category->getId() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            {{ $category->getName() }}
                        </div>
                    </div>
                    <hr>
                    <div>
                        </br>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ $category->getEditLink() }}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Edit</a>
                        </div>
                        <div class="col-6">
                        {!! Form::model($category, ['route' => ['categories.deletePost', $category->getId()]]) !!}
                            {!! Form::hidden('id') !!}
                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
