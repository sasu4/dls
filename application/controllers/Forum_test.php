<?php 

class Forum_test extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        global $request;
        global $phpbb_container;
        global $phpbb_root_path, $phpEx, $user, $auth, $cache, $db, $config, $template, $table_prefix;
        global $request;
        global $phpbb_dispatcher;
        global $symfony_request;
        global $phpbb_filesystem;
         define('IN_PHPBB', true);
         $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';
         $phpEx = substr(strrchr(__FILE__, '.'), 1);
         include($phpbb_root_path . 'common.' . $phpEx);
         // Start session management
         $user->session_begin();
         $auth->acl($user->data);
         $user->setup();
    }
    
    function add() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $this->add_user($name,$email,$pass);
    }
    
    function add_user($username, $email, $password) {
        global $request;
        global $phpbb_container;
        global $phpbb_root_path, $phpEx, $user, $auth, $cache, $db, $config, $template, $table_prefix;
        global $request;
        global $phpbb_dispatcher;
        global $symfony_request;
        global $phpbb_filesystem;
        
        define('IN_PHPBB', true);
        $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';
        $phpEx = substr(strrchr(__FILE__, '.'), 1);
        include($phpbb_root_path . 'common.' . $phpEx);
        //require_once('forum/' . 'common.' . $phpEx);
        require_once('forum/' . 'config.' . $phpEx);
        require_once('forum/' . 'includes/functions_user.' . $phpEx);
        require_once('forum/' . 'includes/functions_display.' . $phpEx);
        require_once('forum/' . 'includes/functions_privmsgs.' . $phpEx);
        require_once('forum/' . 'includes/functions_posting.' . $phpEx);
        
        // Start session management
        $user->session_begin();
        $auth->acl($user->data);
        $user->setup();
        $user_row = array(
            'username' => $username,
            'user_password' => phpbb_hash($password),
            'user_email' => $email,
            'group_id' => 2, // by default, the REGISTERED user group is id 2
            'user_timezone' => (float) date('T'),
            'user_lang' => 'bg',
            'user_type' => USER_NORMAL,
            'user_ip' => '',
            'user_regdate' => time(),
        );
    
        $us = user_add($user_row, false);
        print_r($us);
    }
    
    
}