<form method="post" action="<?= base_url('kirimemail/coba') ?>">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama penerima</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="namapenerima" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email Penerima</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="emailpenerima" placeholder="Password">
    </div>
  </div>

   <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pesan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="isiemail" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" id="kirimemail" class="btn btn-primary">kirim</button>
    </div>
  </div>
</form>