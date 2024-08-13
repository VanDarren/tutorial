<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kasir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Transaksi</h5>

              <!-- Horizontal Form -->
              <form action="<?=base_url("home/kasir1")?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputText" name="tanggal1" value="<?php echo date('Y-m-d'); ?>" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="kodeObat" class="col-sm-2 col-form-label">Kode Obat</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="kodeObat" name="kode_obat" oninput="updateHarga()" required>
                  </div>
                </div>
              
                <div class="row mb-3">
                  <label for="namaObat" class="col-sm-2 col-form-label">Nama Obat</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="namaObat" name="nama_obatt" readonly >
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="hargaObat" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="hargaObat" name="hargaa" readonly >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="jumlahh" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="jumlahh" name="jumlah1" oninput="subTotal()" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="subtotall" class="col-sm-2 col-form-label">Sub-Total</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subtotall" name="subtotal1" readonly > 
                    <br>
                    <a href="<?=base_url("home/kasir1")?>">
                    <button class="btn btn-primary"><i class="bx bx-send"></i></button>
                    </a>
                  </div>
                </div>
                <?php
                foreach ($nota as $not){

                  $total= $not->harga * $not->jumlah;
                  $total_bayar += $total;
                

}
?>
</form>
                <hr>

<form action="<?=base_url("home/bayaran")?>" method="POST">
                <div class="row mb-3">
                <input type="hidden" class="form-control" id="hargatotal" value="<?php echo $total_bayar; ?>">
                  <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="bayarr" name="bayarrr" oninput="bayarKembali()" required>
</div>
<?php
                foreach ($nota as $not){

                  $bayar = $not->bayar;
                  $kembalian = $not->kembalian;
                }
                ?>
                </div>

                <div class="row mb-3">
                  <label for="bayar" class="col-sm-2 col-form-label">Kembali</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="kembalii" name="kembalian" readonly>
                  </div>
    
                </div>

                <div class="text-right">
                  
                  <button type="submit" class="btn btn-primary">Bayar</button>
                  
                </div>
              
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
          
          </div>

        </div>





         <div class="col-lg-7">
        <div class="card">
       
      
        
          

            <div class="card-header bg-white border-0 pb-0 pt-4">
            <h5 class = "card-title mb-0 text-center"><b>NOTA</b></h5>
            
              <div class="row text-center">
              <div class="col-6 col-sm-7 pr-0">
                <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                   
                    <li>KASIR : <?php echo session()->get('nama') ?></li>
                </ul>
              </div>
              <div class="col-4 col-sm-3 pl-0">
              <ul class="pl-0 small" style="list-style: none;">
                    <li>TGL : <?php echo  date("j-m-Y");?></li>
                    <li>JAM : <?php echo  date("G:i:s");?></li>
                </ul>
              </div>
          </div>
          <div class="card-body small pt-0">
            <hr class="mt-0">
    <table class="table">
      <thead>
        <tr>
          
          <th scope="col">Nama Obat</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Sub-Total</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
$no=1;
foreach ($nota as $not){ ?>

  <tr>

    <td> <?= $not->nama_obat  ?></td></a> 
    
    <td> <?= $not->harga ?> </td>
<td> <?= $not->jumlah?> </td>
<td> <?= $not->subtotal?> </td>
<td><a href="<?= base_url("home/hapus/".$not->id_nota)?>">
<i class="bx bx-stop-circle"></i>
</a></td>
<?php } ?>
      </tbody>
    </table>
<table class="table">
    <div class="col-12">
    <ul class="list-group border-0">
    <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
      <b>Total</b>
      <span><b><?= $total_bayar ?></b></span>
    </li>
    <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
      <b>Bayar</b>
      <span><b><?= $bayar ?></b></span>
    </li>
    <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
      <b>Kembalian</b>
      <span><b><?= $kembalian ?></b></span>
    </li>
    </ul>
          </div> 
          <div class="col sm-12 mt-3 text-center">
          * TERIMA KASIH SUDAH BERBELANJA *
          </div>   
</table>

      <form action="<?= base_url("home/selesai")?>" method='POST'>
<a href="<?=base_url("home/printnota")?>">
     
</a>


        <form action="<?=base_url("home/selesai")?>" method="POST">
        <button class="btn btn-success" type="submit">Selesai</button>
        

      </form>


     
              <!-- End floating Labels Form -->

  
    <script type="text/javascript">
      const obatPrices = {
        <?php foreach ($darren as $key) { ?>
          "<?= $key->kode_obat ?>": {
          nama: "<?= $key->nama_obat ?>",
          harga: "<?= $key->harga ?>"
        },
          <?php } ?>
      };

      function updateHarga() {
        const kodeObatInput = document.getElementById("kodeObat");
        const namaObatInput = document.getElementById("namaObat");
        const hargaObatInput = document.getElementById("hargaObat");

        const kodeObat = kodeObatInput.value;
        const dataObat = obatPrices[kodeObat];

        if(dataObat !== undefined){
          namaObatInput.value = dataObat.nama;
          hargaObatInput.value = dataObat.harga;
        } else {  
          namaObatInput.value = '';
          hargaObatInput.value = '';
        }
      }

      

      function subTotal() {
        const hargaInput =  document.getElementById("hargaObat");
        const jumlahbeliInput = document.getElementById("jumlahh");
        const subInput = document.getElementById("subtotall");

        const quantity = jumlahbeliInput.value;
        const harga = hargaInput.value;
        
        const jumlahHarga = quantity * harga;

        if(jumlahHarga !== undefined){
        subInput.value = jumlahHarga;
        } else {  
        subInput.value = '';
        }
      }


      function bayarKembali() {
        const bayarInput =  document.getElementById("bayarr");
        const hargaBarang =  document.getElementById("hargatotal");
        const kembaliInput =  document.getElementById("kembalii");
        
        const harga = hargaBarang.value;
        const pembayaran = bayarInput.value;
        
        const kembalian = pembayaran - harga ;

        if(kembalian !== undefined){
        kembaliInput.value = kembalian;
        } else {  
          kembaliInput.value = '';
        }

        function printContent(elementId) {
         var pdf = new jsPDF();
    
    // Get the HTML content of the element
    var element = document.getElementById(elementId);
    var html = element.innerHTML;

    // Add the HTML content to the PDF
    pdf.fromHTML(html, 15, 15);

    // Save the PDF with a specific name
    pdf.save('your_file_name.pdf');
    }
      }
      
  </script>
  </main><!-- End #main -->