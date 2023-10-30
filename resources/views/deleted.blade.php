<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col p-6 space-y-6 overflow-hidden bg-neutral-focus sm:rounded-lg ">
                <div class="flex justify-between">
                    <livewire:deleted.filter>
                    <livewire:deleted.search>
                </div>
                <livewire:deleted.todo-table>
            </div>
        </div>
    </div>

</x-app-layout>
