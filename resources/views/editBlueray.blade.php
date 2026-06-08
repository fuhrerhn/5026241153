@extends('template')
@section('title', 'Edit Data Blueray')
@section('konten')

<a href="/blueray" class="btn btn-secondary mb-4">Kembali</a>

@foreach($blueray as $b)
<div class="card">
    <div class="card-header">
        Form Edit Data Blueray
    </div>

    <div class="card-body">
        <form action="/blueray/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodeblueray" value="{{ $b->kodeblueray }}">

            <div class="row mb-3">
                <label for="merkblueray" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-10">
                    <input type="text" name="merkblueray" id="merkblueray" class="form-control" required value="{{ $b->merkblueray }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="stockblueray" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="stockblueray" id="stockblueray" class="form-control" required value="{{ $b->stockblueray }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <select name="tersedia" id="tersedia" class="form-select" required>
                        <option value="Y" {{ $b->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                        <option value="T" {{ $b->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
                    </select>
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
@endforeach

@endsection
