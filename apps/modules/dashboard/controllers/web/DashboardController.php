<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Akun;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class DashboardController extends Controller
{

    // public function beforeExecuteRoute(Dispatcher $dis)
    // {
    //     // var_dump();die();
    //     // if(!$this->session->has('auth') && $dis->getactionName()!='index') $this->response->redirect('/');
    // }

    public function indexAction()
    {
 
    }

    public function signupAction()
    {
        $this->view->pick('dashboard/signup');
    }

     public function storeAction()
    {
        $user = new akun();
        $user->nama = $this->request->getPost('nama');
        $user->email = $this->request->getPost('email');
        $user->no_telp = $this->request->getPost('no_telp');
        $user->alamat = $this->request->getPost('alamat');
        $user->jobdesc = $this->request->getPost('jobdesc');
        $user->tahun_bekerja = $this->request->getPost('tahun_bekerja');
        $user->username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user->password = $this->security->hash($password);
        $user->role = $this->request->getPost('role');
        $user->status = $this->request->getPost('status');
        // $user->created = date();
        // var_dump($user);
        $u = akun::findFirst("username = '$user->username'");
        if($u){
            $this->flashSession->error("Username telah digunakan, akun tidak dapat dibuat");
            return $this->response->redirect('/');
        }
        else{
            $user->save();
            $this->response->redirect('/');
        }
        // var_dump($user);
        // $this->view->disable();
        //die;
    
    }


    public function postloginAction()
    {
        //$request = new akun(); //nama model
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        // $users = akun::find();
        // $this->view->users = $users;
        // var_dump($user->password);die();
        $u = akun::findFirst("username='$username'");
        if($u)
        {
            if($u->status == 0){
                $this->response->redirect('/');
                // echo"masuk";
            }
            else{
                if($this->security->checkHash($password, $u->password)){
                    $this->session->set
                    ('user',
                        [   'id_akun' => $u->id_akun,
                            'username' => $u->username]
                    );
                    if($u->role == 1){
                        $this->response->redirect('/dashboard/pegawai');
                        // $this->flashSession->success('Anda telah login');
                        // $this->flashSession->error('Password anda salah');
                        //echo "data salah";
                    }
                    else{
                        $this->response->redirect('/dashboard/pemilik');
                    }
                }
            }
        }
    }

    public function pegawaiAction()
    {
        $conditions = ['role'=>1];
        $akun = Akun::find([
            'conditions' => 'role=:role:',
            'bind' => $conditions,
        ]);
        // $akun = Menu::find();
        $this->view->akun = $akun;
        $this->view->pick('dashboard/dashboard_pegawai');
    }

    public function pemilikAction()
    {
        $conditions = ['role'=>2];
        $akun = Akun::find([
            'conditions' => 'role=:role:',
            'bind' => $conditions,
        ]);
        // $akun = Menu::find();
        $this->view->akun = $akun;
        $this->view->pick('dashboard/dashboard_pemilik');
    }


    public function logoutAction()
    {
        $this->session->destroy();
        // $this->flashSession->success('Anda telah logout');
        $this->response->redirect('/');
    }


} 