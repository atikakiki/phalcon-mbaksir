<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;
use Phalcon\Init\Dashboard\Models\Logs;

class Menu extends Model
{
	// public function initialize()
 //    {
 //        $this->setSource('users');
 //    }
    
    public $id_menu;
    public $nama_menu;
    public $kategori;
    public $harga;
    public $status;
}