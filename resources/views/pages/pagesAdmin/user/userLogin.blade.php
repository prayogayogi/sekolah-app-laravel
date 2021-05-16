@extends('layouts.layoutAdmin.app')

@section('title')
  User Login
@endsection

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-0 text-gray-800">User Login</h1>
  <p class="mb-4 mt-2">Menu User Login Ini untuk Siapa Saja Yang Login di App Ini.</p>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <a href="http://" data-toggle="modal" data-target="#exampleModalUser" class="btn mb-3 btn-primary"><i class="fas mr-2 fa-plus"></i>Tambah Data</a>
          <div class="row">
            <div class="col">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($user as $users)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                      @if ($users->role_id == 1)
                          Admin
                      @endif
                    </td>
                    <td>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalupdate{{$users->id}}"><i class="far fa-edit"></i></a>
                      <form action="/admin/{{$users->id}}/guruPns" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger pr-3"><i class="far fa-trash-alt"></i></button>
                      </form>
                      <a href="/admin/{{$users->id}}/edit" class="btn btn-info"><i class="far fa-caret-square-right"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- modal Untuk tambah data --}}
@if (auth()->user()->role_id == 1)
<div class="modal fade" id="exampleModalUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="{{ route('tambahUser') }}" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input autofocus value="{{ old('nama')}}" type="text" name="name" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama..">
                    @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input autofocus value="{{ old('email')}}" type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email..">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input autofocus value="{{ old('password')}}" type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password..">
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="role_id">role_id</label>
                    <input autofocus value="{{ old('role_id')}}" type="role_id" name="role_id" class="form-control @error('role_id') is-invalid @enderror" id="role_id" placeholder="Masukkan role_id..">
                    @error('role_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif


{{-- Modal Unutk lihat --}}
@foreach ($user as $users)
<div class="modal fade" id="modalupdate{{$users->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="/admin/{{ $users->id }}/dashboard" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input autofocus value="{{ $users->name  }}" type="text" name="name" class="form-control @error('nama') is-invalid @enderror" id="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input autofocus value="{{ $users->email }}" type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach