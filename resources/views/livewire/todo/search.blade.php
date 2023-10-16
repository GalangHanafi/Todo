<div>
    <form wire:submit="dispatchSearch">
        <input wire:model.live.debounce.150ms='search' value="{{$search}}" type="text" placeholder="Search Todo" class="w-full max-w-xs input" />
    </form>
</div>
