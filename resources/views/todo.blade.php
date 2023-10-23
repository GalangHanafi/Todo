<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col p-6 space-y-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg ">
                <div class="flex justify-between">
                    <livewire:todo.filter>
                    <livewire:todo.search>
                </div>
                <livewire:todo.todo-table>
            </div>
        </div>
    </div>

    <livewire:todo.make-todo >
</x-app-layout>
