<div class="modal fade" id="editdraft{{ $detail->id_po }}" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
            </div>
            <form action="{{ url('editdraft') }}/{{ $detail->id_po }}" class="modal-body" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Nama Barang <span class="help"> </span></label>
                        <input type="text" value="{{ $detail->nama_barang }}" name="edit_jumlah" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Keterangan Barang<span class="help"> </span></label>
                        <input type="text" value="{{$detail->keterangan_barang}}" name="edit_keterangan" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Quantity <span class="help"> </span></label>
                        <input type="text" value="{{$detail->jumlah}}" name="edit_jumlah" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Rate <span class="help"> </span></label>
                        <input type="text" value="{{$detail->rate}}" name="edit_keterangan" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>

                
                
            </form>

        </div>
    </div>
</div>