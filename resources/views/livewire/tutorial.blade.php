<div>
    <input type="text" name="" id="" wire:model.live='hobi' placeholder="properti hobi">
    <input type="text" name="" id="" wire:model.live='warna_kesukaan' placeholder="properti hobi">
    <div>
        <div>Hobi: {{ $hobi }}</div>
        <div>Warna Kesukaan: {{ $warna_kesukaan }}</div>
    </div>

    <ul>
        @foreach ($proses as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
