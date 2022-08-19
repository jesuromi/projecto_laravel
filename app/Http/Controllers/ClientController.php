<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $title = 'Lista Clientes';
        $subtitle = 'Aqui encontramos la lista de clientes registrados en el sistema';
        //$clients = Client::all();
        $clients = Client::orderBy('id','desc')->get();

        return view('api/clients/index',compact('title','subtitle','clients'));
    }


    public function create()
    {
        $title = "Nuevo Cliente";
        return view('api/clients/create',compact('title'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'age'=>'required',
        ]);

       $client = new Client;
       $client->name = $request->name;
       $client->lastname = $request->lastname;
       $client->age = $request->age;
       $client->save();

       return redirect()->route('clients.create')->with('message','Registro Realizado con éxito');

    }
   
    public function show(Client $client)
    {
        //
    }


    public function edit(Client $client)
    {
        //
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

 
    public function destroy(Client $client)
    {
        //
    }
}
