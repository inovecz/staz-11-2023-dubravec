@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Products - {{ $product->id }}</span>
        <a href=http://127.0.0.1:8000/products/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail produktu
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            {{ $product->getId() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            {{ $product->getName() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Supplier
                        </div>
                        <div class="col-6">
                            {{ $product->getSupplier() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Cost
                        </div>
                        <div class="col-6">
                            {{ $product->getCost() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Category
                        </div>
                        <div class="col-6">
                            {{ $product->category?->getName() }}
                        </div>
                    </div>
                    <hr>
                    <div>
                        </br>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ $product->getEditLink() }}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Edit</a>
                        </div>
                        <div class="col-6">
                        {!! Form::model($product, ['route' => ['products.deletePost', $product->getId()]]) !!}
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
