<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Client;   

class ClientController extends Controller
{
    public function index()
    {

        $clients = \App\Models\Client::all();
        return view('clients.index', ['clients' => $clients]);

    }

    public function view($id) {

        $client = \App\Models\Client::where('id',$id)->first();
        return view('clients.view', ['client' => $client]);


    }


    public function create()
    {
        return view('clients.create');
    }

    public function edit($id) {

        $client = \App\Models\Client::where('id',$id)->first();
        return view('clients.edit', ['client' => $client]);


    }

    public function createPost(Request $request) {

        
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $client = Client::create($array);

        return redirect($client->getViewLink());

    }

    public function editPost(Request $request) {

        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $client = Client::find($id);
        if($client) {
            $client->update($array);
        }
        
        return redirect($client->getViewLink());

    }

    public function deletePost(Request $request) {

        $id = $request->input('id');

        //dd($array);
        // ulozime do db
        $client = Client::find($id);
        if($client) {
            $client->delete();
        }

        return redirect(route('clients.index'));

    }

    public function extractDataFromRequest(Request $request) {

        $array = [
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'name' => $request->input('name'),
            
        ];

        return $array;

    }



}
