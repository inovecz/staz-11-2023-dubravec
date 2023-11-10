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
                            <th scope="col">Email</th>
                            <th scope="col">Phone number</th>
                            <th scope="col"><a href="{{ route('clients.create') }}" class="btn btn-success" role="button" aria-pressed="true" style="width: 48px;">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->getId() }}</th>
                                <td>{{ $client->getName() }}</td>
                                <td>{{ $client->getEmail() }}</td>
                                <td>{{ $client->getPhoneNumber() }}</td>
                                <td><a href="{{ $client->getViewLink() }}" class="btn btn-secondary" role="button" aria-pressed="true">👀</a></td>
                                
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
