<div class="modal-header">
    <h4 class="modal-title">Tambah Peminjaman</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('latar_belakang.store') }}" role="form" enctype="multipart/form-data">
        @csrf

        @include('latar-belakang.form')

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>
