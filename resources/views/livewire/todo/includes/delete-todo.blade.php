<div class="tooltip tooltip-error" data-tip="Delete">
    <div wire:loading.class="btn-disabled" wire:click='delete({{$todo->id}})' class="btn btn-ghost"
        wire:confirm="'{{$todo->todo}}' [todo] will be deleted.">🗑</div>
</div>
