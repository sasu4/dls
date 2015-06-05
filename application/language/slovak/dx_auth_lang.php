<?php

/*
	It is recommended for you to change 'auth_login_incorrect_password' and 'auth_login_username_not_exist' into something vague.
	For example: Username and password do not match.
*/

$lang['auth_login_incorrect_password'] = "Zadali ste nesprávne heslo.";
$lang['auth_login_username_not_exist'] = "Zadané prihlasovacie meno neexistuje.";

$lang['auth_username_or_email_not_exist'] = "Zadané prihlasovacie meno alebo email neexistuje.";
$lang['auth_not_activated'] = "Váš účet nebol ešte aktivovaný. Skontrolujte prosím vašu mailovú schránku.";
$lang['auth_request_sent'] = "Vaša požiadavka na zmenu hesla bola už odoslaná. Skontrolujte prosím vašu mailovú schránku.";
$lang['auth_incorrect_old_password'] = "Vaše staré heslo je nesprávne.";
$lang['auth_incorrect_password'] = "Vaše heslo je nesprávne.";

// Email subject
$lang['auth_account_subject'] = "%s podrobnosti účtu";
$lang['auth_activate_subject'] = "%s aktivácia";
$lang['auth_forgot_password_subject'] = "Žiadosť o zmenu hesla";

// Email content
$lang['auth_account_content'] = "Welcome to %s,

Thank you for registering. Your account was successfully created.

You can login with either your username or email address:

Login: %s
Email: %s
Password: %s

You can try logging in now by going to %s

We hope that you enjoy your stay with us.

Regards,
The %s Team";

$lang['auth_activate_content'] = "Welcome to %s,

To activate your account, you must follow the activation link below:
%s

Please activate your account within %s hours, otherwise your registration will become invalid and you will have to register again.

You can use either you username or email address to login.
Your login details are as follows:

Login: %s
Email: %s
Password: %s

We hope that you enjoy your stay with us :)

Regards,
The %s Team";

$lang['auth_forgot_password_content'] = "%s,

You have requested your password to be changed, because you forgot the password.
Please follow this link in order to complete change password process:
%s

Your New Password: %s
Key for Activation: %s

After you successfully complete the process, you can change this new password into password that you want.

If you have any more problems with gaining access to your account please contact %s.

Regards,
The %s Team";

/* End of file dx_auth_lang.php */
/* Location: ./application/language/english/dx_auth_lang.php */