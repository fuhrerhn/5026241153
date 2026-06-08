@extends('template')
@section('title', 'Data Blueray')
@section('konten')

<a href="/blueray" class="btn btn-secondary mb-4">Kembali</a>

<div class="card">
    <div class="card-header">
        Form Tambah Data Blueray
    </div>

    <div class="card-body">
        <form action="/blueray/store" method="post">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label for="merkblueray" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-10">
                    <input type="text" name="merkblueray" id="merkblueray" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="stockblueray" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="stockblueray" id="stockblueray" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia_y" value="Y" required>
                        <label class="form-check-label" for="tersedia_y">Ya</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia_t" value="T" required>
                        <label class="form-check-label" for="tersedia_t">Tidak</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
