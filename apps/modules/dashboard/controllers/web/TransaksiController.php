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

class TransaksiController extends Controller
{

    public function indexAction()
    {
 		$pesanan = Pesanan::find();
        $transaksi = Transaksi::find();
        // $data = array($pesanan,$transaksi);
        // var_dump($data);
        // $this->view->disable();
        $this->view->data=$pesanan;
        $this->view->transaksi=$transaksi;
    }
}