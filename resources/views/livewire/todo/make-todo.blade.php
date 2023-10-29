<div>
    <!-- The button to open modal -->
    <label for="make_todo_modal" class="m-4 btn toast btn-primary">Add Todo</label>

    <input type="checkbox" id="make_todo_modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Add new todo</h3>
            <br>
            <form class="w-full form-control" wire:submit='createTodo'>
                <label class="label">
                    <span class="label-text">Todo</span>
                </label>

                <input wire:model='todo' type="text" class="w-full input input-bordered" />
                @error('todo') <span class="text-error label-text-alt">{{ $message }}</span> @enderror
                <label class="label">
                    <span class="label-text">Description</span>
                </label>

                <input wire:model='description' type="text" class="w-full input input-bordered" />
                @error('description') <span class="text-error label-text-alt">{{ $message }}</span> @enderror
                <label class="label">
                    <span class="label-text">Deadline</span>
                </label>

                <input wire:model='deadline' type="date" class="w-full input input-bordered" />
                @error('deadline') <span class="text-error label-text-alt">{{$message}}</span> @enderror
                <div class="flex justify-end space-x-2 modal-action">
                    <label for="make_todo_modal" class="btn btn-outline btn-error">Cancel</label>
                    <button class="btn btn-primary"> Create </button>
                </div>
            </form>

        </div>
        <label class="modal-backdrop" for="make_todo_modal">Close</label>
    </div>
</div>
