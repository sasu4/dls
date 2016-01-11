<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter phpBB3 Library
 *
 * CodeIgniter phpBB3 bridge (access phpBB3 user sessions and other functions inside your CodeIgniter applications).
 *
 * @author Tomaž Muraus(initialized)
 * @Edited : Rajendra Sharma
 * @version	1.2
 * @link http://www.tomaz-muraus.info
 */
class Phpbb {
    public $CI;
    protected $_user;
    /**
     * Constructor.
     */
    public function __construct() {
        if (!isset($this->CI)) {
            $this->CI = & get_instance();
        }
        // Set the variables scope
        global $phpbb_root_path, $phpEx, $user, $auth, $cache, $db, $config, $template, $table_prefix;
        define('IN_PHPBB', TRUE);
        $rootPath = $this->CI->config->item('root_path');
        define('FORUM_ROOT_PATH', './forum/');
        $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : FORUM_ROOT_PATH;
        $phpEx = substr(strrchr(__FILE__, '.'), 1);
        // Include needed files
        include($phpbb_root_path . 'common.' . $phpEx);
        include($phpbb_root_path . 'config.' . $phpEx);
        include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
        include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
        include($phpbb_root_path . 'includes/functions_privmsgs.' . $phpEx);
        include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
        // Initialize phpBB user session
        $user->session_begin();
        $auth->acl($user->data);
        $user->setup();
        // Save user data into $_user variable
        $this->_user = $user;
       
    }
    /*
     * Function to register user from Codeginiter forum to phpbbforum
     *  @param string $name Username
     * @param string $email User Email
     * @param string $password User Password
     * @param string $semester User Semester
     * @param $cp_data
     */
    public function reg_from_ci_to_phpbb($name = '', $email = '', $password = '',  $cp_data = false) {
    
        $user_row = array(
            'username' => strip_tags($name),
            'user_password' => phpbb_hash($password),
            'user_email' => $email,
            'group_id' => 2, // by default, the REGISTERED user group is id 2
            'user_timezone' => (float) date('T'),
            'user_lang' => 'ar',
            'user_type' => '0',
            'user_ip' => $_SERVER['REMOTE_ADDR'],
            'user_regdate' => time(),
            
        );
       return user_add($user_row, $cp_data);
        die();
    }
    /*function to get last insert id
    *i.e. Max id :)
    */
    public function getLastInsertid()
    {
        global $table_prefix;
        $this->CI->db->select_max('user_id');
        $this->CI->db->from($table_prefix.'users');
        $query=$this->CI->db->get();
        $data=$query->row_array();
       // print_r($data);die();
      $max_id=$data['user_id'];
        return $max_id;
    }
    /*function to add user
     * to specific group :)
     */
    public function add_userTo_specific_Group()
    {
        global $table_prefix;
        $user_id=$this->getLastInsertid();
     //echo $user_id;die();
       $this->CI->db->select('*');
        $this->CI->db->from($table_prefix.users);
        $this->CI->db->where('user_id',$user_id);
        $query=$this->CI->db->get();
        $data=$query->row_array($user_id);
       // print_r($data);die();
       $group_condition=$data['user_group_condition'];
        switch($group_condition)
        {
            case 1:
//At first we have to find the gorup id as group is based on group_condition
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_first');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_add($group_id, $user_id, false, false, false);//call  of phpbb function to add user to specific group :) to do same as phpbb :)
                break;
            case 2:
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_second');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_add($group_id, $user_id, false, false, false);
                break;
            case 3:
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_third');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_add($group_id, $user_id, false, false, false);
                break;
            case 4:
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_fourth');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_add($group_id, $user_id, false, false, false);
                break;
            
            default:
                echo "sorry, No any such group";
        }
    }
    /*
     * Function to remove user if
     * admin of project edit the user group_condition
     * @param INT id
     *
     *
     */
public function  remove_user_from_group($id)
{
//since mine project has two different tables so first get the users of the project and del them according to email since phpbb user table has email column to :)
    global $table_prefix;
    $this->CI->db->select('*');
    $this->CI->db->from('users');
    $this->CI->db->where('id',$id);
    $query=$this->CI->db->get();
    $data=$query->row_array($id);
    $email=$data['email'];
  $this->CI->db->select('*');
    $this->CI->db->from($table_prefix.'users');
    $this->CI->db->where('user_email',$email);
    $query=$this->CI->db->get();
    $data=$query->row_array($email);
    $user_id=$data['user_id'];
  $this->del_userFrom_Group($user_id);
}
    /*function to delete user
    * froum group if user is edit i.e if group_condition of the user  is edited
     * as now the forum gorup is based on user group_condition
    */
    public function del_userFrom_Group($user_id)
    {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix.users);
        $this->CI->db->where('user_id',$user_id);
        $query=$this->CI->db->get();
        $data=$query->row_array($user_id);
               $group_condition=$data['group_condition'];
         switch($group_condition)
        {
            case 1:
//same here first get ther group id according to group name i.e.$gorup_id from groups table
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_first');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_del($group_id, $user_id, false, false);
                break;
            case 2:
                global $table_prefix;
                $this->CI->db->select('*');
                $this->CI->db->from($table_prefix.'groups');
                $this->CI->db->where('group_name','group_second');
                $query=$this->CI->db->get();
                $data=$query->row_array();
                $group_id=$data['group_id'];
                group_user_del($group_id, $user_id, false, false);
                break;
           
            default:
                echo "sorry, No any such group_condition";
        }
    }
    /*
     * function to login from your project to phpbb 
     * @param string $username username
     * @param string $password password
     * @param string $autologin autologin
     * @param admin
     */
    function login($email, $password, $autologin, $admin) {
       
        // use this only for localhost!!
        global $config;
        $config['cookie_domain'] = 'localhost';
        global $auth;
        // Attempt authorization.  result can be used to send messages or perform
        // loggin success / fail logic.
        $result = $auth->login($email, $password, $autologin, true, $admin);
        
    }
    
    /*
     * function to logout form phpbb
     */
    function logout() {
        global $user;
        $user->session_kill();
        $user->session_begin();
    }
    /**
     * Create a new topic (topic will be posted with the currently logged-in user as an author).
     *
     * @param int $forumId The forum ID.
     * @param string $subject Topic subject.
     * @param string $message Topic body.
     * @param boolean $enableSignature Attach user signature?
     * @param boolean $enableBBcode Enable BB code?
     * @param boolean $enableSmilies Enable smiles?
     * @param boolean $enableUrls Enable URLs (automatically wrap URLs in <a> tag)?
     *
     * @return string Topic URL on success, forum URL otherwise.
     */
    public function createNewTopic($forumId, $subject, $message, $enableSignature = FALSE, $enableBBcode = TRUE, $enableSmilies = TRUE, $enableUrls = TRUE) {
        $poll = $uid = $bitfield = $options = '';
        generate_text_for_storage($subject, $uid, $bitfield, $options, false, false, false);
        generate_text_for_storage($message, $uid, $bitfield, $options, $enableBBcode, $enableUrls, $enableSmilies);
        $data = array
            (
            'forum_id' => $forumId,
            'icon_id' => FALSE,
            'enable_bbcode' => $enableBBcode,
            'enable_smilies' => $enableSmilies,
            'enable_urls' => $enableUrls,
            'enable_sig' => $enableSignature,
            'message' => $message,
            'message_md5' => md5($message),
            'bbcode_bitfield' => $bitfield,
            'bbcode_uid' => $uid,
            'post_edit_locked' => 0,
            'topic_title' => $subject,
            'notify_set' => FALSE,
            'notify' => FALSE,
            'post_time' => 0,
            'forum_name' => '',
            'enable_indexing' => TRUE
        );
        return submit_post('post', $subject, '', POST_NORMAL, $poll, $data);
    }
    /**
     * Reply for Topic(topic will be posted with the currently logged-in user as an author).
     *
     * @param int $forumId The forum ID.
     * @param string $subject Topic subject.
     * @param string $message Topic body.
     * @param boolean $enableSignature Attach user signature?
     * @param boolean $enableBBcode Enable BB code?
     * @param boolean $enableSmilies Enable smiles?
     * @param boolean $enableUrls Enable URLs (automatically wrap URLs in <a> tag)?
     *
     * @return string Topic URL on success, forum URL otherwise.
     */
    public function TopicReply($forumId, $topic_id, $subject, $message, $enableSignature = FALSE, $enableBBcode = TRUE, $enableSmilies = TRUE, $enableUrls = TRUE) {
        $poll = $uid = $bitfield = $options = '';
        generate_text_for_storage($subject, $uid, $bitfield, $options, false, false, false);
        generate_text_for_storage($message, $uid, $bitfield, $options, $enableBBcode, $enableUrls, $enableSmilies);
        $data = array
            (
            'forum_id' => $forumId,
            'topic_id' => $topic_id,
            'icon_id' => FALSE,
            'enable_bbcode' => $enableBBcode,
            'enable_smilies' => $enableSmilies,
            'enable_urls' => $enableUrls,
            'enable_sig' => $enableSignature,
            'message' => $message,
            'message_md5' => md5($message),
            'bbcode_bitfield' => $bitfield,
            'bbcode_uid' => $uid,
            'post_edit_locked' => 0,
            'topic_title' => $subject,
            'notify_set' => FALSE,
            'notify' => FALSE,
            'post_time' => 0,
            'forum_name' => '',
            'enable_indexing' => TRUE
        );
        return submit_post('reply', $subject, '', POST_NORMAL, $poll, $data);
    }
   
    
    
    
    
    
    
     /**
     * Reply for Topic(topic will be posted with the currently logged-in user as an author).
     *
     * @param int $forumId The forum ID.
     * @param string $subject Topic subject.
     * @param string $message Topic body.
     * @param boolean $enableSignature Attach user signature?
     * @param boolean $enableBBcode Enable BB code?
     * @param boolean $enableSmilies Enable smiles?
     * @param boolean $enableUrls Enable URLs (automatically wrap URLs in <a> tag)?
     *
     * @return string Topic URL on success, forum URL otherwise.
     */
    public function UpdatePost($forumId,$post_id, $message, $subject, $post_text, $topic_first_post_id,$topic_last_post_id,$post_edit_user,$topic_replies,$topic_replies_real, $poster_id,$topic_id,$post_edit_reason, $enableSignature = FALSE, $enableBBcode = TRUE, $enableSmilies = TRUE, $enableUrls = TRUE) {
//echo $topic_replies_real;echo $post_edit_reason;echo $post_id;die();
       // echo $enableSignature,$enableBBcode;die();
        $poll = $uid = $bitfield = $options = '';
        generate_text_for_storage($subject, $uid, $bitfield, $options, false, false, false);
        generate_text_for_storage($message, $uid, $bitfield, $options, $enableBBcode, $enableUrls, $enableSmilies);
        $data = array
            (
            'forum_id' => $forumId,
            'post_id' => $post_id,
            'post_text'=>$post_text,
            'topic_replies'=>$topic_replies,
            'topic_replies_real'=>$topic_replies_real,
            'post_edit_reason'=>$post_edit_reason,
            'post_edit_user'=>$post_edit_user,
            'topic_first_post_id'=>$topic_first_post_id,
            'topic_last_post_id'=>$topic_last_post_id,
            'poster_id'=>$poster_id,
            'topic_id'=>$topic_id,
            'icon_id' => FALSE,
            'enable_bbcode' => $enableBBcode,
            'enable_smilies' => $enableSmilies,
            'enable_urls' => $enableUrls,
            'enable_sig' => $enableSignature,
            'message' => $message,
            'message_md5' => md5($message),
            'bbcode_bitfield' => $bitfield,
            'bbcode_uid' => $uid,
            'post_edit_locked' => 0,
            'topic_title' => $subject,
            'notify_set' => FALSE,
            'notify' => FALSE,
            'post_time' => 0,
            'forum_name' => '',
            'enable_indexing' => TRUE
        );
        return submit_post('edit', $subject,'', POST_NORMAL, $poll, $data);
    }
    /*
     * function to delete post
     * @param INT $fid Forum Id
     * @param INT $tid Topic Id
     * @param INT $pid Post Id
     */
    function delete_post($fid,$tid,$pid,&$data)
{
 return delete_post($fid,$tid,$pid,$data);
}
    /*
     * Function to get Forum Permission
     */
    function forum_permission() {
        global $auth;
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'forums f');
        $this->CI->db->where('parent_id', 0);
        $query = $this->CI->db->get();
        $data = $query->result();
        if(!empty($data))
        {
        foreach ($data as $d) {
            $valid = $auth->acl_get('f_list', $d->forum_id);
            if ($valid == 1) {
                
                $validateforum[] = $d->forum_id;
            }
        }
        }
        return $validateforum;
    }
    
    
     /*
     * Function to get Permission
     * @param INT $forum_id Forum id
     */
    function post_permission($forum_id) {
        global $auth;
        if ($auth->acl_get('f_post', $forum_id)) {
            return true;
        } else {
            return false;
        }
    }
    /*
     * Function to count all Topics
     * @param INT $fid Forum id
     * returns total number of topics
     */
    function count_all_topic($fid) {
        global $table_prefix;
        $this->CI->db->where('forum_id', $fid);
        $q = $this->CI->db->get('phpbb_topics');
        $value = $q->num_rows();
        return $value;
    }
    public function get_moderators($v)
    { 
        global $table_prefix;
        $data = array();
     
            $this->CI->db->select('*');
            $this->CI->db->from($table_prefix . 'moderator_cache ');
            $this->CI->db->where('forum_id',$v);
            $this->CI->db->order_by('forum_id', 'DESC');
            $query = $this->CI->db->get();
            $data = $query->result();
        
       
        $username='';
        foreach($data as $d){
            
         
               
               $username.=$d->username.',';
          
        }
       
        return $username;
         }
    /* function to get all forum list
   * with forum permission and get
   * all moderators realated to each
   *forums
   */
    public function get_all_forums() {
        global $table_prefix, $auth;
        $forum_permission = $this->forum_permission();//call of forum permission function to get the permission of forum for display.
        if(!empty($forum_permission))
        {
          foreach ($forum_permission as $v) {
            $this->CI->db->select('*');
            $this->CI->db->from($table_prefix . 'forums f ');
             $this->CI->db->where('forum_id', $v);
            $this->CI->db->order_by('forum_id', 'DESC');
            $query = $this->CI->db->get();
           $data[] = $query->row_array($v);
           
        }
        if(!empty($data))
        {
        foreach($data as $key => $value)
        {
            $data[$key]['username'] = $this->get_moderators($value['forum_id']);
        }
        }
      return $data;
       
    }
    }
    
    
    
   
    /*
     * function to get sub_forms if it have 
     * @param INT $fid Forum Id
     * 
     */
    function get_all_subforum($fid) {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'forums');
        $this->CI->db->where('parent_id', $fid);
        $this->CI->db->order_by('forum_id', 'DESC');
        $query = $this->CI->db->get();
        $data = $query->result_array();
        
       
        foreach($data as $key => $value)
        {
            $data[$key]['username'] = $this->get_moderators($value['forum_id']);
        }
      
      
        return $data;
    }
    /* function to get single forum 
     * @param INT $fid forum id
     */
    public function get_single_forum($fid) {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'forums');
        $this->CI->db->where('forum_id', $fid);
        $this->CI->db->order_by('forum_id', 'DESC');
        $query = $this->CI->db->get();
        $data = $query->row($fid);
        return $data;
    }
    
    
    /*
     * function to get forum related topics
     * @param INT $fid Forum Id.
     */
    public function get_all_topics($fid) {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'topics t');
        $this->CI->db->join($table_prefix . 'posts p', 't.topic_id=p.topic_id');
        $this->CI->db->join($table_prefix . 'users u', 'p.poster_id=u.user_id');
        $this->CI->db->join($table_prefix . 'forums f', 't.forum_id=f.forum_id');
        $this->CI->db->where('t.forum_id', $fid);
        $this->CI->db->order_by('t.topic_id', 'DESC');
        $this->CI->db->group_by('t.topic_id');
        $query = $this->CI->db->get();
        $data = $query->result();
        return $data;
    }
    
    
    
    /*
     * Function to view single Topics
     * @param INT $fid forum id
     * @param INT $tid topic id 
     */
    function get_single_topic($fid, $tid) {
                global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'topics t');
        $this->CI->db->join($table_prefix . 'posts p', 't.topic_id=p.topic_id');
        $this->CI->db->where('t.forum_id', $fid);
        $this->CI->db->where('t.topic_id', $tid);
        $query = $this->CI->db->get();
        $data = $query->row($tid);
         return $data;
    }
    
    /*
     * function to get single post
     * @param $fid Forum id 
     * @param $pid Post id 
     */
    
    function get_single_post($fid,$pid)
    {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'posts p');
        $this->CI->db->join($table_prefix.'topics t','t.topic_id=p.topic_id');
        $this->CI->db->where('p.forum_id', $fid);
        $this->CI->db->where('p.post_id', $pid);
         $query = $this->CI->db->get();
        $data = $query->row($pid);
         return $data;
    }
    
    
    
    /*
     * function to get topic reply
     * @param INT $fid Forum id
     * @param INT $tid Topic id
     */
    public function get_topic_reply($fid, $tid) {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'topics t');
        $this->CI->db->join($table_prefix . 'posts p', 't.topic_id=p.topic_id');
        $this->CI->db->join($table_prefix . 'users u', 'p.poster_id=u.user_id');
        $this->CI->db->where('p.forum_id', $fid)->where('p.topic_id', $tid);
        $query = $this->CI->db->get();
        $data = $query->result();
         return $data;
    }
    /*
     * function to get single_topic reply
     * @param INT $fid Forum id
     * @param INT $tid Topic id
     */
    public function get_single_topic_reply($fid, $tid,$pid) {
        global $table_prefix;
        $this->CI->db->select('*');
        $this->CI->db->from($table_prefix . 'posts p');
        $this->CI->db->join($table_prefix . 'topics t', 't.topic_id=p.topic_id');
        $this->CI->db->where('p.forum_id', $fid)->where('p.topic_id',$tid)->where('p.post_id', $pid);
        $query = $this->CI->db->get();
        $data = $query->result();
         return $data;
    }
   
    
    /**
     * Checks if the currently logged-in user is a moderator of the respected froum.
     *
     * @return boolean TRUE if the currently logged-in user is a moderator, FALSE otherwise.
     */
    public function isModerator($fid) {
//      return  $this->isGroupMember('moderators');
        
        global $auth;
         if ($auth->acl_get('m_', $fid)) {
            return true;
        } else {
            return false;
        }
        
    }
    
    
    
     /**
     * Checks if the currently logged-in user can edit the forum post
     *
     * @return boolean TRUE if the currently logged-in user can edit the forum post, FALSE otherwise.
     */
    public function edit_permission($fid) {
        
        global $auth;
         if ($auth->acl_get('f_edit', $fid)) {
            return true;
        } else {
            return false;
        }
        
    }
}
/* End of file phpbb.php */
/* Location: ./application/libraries/phpbb.php */