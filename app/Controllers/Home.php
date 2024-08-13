<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_apotek;
class Home extends BaseController
{
	public function index()
	{
		if(session()->get('level')>0){
			$model = new M_apotek;
			$data['darren']=$model->tampil('obat');
			$data['user']=$model->tampil('user');
			$data['nota']=$model->tampil('nota');
			echo view('header');
			echo view('menu');
			echo view('dashboard',$data); 
			echo view('footer');
			}else{
				return redirect()->to('home/login');
			}
	}

	public function obat()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$data['darren'] = $model->tampil('obat');
	echo view('header');
	echo view('menu');
	echo view('obat',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}

}

	public function login()
	{
		echo view('header');
		echo view('login'); 
	}

	public function aksi_login()
	{
	$a = $this->request->getPost('username');
	$b = $this->request->getPost('password');
	$where = array(
		'username'=>$a,
		'password'=>$b
	
	);
	
	$model = new M_apotek;
	$cek = $model->getWhere('user', $where);

	if($cek>0){
		session()->set('nama',$cek->username);
		session()->set('id',$cek->id_user);
		session()->set('level',$cek->level);
		return redirect()->to('home/index');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function logout()
{
	session()->destroy();
	return redirect()->to('home/login');
}



public function user()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$data['darren'] = $model->tampil('user');
	echo view('header');
	echo view('menu');
	echo view('user',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}

}	

public function pelanggan()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$data['darren'] = $model->tampil('pelanggan');
	echo view('header');
	echo view('menu');
	echo view('pelanggan',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}

}

public function transaksi()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	// $data['darren'] = $model->jointwo('transaksi','pelanggan','obat',
	// 'transaksi.id_pelanggan=pelanggan.id_pelanggan','transaksi.id_obat=obat.id_obat');
	$data['darren'] = $model->tampil('transaksi');
	echo view('header');
	echo view('menu');
	echo view('transaksi',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function tambahobat()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$data['darren'] = $model->tampil('obat');
	echo view('header');
	echo view('menu');
	echo view('tambahobat',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function aksi_t_obat()
{
	$nama = $this->request->getPost('nama');
	$jenis = $this->request->getPost('jenis');
	$harga = $this->request->getPost('harga');
		
	$tabel=array(
		'nama_obat'=>$nama,
		'jenis_obat'=>$jenis,
		'harga'=>$harga,
		'stok'=>'0'

	);

	$model=new M_apotek;
	$model->tambah('obat', $tabel);
	return redirect()->to('home/obat');

}

public function hapusobat($id)
{
	$model = new M_apotek;
	$where = array('id_obat' =>$id);
	$model->hapus('obat', $where);
	return redirect()->to('home/obat');
	
}

public function editobat($id)
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$where = array('id_obat' => $id);
	$data['darren'] = $model->getWhere('obat', $where);
	echo view('header');
	echo view('menu');
	echo view('e_obat',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function aksieditobat()
{
	$model = new M_apotek; 
	$a = $this->request->getPost('nama');
	$b = $this->request->getPost('jenis');
	$c = $this->request->getPost('harga');
	$d = $this->request->getPost('stok');
	$id = $this->request->getPost('id');
	$where = array('id_obat'=>$id);

	$isi = array(
		'nama_obat'=> $a,
		'jenis_obat'=> $b,
		'harga'=> $c,
		'stok'=> $d		

	);
	$model->edit('obat',$isi, $where);
	return redirect()->to('home/obat');
}

public function register()
{
	
	$model = new M_apotek;
	$data['darren'] = $model->tampil('user');

	echo view('register'); 


}

public function aksi_register()
{
	$username = $this->request->getPost('username');
	$password = $this->request->getPost('password');
	
		
	$tabel=array(
		'username'=>$username,
		'password'=>$password,
		'level'=>'1'

	);

	$model=new M_apotek;
	$model->tambah('user', $tabel);
	return redirect()->to('home/index');

}

public function hapususer($id)
{
	$model = new M_apotek;
	$where = array('id_user' =>$id);
	$model->hapus('user', $where);
	return redirect()->to('home/user');

}

public function edituser($id)
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$where = array('id_user' => $id);
	$data['darren'] = $model->getWhere('user', $where);
	echo view('header');
	echo view('menu');
	echo view('e_user',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function aksiedituser()
{
	$model = new M_apotek; 
	$a = $this->request->getPost('username');
	$b = $this->request->getPost('password');

	$id = $this->request->getPost('id');
	$where = array('id_user'=>$id);

	$isi = array(
		'username'=> $a,
		'password'=> $b

	);
	$model->edit('user',$isi, $where);
	return redirect()->to('home/user');
}

public function t_transaksi()
{
	if(session()->get('level')>0){
		$model = new M_apotek;
	$data['darren'] = $model->tampil('obat');
	$data['darren2'] = $model->tampil('pelanggan');

	$where=array('id_user' => session()->get('id'));
	$data['menu']=$model->getWhere('user',$where);

	echo view('header');
	echo view('menu',$data);
	echo view('tambahtransaksi',$data); 
	echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
}

public function aksi_t_transaksi()
{
	$a = $this->request->getPost('pelanggan');
	$b = $this->request->getPost('obat');
	$c = $this->request->getPost('tanggal');
	$d = $this->request->getPost('jumlah');

	$model = new M_apotek;
	$where=array('id_obat' => $b);
	$cek = $model->getWhere('obat',$where);

	$total = $d * $cek->harga;

	$transaksi=array(
		'id_pelanggan'=>$a,
		'id_obat'=>$b,
		'tanggal'=>$c,
		'jumlah'=>$d,
		'total'=>$total
	);
	$model = new M_apotek;
	$model -> tambah('transaksi',$transaksi);
	return redirect()->to('home/transaksi');

}

public function hapustransaksi($id)
{
	$model = new M_apotek;
	$nota = array('id_transaksi' =>$id);
	$model->hapus('transaksi', $nota);
	return redirect()->to('home/transaksi');

}

public function edittransaksi($id)
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$where = array('id_transaksi' => $id);
	$data['darren'] = $model->getWhere('transaksi', $where);
	echo view('header');
	echo view('menu');
	echo view('e_transaksi',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

// public function hapuspelanggan($id){		
// 	$model = new M_apotek;
// 	$where = array('id_pelanggan' =>$id);
// 	$model->hapus('pelanggan', $where);
// 	return redirect()->to('home/pelanggan');
// }

// public function editpelanggan($id)
// {
// 	if(session()->get('level')>0){
// 	$model = new M_apotek;
// 	$where = array('id_pelanggan' => $id);
// 	$data['darren'] = $model->getWhere('pelanggan', $where);
// 	echo view('header');
// 	echo view('menu');
// 	echo view('e_pelanggan',$data); 
// 	echo view('footer');
// }else{
// 	return redirect()->to('home/login');
// }
// }

public function tambahpelanggan()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	$data['darren'] = $model->tampil('pelanggan');
	echo view('header');
	echo view('menu');
	echo view('tambahpelanggan',$data); 
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function aksi_t_pelanggan()
{
	$nama = $this->request->getPost('nama');
	$jeniskelamin = $this->request->getPost('jeniskelamin');
	$nomor = $this->request->getPost('nomor');
		
	$tabel=array(
		'nama_pelanggan'=>$nama,
		'jenis_kelamin'=>$jeniskelamin,
		'nomor_hp'=>$nomor

	);

	$model=new M_apotek;
	$model->tambah('pelanggan', $tabel);
	return redirect()->to('home/pelanggan');

}

// public function aksieditpelanggan()
// {
// 	$model = new M_apotek; 
// 	$a = $this->request->getPost('nama');
// 	$b = $this->request->getPost('jeniskelamin');
// 	$c = $this->request->getPost('nomor');

// 	$id = $this->request->getPost('id');
// 	$where = array('id_pelanggan'=>$id);

// 	$isi = array(
// 		'nama_pelanggan'=> $a,
// 		'jenis_kelamin'=> $b,
// 		'nomor_hp'=> $c

// 	);
// 	$model->edit('pelanggan',$isi, $where);
// 	return redirect()->to('home/pelanggan');
// }

public function aksiedittransaksi()
{
	$model = new M_apotek; 
	$a = $this->request->getPost('nama');
	$b = $this->request->getPost('jumlah');
	$c = $this->request->getPost('tanggal');
	$d = $this->request->getPost('subtotal');
	$e = $this->request->getPost('harga');
	$f = $this->request->getPost('bayar');
	$g = $this->request->getPost('kembalian');


	$id = $this->request->getPost('id');
	$where = array('id_transaksi'=>$id);

	$isi = array(
		'nama_obat'=> $a,
		'jumlah'=> $b,
		'tanggal'=> $c,
		'subtotal'=> $d,
		'harga'=> $e,
		'bayar'=> $f,
		'kembalian'=> $g,


	);
	$model->edit('transaksi',$isi, $where);
	return redirect()->to('home/transaksi');
}

public function kasir1()
{
	$a = $this->request->getPost('tanggal1');
	$b = $this->request->getPost('nama_obatt');
	$c = $this->request->getPost('hargaa');
	$d = $this->request->getPost('jumlah1');
	$e = $this->request->getPost('subtotal1');

	$model = new M_apotek;

	$nota=array(
		'tanggal'=>$a,
		'nama_obat'=>$b,
		'harga'=>$c,
		'jumlah'=>$d,
		'subtotal'=>$e,
	
	);
	$model = new M_apotek;
	$model->tambah('nota',$nota);
	return redirect()->to('home/index');

}

public function hapus($id)
{
	$model = new M_apotek;
	$nota = array('id_nota' =>$id);
	$model->hapus('nota', $nota);
	return redirect()->to('home/index');

}


public function bayaran()
{
    $model = new M_apotek;
    $a = $this->request->getPost('bayarrr');
    $b = $this->request->getPost('kembalian');
	

    $isi = array(
		'tanggal'=> date('Y-m-d'),
        'bayar' => $a,
        'kembalian' => $b,
    );

    // Assuming you want to update all records in the 'nota' table
    $model->edit2('nota', $isi);

    return redirect()->to('home/index');
}

public function selesai()
{
    $model = new M_apotek;
	
    $isi = $model->tampilfilter('nota','id_nota');

    $model->selesai1($isi);
	$model->selesai2();

    return redirect()->to('home/index');
}

public function printnota()
{
	if(session()->get('level')>0){
	$model = new M_apotek;
	
	// echo view('header');
	// echo view('menu');
	
			$data['darren']=$model->tampil('obat');
			$data['user']=$model->tampil('user');
			$data['nota']=$model->tampil('nota');
	echo view('printnote',$data); 
	// echo view('footer');
}else{
	return redirect()->to('home/login');
}
}


}