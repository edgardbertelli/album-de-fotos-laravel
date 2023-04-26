<?php

namespace App\Repositories;

use App\Interfaces\ClientInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class ClientRepository implements ClientInterface
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        return $this->client->all();
    }

    public function show($id)
    {
        return $this->client->findOrFail($id);
    }

    public function store($request)
    {
        return $this->client::create([
            'full_name'         => $request->full_name,
            'username'     => $request->username,
            'cpf'          => $request->cpf,
            'rg'           => $request->cpf,
            'birth_date'   => $request->birth_date,
            'email'        => $request->email,
            'phone_number' => $request->phone_number,
            'status'       => $request->status
        ]);
    }

    public function update($request, $id)
    {
        $client = $this->client::findOrFail($id);

        return $client->update([
            'full_name'    => $request->full_name,
            'username'     => $request->username,
            'cpf'          => $request->cpf,
            'rg'           => $request->cpf,
            'birth_date'   => $request->birth_date,
            'email'        => $request->email,
            'phone_number' => $request->phone_number,
            'status'       => $request->status
        ]);
    }

    public function destroy(int $id)
    {
        $client = $this->client->find($id);
        return $client->delete();
    }
}
