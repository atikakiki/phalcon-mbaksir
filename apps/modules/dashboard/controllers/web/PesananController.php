<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Akun;
use Phalcon\Init\Dashboard\Models\Transaksi;
use Phalcon\Init\Dashboard\Models\Menu;
use Phalcon\Init\Dashboard\Models\Pesanan;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class PesananController extends Controller
{

    // public function beforeExecuteRoute(Dispatcher $dis)
    // {
    //     // var_dump();die();
    //     // if(!$this->session->has('auth') && $dis->getactionName()!='index') $this->response->redirect('/');
    // }

    public function indexAction()
    {
 		$conditions = ['status'=>1];
        $menu = Menu::find([
            'conditions' => 'status=:status:',
            'bind' => $conditions,
        ]);
    	$this->view->menu = $menu;
    }

    public function pesanAction(){
    		// $pesanan = new Pesanan();
            $total = 0;
            $data = array();
    		$nama_pemesan = $this->request->getPost('nama_pemesan');
    		$id_pegawai = $this->request->getPost('id_pegawai');
    		// $pesanan->id_menu = $this->request->getPost('id_menu');
    		$nama_menu = $this->request->getPost('nama_menu');
    		// $pesanan->harga = $this->request->getPost('harga');
    		$jumlah = $this->request->getPost('jumlah');
    		$count = count($nama_menu);
    		foreach ($nama_menu as $i => $value) {
    			$menu = Menu::findFirst(['nama_menu' => $nama_menu[$i]]);
    			$pesanan=new Pesanan();
    			$pesanan->nama_pemesan=$nama_pemesan;
    			$pesanan->id_pegawai=$id_pegawai;
    			$pesanan->id_menu = $menu->id_menu;
    			$pesanan->harga = $menu->harga;
    			$pesanan->total = $menu->harga * $jumlah[$i];
                $total = $total + $pesanan->total;
    			$pesanan->nama_menu=$nama_menu[$i];
    			$pesanan->jumlah=$jumlah[$i];
    			// var_dump($pesanan);
                array_push($data, $pesanan);
    			$pesanan->save();
    		}
            $this->view->setVar('total',$total);
             $this->view->setVar('nama',$nama_pemesan);
    		$this->view->pesanan =$data; 
            $this->view->pick('pesanan/pesan');
    		
    }

    public function checkoutAction(){
    	// echo "masuk";
     //    $this->view->disable();
        $transaksi = new Transaksi();
        $transaksi->nama_pemesan = $this->request->getPost('nama_pemesan');
            $transaksi->id_pegawai = $this->request->getPost('id_pegawai');
            // $pesanan->id_menu = $this->request->getPost('id_menu');
            $transaksi->total_pembelian = $this->request->getPost('total_bayar');
            // $pesanan->harga = $this->request->getPost('harga');
            $transaksi->pembayaran = $this->request->getPost('pembayaran');
            // // var_dump($transaksi);
            // $this->view->disable();
            $transaksi->save();
            $this->response->redirect('/pesanan');
    }
}