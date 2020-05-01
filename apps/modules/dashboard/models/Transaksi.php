<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;
use Phalcon\Init\Dashboard\Models\Logs;

class Transaksi extends Model
{
	// public function initialize()
 //    {
 //        $this->setSource('users');
 //    }
    
    public $id_transaksi;
    public $id_pegawai;
    public $nama_pemesan;
    public $total_pembelian;
    public $pembayaran;
    public $created_at;
}