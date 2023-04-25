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
                    <form method="POST" action="{{ route('clients.store') }}">
                        @csrf

                        <!-- Nome completo -->
                        <div class="mt-4">
                            <x-label for="full_name" :value="__('Nome completo')" />

                            <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus />
                        </div>

                        <!-- Nome de usuário -->
                        <div class="mt-4">
                            <x-label for="username" :value="__('Nome de usuário')" />

                            <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                        </div>

                        <!-- CPF -->
                        <div class="mt-4">
                            <x-label for="cpf" :value="__('CPF')" />

                            <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required />
                        </div>

                        <!-- RG -->
                        <div class="mt-4">
                            <x-label for="rg" :value="__('RG')" />

                            <x-input id="rg" class="block mt-1 w-full" type="text" name="rg" :value="old('rg')" required />
                        </div>

                        <!-- Data de nascimento -->
                        <div class="mt-4">
                            <x-label for="birth_date" :value="__('Data de nascimento')" />

                            <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required />
                        </div>

                        <!-- Telefone -->
                        <div class="mt-4">
                            <x-label for="phone_number" :value="__('Telefone')" />

                            <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <x-label for="status" :value="__('Status')" />

                            <select id="status" name="status" class="block mt-1 w-full" :value="old('status')" required >
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                                <option value="bloqueado">Bloqueado</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Adicionar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>