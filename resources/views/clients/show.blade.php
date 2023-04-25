<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>Nome:</strong> {{ $client->full_name }}</p>
                    <p><strong>Usuário:</strong> {{ $client->username }}</p>
                    <p><strong>CPF:</strong> {{ $client->cpf }}</p>
                    <p><strong>RG:</strong> {{ $client->rg }}</p>
                    <p><strong>Data de nascimento:</strong> {{ $client->birth_date }}</p>
                    <p><strong>E-mail:</strong> {{ $client->email }}</p>
                    <p><strong>Telefone:</strong> {{ $client->phone_number }}</p>
                    <p><strong>Status:</strong> {{ $client->status }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>