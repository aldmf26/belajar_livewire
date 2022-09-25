<div>
    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model="nama">
        <input type="radio" name="jenis_kelamin" value="Laki" wire:model="nama"> Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" wire:model="nama"> Perempuan

        <select class="form-select" wire:model="nama" name="" id="">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki">Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> --}}
        {{-- <h1>Nama saya adalah {{ $nama }}</h1> --}}

        {{-- cekbox --}}
        {{-- <input wire:model="nama" type="{{ $show_password == 'show' ? 'text' : 'password' }}" class="form-control">
        <input type="checkbox" value="show" wire:model="show_password"> Show --}}

        <input type="number" class="form-control" wire:model="keranjang">
        <button class="btn btn-primary" wire:click="plus">+ Plus</button>
        <button {{ $keranjang < 1 ? 'disabled' : '' }} class="btn btn-danger" wire:click="minus">- Minus</button>

    </div>
</div>
