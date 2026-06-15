@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')
    <h2>Data Pegawai</h2>

    <form>
        <p>
            <label>Kode Pegawai</label><br>
            <input type="text" name="kodepegawai" value="{{ $pegawai->kodepegawai }}" readonly>
        </p>
        <p>
            <label>Nama Lengkap</label><br>
            <input type="text" name="namalengkap" value="{{ $pegawai->namalengkap }}" readonly>
        </p>
        <p>
            <label>Divisi</label><br>
            <input type="text" name="divisi" value="{{ $pegawai->divisi }}" readonly>
        </p>
        <p>
            <label>Departemen</label><br>
            <input type="text" name="departemen" value="{{ $pegawai->departemen }}" readonly>
        </p>
        <a href="{{ route('mypegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
