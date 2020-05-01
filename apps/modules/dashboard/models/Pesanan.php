<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;
use Phalcon\Init\Dashboard\Models\Logs;

class Pesanan extends Model
{
	// public function initialize()
 //    {
 //        $this->setSource('users');
 //    }
    public $id_pesanan;
    public $nama_pemesan;
    public $id_menu;
    public $harga;
    public $jumlah;
    public $total;
    public $created_at;
}