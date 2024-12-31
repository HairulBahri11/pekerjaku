<div class="modal-header">
    <h4 class="modal-title">Tambah Buku</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data" onsubmit="return cekdata()">
        @csrf
        <div class="form-group">
            <label for="exampleInputJudulBuku">Judul Buku</label>
            <input type="text" class="form-control" id="exampleInputJudulBuku" name="judul_buku" placeholder="Input Judul Buku" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPenulis">Penulis</label>
            <input type="text" class="form-control" id="exampleInputPenulis" name="penulis" placeholder="Input Penulis" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPenerbit">Penerbit</label>
            <input type="text" class="form-control" id="exampleInputPenerbit" name="penerbit" placeholder="Input Penerbit" required>
        </div>
        <div class="form-group">
            <label for="exampleTahunTerbit">Tahun Terbit</label>
            <input type="number" class="form-control" id="exampleTahunTerbit" name="thn_terbit" placeholder="Input Tahun Terbit" required>
        </div>
        <div class="form-group">
            <label for="exampleJumlah">Jumlah</label>
            <input type="number" class="form-control" id="exampleJumlah" name="jumlah" placeholder="Input Jumlah" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>
