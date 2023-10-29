<div class="dropdown">
    <label tabindex="0" class="m-1 btn btn-secondary">Filter</label>
    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 flex-col space-y-4">
        <div class="flex items-center space-x-2"><input wire:click='clearFilter' type="radio" name="todo-filter"
                class="w-3 h-3 radio" /><span>All</span></div>
        <div class="flex items-center space-x-2"><input wire:click='showFinished' type="radio" name="todo-filter"
                class="w-3 h-3 radio" /><span>Finished</span></div>
        {{-- <div class="flex items-center space-x-2"><input wire:click='showDeleted' type="radio" name="todo-filter"
                class="w-3 h-3 radio" /><span>Deleted</span></div> --}}
    </ul>
</div>
