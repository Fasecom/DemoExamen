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
                             <x-input-label for="Car" :value="__('Выберите машину')" />
                             <x-text-input id="Car" class="block mt-1 w-full" type="text" name="Car" :value="old('Car')" required autofocus/>
                             <x-input-error :messages="$errors->get('car')" class="mt-2" />
                         </div>
                         <div class="mt-4">
                             <x-input-label for="problem" :value="__('Опишите о проблеме')" />
                             <x-text-input id="problem" class="block mt-1 w-full h-28" type="text" name="problem" :value="old('problem')" required autofocus/>
                         </div>
                         <div class="flex items-center justify-end mt-4">
                             <x-primary-button class="ms-3">
                                 {{ __('Оставить заявку') }}
                             </x-primary-button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
