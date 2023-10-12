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
            <tr>
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
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
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
