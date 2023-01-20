@extends('template.master')

@section ('judul')
<h1> Manajemen Siswa</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="inputnama">Input Nama</label>
                  <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama">
                  </div>

                  <div class="form-group">
                    <label for="inputalamat">Input alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat">
                  </div>
                <!-- /.card-body -->

                <a class="btn btn-primary mr-3" href="{{ route('profile.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Back
                </a>

                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection