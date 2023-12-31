<div>

    @if ($todos->first() == !null)
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
                    <td class="w-0"></td>
                    <td class="flex not-italic">
                        @include('livewire.todo.includes.edit-todo')
                        @include('livewire.todo.includes.delete-todo')
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $todos->links() }}
    </div>

    @elseif ($search && $todos->first() == null)
    <x-todo-null>
        <div>No results found for</div>
        <div>"{{$search}}".</div>
    </x-todo-null>

    @else
    <x-todo-null>Lets fill this up!</x-todo-null>
    @endif
</div>
