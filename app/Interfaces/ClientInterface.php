<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ClientInterface
{
    public function index();
    public function show($id);
    public function store(Request $request);
    public function update(Request $request, int $id);
    public function destroy(int $id);
}