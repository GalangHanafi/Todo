<div class="dropdown dropdown-end dropdown-hover">
    @if (Carbon\Carbon::now()->eq($todo->deadline))
    <button class="text-white bg-warning badge badge-xs"></button>
    @elseif (Carbon\Carbon::now()->gt($todo->deadline))
    <button class="text-white bg-red-500 badge badge-xs"></button>
    @else
    <button class="text-white bg-green-500 badge badge-xs"></button>
    @endif
    <div class="card compact dropdown-content z-[1] shadow bg-base-100 rounded-box w-40">
        <div class="card-body">
            {{Carbon\Carbon::now()->diffForHumans($todo->deadline, false)}}
        </div>
    </div>
</div>
