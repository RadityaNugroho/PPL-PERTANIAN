<?php 

class Home extends Controller{

	public function index()
	{
		$data['judul'] = 'Home';
		$this->view('templates/headerHome', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}

 ?>