@extends('layouts_pinjam.app')

@section('title', 'Isi Form Berikut')

@section('contents')
    <hr />
    <form action="{{ route('pinjam.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid mb-3">
            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->user_id }}">
            <div class="mb-3">
                <label for="buku_id">Pilih buku yang ingin dipinjam</label>
                <select class="form-control" name="buku_id" id="buku_id">
                    @foreach ($buku as $item)
                        <option value="{{ $item->buku_id }}">{{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam"
                    placeholder="Tanggal Pinjam">
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali"
                    placeholder="Tanggal Kembali">
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
