@extends('backend-dashboard.app')
@section('title')
    Admin | Dashboard | Pegawai
@endsection
@section('judul')
    Dashboard | Pegawai
    
@endsection

@section('content')
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3><br>
                <a href="/create" class="btn btn-outline-info"> + Tambah Data Pegawai</a>
                 @if ($pesan = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $pesan }}
                    </div>
                @endif
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Alamat</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th></tr>
                  </thead>
                  <tbody>
                  <tr class="odd">
                     @foreach ($pegawai as $p)
                        <tr>
                            <td class="dtr-control sorting_1" tabindex="0">{{ $p->name }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <a href="{{route('pegawai.edit',$p->id)}}" class="btn btn-outline-warning">Edit</a>
                                <a href="{{route('pegawai.delete',$p->id)}}" onsubmit="return confirm('Apakah Anda Yakin ?');" class="btn btn-outline-danger">Hapus</a>
                                
                                
                            </td>
                        </tr>
                    @endforeach
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr><th rowspan="1" colspan="1">Nama</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Alamat</th><th rowspan="1" colspan="1">Action</th></tr>
                  </tfoot>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection

@section('js')
    
@endsection
   

