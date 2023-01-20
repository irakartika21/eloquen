@extends('template.master')

@section ('judul')
<h1> Manajemen Siswa</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah siswa baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Enter Nama"\
                    value="{{ $profiles->nama }}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Enter Alamat"
                    value="{{ $profiles->alamat }}" disabled>
                  </div>

              </div>
                <!-- /.card-body -->

                <a class="btn btn-primary" href="{{ route('profile.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Kembali
                </a>
                </div>
              </form>
            </div>
@endsection