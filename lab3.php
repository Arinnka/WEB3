<html>
     <body>  
	 
	 <form action="lab3.php" method="post">
 <p>удалить элемент</p>
 <p>номер строки = <input type="text" name="nomber" /></p>
 <p><input type="submit" /></p>
</form>
    	<?php
		

			$file=file("file.txt");
         echo file_exists("file.txt");//существование файла
		
		echo"<br>";
            echo is_readable("file.txt");//доступен ли для чтения?
			
		echo"<br>";
            echo is_writable("file.txt");//доступен ли для записи
			echo"<br>";
			
			$size = filesize("file.txt");
			print "file.txt is $size bytes.";
			echo"<br>";
			
            $writefile=fopen("file.txt","w+");//откроем файл только запись
			
				
            for($i=0;$i<count($file);$i++) {
             printf("%s<br>", $file[$i]);
            }
			fwrite($writefile," добавленный текст  ");

			
	$nomber = (string)$_POST['nomber'];
			unset($file[$nomber]);//Удаление
			
            fputs($writefile,implode("",$file));
            fclose($writefile);
        ?>   
    </body>
</html>