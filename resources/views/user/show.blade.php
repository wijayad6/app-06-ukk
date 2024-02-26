@extends('layouts_admin.app')

@section('title', 'Detail Buku')

@section('contents')
    <hr />
    <div class="form-group">
        <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror mb-3" id="examplename"
            placeholder="Nama Lengkap" value="{{ $user->name }}">
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
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ditambahkan pada :</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $user->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui pada :</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $user->updated_at }}" readonly>
        </div>
    </div>
@endsection
