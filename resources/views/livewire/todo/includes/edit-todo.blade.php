<div>
    <label id="edit{{$todo->id}}" for="edit_todo_modal_{{$todo->id}}" class="btn btn-ghost"
        wire:click='updateModal({{$todo}})'>📝</label>
    <input id="edit_todo_modal_{{$todo->id}}" type="checkbox" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">edit todo</h3>
            <br>
            <form wire:submit='update({{$todo->id}})' class="w-full form-control" >
                <label class="label" for="todo{{$todo->id}}">
                    <span class="label-text">Todo</span>
                </label>
                <input id="todo{{$todo->id}}" wire:model='todo' type="text" class="w-full input input-bordered" />
                @error('todo') <span class="text-error label-text-alt">{{ $message }}</span> @enderror

                <label class="label" for="description{{$todo->id}}">
                    <span class="label-text">Description</span>
                </label>
                <input id="description{{$todo->id}}" wire:model='description' type="text"
                    class="w-full input input-bordered" />
                @error('description') <span class="text-error label-text-alt">{{ $message }}</span> @enderror

                <label class="label" for="deadline{{$todo->id}}">
                    <span class="label-text">Deadline</span>
                </label>
                <input id="deadline{{$todo->id}}" wire:model='deadline' type="date"
                    class="w-full input input-bordered" />
                @error('deadline') <span class="text-error label-text-alt">{{$message}}</span> @enderror

                <div class="flex justify-end space-x-2 modal-action">
                    <label for="edit_todo_modal_{{$todo->id}}" class="btn btn-outline btn-error">Cancel</label>
                    <button class="btn btn-primary"> Update </button>
                </div>
            </form>

        </div>
        <label class="modal-backdrop" for="edit_todo_modal_{{$todo->id}}">Close</label>
    </div>
</div>
