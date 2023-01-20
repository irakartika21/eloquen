@extends('template.master')

@section('judul')
<h1>data siswa</h1>
@endsection

@section('content')
     <div class="card" >
        </a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <td>No</td>
                  <td>nama</td>
                  <td>alamat</td>
                  <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $profile->nama }}</td>
            <td>{{ $profile->alamat }}</td>
        <td>
            <form action="{{ route('profile.destroy',[$profile->id]) }}"method="POST">
        <a class="btn btn-info mr-3" href="{{route('profile.show', $profile->id)}}">detail</a>
        <a class="btn btn-warning mr-3" href="{{route('profile.edit', $profile->id)}}">edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger ">Delete</button>
        </form>
         </td>
        </tr>
        @endforeach
                  </tr>
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@push('scripts')
    <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script>
    $(function () {
            $("#data-table").DataTable();
        });
    </script>
@endpush