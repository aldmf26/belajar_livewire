<div>
    @include('alert.alert')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $index => $i)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->email }}</td>
                    <td>
                        <a href="{{ route('detail', $i->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('edit', $i->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click="delete({{ $i->id }})" class="badge bg-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
