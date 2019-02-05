Form Validation function:
1) if(empty($name) || empty($username) || empty($email))
2)if(strlen($name)<5)
3) elseif(preg_match('/[^a-z0-9_-}]+/i', $username))
4) if(filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE)
5) if(empty($messg))
			