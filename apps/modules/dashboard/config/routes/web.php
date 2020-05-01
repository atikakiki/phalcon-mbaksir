<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

$router->addPost('/store', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'store'
]);

$router->addGet('/dashboard', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'Dashboard',
    'action' => 'dashboard'
]);

$router->addGet('/coba', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'Dashboard',
    'action' => 'coba'
]);

$router->addGet('/dashboard/postlogin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'Dashboard',
    'action' => 'login'
]);

$router->addPost('/dashboard/postlogin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'Dashboard',
    'action' => 'postlogin'
]);

$router->addGet('/signup', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'signup'
]);

$router->addGet('/login', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'index'
]);

$router->addGet('/logout', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'logout'
]);

$router->addGet('/dashboard/pegawai', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'pegawai'
]);

$router->addPost('/dashboard/pemilik', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'pemilik'
]);

$router->addGet('/dashboard/pemilik', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'dashboard',
    'action' => 'pemilik'
]);

$router->addGet('/menu', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'menu',
    'action' => 'index'
]);

$router->addPost('/menu/tambah', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'menu',
    'action' => 'add'
]);

$router->addPost('/menu/update/{id_menu}', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'menu',
    'action' => 'update'
]);

$router->addGet('/menu/edit/{id_menu}', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'menu',
    'action' => 'edit'
]);

$router->addPost('/menu/delete/{id_menu}', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'menu',
    'action' => 'delete'
]);

$router->addGet('/akun', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'index'
]);

$router->addGet('/akun/status/{id_akun}/{status}', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'status'
]);

$router->addPost('/akun/editProfil/{id_akun}' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'akun',
    'action' => 'editProfil'
]);

$router->addGet('/pesanan' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pesanan',
    'action' => 'index'
]);

$router->addPost('/pesanan/pesan' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pesanan',
    'action' => 'pesan'
]);

$router->addGet('/pesanan/pesan' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pesanan',
    'action' => 'pesan'
]);

$router->addPost('/pesanan/checkout' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pesanan',
    'action' => 'checkout'
]);

$router->addGet('/pesanan/checkout' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'pesanan',
    'action' => 'checkout'
]);

$router->addGet('/transaksi' , [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'transaksi',
    'action' => 'index'
]);

return $router;