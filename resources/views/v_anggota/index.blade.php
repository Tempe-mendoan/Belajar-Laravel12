<h3>{{ $judul }}</h3>

<a href="{{ route('anggota.create') }}">
    <button type="button">Tambah</button>
</a>

<table border="1" width="60%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($index as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->hp }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $row->id) }}" style="display: inline-block;">
                        <button type="button">Ubah</button>
                    </a>
                    <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
