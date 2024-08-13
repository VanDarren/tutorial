<main id="main" class="main">

<div class="pagetitle">
  <h1>Transaksi</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
	  <li class="breadcrumb-item active">Data</li>
	</ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
	<div class="col-lg-12">

	  <div class="card">
		<div class="card-body">
		  <h5 class="card-title">Transaksi</h5>
		  <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
		
		  <!-- Table with stripped rows -->
		  <table class="table datatable">
			<thead>
			  <tr>
				<th scope="col">No</th>
				<th scope="col">Nama Obat</th>
                <th scope="col">Jumlah</th>
				<th scope="col">Tanggal</th>
                <th scope="col">Sub-Total</th>
				<th scope="col">Bayar</th>
				<th scope="col">Kembalian</th>
				


				<th scope="col">Aksi</th>
			  </tr>
			</thead>
			<tbody>
			<?php
	$no=1;
	foreach ($darren as $key) {
		
	?>
	<tr>
	<td><?= $no++ ?></td>

	<td><?= $key->nama_obat ?></td>
	<td><?= $key->jumlah ?></td>
    <td><?= $key->tanggal ?></td>
	<td><?= $key->subtotal ?></td>
	<td><?= $key->bayar ?></td>
	<td><?= $key->kembalian ?></td>

	<td>
		<a href=" <?= base_url('home/edittransaksi/'.$key->id_transaksi)?>">
		<button class="btn btn-warning"><i class="bx bx-highlight"></i></button>
		</a>

		<a href=" <?= base_url('home/hapustransaksi/'.$key->id_transaksi)?>">
		<button class="btn btn-danger"><i class="bx bx-trash"></i></button>
		</a>
	</td>
	</tr>
<?php } ?>
			</tbody>
		  </table>
		  <!-- End Table with stripped rows -->

		</div>
	  </div>

	</div>
  </div>
</section>

</main><!-- End #main -->

