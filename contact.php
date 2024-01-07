<?php

$meta_keywords = "Контакты, компании ,Ступени-А,форма ,обратной, связи, отправить,Свяжитесь, с ,нами ,сообщение, просчитать, и заказать, бетонную, лестницу.";

$meta_description = "Контакты компании Ступени-А,форма обратной связи,Свяжитесь с нами, отправить сообщение, отправить письмо, просчитать и заказать бетонную лестницу.";

$meta_title = "Контакты";

require('header.php');

?>


<!-- banner text -->
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="innerbanner-text text-center">
      <h1 style="font-size:2.5em;">Контакты компании Ступени-А</h1>
      <!-- banner text -->
    </div>
  </div>
</div>
</section>


<section id="descripton" class="section descripton" style="position: relative;">
  <div style="/* display:inline-block*/">


    <div class="row">
      <div class="form col-md-6 col-xs-12">
        <h3>Написать нам письмо</h3>
        <p style="margin:20px 0;">Вы можете задать нам любые вопросы, касающиеся бетонных лестниц и нашей сферы деятельности. Пожалуйста, заполните форму ниже. Оставьте свой телефон, если Вы хотите, чтобы мы перезвонили в течении 24 часов.</p>
        <form action="/" method="post" id="contactform">
          <div>
            <input id="cf-name" name="cf-name" class="input-text" pattern="[a-zA-Z0-9а-яА-ЯЁёІіЇїЄє ]+" value="" placeholder="имя" type="text">
            <input id="cf-email" name="cf-email" class="input-text" value="" placeholder="email" type="email">
            <textarea id="cf-message" rows="3" cols="25" name="cf-message" placeholder="текст письма"></textarea>
          </div>
        </form>
        <button class="button_light" onclick="submit_contactform();">Отправить письмо</button>
      </div>


      <div class="container text-center  col-md-6 col-xs-12">
        <div class="contact">
          <div class="row">
            <div class="col-md-6 col-xs-12 text-right" style="width:8%;margin-top: 10px;">
              <img id="mail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Feather-communication-mail.svg/2000px-Feather-communication-mail.svg.png" alt="Письмо">
            </div>
            <div class="col-md-6 col-xs-12 text-left" style="width: auto;">
              <h4>schodya@gmail.com</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12 text-right" style="width:8%;margin-top: 10px;">
              <img id="tube" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Feather-communication-phone.svg/2000px-Feather-communication-phone.svg.png" alt="Позвонить">
            </div>
            <div class="col-md-6 col-xs-12 text-left" style="width: 92%;">
              <!-- <h4>Бетонные лестницы: (+38)067-409-40-85, (+38)050-981-67-70  </h4> <br> -->
              <h4> (+38)096-933-63-33</h4><br>
              <h5>Звонить с 9 до 18.</h5>
            </div>
          </div>
          <div class="row" style="margin: 80px 0 30px;">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>








<?php
require('footer.php');
?>


<script type="text/javascript">
  jQuery('section.banner').css('min-height', '220px');
  jQuery('.banner-image').css('height', '871px');


  function submit_contactform() {
    var name = jQuery('#cf-name').val();
    var message = jQuery('#cf-message').val();
    var email = jQuery('#cf-email').val();
    if (!name) {
      show_info('Вы не указали имя');
      return;
    };
    if (!email) {
      show_info('Вы не указали e-mail');
      return;
    };
    if (!message) {
      show_info('Напишите текст письма');
      return;
    };
    console.log(name + message + email);
    jQuery.ajax({
      type: "POST",
      url: "send_mail.php",
      data: {
        name: name,
        message: message,
        email: email
      },
      success: function(data) {
        console.log("data=" + data);
        /*     obj = typeof data =='object' ? data : jQuery.parseJSON(data);
						
						   if (obj.status=="success"){
								show_info('Спасибо:)<br>Мы свяжемся с Вами в ближайшее время');
						    };
							if (obj.status=="error"){
								show_info('Ошибка отправки письма<br>Отправьте письмо еще раз');
						    };
						*/
        if (data.slice(-1) == "1") show_info('Спасибо:)<br>Мы свяжемся с Вами в ближайшее время');
        if (data.slice(-1) == "0") show_info('Ошибка отправки письма<br>Отправьте письмо еще раз');
      }
    });
  };
</script>




























</body>

</html>