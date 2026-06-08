@extends('template')
@section('title', 'Data Blueray')
@section('konten')

    <a href="/blueray/tambah" class="btn btn-primary">Tambah Data Blueray</a>

    <br>
    <br>
    <p>Cari Data Blueray :</p>
    <form action="/blueray/cari" method="GET" class="form-inline">
        <div>
            <input type="text" name="cari" placeholder="Cari Blueray .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>

    <br>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th width="180px">Opsi</th>
        </tr>
        @foreach ($blueray as $b)
            <tr>
                <td>{{ $b->kodeblueray }}</td>
                <td>{{ $b->merkblueray }}</td>
                <td>{{ $b->stockblueray }}</td>
                <td>{{ $b->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="/blueray/edit/{{ $b->kodeblueray }}" class="btn btn-warning"> Edit </a>
                    <a href="/blueray/hapus/{{ $b->kodeblueray }}" class="btn btn-danger"> Hapus </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $blueray->links() }}
@endsection
