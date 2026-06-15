@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')
    <h2>Data Pegawai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('mypegawai.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($pegawai as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <a href="{{ route('mypegawai.view', $p->kodepegawai) }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegawai.</td>
            </tr>
        @endforelse
    </table>

@endsection
