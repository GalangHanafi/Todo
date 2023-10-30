<div>
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
    </table>
    <div class="flex flex-col items-center justify-center py-20 space-y-4 text-4xl font-extrabold">
        {{ $slot }}
    </div>
</div>
