<div class="modal-header">
    <h4 class="modal-title">Tambah Peminjaman</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('peminjaman.store') }}" enctype="multipart/form-data" onsubmit="return cekdata()">
        @csrf
        <div class="form-group">
            <label for="exampleInputSiswa">Siswa</label>
            <select class="custom-select rounded-0" id="exampleInputSiswa" name="siswa_id" required>
                <option value="">--- Pilih Siswa ---</option>
                @foreach($siswa as $siswa)
                <option value="{{$siswa->id}}">{{$siswa->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputBuku">Buku</label>
            <select class="custom-select rounded-0" id="exampleInputBuku" name="buku_id" required>
                <option value="">--- Pilih Buku ---</option>
                @foreach($buku as $buku)
                <option value="{{$buku->id}}">{{$buku->judul_buku}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputTanggalPeminjaman">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="exampleInputTanggalPeminjaman" name="tgl_peminjaman" placeholder="Input Tanggal Peminjaman" required>
        </div>
        <div class="form-group">
            <label for="exampleInputTanggalJatuhTempo">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" id="exampleInputTanggalJatuhTempo" name="tgl_jatuh_tempo" placeholder="Input Tanggal Jatuh Tempo" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>
