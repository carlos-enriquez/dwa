<?php

class users_controller extends base_controller{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function index(){
		echo "Welcome to the users department";
	}
	
	public function signup(){
		echo "display the login page";
	}
	
	public function logout(){
		echo "display the logout page";	
	}
	
	public function profile($user_name){
		
		if ($user_name == NULL){
			echo "no user";
		}else{
			#setup the view
		$this->template->content = View::instance("V_users_profile");
		/*echo "this is the profile of ".$user_name;	*/   /*check */
		$this->template->title = "Profile for ".$user_name;
		
		#set up client files
		$client_files = Array("/css/users.css","/js/users.js");
		$this->template->client_files = utils::load_client_files($client_files);
		
		#render the view
		echo $this->template;
		}
	}



}