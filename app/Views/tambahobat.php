<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
             
                <form action="<?= base_url('home/aksi_t_obat')?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="Enter Nama Obat" 
                  name="nama">
                  </div>

                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Jenis Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenis" placeholder="Enter Jenis Obat" 
                  name="jenis">
                  </div>
                </div>

             
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="harga" placeholder="Enter Harga Obat" 
                  name="harga">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
