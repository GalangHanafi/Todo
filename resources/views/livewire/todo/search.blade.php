<div>
    <form wire:submit="dispatchSearch">
        <input wire:model.live.debounce.150ms='search' value="{{$search}}" type="text" placeholder="Type here"
            class="input input-secondary input-bordered w-full max-w-xs focus:outline-none focus:ring-0 focus:border-secondary-focus" />
    </form>
</div>
