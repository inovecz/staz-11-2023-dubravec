@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Products - Create</span>
        <a href=http://127.0.0.1:8000/products/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'products.createPost']) !!}
                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1">Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier</label>
                            {!! Form::text('supplier', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cost</label>
                            {!! Form::text('cost', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
