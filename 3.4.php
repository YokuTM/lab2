<p> Задача 4:
<p>

<HTML>
<fieldset>
<HEAD> <TITLE> Авторизация </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Введите логин:
<INPUT type="text" name="userName" maxlength="20">
<a href="#" >   Подсказка: введите admin</a>
<P> <INPUT type="submit" name="obr" value="Проверить">
</FORM>
<?php
			$a = array("Аликин", "Носков", "admin", "Канашин");
			$b = array("Владимир Павлович", "Станислав Константинович", "Админыч", "Виталий Владленович");
		    $c=count($a)-1;
			if (isset($_POST["obr"])){

				$pr=false;
                $user_name = trim($_POST["userName"]);
				for ($i=0;$i<count($a);$i++){
				if ($user_name == $a[$i]){
                    echo "Здравствуйте, ". $a[$i]." ".$b[$i];
					$pr=true;
					
			}	
			}
			if ($pr == false){
				echo "Вы не зарегистрированный пользователь!";
			}
			} 
        ?>
    </BODY>
</HTML>


