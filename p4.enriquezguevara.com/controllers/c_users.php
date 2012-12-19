<?php

class users_controller extends base_controller{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function index(){
	
	}
	
	public function signup(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);

		#here you call css star
			$this->template->content = View::instance("v_users_signup");
			$this->template->title = "Signup";
		echo $this->template;
	}
	public function p_signup() {
	#$client_files = Array("/css/style.css");
	#$this->template->client_files = utils::load_client_files($client_files);
		
	$q= "select * 
	from users 
	WHERE phone1 = '".$_POST['phone1']."'
	and phone2 = '".$_POST['phone2']."'
	and phone3 = '".$_POST['phone3']."'";
	$token = DB::instance(DB_NAME)->select_field($q);
	if($token==""){
					if($_POST['first_name']=="" or $_POST['last_name']=="" or $_POST['phone1']=="" or $_POST['phone2']=="" or $_POST['phone3']=="" or $_POST['address']=="" or $_POST['city']=="" or $_POST['zipcode']=="" or $_POST['password']=="" or $_POST['email']==""){
						Router::redirect("/users/failed/");

					}else{
						$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
						$_POST['newpassword'] = "temporal";
						$_POST['renewpassword'] = "temporal";
						$_POST['created'] = Time::now();
						$_POST['modified'] = Time::now();
						$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
						$_POST['state'] = "Massachussetts";
						# Insert this user into the database
						#$user_id = 	
						DB::instance(DB_NAME)->insert('users', $_POST);
							//Router::redirect("/users/login/");//login change this
		$q = "SELECT token 
		FROM users 
		WHERE phone1 = '".$_POST['phone1']."'
	and phone2 = '".$_POST['phone2']."'
	and phone3 = '".$_POST['phone3']."'";
	
	$token = DB::instance(DB_NAME)->select_field($q);	
				
	# If we didn't get a token back, login failed
	
					
								# Store this token in a cookie
								@setcookie("token", $token, strtotime('+1 year'), '/');
		
								# Send them to the main page - or whever you want them to go
								Router::redirect("/users/menu/");
					}
		}
		
	}
	
	public function login(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = Utils::load_client_files($client_files);

		$this->template->content = View::instance('v_users_login');
		$this->template->title = "Login";
		echo $this->template;
	}
	
public function p_login() {
	
	# Hash submitted password so we can compare it against one in the db
	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	
	# Search the db for this email and password
	# Retrieve the token if it's available
	$q = "SELECT token 
		FROM users 
		WHERE phone1 = '".$_POST['phone1']."'
		and phone2 = '".$_POST['phone2']."'
		and phone3 = '".$_POST['phone3']."'
		and password = '".$_POST['password']."'";
	$token = DB::instance(DB_NAME)->select_field($q);	
				
	# If we didn't get a token back, login failed
	
					if($_POST['phone1']=="" or $_POST['phone2']=="" or $_POST['phone3']=="" or $_POST['password']==""){
						Router::redirect("/users/failed/");
	
					}else{
							if($token=="") {
			
								# Send them back to the login page
								Router::redirect("/users/failed/");
			
								# But if we did, login succeeded! 
							} else {
				
								# Store this token in a cookie
								@setcookie("token", $token, strtotime('+1 year'), '/');
		
								# Send them to the main page - or whever you want them to go
								Router::redirect("/users/menu/");
							}
					}
	

}

public function p_reset() {
	
	# Hash submitted password so we can compare it against one in the db
	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	
	# Search the db for this email and password
	# Retrieve the token if it's available
	$q = "SELECT token 
		FROM users 
		WHERE email = '".$_POST['email']."' 
		AND password = '".$_POST['password']."'
		and phone1 = '".$_POST['phone1']."' 
		and phone2 = '".$_POST['phone2']."' 
		and phone3 = '".$_POST['phone3']."' ";
	
	$token = DB::instance(DB_NAME)->select_field($q);	
				
	# If we didn't get a token back, login failed
	
				if($token=="") {
			
								# Send them back to the login page
								Router::redirect("/users/failed/");
			
								# But if we did, login succeeded! 
							}else{ 
				
										if($_POST['email']=="" or $_POST['password']=="" or $_POST['phone1']==""or $_POST['phone2']=="" or $_POST['phone3']=="" or $_POST['newpassword']==""or $_POST['renewpassword']==""){
											Router::redirect("/users/failed/");
											}else{	
							
											if($_POST['newpassword']== $_POST['renewpassword']){
												
											# Store this token in a cookie
											@setcookie("token", $token, strtotime('+1 year'), '/');
													$_POST['password'] = sha1(PASSWORD_SALT.$_POST['renewpassword']);
													$_POST['newpassword'] = "temporal";
													$_POST['renewpassword'] = "temporal";
				$q = "UPDATE users 
			set password = '".$_POST['password']."'
		WHERE token = '".$token."'
		and phone1 = '".$_POST['phone1']."' 
		and phone2 = '".$_POST['phone2']."' 
		and phone3 = '".$_POST['phone3']."'";
	
		
											DB::instance(DB_NAME)->select_field($q, $_POST);
			
											Router::redirect("/users/menu");
											}
							}
					}
	

}//p_reset
		
	public function failed(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);
		$this->template->content = View::instance('v_users_failed');
		echo $this->template;
	}
	public function forgot(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);
		$this->template->content = View::instance('v_users_forgot');
		echo $this->template;
	}
	
	
	
	
		public function reset(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);
		$this->template->content = View::instance('v_users_reset');
		echo $this->template;
	}
	
	public function logout() {
		if (!$this->user){
	Router::redirect("/");
			return false;
		}
$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);
	# Generate and save a new token for next login
	$new_token = sha1(TOKEN_SALT.$email.Utils::generate_random_string());
	
	# Create the data array we'll use with the update method
	# In this case, we're only updating one field, so our array only has one entry
	$data = Array("token" => $new_token);
	
	# Do the update
	DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$token."'");
	
	# Delete their token cookie - effectively logging them out
	setcookie("token", "", strtotime('-1 year'), '/');
	
	#echo "You have been logged out.";
$this->template->content = View::instance('v_users_logout');
		$this->template->title = "Logout";
		echo $this->template;

}
	

	
	public function menu(){
			$client_files = Array("/css/style.css","/js/jquery.js");
		$this->template->client_files = utils::load_client_files($client_files);
		
		
		if (!$this->user){
	Router::redirect("/");
			return false;
		}else{
			#setup the view
		$this->template->content = View::instance('v_users_menu');
		
		$this->template->title = "Welcome ".$this->user->first_name;
		
		
	# Render view
	echo $this->template;
		}
		}
	}