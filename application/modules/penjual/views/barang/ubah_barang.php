  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Barang</a></li>
        <li class="active">Ubah Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="box-body">
          {result}
          <form action="<?php echo site_url('penjual/barang/ubah_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_barang" value="{id_barang}">
            <label>Nama</label>
            <input type="text" name="nama_barang" value="{nama_barang}" value="{nama_barang}" class="form-control">
            <label>Harga</label>
            <input type="text" name="harga_barang" value="{harga_barang}" value="{harga_barang}" class="form-control">
            <label>Keterangan</label>
            <textarea name="keterangan_barang" cols="30" rows="10" class="form-control">{keterangan_barang}</textarea>
            <label>Kategori</label>
              <select name="idkategori_barang" class="form-control">
                  <option value="{idkategori_barang}">{idkategori_barang}</option>
                  <option value="">---Pilih Kategori---</option>
                <?php
                foreach ($kategori['kategori'] as $kat) {
                    ?>
                <option <?php echo $kategori['kategori_selected'] == $kat->id_kategori ? 'selected="selected"' : '' ?>
                        value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nama_kategori ?></option>
                    <?php
                }
                ?>
              </select>
              <label>Status Barang</label>
              <select name="status_barang" class="form-control">
                  <option value="PENDING">PENDING</option>
              </select>
            <div class="form-group">  
            <label>Gambar Barang</label>
            <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="GambarBarang1" width="400" height="500">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar2_barang})}" alt="GambarBarang2" width="400" height="500">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar3_barang})}" alt="GambarBarang3" width="400" height="500">
                  </div>
                </div>
              </div>
            </div>
            <input type="text" name="idpersonal_barang" value="{idpersonal_barang}" class="form-control">
            <br><br>
            <a href="{base_url(penjual/barang/upload/{id_barang})}" class="btn btn-info">Upload Foto</a>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
            <a href="{base_url(penjual/barang/hapus/{id_barang})}" class="btn btn-danger">Hapus</a>
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