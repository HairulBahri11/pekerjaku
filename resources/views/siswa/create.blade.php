<div class="modal-header">
    <h4 class="modal-title">Tambah Siswa</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data" onsubmit="return cekdata()">
        @csrf
        <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Input Nama Penjual" required>
        </div>
        <div class="form-group">
            <label for="exampleInputNamaKelas">Kelas</label>
            <input type="text" class="form-control" id="exampleInputNamaKelas" name="kelas" placeholder="Input Kelas" required>
        </div>
        <div class="form-group">
            <label for="exampleInputAlamat">Alamat</label>
            <textarea class="form-control" id="exampleInputAlamat" rows="4" placeholder="Input Alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputNoHP">No HP</label>
            <input type="text" class="form-control" id="exampleInputNoHP" name="no_hp" placeholder="Input No HP" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>
