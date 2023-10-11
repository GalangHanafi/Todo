<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col p-6 space-y-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="flex justify-between">
                    <livewire:todo.filter>
                    <livewire:todo.search>
                </div>
                <livewire:todo.todo-table>
            </div>
        </div>
    </div>
</x-app-layout>
