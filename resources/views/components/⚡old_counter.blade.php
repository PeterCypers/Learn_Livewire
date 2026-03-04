<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
};
?>

<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
    <button type="button" wire:click="increment">Increment</button>
    <div>Count: {{ $count }}</div>
</div>

<script>
    // an actual JS file will be created by the browser and becomes a browser-cached JS-asset
    alert('Hello World');
</script>
