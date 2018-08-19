        <?php
        

        if (filter_input(INPUT_POST, 'cnome', FILTER_VALIDATE_REGEXP, array( "options"=> array( "regexp" => "/.[a-zA-ZÀ-ú\s]+$/"))) == FALSE) {
            echo "<h3 style='background-color: white; box-shadow: 1px 1px 7px #606060;'>Erro. O campo nome deve conter apenas letras.</h3>";
        }else{
            $nome = filter_input(INPUT_POST, 'cnome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'cemail', FILTER_SANITIZE_SPECIAL_CHARS);
            $tel = filter_input(INPUT_POST, 'ctel', FILTER_SANITIZE_SPECIAL_CHARS);
            $ong = filter_input(INPUT_POST, 'cong', FILTER_SANITIZE_SPECIAL_CHARS);
            $mensagem = filter_input(INPUT_POST, 'cmensagem', FILTER_SANITIZE_SPECIAL_CHARS);
            $arquivo = $_FILES["canexo"];
        
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/OAuth.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/POP3.php';
	require 'PHPMailer/src/SMTP.php';
	
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            
            $mail->CharSet = 'UTF-8';
            
	    $body = "<strong> Nome: </strong> $nome <br/><br/><strong> Email: </strong> $email <br/><br/><strong> Telefone: </strong> $tel <br/><br/><strong> Como conheceu a ONG: </strong> $ong <br/><br/><strong> Mensagem: </strong> $mensagem <br/><br/>";

            $mail->AddReplyTo($email);

            $mail->SetFrom($email);

            $mail->AddReplyTo($email);

            $address = "luizpaulomdosreis@hotmail.com";
            $mail->AddAddress($address);

            $mail->Subject = "Mensagem para Ongcrescer";

            $mail->MsgHTML($body);

            $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

            if(!$mail->Send()) {
              echo "<h3 class='erro' style='background-color: white; color: black; box-shadow: 1px 1px 7px #606060;'>Ocorreu algum erro. Revise seu email ou envie uma mensagem para: 'contato@crescerfomentoavida.com.br'.</h3>";
            } else {
              echo "<h3 id='sucesso' style='background-color: white; color: black; box-shadow: 1px 1px 7px #606060;'>Enviado com sucesso.</h3>";
            }
        }
        
            
        ?>
        <script type="text/javascript" src="js/faleConosco.js"></script>
