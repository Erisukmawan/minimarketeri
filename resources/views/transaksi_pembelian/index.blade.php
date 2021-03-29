@extends('templates/header')
@section('content')
<!-- page content -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Transaksi Pembelian</h3>
      </div>
      </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <h2>Pembelian</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          <form class="form-horizontal form-label-left">
          <div class="form-group col-md-6 col-sm-6 col-xs-12 ">
                    <label class="control-label col-md-4" for="kodePembelian">Kode Pembelian <span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="kodePembelian" required="required" class="form-control " value="{{$kode}}" >
                    </div>
                  </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-4" for="first-name">Tanggal <span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" id="first-name2" required="required" class="form-control" value="{{ date('Y-m-d')}}">
                    </div>
                  </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12 ">
                    <label class="control-label col-md-4 " >Tambah Barang :
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <button type="button" class="btn btn-primary" id="tambahBarangBtn" data-toggle="modal" data-target="#tblBarangmodal"><span class="fa fa-plus"></span> Tambah Barang</button>
                    </div>
                  </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12 ">
                    <label class="control-label col-md-4" for="first-name">Toko/Distributor <span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select required="required" name="" id="" class="form-control">
                          @foreach ($pemasok as $p)
                          <option value="{{$p->id}}">{{$p->nama_pemasok}}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="x_panel">
              <div class="x_title">
                <h2>Detail Barang</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div>
                  <table id="tbl" class="table table-stripped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>QTY</th>
                          <th>Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td colspan="6" style="text-align:center;font-style:italic">Belum Ada Data</td>
                        </tr>
                      </tbody>
                  </table>
                  <br><br>
                  <div class="row" style="text-align: right;margin-bottom:10x">
                    <div class="col-md-12">
                      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align:right;"> 
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Harga :</label>
                        <div class="col-md-3 col-sm-3 col-xs-12" style="text-align:right;margin-right:0;padding-right:0">
                          <input type="text" class="form-control col-md-4 col-xs-12" required="required" readonly>
                        </div>
                      </div>
                    </div>
                  </div> <br>
                  <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12" style="text-align:right;margin-right:0;padding-right:0">
                      <div class="col-md-12 col-sm-9 col-xs-12">
                        <button type="button"class="btn btn-success"><span class="fa fa-save"></span> Simpan Transaksi</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>
  </div>
<!-- /page content -->
@include('transaksi_pembelian/form')
@endsection
@push('js')
<script>
  function tambahBarang(a){
    let d = $(a).closest('tr');
    let kodeBarang = d.find('td:eq(1)').text();
    let namaBarang = d.find('td:eq(2)').text();
    let hargaBarang = d.find('td:eq(3)').text();
    let data = '';
    let tbody = $('#tblTransaksi tbody tr td').text();
    data += '<tr>';
    data += '<td>'+kodeBarang+'</td>';
    data += '<td>'+namaBarang+'</td>';
    data += '<td>'+hargaBarang+'</td>';
    data += '<td><input type="number" value="1"</td>';
    data += '<td>'+hargaBarang+'</td>';
    data += '<td><button><span class="fa fa-remove"></span></button></td>';
    data += '</tr>;
    if(tbody = 'Belum ada data') $('#tblTransaksi tbody tr').remove();

    $('#tblTransaksi tbody').append(data);
    $('#tblBarangmodal').modal(hide);
  };
  $(function(){
    $('#tblBarang').DataTable();
    $('#tbl').DataTable();
    $('.pilihBarangBtn').on('click',function(){
      tambahBarang(this);
    });
});
</script>
@endpush