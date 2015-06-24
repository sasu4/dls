<html>
	<head><title>Manage users</title></head>
	<body>
	<?php  				
		// Show reset password message if exist
		if (isset($reset_message))
			echo $reset_message;
		
		// Show error
		echo validation_errors();
		
		$this->table->set_heading('', 'Meno a priezvisko', 'Email', 'Rola', 'Zablokovaný', 'Posledná IP', 'Posledné prihlásenie', 'Vytvorený', 'Profil');
		
		foreach ($users as $user) 
		{
			$banned = ($user->banned == 1) ? 'Áno' : 'Nie';
			
			$this->table->add_row(
				form_checkbox('checkbox_'.$user->id, $user->id),
				$user->name.' '.$user->surname, 
				$user->email, 
				$user->role_name, 			
				$banned, 
				$user->last_ip,
				date('Y-m-d', strtotime($user->last_login)), 
				date('Y-m-d', strtotime($user->created)),
                                anchor('admin/lector/'.$user->id,'Upraviť profil')
                                );
		}
		
		echo form_open($this->uri->uri_string());
				
		echo form_submit('ban', 'Udeliť ban');
		echo form_submit('unban', 'Zrušiť ban');
		echo form_submit('reset_pass', 'Resetovať heslo');
                echo anchor('backend/waiting_users','Prejsť na aktiváciu používateľov');
		
		echo '<hr/>';
		
		echo $this->table->generate(); 
		
		echo form_close();
		
		echo $pagination;
			
	?>
	</body>
</html>