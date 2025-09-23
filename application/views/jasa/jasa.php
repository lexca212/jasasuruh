<div class="container-fluid">
    <form method="POST" action="<?= base_url('jasa/simpan') ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Anda</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keperluan</label>
            <textarea class="form-control" name="keperluan" placeholder="Jelaskan jasa yang akan kami kerjakan" id=""></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat atau Tujuan</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NO WA</label>
            <input type="text" name="no_wa" class="form-control" placeholder="Wajib ditulis untuk konfirmasi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>