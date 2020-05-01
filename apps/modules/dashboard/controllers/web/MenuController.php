<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Akun;
use Phalcon\Init\Dashboard\Models\Menu;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class MenuController extends Controller
{
    public function indexAction()
    {
 	// 	$db = $this->getDI()->get('db');
  //   	$sql = "Select * from Menu";
		// $result = $db->fetchOne($sql, \Phalcon\Db\Enum::FETCH_ASSOC);
    	$conditions = ['status'=>1];
        $menu = Menu::find([
            'conditions' => 'status=:status:',
            'bind' => $conditions,
        ]);
      // $menu = Menu::find();
    	$this->view->data = $menu;
    	// echo var_dump($menu);
    	// $this->view->disable();
    }

    public function addAction()
    {
    	$menu = new Menu();
        $menu->nama_menu = $this->request->getPost('nama_menu');
        $menu->kategori = $this->request->getPost('kategori');
        $menu->harga = $this->request->getPost('harga');
        $menu->status = true;
        // var_dump($menu);
        $menu->save();
        $this->response->redirect('/menu');
    }


    public function editAction($id_menu)
    {
      // $menu = Menu::findFirstByIdUser($id);
      // $Menu = Menu::findFirst("id_menu='$id_menu'");
      // $this->view->menu = $menu;
      $conditions = ['id_menu'=>$id_menu];
        $menu = Menu::findFirst([
            'conditions' => 'id_menu=:id_menu:',
            'bind' => $conditions,
        ]);
        // $this->view->title = "Phalcon - User";
        $this->view->menu = $menu;
    }

    public function updateAction($id_menu)
    {
        $menu = Menu::findFirstByidMenu($id_menu);
        $menu->nama_menu = $this->request->getPost('nama_menu');
        $menu->kategori = $this->request->getPost('kategori');
        $menu->harga = $this->request->getPost('harga');
        // $menu->status = true;
        // var_dump($menu);
        $menu->save();
        $this->response->redirect('/menu');
    }

    public function deleteAction($id_menu)
    {
        $menu = Menu::findFirstByidMenu($id_menu);
        $menu->status = false;
        $menu->save();
        $this->response->redirect('/menu');
    }
}