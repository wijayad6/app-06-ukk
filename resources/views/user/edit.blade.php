@extends('layouts_admin.app')

@section('title', 'Edit User')

@section('contents')
    <hr />
    <form action="{{ route('user.update', $user->user_id) }}" method="POST" class="user" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror mb-3"
                id="examplename" placeholder="Nama Lengkap" value="{{ $user->name }}">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <input name="username" type="text"
                class="form-control form-control-user @error('username')is-invalid @enderror mb-3" id="exampleusername"
                placeholder="Username" value="{{ $user->username }}">
            @error('username')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <input name="alamat" type="text"
                class="form-control form-control-user @error('alamat')is-invalid @enderror mb-3" id="examplealamat"
                placeholder="Alamat" value="{{ $user->alamat }}">
            @error('alamat')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <input name="role_id" type="text"
                class="form-control form-control-user @error('role_id')is-invalid @enderror mb-3" id="examplerole_id"
                placeholder="Role (1, 2, 3)" value="{{ $user->role_id }}">
            @error('role_id')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror"
                id="exampleInputEmail" placeholder="Email Address" value="{{ $user->email }}">
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Tambah
        </button>
    </form>
@endsection
