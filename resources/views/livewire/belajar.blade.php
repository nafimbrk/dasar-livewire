<div>
    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model.live='nama'> --}}
        {{-- <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model.live='nama'></textarea> --}}
        {{-- <input type="radio" name="jenis_kelamin" id="" value="laki" wire:model.live='nama'> Laki --}}
        {{-- <input type="radio" name="jenis_kelamin" id="" value="perempuan" wire:model.live='nama'> Perempuan --}}

        {{-- <select name="" id="" class="form-control" wire:model.live='nama'>
            <option value="" hidden>Pilih Jenis Kelamin</option>
            <option value="laki">Laki</option>
            <option value="perempuan">Perempuan</option>
        </select> --}}

         {{-- <input
        @if($show_password == 'show')
        type="text"
        @else
        type="password"
        @endif
        name="" id="" class="form-control" wire:model='nama'>

        <label for="">Show Password</label>
        <input type="checkbox" name="" id="" wire:model.live='show_password' value="show"> --}}

        <input type="number" name="" id="" class="form-control" wire:model='keranjang'>
    </div>
    {{-- halo nama saya adalah {{ $nama }} --}}

    <button class="btn btn-primary" wire:click='plus'>+ plus</button>
    @if($keranjang >= 1)
    <button class="btn btn-danger" wire:click='minus'>- minus</button>
    @endif
</div>
