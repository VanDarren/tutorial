<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Pelanggan</h1>
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
             
                <form action="<?= base_url('home/aksiedittransaksi')?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="Enter Nama Obat" 
                  name="nama" value="<?= $darren->nama_obat?>">
                  </div>

                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="jumlah" placeholder="Enter Jumlah" 
                  name="jumlah" value="<?= $darren->jumlah?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal" 
                  name="tanggal" value="<?= $darren->tanggal?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Subtotal</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="subtotal" placeholder="Enter Subtotal" 
                  name="subtotal" value="<?= $darren->subtotal?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="harga" placeholder="Enter Harga" 
                  name="harga" value="<?= $darren->harga?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Bayar</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="subtotal" placeholder="Enter Bayar" 
                  name="bayar" value="<?= $darren->bayar?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kembalian</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="subtotal" placeholder="Enter Kembalian" 
                  name="kembalian" value="<?= $darren->kembalian?>">
                  </div>
                </div>

               
                <input type="hidden" name="id" value="<?=$darren->id_pelanggan?>">

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


