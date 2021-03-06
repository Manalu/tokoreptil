  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Kategori</h3>

        </div>
        <div class="box-body">
          {result}
        <form action="<?php echo site_url('admin/kategori/ubah_proses'); ?>" method="post">
            <input type="hidden" name="id_kategori" value="{id_kategori}">
            <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" value="{nama_kategori}" class="form-control">
            </div>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(admin/kategori/hapus/{id_kategori})}" class="btn btn-danger">Hapus</a>
            <button type="batal" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
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