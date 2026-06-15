@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Tambah Data Pegawai</h2>
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mypegawai.store') }}" method="POST" onsubmit="return validasiForm()" class="form-horizontal form-control">
        @csrf
        <p>
                <label>Kode Pegawai</label><br>
                <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai') }}">
        </p>
        <p>
                <label>Nama Lengkap</label><br>
                <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap') }}">
        </p>
        <p>
                <label>Divisi</label><br>
                <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi') }}">
        </p>
        <p>
                <label>Departemen</label><br>
                <input type="text" name="departemen" id="departemen" maxlength="10" value="{{ old('departemen') }}">
        </p>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mypegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
    <script>
        function ValidasiForm(){
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode pegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama lengkap wajib diisi",
                    icon: "error"
                });
                return false;
            }
            return true;

            if(!/^[A-Za-z0-9]+$/.test(kodepegawai)){
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode pegawai hanya boleh berisi huruf dan angka",
                    icon: "error"
                });
                return false;
            }

            if(!/^[A-Za-z0-9]+$/.test(namalengkap)){
                alert("Nama lengkap hanya boleh berisi huruf dan angka");
                return false;
            }
            return true;
        }
    </script>
@endsection
