<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pasien</h3>
  <form method="POST" id="form-update-pasien">
    <input type="hidden" name="id" value="<?php echo $dataPasien->id_pasien; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->nama_pasien; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->telp; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
      <select name="kota" class="form-control select2" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataKota as $kota) {
        ?>
          <option value="<?php echo $kota->id; ?>" <?php if ($kota->id == $dataPasien->id_kota) {
                                                      echo "selected='selected'";
                                                    } ?>><?php echo $kota->nama; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="input-group form-group" style="display: inline-block;">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-tag"></i>
      </span>
      <span class="input-group-addon">
        <input type="radio" name="jk" value="1" id="laki" class="minimal" <?php if ($dataPasien->id_kelamin == 1) {
                                                                            echo "checked='checked'";
                                                                          } ?>>
        <label for="laki">Laki-laki</label>
      </span>
      <span class="input-group-addon">
        <input type="radio" name="jk" value="2" id="perempuan" class="minimal" <?php if ($dataPasien->id_kelamin == 2) {
                                                                                  echo "checked='checked'";
                                                                                } ?>>
        <label for="perempuan">Perempuan</label>
      </span>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-briefcase"></i>
      </span>
      <select name="klinik" class="form-control select2" aria-describedby="sizing-addon2">
        <?php
        foreach ($dataKlinik as $klinik) {
        ?>
          <option value="<?php echo $klinik->id; ?>" <?php if ($klinik->id == $dataPasien->id_klinik) {
                                                        echo "selected='selected'";
                                                      } ?>><?php echo $klinik->nama; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
  $(function() {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
  });
</script>