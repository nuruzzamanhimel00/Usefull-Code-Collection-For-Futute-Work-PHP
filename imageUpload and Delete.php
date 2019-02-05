Image upload Function: 
** <form action="" method="post" enctype="multipart/form-data">
enctype = "multipart/form-data" must important

** upload image in images folder:
$tmpname = $_FILES['image']['tmp_name'];					
$filename = $_FILES['image']['name'];
$filesize = $_FILES['image']['size'];
move_uploaded_file($tmpname,"images/".$filename);

** reandome image name generate.......
					$div = explode(".", $filename);
					$file_ext = strtolower(end($div));
				    $upload_file = substr(md5(time()), 0,10).".".$file_ext;
					
** remove image in images FOLDER:
unlink("images/".$filename);