<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Todo</th>
                <th>Description</th>
                <th>Deadline</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr wire:key="{{ $todo->id }}" class="{{($todo->finished == !null) ? 'italic' : ''}}">
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" {{($todo->finished == !null) ? 'checked' : ''}}/>
                    </label>
                </th>
                <td>
                    <div class="font-bold">{{$todo->todo}}</div>
                </td>
                <td>
                    {{$todo->description}}
                </td>
                <td class="flex items-center space-x-4">
                    @include('livewire.todo.includes.status')
                    <div>{{$todo->deadline}}</div>
                </td>
                <td class="no-underline">
                    <button class="btn btn-ghost btn-sm">
                        <div class="text-xl">📝</div>
                    </button>
                    <button class="btn btn-ghost btn-sm" wire:click='delete({{ $todo->id }})'
                        wire:confirm='Are you sure you want to delete this todo?'>
                        <div class="text-xl">🗑</div>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $todos->links() }}
</div>
