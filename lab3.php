<html>
     <body>  
	 
	 <form action="lab3.php" method="post">
 <p>������� �������</p>
 <p>����� ������ = <input type="text" name="nomber" /></p>
 <p><input type="submit" /></p>
</form>
    	<?php
		

			$file=file("file.txt");
         echo file_exists("file.txt");//������������� �����
		
		echo"<br>";
            echo is_readable("file.txt");//�������� �� ��� ������?
			
		echo"<br>";
            echo is_writable("file.txt");//�������� �� ��� ������
			echo"<br>";
			
			$size = filesize("file.txt");
			print "file.txt is $size bytes.";
			echo"<br>";
			
            $writefile=fopen("file.txt","w+");//������� ���� ������ ������
			
				
            for($i=0;$i<count($file);$i++) {
             printf("%s<br>", $file[$i]);
            }
			fwrite($writefile," ����������� �����  ");

			
	$nomber = (string)$_POST['nomber'];
			unset($file[$nomber]);//��������
			
            fputs($writefile,implode("",$file));
            fclose($writefile);
        ?>   
    </body>
</html>