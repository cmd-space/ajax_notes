<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {
  public function index_html()
  {
  	$this->load->model('Note');
  	$data['notes'] = $this->Note->all();
   	$this->load->view('partials/notes', $data);
  }

  public function create()
  {
  	$this->load->model('Note');
  	$note = $this->input->post();
  	$this->Note->create($note);
  	redirect('/');
  }

  public function destroy($id)
  {
  	$this->load->model('Note');
  	$this->Note->destroy($id);
  	redirect('/');
  }

  public function update($id)
  {
  	$this->load->model('Note');
  	if($this->input->post('title') && $this->input->post('desc'))
  	{
  		$desc = array('title' => $this->input->post('title'),
  					  'description' => $this->input->post('desc'));
  		$this->Note->update_title($id, $desc['title']);
  		$this->Note->update_desc($id, $desc['description']);
  	}
  	elseif($this->input->post('title'))
  	{
  		$desc['title'] = $this->input->post('title');
  		$this->Note->update_title($id, $desc);
  	}
  	elseif($this->input->post('desc'))
  	{
  		$desc['description'] = $this->input->post('desc');
  		$this->Note->update_desc($id, $desc);
  	}
  	
  	redirect('/');
  }

  public function index()
  {
  	$this->output->enable_profiler(TRUE);
    $this->load->model('Note');
    $this->load->view('index');
  }
}

//end of main controller
