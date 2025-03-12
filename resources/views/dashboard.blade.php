<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Vous êtes connecté") }}
                    <br><br><a href="/users-display">
                        <button
                            class="bg-blue-400 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600">
                            Voir votre classe
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
