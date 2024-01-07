<?
// занести в массив значение полей
$z = array(
  1 => $_POST['name'],
  2 => $_POST['prorab'],
  3 => $_POST['content'],
 // 4 => date("d.m.Y")
  4 => date("j-m-y"),
  5 => $_POST['curdatetime'],
  6 => $_POST['town']
);
$dl = '';
$realname = array("Анатолий", "Толя", "Толик", "Константин", "Костя", "Костик","Анатолій", "Костянтин" ,"анатолий", "толя", "толик", "константин", "костя", "костик","анатолій", "костянтин"   );
if($z[1] && $z[2] && $z[3] && in_array($z[2], $realname)  ){

 // mail("schodya@gmail.com", "заполнена форма stupeni-a.com.ua", $z[1] . "\n" . $z[2] . "\n" . $z[3] ."\n" . $z[4]); // сообщение на ваш email о новом отзыве

  if(strpos($z[3], 'http://') === false){ // если в тексте отзыва нет http://
   // $fp = fopen("comments.txt", "c+"); // режим записи
	$mytext = "<dt>" . $z[1] . "</dt><dd>" . $z[4] ."</dd><dd>".$z[6] . "</dd><dd  class='com-dd' ><img class='com-img' src='/photo-com/".$z[5].".jpg' alt='Бетонні сходи' ><p class='com-text'> " . $z[3]. "</p> </dd> <button onClick='deletecom(\"".$z[5]."\")'>УДАЛИТЬ </button> <hr class='com-hr'>   \n" ;
	
	//$text = "Не удалось скопировать файлы: \n";
	
$mytext .= file_get_contents("../comments.txt") . PHP_EOL; //читаем и "дописываем" в начало текста
file_put_contents("../comments.txt", $mytext ."\n");


//    $save = fwrite($fp, "\n".$mytext."\n"); // запись в файл
 //   fclose($fp); // закрытие файла
    Header("Location: ".$_SERVER['PHP_SELF']); // обновить страницу; обновлённая версия содержит опубликованный комментарий
    exit;
  } else { // если в тексте есть http://
    $dl = '<b style="color: red;">Ваш відгук буде опублікований після перевірки автором сайту </b>'; // показан этот текст
  }

} else { 

  $fp = @fopen("../comments.txt", "r"); // режим чтения
  if ($fp) {
    while (!feof($fp)) {
		$dl .= fgetss($fp, 8000, "<dl>,<dt>,<dd>,<span>,<img>,<hr>,<p>,<button>");// <dl>,<dt>,<dd> - это список тегов, разрешённых для публикации
    }
  }
  fclose($fp);

} 
?>


<?php

 $meta_keywords="відгуки, компанія, Сходи-А, сходи, бетонні, коментарі, зробити відгук";
 
 $meta_description="Відгуки про компанію Сходи-А, залишити відгук про бетонні сходи і перила компанії Сходи-А";
 
 $meta_title="Відгуки про компанію  ";

  require('header.php');
 
?>
  

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        <h1 style="font-size:2.5em;">Відгуки про компанію  Сходи-А</h1>
        <!-- banner text -->
      </div>
    </div>
  </div>
</section>


<section id="descripton" class="section descripton" style="">
  <div style="/* display:inline-block*/">
  
  
  <div class="row">
     <h2 style="text-align: center;font-size: 30px;">Залишити відгук</h2>
     <div class="com-forms">
         <form id="upload-comment" name="upload-comment" method="post">
           <label>1. Як до вас звертатись:</label> <input type='text' name='name' required/><span style='color:red' id='namef'></span><br />
           <label>2. Ім'я виконроба виробника сходів:</label><input type='text' name='prorab' placeholder="Введіть ім'я" required/><span style='color:red' id='prorabf'></span><br />
           <label>3. Місто (населений пункт):</label><input type='text' name='town' style="width: 250px;" placeholder="Де були побудовані сходи?"   required/><span style='color:red' id='townf'></span><br />
           <label>4. Відгук:</label><textarea name='content' style="width:100%;" placeholder="Розкажіть де ви дізналися про нас, чому звернулися саме до нас, що сподобалося в процесі роботи, що не сподобалося. Нам дуже важлива Ваша думка. Ми прагнемо бути кращими! " required rows="5"></textarea><span style='color:red' id='contentf'></span><br />
           <input type="hidden" name="curdatetime" value="<?php echo str_replace("-", "", date("j-m-y-h-i-s"))?>" />
           <input id="submit-comment" class="button_light" type='submit' value='публикация' style="display:none"/>
         </form>  

         <!--Загрузка изображения-------------------------->
         <div class="image-preview">
              <img id="preview" src="" alt="" style="width:100%; max-width:400px;margin-bottom: 20px;"><span style='color:red' id='previewf'></span><br />
          </div>
          <form id="upload-image" enctype="multipart/form-data" method='post'>
              <div class="form-group">
                <label for="image" style="float:left;">5. Завантажте фото сходів:</label>
                <input type="file" name="image" id="image">
              </div>
              <input class="button_light"  type="submit" style="display: block;margin-left: auto;margin-right: auto;" value='ОПУБЛІКУВАТИ ' >
          </form>
          <div id="result">
          </div>
        <!----------------------------------------------->
    </div>
    
<hr class='com-hr'>
<dl style="margin: 20px;">
<? echo $dl; ?> <!-- PHP -->
</dl>
   
  </div>
</div> 
</section>


 <?php
  require('footer.php');
  ?>
  
  
  <script type="text/javascript">
    jQuery('section.banner').css('min-height', '220px');
    jQuery('.banner-image').css('height', '871px');
	
	
	function submit_contactform(){
	   var name=jQuery('#cf-name').val();
	   var message=jQuery('#cf-message').val();
	   var email=jQuery('#cf-email').val();
	   if(!name) {show_info("Ви не вказали ім'я");return;};
	   if(!email) {show_info('Ви не вказали e-mail ');return;};
	   if(!message) {show_info('Напишіть текст листа ');return;};
	   jQuery.ajax({
				type:"POST",
				url:"send_mail.php",
				data:{name:name,message:message,email:email},
				success: function(data) {
					console.log("data="+ data);
						if(data.slice(-1)=="1") show_info("Дякуємо:) <br> Ми зв'яжемося з Вами найближчим часом ");
						if(data.slice(-1)=="0") show_info('Помилка надсилання листа <br> Надішліть листа ще раз ');
					  }
			  });
		
	};
	
  </script>
  
  
 <script type="text/javascript"> 
 
 function deletecom(nameimg) {
	               var pass = prompt('Введіть пароль для видалення коментаря', 0000);
				   console.log(pass+nameimg);
	               $.ajax({
								url: "../delete-com.php",
								type: "POST",
								data: {nameimg:nameimg,pass:pass},
								dataType: 'json',
								success: function (data) {
									 obj = typeof data =='object' ? data : jQuery.parseJSON(data);
									 if (obj.status=="success"){
										// console.log("YESS! TEXT1 "+obj.text1+"\n TEXT2 "+obj.text2+"\n\n TEXT3 "+obj.text3+"\n\n TEXT4 "+obj.text4+"\n\n TEXT5 "+obj.text0+"\n\n");
										location.reload();
									 };
									 if (obj.status=="wrongpass"){
									    show_info("Невірний пароль." );
								     };
							    }		
				          });
	       }
  
 $(document).ready(function () {
 
  function readImage ( input ) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#preview').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
 
  function printMessage(destination, msg) {
    $(destination).removeClass();
    if (msg == 'success') {
      $(destination).addClass('alert alert-success').text('Дякуємо:) Відгук успішно завантажений! ');
    }
    if (msg == 'error') {
      $(destination).addClass('alert alert-danger').text('Сталася помилка під час завантаження фото :(');
	 }
  }
  
  $('#image').change(function(){
    readImage(this);
  });
 
 function validate(){
   //Считаем значения из полей name и email в переменные x и y
   var x=document.forms["upload-comment"]["name"].value;
   var y=document.forms["upload-comment"]["prorab"].value;
   //Если поле name пустое выведем сообщение и предотвратим отправку формы
   if (x.length==0){
      document.getElementById("namef").innerHTML="*це поле обов'язкове для заповнення ";
	  show_info("Ви не ввели своє ім'я ." );
      return false;
   }
   //Если поле email пустое выведем сообщение и предотвратим отправку формы
   if (y.length==0){
      document.getElementById("prorabf").innerHTML="*данное поле обязательно для заполнения";
	  show_info("Ви не ввели ім'я виконроба, який виготовив Вам сходи. Це потрібно для перевірки того, що Ви дійсно наш клієнт. " );
      return false;
   }
   
   var t=document.forms["upload-comment"]["town"].value;
   if (t.length==0){
      document.getElementById("townf").innerHTML="*Ви не ввели населений пункт де знаходяться сходи .";
	  show_info("Ви не ввели населений пункт де знаходяться сходи ." );
      return false;
   }
   
   var c=document.forms["upload-comment"]["content"].value;
   if (c.length==0){
      document.getElementById("contentf").innerHTML="*Ви не ввели текст відгуку.";
	  show_info("Ви не ввели текст відгуку." );
      return false;
   }
   if(document.getElementById('preview').getAttribute('src')==''){
       document.getElementById("previewf").innerHTML="*Завантажте, будь ласка, фото сходів.";
	   show_info("Завантажте фото сходів з файлів або сфотографуйте, натиснувши на кнопку завантаження." );
       return false;
   }
   return true;
}

  $('#upload-image').on('submit',(function(e) {
    e.preventDefault();
	if ( !validate() ) { return;}
	var input = $('#image')[0];
	if ( !input.files[0].type.match('image.*') ) {
	   show_info('Завантажте фото формату .jpg');
	   return;
	}
    var formData = new FormData(this);
	var prorab=document.forms["upload-comment"]["prorab"].value;
	var curdatetime=document.forms["upload-comment"]["curdatetime"].value;
	var nameimg=curdatetime+":"+prorab;
	formData.append('nameimg', nameimg);
  $.ajax({
      type:'POST', // Тип запроса
      url: '../upload.php', // Скрипт обработчика
      data: formData, // Данные которые мы передаем
      cache:false, // В запросах POST отключено по умолчанию, но перестрахуемся
      contentType: false, // Тип кодирования данных мы задали в форме, это отключим
      processData: false, // Отключаем, так как передаем файл
      success:function(data){
                    obj = typeof data =='object' ? data : jQuery.parseJSON(data);
									 if (obj.status=="success"){
										  printMessage('#result', 'success');
		                                  setInterval(function() {$('#submit-comment').trigger('click');}, 3000);
									 };
									 if (obj.status=="error"){
										  printMessage('#result', 'error');
									 };
									 if (obj.status=="wrongprorab"){
									    show_info("Невірне ім'я виконроба" );
							         };
	  }
    });
	
  }));
});


  </script>        
  
  

</body>
</html>