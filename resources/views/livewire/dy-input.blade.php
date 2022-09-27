<div>
    <h1 class="text-left">Dynamic Input Kontak</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-4">
                            <input wire:model="nama.0" type="text"
                                class="form-control @error('nama.0') is-invalid @enderror" placeholder="nama">
                            @error('nama.0')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input wire:model="email.0" type="email"
                                class="form-control @error('email.0') is-invalid @enderror" placeholder="email">
                            @error('email.0')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <button wire:click.prevent="add({{ $i }})"
                                class="btn btn-primary btn-md">+</button>
                        </div>
                    </div>
                    {{-- add form --}}
                    @foreach ($inputs as $index => $v)
                        <div class="row mt-4 mb-2">
                            <div class="col-md-4">
                                <input wire:model="nama.{{ $v }}" type="text"
                                    class="form-control @error('nama.') is-invalid @enderror" placeholder="nama">
                                @error('nama.')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input wire:model="email.{{ $v }}" type="email"
                                    class="form-control @error('email.') is-invalid @enderror" placeholder="email">
                                @error('email.')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <button wire:click.prevent="remove({{ $index }})"
                                    class="btn btn-secondary btn-md"><span class="text-danger">x</span></button>
                            </div>
                        </div>
                    @endforeach
                    {{-- end form ----- --}}
                    <button class="btn btn-success mt-3" wire:click="save">Save</button>
                </div>
                <div class="carad-footer">
                </div>
            </div>
            @include('alert.alert')
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i)
                        <tr>
                            <td>1</td>
                            <td>{{ $i->nama }}</td>
                            <td>{{ $i->email }}</td>
                            <td>
                                <button wire:click="deleteId({{ $i->id }})" type="button"
                                    class="form-control">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    {{-- edit --}}
    {{-- <form wire:submit.prevent="submitEdit">
        <div wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label for="v_name">Name</label>
                                <input type="text" class="form-control @error('v_name') is-invalid @enderror"
                                    wire:model="v_name">
                                @error('v_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="v_email">Email</label>
                                <input type="email" class="form-control @error('v_email') is-invalid @enderror"
                                    wire:model="v_email">
                                @error('v_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}

    {{-- delete --}}
    <div wire:ignore.self class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Apakah ingin dihapus?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click="deleteAksi" class="btn btn-danger">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            window.addEventListener('close-modal', event => {
                $('#tambah').modal('hide')
                $('#edit').modal('hide')
                $('#delete').modal('hide')
            })

            window.addEventListener('show-edit', event => {
                $('#edit').modal('show')
            })
            window.addEventListener('show-delete', event => {
                $('#delete').modal('show')
            })
        </script>
    @endsection
</div>
