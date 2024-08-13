<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
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
             
                <form action="<?= base_url('home/aksieditobat')?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="Enter Nama 0bat" 
                  name="nama" value="<?= $darren->nama_obat?>">
                  </div>

                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Jenis Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenis" placeholder="Enter Jenis Obat" 
                  name="jenis" value="<?= $darren->jenis_obat?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Harga Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="harga" placeholder="Enter Harga Obat" 
                  name="harga" value="<?= $darren->harga?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stok Obat</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="stok" placeholder="Enter Stok Obat" 
                  name="stok" value="<?= $darren->stok?>">
                  </div>
                </div>

                <input type="hidden" name="id" value="<?=$darren->id_obat?>">

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


