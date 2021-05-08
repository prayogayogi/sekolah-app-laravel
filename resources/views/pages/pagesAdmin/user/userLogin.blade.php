@extends('layouts.layoutAdmin.app')

@section('title')
  User Login
@endsection

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
      <h1 class="h3 mb-0 text-gray-800">User Login</h1>
      <p class="mb-4 mt-2">
        Menu User Login Ini untuk Siapa Saja Yang Login di App Ini.
      </p>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <a href="http://" class="btn mb-3 btn-primary"><i class="fas mr-2 fa-plus"></i>Tambah Data</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Yogi Prayoga</td>
                    <td>yogi@gmail.com</td>
                    <td>Admin</td>
                    <td>
                      <a href="http://" class="btn btn-info"><i class="far fa-caret-square-right"></i></a>
                    </td>
                  </tr>
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