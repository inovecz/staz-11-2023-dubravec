@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Category</th>
                            <th scope="col"><a href="{{ route('products.create') }}" class="btn btn-success" role="button" aria-pressed="true" style="width: 48px;">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->getId() }}</th>
                                <td>{{ $product->getName() }}</td>
                                <td>{{ $product->getSupplier() }}</td>
                                <td>{{ $product->getCost() }}</td>
                                <td>{{ $product->category?->getName() }}</td>
                                <td><a href="{{ $product->getViewLink() }}" class="btn btn-secondary" role="button" aria-pressed="true">👀</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
