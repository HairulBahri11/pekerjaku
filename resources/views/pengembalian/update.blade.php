<div class="modal-header">
    <h4 class="modal-title">Edit Pengembalian</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('pengembalian.update', $data->id) }}" enctype="multipart/form-data" onsubmit="return cekdata()">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input type="hidden" name="peminjaman_id" value="{{$data->peminjaman_id}}">
            <input type="text" class="form-control" id="exampleInputNama" value="{{$data->peminjaman?->siswa?->nama}}" readonly name="nama" placeholder="Input Nama Penjual" required>
        </div>
        <div class="form-group">
            <label for="exampleInputNamaKelas">Buku</label>
            <input type="text" class="form-control" id="exampleInputNamaKelas" value="{{$data->peminjaman?->buku?->judul_buku}}" readonly name="kelas" placeholder="Input Kelas" required>
        </div>
        <div class="form-group">
            <label for="exampleInputTanggalPengembalian">Tanggal Pengembalian</label>
            <input type="date" class="form-control" id="exampleInputTanggalPengembalian" name="tanggal_pengembalian" value="{{$data->tanggal_pengembalian}}" placeholder="Input Tanggal Pengembalian" required>
        </div>
        <div class="form-group">
            <label for="exampleInputDenda">Denda</label>
            <input type="number" class="form-control" id="exampleInputDenda" name="denda" placeholder="Input Denda" value="{{$data->denda}}" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>
