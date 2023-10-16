@if (Carbon\Carbon::now()->gte($todo->deadline))
<div class="dropdown dropdown-end dropdown-hover">
    <button tabindex="0" class="text-white bg-red-500 badge badge-xs">
    </button>
    <div tabindex="0" class="card compact dropdown-content z-[1] shadow bg-base-100 rounded-box w-40">
        <div class="card-body">
            {{Carbon\Carbon::now()->diffForHumans($todo->deadline, false)}}
        </div>
    </div>
</div>
@else
<div class="dropdown dropdown-end">
    <button tabindex="0" class="text-white bg-green-500 badge badge-xs">

    </button>
    <div tabindex="0" class="card compact dropdown-content z-[1] shadow bg-base-100 rounded-box w-40">
        <div class="card-body">
            {{Carbon\Carbon::now()->diffForHumans($todo->deadline, false)}}
        </div>
    </div>
</div>
@endif
