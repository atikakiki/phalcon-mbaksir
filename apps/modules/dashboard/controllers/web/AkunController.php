<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Akun;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Manager;

class AkunController extends Controller
{

    // public function beforeExecuteRoute(Dispatcher $dis)
    // {
    //     // var_dump();die();
    //     // if(!$this->session->has('auth') && $dis->getactionName()!='index') $this->response->redirect('/');
    // }

    public function indexAction()
    {
 	// 	$db = $this->getDI()->get('db');
  //   	$sql = "Select * from Menu";
		// $result = $db->fetchOne($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
    	$conditions = ['role'=>1];
        $akun = Akun::find([
            'conditions' => 'role=:role:',
            'bind' => $conditions,
        ]);
        // $akun = Menu::find();
    	$this->view->akun = $akun;
    	// echo var_dump($menu);
    	// $this->view->disable();
    }

    public function statusAction($id_akun,$status){

        $akun = Akun::findFirstByidAkun($id_akun);
        if($status==0){
            $akun->status = 1;
            $akun->update();
        }
        elseif($status==1){
            $akun->status = 0;
            $akun->update();
        }
        else{
            echo"salah bang";
        }
       
        $this->response->redirect('/akun');
    }

    public function editProfilAction($id_akun){
         $user = Akun::findFirstByidAkun($id_akun);
        $user->nama = $this->request->getPost('nama');
        $user->email = $this->request->getPost('email');
        $user->no_telp = $this->request->getPost('no_telp');
        $user->alamat = $this->request->getPost('alamat');
        $user->jobdesc = $this->request->getPost('jobdesc');
        $user->tahun_bekerja = $this->request->getPost('tahun_bekerja');
        $user->username = $this->request->getPost('username');
        if($user->update()){
            $this->flashSession->success("Profil telah berhasil diupdate"); 
            if($user->role==2){
                        $this->response->redirect('/dashboard/pemilik'); }
                        else{
                             $this->response->redirect('/dashboard/pegawai');
                        }
        } 
    }
}