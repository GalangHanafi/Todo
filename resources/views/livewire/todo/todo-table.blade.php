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
            <tr wire:key="{{ $todo->id }}">
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
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
                <th>
                    <button class="btn btn-ghost btn-xs">details</button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $todos->links() }}
</div>
