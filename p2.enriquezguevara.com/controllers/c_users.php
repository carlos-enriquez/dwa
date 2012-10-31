<?php

class users_controller extends base_controller{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function index(){
	/*$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);


		$this->template->content = View::instance("v_welcome");
		echo $this->template;
	*/	
	}
	
	public function signup(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);

		#here you call css star
			$this->template->content = View::instance("v_users_signup");
			$this->template->title = "Signup";
		echo $this->template;
	}
	/*
	public function p_signup() {
	#$client_files = Array("/css/style.css");
	#$this->template->client_files = utils::load_client_files($client_files);
	if($_POST['first_name']=="" or $_POST['last_name']=="" or $_POST['password']=="" or $_POST['email']==""){
				Router::redirect("/users/signup/");

		}else{
	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
	$_POST['created'] = Time::now();
	$_POST['modified'] = Time::now();
	$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
	# Insert this user into the database
	#$user_id = 	
	DB::instance(DB_NAME)->insert('users', $_POST);
		Router::redirect("/users/login/");
	
	# For now, just confirm they've signed up - we can make this fancier later
	#I believe u need and if
	#same email 
	#do something like email already exist
	#else 
	}
	
		
	}*/
	public function p_signup() {
	#$client_files = Array("/css/style.css");
	#$this->template->client_files = utils::load_client_files($client_files);
		
	$q= "select * 
	from users 
	WHERE email = '".$_POST['email']."'";
	$token = DB::instance(DB_NAME)->select_field($q);
	if($token==""){
			if($_POST['first_name']=="" or $_POST['last_name']=="" or $_POST['password']=="" or $_POST['email']==""){
				Router::redirect("/users/signup/");

			}else{
				$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
				$_POST['created'] = Time::now();
				$_POST['modified'] = Time::now();
				$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
				# Insert this user into the database
				#$user_id = 	
				DB::instance(DB_NAME)->insert('users', $_POST);
					Router::redirect("/users/login/");
				
				# For now, just confirm they've signed up - we can make this fancier later
				#I believe u need and if
				#same email 
				#do something like email already exist
				#else 
			}
		}else{
					Router::redirect("/users/noemail/");
			}
	
		
	}
	public function noemail(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);

		$this->template->content = View::instance('v_users_noemail');
		$this->template->title = "Email already exists";
		echo $this->template;
	}
	
	public function login(){
		$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);

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
		WHERE email = '".$_POST['email']."' 
		AND password = '".$_POST['password']."'";
	
	$token = DB::instance(DB_NAME)->select_field($q);	
				
	# If we didn't get a token back, login failed
	
					if($_POST['email']=="" or $_POST['password']==""){
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
								Router::redirect("/users/profile/");
							}
					}
	

}
		
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
	

	
	public function profile(){
			$client_files = Array("/css/style.css");
		$this->template->client_files = utils::load_client_files($client_files);
		
		
		if (!$this->user){
			echo "no user... profile need user <a href='/users/login'>Login</a>";
			return false;
		}else{
			#setup the view
		$this->template->content = View::instance('v_users_profile');
		
		$this->template->title = "Profile for ".$this->user->first_name;
		
		#set up client files
		#$client_files = Array("/css/style.css","/js/users.js");
		#$this->template->client_files = utils::load_client_files($client_files);
		
		#render the view
		echo $this->template;
		}
		}
	}