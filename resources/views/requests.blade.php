<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Список зарегестрированных машин') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form>
                         @csrf

                         <!-- Email Address -->
                         <div class="mt-4">
                             <x-input-label for="email" :value="__('Выберите машину')" />
                             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                         </div>
                         <div class="mt-4">
                             <x-input-label for="email" :value="__('Опишите о проблеме')" />
                             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                         </div>
                         <div class="flex items-center justify-end mt-4">
                             <x-primary-button class="ms-3">
                                 {{ __('Логин') }}
                             </x-primary-button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
