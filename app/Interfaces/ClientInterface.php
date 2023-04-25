<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ClientInterface
{
    public function index();
    public function show($id);
    public function store(Request $request);
}