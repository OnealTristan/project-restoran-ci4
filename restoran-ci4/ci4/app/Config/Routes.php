<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/','Front\Home::index');
$routes->group('/',function($routes){
	$routes->add('logout','Front\Auth::logout');
	$routes->add('keranjang','Front\Cart::index');
	$routes->add('login','Front\Auth::viewlogin');
	$routes->add('authlogin','Front\Auth::authlogin');
	$routes->add('register','Front\Auth::viewregister');
	$routes->add('hapus/(:any)','Front\Cart::hapus/$1');
	$routes->add('authregister','Front\Auth::authregister');
	$routes->add('keranjang/plus/(:any)/(:any)', 'Front\Cart::plus/$1/$2');
	$routes->add('keranjang/minus/(:any)/(:any)', 'Front\Cart::minus/$1/$2');
	$routes->add('tambah-ke-keranjang/(:any)','Front\Cart::tambah_ke_keranjang/$1');
});

$routes->group('/',['filter' => 'Auth2'],function($routes){
	$routes->add('checkout','Front\Checkout::index');
	$routes->add('bayar', 'Front\Cart::insertorder');
	$routes->add('success', 'Front\Checkout::sukses');
	$routes->add('historypembelian', 'Front\Historypembelian::index');
	$routes->add('statuspembayaran', 'Front\Statuspembayaran::index');
});

$routes->get('/admin/login', 'Admin\Login::index');

$routes->group('admin',['filter' => 'Auth'],function($routes){
	$routes->add('/','Admin\Adminpage::index');
	// Kategori
	$routes->add('kategori','Admin\Kategori::read');
	$routes->add('kategori/create','Admin\Kategori::create');
	$routes->add('kategori/find/(:any)','Admin\Kategori::find/$1');
	$routes->add('kategori/delete/(:any)','Admin\Kategori::delete/$1');
	// Menu
	$routes->add('menu','Admin\Menu::index');
	$routes->add('menu/create','Admin\Menu::create');
	$routes->add('menu/find/(:any)','Admin\Menu::find/$1');	
	$routes->add('menu/delete/(:any)','Admin\Menu::delete/$1');
	// Pelanggan
	$routes->add('pelanggan','Admin\Pelanggan::index');	
	$routes->add('pelanggan/delete/(:any)','Admin\Pelanggan::delete/$1');	
	// Order
	$routes->add('order','Admin\Order::index');	
	$routes->add('order/find/(:any)','Admin\Order::find/$1');	
	// Order Detail
	$routes->add('orderdetail','Admin\Orderdetail::index');	
	// User
	$routes->add('user','Admin\User::index');
	$routes->add('user/create','Admin\User::create');
	$routes->add('user/find/(:any)','Admin\User::find/$1');		
	$routes->add('user/delete/(:any)','Admin\User::delete/$1');
});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}