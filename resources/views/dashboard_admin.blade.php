@extends('layouts_admin.app')

@section('title', 'Hi Admin')

@section('contents')
    <div class="container-fluid">
        <div class="row">
            @if ($user->count() > 0)
                @foreach ($user as $rs)
                    <div class="card card-hover m-3" style="width: 18rem;">
                        <img src="{{ asset('admin_assets/img/undraw_posting_photo.svg') }}" class="mx-3 my-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rs->name }}</h5>
                            <p class="card-text">{{ $rs->alamat }}</p>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
    </div>
@endsection
