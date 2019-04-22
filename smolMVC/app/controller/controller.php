<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		if($pageURI != null) $this->$pageURI();
    }
    

    // Single page application
    // Satisfy all needs, the AJAX will be responsible for showing and hiding.
	function spa()
	{
        $data = $this->model->home_data();
        $this->load->view('home', $data);

        $data = $this->model->about_data();
        $this->load->view('about', $data);

        $data = $this->model->rockets_data();
        $this->load->view('rockets', $data);
    }
    

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	}

	function apiGetData()
	{
		$data = $this->model->dbGetData();
		print json_encode($data);
	}

}
?>    