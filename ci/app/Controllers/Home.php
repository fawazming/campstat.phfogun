<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = session();
		$logged_in = $session->get('admin_logged_in');
		if ($logged_in) {
			return redirect()->to(base_url('dashboard'));
		} else {
			echo view('login');
		}
	}

	public function auth()
	{
		$session = session();
		$uname = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if ($uname == 'phfogun' && $password=='pmc2020'){
			$newdata = array(
				'admin' => $uname,
				'admin_logged_in' => TRUE
			);
			$session->set($newdata);
			return redirect()->to(base_url('dashboard'));
		} else {
			return redirect()->to(base_url('/'));
		}
	}

	public function logout()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			session()->destroy();
			return redirect()->to(base_url('/'));
		} else {
			echo view('login');
		}
	}
	
	public function dashboard()
	{
		// echo('dashboard');	
		$logged_in = session()->get('admin_logged_in');
		$Delegates = new \App\Models\Delegates();
		if ($logged_in) {

			$data = array(
				'total_del' => $Delegates->countAll(),
				'remo' => $Delegates->where('lb','Remo')->countAllResults(),
				'egba' => $Delegates->where('lb','Egba')->countAllResults(),
				'ijebu' => $Delegates->where('lb','Ijebu')->countAllResults(),
				'aoo' => $Delegates->where('lb','Other')->countAllResults(),
				'male' => $Delegates->where('gender','male')->countAllResults(),
				'female' => $Delegates->where('gender','female')->countAllResults(),
				'psec' => $Delegates->where('category','primary')->countAllResults(),
				'jsec' => $Delegates->where('category','jsec')->countAllResults(),
				'ssec' => $Delegates->where('category','ssec')->countAllResults(),
				'hi' => $Delegates->where('category','hi')->countAllResults(),
				'workers' => $Delegates->where('category','Workers')->countAllResults(),
				'sch_leaver' => $Delegates->where('category','sch_leaver')->countAllResults(),
			);

			echo view('header');
			echo view('dashboard', $data);
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	
	public function printe()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			$Delegates = new \App\Models\Delegates();

			$data = array(
				'delegates' => $Delegates->findAll(),
				'type' => 'Electronic'
			);

			echo view('header');
			echo view('print', $data);
			echo view('footer');
		} else {
			echo view('login');
		}
	}

	//--------------------------------------------------------------------

}
