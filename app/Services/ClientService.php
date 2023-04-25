<?php

namespace App\Services;

use App\Interfaces\ClientInterface;
use Illuminate\Support\Facades\Validator;

class ClientService
{
    private $clientInterface;

    public function __construct(ClientInterface $clientInterface)
    {
        $this->clientInterface = $clientInterface;
    }

    /**
     * Retorna lista de clientes do usuário.
     */
    public function index()
    {
        return $this->clientInterface->index();
    }

    /**
     * Retorna um cliente.
     * 
     * @param  int  $id
     */
    public function show($id)
    {
        return $this->clientInterface->show($id);
    }

    /**
     * Cria um cliente no banco da aplicação.
     */
    public function store($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect('clients/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        return $this->clientInterface->store($request);
    }
}