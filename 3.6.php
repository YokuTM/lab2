<p><b>Задача 6 В-1:</b></p>

<HTML>
    <BODY>
        <FORM action="<?php print $PHP_SELF ?>" method="post">
            <p>Предложение: <INPUT type="text" name="sentence" maxlength="40"></p>
            <p>Слово: <INPUT type="text" name="word" maxlength="40"></p>
            <p><INPUT type="submit" name="delete" value="Удалить"></p>
        </FORM>

        <?php
            if (isset($_POST["delete"])){
				$f="";
                $sentence = trim($_POST["sentence"]);
                $word = trim($_POST["word"]);
                $changetext = str_replace($word,$f,$sentence);

                echo $changetext ;
            }
        ?>
    </BODY>
</HTML>