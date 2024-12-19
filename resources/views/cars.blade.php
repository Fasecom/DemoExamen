<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Список заявки на ремон') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-fixed w-1/2">
                        <thead>
                            <tr >
                                <th>№</th>
                                <th>Регистрационный номер</th>
                                <th>Марка</th>
                                <th>Модель</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td>1</td>
                                <td>12356</td>
                                <td>Тоёта</td>
                                <td>Поло</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td>2</td>
                                <td>21354</td>
                                <td>Ауди</td>
                                <td>q8</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-4">
                        {{ __('Добавить машину') }}
                    </h2>
                    <form>
                         @csrf

                         <!-- Email Address -->
                         <div class="mt-4">
                             <x-input-label for="Car" :value="__('Регестрационный номер')" />
                             <x-text-input id="Car" class="block mt-1 w-full" type="text" name="Car" :value="old('Car')" required autofocus/>
                             <x-input-error :messages="$errors->get('car')" class="mt-2" />
                         </div>
                         <div class="mt-4">
                             <x-input-label for="Car" :value="__('Марка машины')" />
                             <x-text-input id="Car" class="block mt-1 w-full" type="text" name="Car" :value="old('Car')" required autofocus/>
                             <x-input-error :messages="$errors->get('car')" class="mt-2" />
                         </div>
                         <div class="mt-4">
                             <x-input-label for="Car" :value="__('Модель машины')" />
                             <x-text-input id="Car" class="block mt-1 w-full" type="text" name="Car" :value="old('Car')" required autofocus/>
                             <x-input-error :messages="$errors->get('car')" class="mt-2" />
                         </div>
                         <div class="flex items-center justify-end mt-4">
                             <x-primary-button class="ms-3">
                                 {{ __('Добавить машину') }}
                             </x-primary-button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
