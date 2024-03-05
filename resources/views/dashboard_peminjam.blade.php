@extends('layouts_peminjam.app')

@section('title', 'Halo Para Pembaca')

@section('contents')
    @csrf
    <div class="container-fluid">
        <div class="row">
            @if ($buku->count() > 0)
                @foreach ($buku as $rs)
                    <div class="card card-hover m-3" style="width: 18rem;">
                        <img src="{{ asset('admin_assets/img/undraw_posting_photo.svg') }}" class="mx-3 my-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rs->judul }}</h5>
                            {{-- <p class="card-text">Penulis : {{ $rs->penulis }}</p>
                            <p class="card-text">Penerbit : {{ $rs->penerbit }}</p> --}}
                            <p class="card-text">{{ $rs->penulis }}</p>
                            <form action="{{ route('koleksi.store', $rs->koleksi_id) }}" method="post">
                                @csrf
                                <input type="text" name="buku_id" value="{{ $rs->buku_id }}" hidden>
                                <input type="text" name="user_id" value="{{ auth()->user()->user_id }}" hidden>
                                <button class="btn btn-primary">+ Koleksi</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
    </div>
@endsection
