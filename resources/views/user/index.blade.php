@extends('layouts_admin.app')

@section('title', 'Daftar User')

@section('contents')
    <div class="d-flex align-item-center justify-content-between mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($user->count() > 0)
                @foreach ($user as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->username }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">{{ $rs->role_id }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('user.show', $rs->user_id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>

                                <a href="{{ route('user.edit', $rs->user_id) }}" type="button"
                                    class="btn btn-warning">Edit</a>

                                <form action="{{ route('user.destroy', $rs->user_id) }}" method="GET" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
