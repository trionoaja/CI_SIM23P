<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Berita</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Berita</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        <div class="box-body">
                <form action="<?php echo base_url()."berita/insert";?>" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nim">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori"required>
                    </div>
                    <div class="form-group">
                        <label for="nama_panggilan">Headline</label>
                        <input type="text" class="form-control" name="headline" id="headline" placeholder="Headline">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Isi Berita</label>
                        <textarea class="form-control summernote" name="isi_berita" id="isi" placeholder="isi Berita" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Pengirim</label>
                        <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="pengirim" required>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>