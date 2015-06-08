<html>
	<head><title>Manage waiting users</title></head>
	<body>
	<?php  				
		// Show error
		echo validation_errors();
		
		$this->table->set_heading('', 'First Name', 'Surname', 'Email', 'Register IP', 'Created');
		
		foreach ($users as $user) 
		{
			$this->table->add_row(
				form_checkbox('checkbox_'.$user->id, $user->username),
				$user->name, 
                                $user->surname,
				$user->email, 
				$user->last_ip,
				date('Y-m-d', strtotime($user->created)));
		}
		
		echo form_open($this->uri->uri_string());
				
		echo form_submit('activate', 'Activate User');
		
		echo '<hr/>';
		
		echo $this->table->generate(); 
		
		echo form_close();
		
		echo $pagination;
			
	?>
	</body>
</html>