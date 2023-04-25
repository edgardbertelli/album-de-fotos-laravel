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

    public function index() {
        return Auth::user();
    }
}