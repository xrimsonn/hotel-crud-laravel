<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientFormRequest;
use App\Models\Client;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view(
      'clients.index',
      [
        'clients' => Client::all()
      ]
    );
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('clients.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(ClientFormRequest $request)
  {
    $data = $request->validated();
    Client::create($data);
    return redirect()->route('clients.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Client $client)
  {
    return view('clients.show', [
      'client' => $client
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Client $client)
  {
    return view('clients.edit', [
      'client' => $client
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ClientFormRequest $request, Client $client)
  {
    $data = $request->validated();
    $client->update($data);

    return redirect()->route('clients.show', $client->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Client $client)
  {
    $client->delete();
    return redirect()->route('clients.index');
  }
}
