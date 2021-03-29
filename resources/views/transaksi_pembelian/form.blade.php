<!-- Modal -->
<div class="modal fade" id="tblBarangmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <table id="tblBarang" class="table table-stripped table-bordered bulk_action">
          <thead>
            <tr>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($barang as $b)
            <tr>
              <td>{{$b->kode_barang}}</td>
              <td>{{$b->nama_barang}}</td>
              <td>{{$b->harga_jual}}</td>
              <td><button class="btn btn-primary">Pilih</button></td>
            </tr>
            @endforeach
          </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>