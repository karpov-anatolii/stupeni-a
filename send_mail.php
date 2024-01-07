<?php

 

//Отправка  письма - заявки на устр бет лесн после просчета цены

 if($_POST['order_text']) {
	  $order_text=$_POST['order_text'];
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
	  $custom_email=$email;
      $site="http://stupeni-a.com.ua";
	  $subject = "Ступени-А: подтверждение заказа.";
	  $message_html = '
	  <html>
		  <head>
			  <title>Ступени-А Бетонные лестницы</title>
		  </head>
		  <body style="width: 100%;font-family: Ubuntu, sans-serif;font-weight: 500;">
			<center>
			 <div style="max-width: 1920px;background:#333;color:#ccc;" >
			  <div style="background: url('.$site.'/static/images2/head_mail.jpg) no-repeat center ;height:350px;width:100%;box-shadow: 0 100px 200px rgba(207, 193, 149, 0.2);position:relative;border-bottom: 2px solid rgb(110, 107, 90);">
				 <div style="width:100%;background: rgba(38, 36, 28, 0.8);border-bottom: 3px solid rgba(0, 0, 0, 0.82);box-shadow: inset 0 -30px 50px rgba(183, 182, 113, 0.1);  min-height:100px;">  
					<center ><br><br> <a href="'.$site.'" title="Ступени-А" ><img src="'.$site.'/static/images2/Logo_gif_333x48.gif" style="width:300px;height:52px;color:#fff;z-index:100;font-size:75px;" alt="Ступени-А"></a></center>
				 </div>	
			  </div>
			  
			  <div style="background:#FBFBFB ;padding:30px;color: #7F7F7F ;">
				   <h2 style="color:#b9874c;font-weight: 500;font-family:Forum, cursive;">Здравствуйте, '.$name.' !</h2>
				   <p>Заявка на устройство бетонной монолитной лестницы нами принята.<br>
			        Параметры лестницы следующие:<br><br>
			        '.$order_text.'<br><br>
					<hr style="color: #b9874c;" size="1" noshade="">
			        Ваша контактная информация:<br>
			        Телефон:'.$phone.'<br>
			        <span style="color:#b9874c"> Email:'.$email.'</span><br><br>
			        <hr style="color: #b9874c;" size="1" noshade=""><br>
			        В ближайшее время мы свяжемся с Вами.<br><br>
					Спасибо за Ваш выбор!<br><br><br>
		        	<br>С наилучшими пожеланиями, Администрация  <a href="'.$site.'" title="Ступени-А" style="color:#b9874c;"> Ступени-А</a>.</p>
			  </div>
			  
			  <div style="background:#111;padding:5px 0 10px;">
				 <center><h3 style="color: #756a4a;font-weight: 500;" > ©2011-'.date("Y").' Ступени-А.</h3></center>
			  </div>
			 </div>
		   </center>
		  </body>
	  </html>';
	
	/*  
	  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
	  $headers .= "From: Ступени-А <prezent-house@stupeni-a.com.ua>\r\n";
	  $headers .= "Bcc: infoaelitapro@gmail.com\r\n";//сюда приходит скрытая копия письма
	  
	 if(mail($email, $subject, $message, $headers)){
		              $response = Array(
								  'status' => 'success'
							    );	
						        print json_encode($response);
								exit;
		  
		 
	 }else{//Создаем запись про ошибку в журнале и отправляем себе письмо про ошибку
		              $response = Array(
								  'status' => 'error'
							    );	
						        print json_encode($response);
								exit;
		 
	 };
	 */

 };




//Отправка простого письма из страницы контактов нам


if($_POST['message']) {
	 $message=$_POST['message'];
	  $name=$_POST['name'];
      $email=$_POST['email'];
	  $custom_email='';
      $site="http://stupeni-a.com.ua";
	  $subject = "Письмо клиента для Ступени-А";
	  $message_html = '
	  <html>
		  <head>
			  <title>Ступени-А Бетонные лестницы</title>
		  </head>
		  <body style="width: 100%;font-family: Ubuntu, sans-serif;font-weight: 500;">
			<center>
			 <div style="max-width: 1920px;background:#333;color:#ccc;" >
			  <div style="background: url('.$site.'/static/images2/head_mail.jpg) no-repeat center ;height:350px;width:100%;box-shadow: 0 100px 200px rgba(207, 193, 149, 0.2);position:relative;border-bottom: 2px solid rgb(110, 107, 90);">
				 <div style="width:100%;background: rgba(38, 36, 28, 0.8);border-bottom: 3px solid rgba(0, 0, 0, 0.82);box-shadow: inset 0 -30px 50px rgba(183, 182, 113, 0.1);  min-height:100px;">  
					<center ><br><br> <a href="'.$site.'" title="Ступени-А" ><img src="'.$site.'/static/images2/Logo_gif_333x48.gif" style="width:300px;height:52px;color:#fff;z-index:100;font-size:75px;" alt="Ступени-А"></a></center>
				 </div>	
			  </div>
			  
			  <div style="background:#FBFBFB ;padding:30px;color: #7F7F7F ;">
				   <h2 style="color:#b9874c;font-weight: 500;font-family:Forum, cursive;">Здравствуйте, Администраторы Ступени-А !</h2>
				   <p>Письмо от '.$name.'<br>
			        Текст письма:<br><br>
			        '.$message.'<br><br>
					<hr style="color: #b9874c;" size="1" noshade="">
			        Контактная информация:<br>
			       <span style="color:#b9874c">   Email:'.$email.'</span><br><br>
			        <hr style="color: #b9874c;" size="1" noshade=""><br>
			        </p>
			  </div>
			  
			  <div style="background:#111;padding:5px 0 10px;">
				 <center><h3 style="color: #756a4a;font-weight: 500;" > ©2011-'.date("Y").' Ступени-А.</h3></center>
			  </div>
			 </div>
		   </center>
		  </body>
	  </html>';

/*	  
	  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
	  $headers .= "From: Ступени-А <prezent-house@stupeni-a.com.ua>\r\n";
	  $headers .= "Bcc: infoaelitapro@gmail.com\r\n";//сюда приходит скрытая копия письма
	  
	 if(mail("infoaelitapro@gmail.com", $subject, $message, $headers)){
		              $response = Array(
								  'status' => 'success'
							    );	
						        print json_encode($response);
								exit;
		  
		 
	 }else{//Создаем запись про ошибку в журнале и отправляем себе письмо про ошибку
		              $response = Array(
								  'status' => 'error'
							    );	
						        print json_encode($response);
								exit;
		 
	 };
	
*/	
	
	
};






  require_once('config.php'); //Файл конфигурации для вашего smtp сервера
  require_once('lib/phpmailer/PHPMailerAutoload.php'); //Файл автоматической подгрузки классов PHPMailer	
	
	  
	try{
    $mail = new PHPMailer(true); // Создаем экземпляр класса PHPMailer

    $mail->IsSMTP(); // Указываем режим работы с SMTP сервером
    $mail->Host       = $__smtp['host'];  // Host SMTP сервера: ip или доменное имя
    $mail->SMTPDebug  = $__smtp['debug'];  // Уровень журнализации работы SMTP клиента PHPMailer
    $mail->SMTPAuth   = $__smtp['auth'];  // Наличие авторизации на SMTP сервере
    $mail->Port       = $__smtp['port'];  // Порт SMTP сервера
    $mail->SMTPSecure = $__smtp['secure'];  // Тип шифрования. Например ssl или tls
    $mail->CharSet="UTF-8";  // Кодировка обмена сообщениями с SMTP сервером
    $mail->Username   = $__smtp['username'];  // Имя пользователя на SMTP сервере
    $mail->Password   = $__smtp['password'];  // Пароль от учетной записи на SMTP сервере
    //$mail->AddAddress( 'stupeni-a@ukr.net', 'Ступени-А');  // Адресат почтового сообщения
	$mail->AddAddress( 'schodya@gmail.com', 'Ступени-А');  // Адресат почтового сообщения
	$mail->AddAddress( 'mcraftukr@gmail.com', 'Ступени-А');  // Адресат почтового сообщения
    if($custom_email!='')	$mail->AddAddress($custom_email, $name );  // Адресат почтового сообщения
	$mail->AddAddress('infoaelitapro@gmail.com', 'Ступени-А' );  // Адресат почтового сообщения
    $mail->AddReplyTo($__smtp['addreply'], 'Ступени-А');  // Альтернативный адрес для ответа
    $mail->SetFrom($__smtp['username'], $__smtp['mail_title']);  // Адресант почтового сообщения
    $mail->Subject = htmlspecialchars($subject);  // Тема письма
    $mail->MsgHTML($message_html); // Текст сообщения
    $mail->Send();
	
	
	   echo	  '1';// в конце ответа ajaxу (ответ - это вся сформированная этим скриптом страница в html) будет 1, функчия callback получит ее data.slice(-1) 
	
    return 1;
  } catch (phpmailerException $e) {
	    echo	  '0';
    return $e->errorMessage();
}  
	  
  



							
							















