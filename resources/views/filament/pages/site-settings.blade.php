<x-filament-panels::page>
    <form wire:submit.prevent="save">
        {{-- Render the form --}}
        {{ $this->form }}

        {{-- Conditionally display "Edit" or "Save" button --}}
        @if ($this->isEditing)
            <x-filament::button type="submit" color="info" class="mt-4">
                Save
            </x-filament::button>
        @else
            <x-filament::button type="button" color="danger" class="mt-4" wire:click="toggleEdit">
                Edit
            </x-filament::button>
        @endif
    </form>


    @if ($this->lastUpdated)
        <div class="mt-4 text-gray-500">
            <small>Last Updated At: {{ $this->lastUpdated }}</small>
        </div>
    @endif
</x-filament-panels::page>
