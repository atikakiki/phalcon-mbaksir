<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;
use Phalcon\Init\Dashboard\Models\Logs;

class Akun extends Model
{
	// public function initialize()
 //    {
 //        $this->setSource('users');
 //    }
    
    public $id_akun;
    public $username;
    public $role;
    public $password;
    public $status;
    public $nama;
    public $email;
    public $no_telp;
    public $alamat;
    public $jobdesc;
    public $tahun_bekerja;
    // public $created;
}