<div>

    {{-- DATA BINDING --}}
        <input wire:model="name" type="text">
        <input wire:model="loud" type="checkbox">
        <select wire:model="greeting" multiple>
            <option>Hello</option>
            <option>GoodBye</option>
            <option>See ya</option>
        </select>

        {{ implode(', ', $greeting) }} {{ $name }} @if ($loud) ! @endif

        <form action="#" wire:submit.prevent="$set('name', ' ')">
            <button>Reset Name</button>
        </form>
    {{-- DATA BINDING END--}}


    {{-- COUNTER --}}
        <h1>{{ $count }}</h1>
        <button wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
    {{-- COUNTER END --}}
</div>
