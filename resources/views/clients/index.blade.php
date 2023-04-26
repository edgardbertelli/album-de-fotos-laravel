<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>


    <div class="flex items-center justify-end mt-4">
        <a href="{{ route('clients.create') }}" type="button">
            <x-button class="ml-3" type="button">
                {{ __('Adicionar') }}
            </x-button>
        </a>
    </div>

    <div class="py-12">
        @foreach($clients as $client)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>{{ $client->full_name }}</p>
                    <a href="{{ route('clients.show', $client->id) }}" type="button">
                        <x-button class="ml-3" type="button">
                            {{ __('Detalhes') }}
                        </x-button>
                    </a>
                    <a href="{{ route('clients.edit', $client->id) }}" type="button">
                        <x-button class="ml-3" type="button">
                            {{ __('Editar') }}
                        </x-button>
                    </a>
                    
                    <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-button class="ml-3">
                            {{ __('Apagar') }}
                        </x-button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>