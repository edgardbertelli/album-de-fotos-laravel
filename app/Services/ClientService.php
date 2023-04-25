<?php

namespace App\Services;

use App\Interfaces\ClientInterface;

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
    public function index() {
        return $this->clientInterface->index();
    }

    /**
     * Retorna um cliente.
     * 
     * @param  int  $id
     */
    public function show($id) {
        return $this->clientInterface->show($id);
    }
}