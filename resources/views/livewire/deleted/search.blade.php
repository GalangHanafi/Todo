<div>
    <form wire:submit="dispatchSearch">
        <input wire:model.live.debounce.150ms='search' value="{{$search}}" type="text" placeholder="Type here"
            class="w-full max-w-xs input input-secondary input-bordered focus:outline-none focus:ring-0 focus:border-secondary-focus" />
    </form>
</div>
