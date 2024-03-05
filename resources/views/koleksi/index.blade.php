@extends('layouts_koleksi.app')

@section('title', 'Koleksi')

@section('contents')
<div class="container-fluid">
    <div class="row">
        @if ($koleksi->count() > 0)
            @foreach ($koleksi as $rs)
                <div class="card card-hover m-3" style="width: 18rem;">
                    <img src="{{ asset('admin_assets/img/undraw_posting_photo.svg') }}" class="mx-3 my-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $rs->buku->judul }}</h5>
                        {{-- <p class="card-text">Penulis : {{ $rs->penulis }}</p>
                        <p class="card-text">Penerbit : {{ $rs->penerbit }}</p> --}}
                        <p class="card-text">{{ $rs->buku->penulis }}</p>
                        <form action="{{route('koleksi.destroy', $rs->koleksi_id)}}" method="GET" type="button"
                            class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
        @endif
    </div>
</div>
@endsection
