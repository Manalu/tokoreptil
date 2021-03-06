  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Pesan</a></li>
        <li class="active">Ubah Pesan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          {result}
          <form action="<?php echo site_url('penjual/pesan/ubah_proses'); ?>" method="post">
              <div class="form-group">
              <input type="hidden" name="id_pesan" value="{id_pesan}">
              <label for="judul_pesan">Judul Pesan :</label>
              <select name="judul_pesan" class="form-control" readonly>
                <option value="{judul_pesan}">{judul_pesan}</option>
              </select>
              </div>

              <div class="form-group">
              <label for="email">Alamat Email :</label>
              <input type="email" name="email_pesan" placeholder="masukkan alamat email anda" class="form-control" value="{email_pesan}" readonly>
              </div>

              <div class="form-group">
              <label for="hp">Nomor Telfon :</label>
              <input type="number" name="hp_pesan" placeholder="masukkan nomor telfon" class="form-control" value="{hp_pesan}" readonly>
              </div>

              <div class="form-group">
              <label for="isi_pesan">Isi Pesan :</label>
              <textarea readonly class="form-control" rows="5" class="form-control" placeholder="Masukkan pesan Anda" name="isi_pesan">{isi_pesan}</textarea>
              </div>

              <div class="form-group">
              <label for="hp">Pengirim :</label>
              <input type="text" name="levelpengirim_pesan"  class="form-control" value="{levelpengirim_pesan}" readonly>
              </div>

              <input type="hidden" name="penerima_pesan" value="admin">

              <input type="hidden" name="status_pesan" value="dibaca">

              <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
          </form>
          {/result}
        </div>
        <!-- /.box-body -->
   
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->