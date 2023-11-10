<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ __('Dashboard') }} 
        </h2>
    </x-slot> --}}
    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        {{ __('Dobry den prajem') }}</br>
                        {{ __('Ak mate zaujem o kupu dielov pre automobily, tak kupujte') }}
                        <div class="row d-flex justify-content-center">
                            <div class="col-1">
                                <a href="http://127.0.0.1:8000/clients" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Clients</a>
                            </div>
                            <div class="col-1">
                                <a href="http://127.0.0.1:8000/products" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Products</a>
                            </div>
                            <div class="col-1">
                                <a href="http://127.0.0.1:8000/categories" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
