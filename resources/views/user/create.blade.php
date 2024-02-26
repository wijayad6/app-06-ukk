@extends('layouts_admin.app')

@section('title', 'Tambah User')

@section('contents')
    <hr />
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid mb-3">
            <div class="mb-3">
                <input name="name" type="text" class="form-control @error('name')is-invalid @enderror mb-3"
                    id="examplename" placeholder="Nama Lengkap">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input name="username" type="text"
                    class="form-control form-control-user @error('username')is-invalid @enderror mb-3" id="exampleusername"
                    placeholder="Username">
                    @error('username')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <input name="alamat" type="text"
                    class="form-control form-control-user @error('alamat')is-invalid @enderror mb-3" id="examplealamat"
                    placeholder="Alamat">
                @error('alamat')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input name="role_id" type="text"
                    class="form-control form-control-user @error('role_id')is-invalid @enderror mb-3" id="examplerole_id"
                    placeholder="Role (1, 2, 3)">
                @error('role_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input name="email" type="email"
                    class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail"
                    placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <input name="password" type="password"
                        class="form-control form-control-user @error('password')is-invalid @enderror"
                        id="exampleInputPassword" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <input name="password_confirmation" type="password"
                        class="form-control form-control-user @error('password_confirmation')is-invalid @enderror"
                        id="exampleRepeatPassword" placeholder="Repeat Password">
                    @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
