@extends('templates/header')
@section('content')
<!-- page content -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pemasok</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Default Example</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pemasok</th>
                  <th>Nama Pemasok</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Telephon</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($result as $data)
                <tr>
                  <th>{{ !empty($i) ? ++$i : $i =1 }}</th>
                  <td>{{ $data->kode_pemasok }}</td>
                  <td>{{ $data->nama_pemasok }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->kota }}</td>
                  <td>{{ $data->no_telp }}</td>
                  <td><a href="#" data-toggle="modal" data-target="#modalbarang" class="btn btn-warning" data-mode="edit" data-id="{{ $data->id }}"><span class="fa fa-edit"></span></a>
                  <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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
<!-- /page content -->
@endsection
@push('js')

@endpush