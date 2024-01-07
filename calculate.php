<?php

 $meta_keywords="Цена,стоимость, заказать лестницу,подсчет, подсчет стоимости,калькулятор стоимости,смета, сметная стоимость, лестница под ключ,Бетонные, лестницы,бетонная лестница,монолитные лестницы,лестницы для дома,винтовые лестницы,тетивные,косоурные лестницы,гладкоподшитые лестницы,проектирование и расчет бетонных лестниц,Ступени-А,бетонные,бетонная, лестница,лестницы,лестница Киев,лестницы Киев,эскизы,эскиз,лестницы с заворотом,заворотом,второй этаж, лестниц,расчет,проектирование,изготовление, изготовить,вылить,бетон,монолит,железобетон ";
 
 $meta_description="Подсчет стоимости бетонных лестниц, узнать цену лестницы, сметная стоимость работ и материалов, рассчитать стоимость работ по изготовлению бетонной лестницы, калькулятор стоимости, сделать заказ на бетонную лестницу от компании Ступени-А";
 
 $meta_title="Подсчёт стоимости лестницы";

require('header.php');
?>

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        <h2>Подсчёт стоимости лестницы</h2>
      
  
        <!-- banner text -->
      </div>
    </div>
  </div>
</section>
<section id="descripton" class="section descripton">
    <div class="container text-center">
        <h3 style="font-family: Vollkorn !important;font-size: 26px;text-transform: none;color: #7f7f7f !important;letter-spacing: 2px;margin: 30px;">Расчитайте стоимость вашей лестницы, заполнив соответствующие поля формы.</h3>
        <hr>
        <div class="form-section">
            <span class="form-header">
              <h3>Размер лестницы</h3>
            </span>
            <div class="" style="width: 95%;" >
                 <h4 style="width:100%;font-size:18px; letter-spacing:1px;" >Введите приблизительную высоту вашей лестницы в миллиметрах: <input type="text" id="heightl" name="form_heightl" class="input-text2" maxlength="4" value="" placeholder="3125">(мм)</h4>
                 
            </div>
            <div class="" style="width: 95%;">
                <h4 style="width:100%;font-size:18px; letter-spacing:1px;">Укажите приблизительно среднюю ширину лестничного марша: <input type="text" id="widthl" name="form_widthl" class="input-text2" maxlength="4" value="" placeholder="1000"> (мм)</h4>
                
            </div>
        </div>
        <hr>
        <div class="form-section">
            <span class="form-header">
              <h3>Форма лестницы в плане</h3>
            </span>
            <div class="form-field">
              <label>
                <input type="radio" id="forml0" name="form_forml" value="1.Прямая" checked >1.Прямая
                <img src="/static/images/prise/10.jpg">
              </label>
            </div>
            <div class="form-field"	>
              <label>
                <input type="radio" id="forml1" name="form_forml" value="2.Г-образная с площадкой"  >2.Г-образная с площадкой
                <img src="/static/images/prise/3.jpg">
              </label>
            </div>
            <div class="form-field"	>
              <label>
                <input type="radio" id="forml2" name="form_forml" value="3.П-образная с площадкой"  >3.П-образная с площадкой
                <img src="/static/images/prise/7.jpg">
              </label>
            </div>
            <div class="form-field"	>
              <label>
                <input type="radio" id="forml3" name="form_forml"  value="4.Г-образная, П-образная с забежными ступенями" >﻿4.Г-образная, П-образная с забежными ступенями
                <div>
                  <img src="/static/images/prise/2.jpg">
                  <img src="/static/images/prise/6.jpg">
                </div>
              </label>
            </div>
            <div class="form-field"	>
              <label>
               <input type="radio" id="forml4" name="form_forml"  value="5.Винтовая"  >5.Винтовая
               <img src="/static/images/prise/1.jpg">
             </label>
             </div>
            <div class="form-field"	>
              <label>
              <input type="radio" id="forml5" name="form_forml"  value="6.Криволинейная (гнутая)"  >6.Криволинейная (гнутая)
              <img src="/static/images/prise/4.jpg">
            </label>
            </div>
        </div>
        <hr>
        <div class="form-section">
          <span class="form-header">
            <h3>Тип конструкции</h3>
          </span>
        
          <div class="form-field"	>
            <label>
            <input type="radio" id="typel0" name="form_typel" value="1.Гладкоподшитая" checked/> 1.Гладкоподшитая
            <img src="/static/images/prise/14.jpg">
          </label>
          </div>
          <div class="form-field"	>
            <label>
            <input type="radio" id="typel1" name="form_typel" value="2.Тетивная гладкоподшитая" />2.Тетивная гладкоподшитая
            <img src="/static/images/prise/12.jpg">
          </label>
          </div>
          <div class="form-field"	>
            <label>
            <input type="radio" id="typel2"   name="form_typel" value="3.Тетивная с открытыми подступенками"  />3.Тетивная с открытыми подступенками
            <img src="/static/images/prise/11.jpg">
          </label></div>
          <div class="form-field"	>
            <label>
            <input type="radio" id="typel3"  name="form_typel" value="4.Косоурная"  /> 4.Косоурная
            <img src="/static/images/prise/15.jpg">
          </label></div>
          <div class="form-field"	>
            <label>
            <input type="radio" id="typel4"  name="form_typel" value="5.Двойной каркас"  /> 5.Двойной каркас
            <img src="/static/images/prise/13.jpg">
          </label>
          </div>
        </div>
        <hr>
        <div class="form-section">
          <span class="form-header">
          <h3>Выберите положение лестницы, относительно стен.</h3>
          </span>
          <div class="form-field"	>
            <label>
                <input type="radio" id="positionl0"  name="form_positionl"  value="1.Пристенная" checked />1.Пристенная
              <img src="/static/images/prise/9.jpg">
            </label>
            </div>
          <div class="form-field"	>
            <label>
              <input type="radio" id="positionl1"  name="form_positionl" value="2.Полупристенная"  >2.Полупристенная
              <img src="/static/images/prise/8.jpg">
            </label>
          </div>
          <div class="form-field"	>
            <label>
              <input type="radio" id="positionl2"  name="form_positionl"  value="3.Отдельностоящая(висящая)"  >3.Отдельностоящая(висящая)
              <img src="/static/images/prise/5.jpg">
            </label>
          </div>
        </div>
        <hr>
        <div class="form-section">
          <span class="form-header">
            <h3>Выберите форму ступеней лестницы</h3>
          </span>
          <div class="form-field"	>
            <label>
            <input type="radio" id="forms0"  name="form_forms" value="1.Прямые ступени" checked >1.Прямые ступени
            <img src="/static/images/prise/16.jpg">
          </label>
          </div>
          <div class="form-field"	>
            <label>
            <input type="radio" id="forms1"  name="form_forms" value="2.Лекальные ступени"  >2.Лекальные ступени
            <img src="/static/images/prise/17.jpg">
          </label>
          </div>
        </div>
        <hr>
        <div class="form-section">
          <span class="form-header">
            <h3>Выберите форму первых ступеней лестницы.</h3>
          </span>
          <div class="form-field"	>
            <label>
                <input type="radio" id="priglasits0" name="form_priglasits" value="1.Обычная первая и вторая ступени" checked >1.Обычная первая и вторая ступени
              <img src="/static/images/prise/20.jpg">
            </label>
          </div>
          <div class="form-field"	>
            <label>
              <input type="radio" id="priglasits1"  name="form_priglasits"  value="2.Первая ступень пригласительная" >2.Первая ступень пригласительная
              <img src="/static/images/prise/18.jpg">
            </label>
          </div>
          <div class="form-field"	>
            <label>
              <input type="radio" id="priglasits2" name="form_priglasits" value="3.Первая и вторая ступени пригласительные"  >3.Первая и вторая ступени пригласительные
              <img src="/static/images/prise/19.jpg">
            </label>
          </div>
        </div>
        <hr>
        <div class="form-section">
            <button type="button" style="margin: 60px 0 30px;" class="button_light" onclick="prise();" id="calc" name="form_calc">Подсчитать стоимость лестницы</button>
        </div>
        <div class="formField rsform-block rsform-block-prisel" style="margin:30px">
            <h4 style="font-family: Vollkorn !important;font-size: 24px;" >Стоимость Вашей лестницы составляет(грн):<input type="text" class="input-text2" id="prisel" name="form_prisel" size="12" value="0"></h4>
        </div>
    </div>
  
    <hr>
    
    <div class="form" style="width: 100%;float: left;background: #fbfbfb; min-width:500px;padding: 6% 20%;" >
            <h3>Заказать лестницу</h3>
            <p style="margin:20px 0;">После того,как Вы окончательно определились с конфигурацией и ценой лестницы, Вы можете отправить нам заявку на производство просчитанной лестницы. Заполните поля ниже.</p>
            <form action="/" method="post"  id="contactform">
                 <div>
                     <input id="cf-name" name="cf-name" class="input-text" pattern="[a-zA-Z0-9а-яА-я ]+" value="" placeholder="имя" type="text">
                     <input id="cf-phone" name="cf-phone" class="input-text"  value="" pattern="[0-9]+" placeholder="телефон" type="tel">
                     <input id="cf-email" name="cf-email" class="input-text" value="" placeholder="email" type="email">
                     
                 </div>
            </form>
            <button class="button_light" onclick="submit_orderform();"  >Отправить заказ</button>
    </div>
  
</section>

<?php
     require('footer.php');
  ?>
  
  <script type="text/javascript">
    jQuery('section.banner').css('min-height', '220px');
    jQuery('.banner-image').css('height', '871px');
	
	
	
	function submit_orderform(){
     //   show_info('Извините<br>но в данный момент заказ можно сделать только по телефону');
     //   return;
	   var string1="<p>Высота лестницы: "+jQuery('#heightl').val()+" мм.<br>";
	   var string2="Средняя ширина марша: "+jQuery('#widthl').val()+" мм.<br>";
	   var string3="Форма лестницы в плане: "+jQuery( "input[name='form_forml']:checked" ).val()+".<br>";
	   var string4="Тип конструкции: "+jQuery( "input[name='form_typel']:checked" ).val()+".<br>";
	   var string5="Положение лестницы относительно стен: "+jQuery( "input[name='form_positionl']:checked" ).val()+".<br>";
	   var string6="Форма ступеней лестницы: "+jQuery( "input[name='form_forms']:checked" ).val()+".<br>";
	   var string7="форма первых ступеней лестницы: "+jQuery( "input[name='form_priglasits']:checked" ).val()+".<br>";
	   var string8="Общая стоимость работ и материалов на изготовление бетонной лестницы (без отделки) составляет "+jQuery('#prisel').val()+" грн.</p>";
	   var alltext=string1+string2+string3+string4+string5+string6+string7+string8;
	   var name=jQuery('#cf-name').val();
	   var phone=jQuery('#cf-phone').val();
	   var email=jQuery('#cf-email').val();
	   if(!name) {show_info('Вы не указали имя');return;}
	   if(!phone) {show_info('Вы не указали телефон');return;}
	   if(!email) {show_info('Вы не указали e-mail');return;}
	   console.log(name+phone+email);
	    $.ajax({
				type:"POST",
				url:"send_mail.php",
				data:{order_text:alltext,name:name,phone:phone,email:email},
				success: function(data) {
					      /* obj = typeof data =='object' ? data : jQuery.parseJSON(data);
						   if (obj.status=="success"){
								show_info('Спасибо:)<br>Мы свяжемся с Вами в ближайшее время');
						    };
							if (obj.status=="error"){
								show_info('Ошибка отправки письма<br>Отправьте письмо еще раз');
						    };
						*/	
							if(data.slice(-1)=="1") show_info('Спасибо:)<br>Мы свяжемся с Вами в ближайшее время');
						    if(data.slice(-1)=="0") show_info('Ошибка отправки письма<br>Отправьте письмо еще раз');
					  }
			  });	
		};
	
	  function prise(){
			  var hl,hlv,wl,kwl,ns,fl=0,tl,kfl,ktl,pl,kpl,kfs,priglasits,prises,prisel;
			  var kpriglasits=0,costm=350,costwb=400,kploshad=0;
			  var hl=parseInt(document.getElementById('heightl').value);
			  if(!hl) {show_info("Вы не ввели высоту лестницы");return;}
			  var kkfl=kktl=kkpl=kkfs=kkpriglasits=1;
			  //if(hl<3000)hl=((3000-hl)/3+hl);
			  
			  ns=parseFloat(hl/170);
			  wl=parseInt(document.getElementById('widthl').value);
			  if(wl<1000) wl=1000;
			  if(!wl) {show_info("Вы не ввели среднюю ширину марша");return;}
			  kwl=wl/1000;
			  
			  //Форма лестницы 1.Прямая 2.Г-обр с площадкой 3.П-обр с площадкой 4.Г-обр //П-обр с забежными 5.Винтовая 6.Криволинейная
			   fl=document.getElementsByName('form_forml');
			   console.log('fl.length='+fl.length);
			  for(i=0;i<fl.length;i++) if(fl[i].checked) {kkfl=parseInt(fl[i].value)};
				switch (kkfl){
				  case 1:kfl=0.95;break;
				  case 2:kfl=1.0,kploshad=1.5;break;
				  case 3:kfl=1.0,kploshad=3;break;
				  case 4:kfl=1.4;break;
				  case 5:kfl=1.45;break;
					 default: kfl=1.5;}
			  
			  //Тип лестницы 1.Гладкоподшитая 2.Тетивная гладкоподшитая 3.Тетивная с открыт подступ 4.Косоурная 5.Двойной каркасс
			   tl=document.getElementsByName('form_typel'); 
			   for(i=0;i<tl.length;i++) if(tl[i].checked) kktl=parseInt(tl[i].value);
				 switch (kktl){
				  case 1:ktl=1;break;
				  case 2:ktl=1.35;break;
				  case 3:ktl=1.8;break;
				  case 4:ktl=1.9;break;
				  case 5:ktl=1.7;break;}
			  
			  //Положение лестницы 1.Пристенная 2.Полупристенная 3.Отдельностоящая
			   pl=document.getElementsByName('form_positionl'); 
			   for(i=0;i<pl.length;i++) if(pl[i].checked) kkpl=parseInt(pl[i].value);
			  
				 switch (kkpl){
				  case 1:kpl=1;break;
				  case 2:kpl=1.15;break;
				  case 3:kpl=1.3;break;}
			   
			  //Форма ступеней 1.Прямые ступени 2.Лекальные ступени
			   fs=document.getElementsByName('form_forms');
			   for(i=0;i<fs.length;i++) if(fs[i].checked) kkfs=parseInt(fs[i].value);
				 switch (kkfs){
				  case 1:kfs=1;break;
				  case 2:kfs=1.25;break;}
			   
			  //Подсчет стоимости работы одной ступени 'costw'
			   costw=costwb*kwl*kfl*ktl*kpl*kfs;
			  //Вычисление стоимости пригласительных ступеней 1.Обычные  2.Первая пригласит  3.Первая и вторая приглас.
			   priglasits=document.getElementsByName('form_priglasits');
			   for(i=0;i<priglasits.length;i++)  if(priglasits[i].checked) kkpriglasits=parseInt(priglasits[i].value);
			   switch (kkpriglasits){
				  case 2:kpriglasits=costw*0.8;break;
				  case 3:kpriglasits=costw*0.8+costw*0.5;break;}
				
			  //Подсчитываем стоимость одной ступени и всей лестницы
			   prises=costm+costw;
			  
			   prisel=document.getElementById('prisel');  
			   prisel.value=parseInt((prises*(ns+kploshad)+kpriglasits)/100*190); 
			   
 }



  </script>

</body>
</html>
