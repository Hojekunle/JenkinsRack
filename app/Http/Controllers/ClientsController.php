<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Clients::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $client = new Clients;

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->created_at = $request->input('created_at');
        $client->updated_at = $request->input('updated_at');
        $client->save();

        return 'Clients record successfully created with id ' . $client->id;
    }

    public function show($id) {
        return Clients::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $client = Clients::find($id);

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->contact_number = $request->input('contact_number');
        $client->position = $request->input('position');
        $client->save();

        return "Sucess updating user #" . $client->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $Clients = Clients::find($request->input('id'));

        $Clients->delete();

        return "Clients record successfully deleted #" . $request->input('id');
    }
}
