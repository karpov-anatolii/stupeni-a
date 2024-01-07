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
$realname = array("Anatolii", "Anatoly", "Tolik", "Анатолий", "Толя", "Толик", "Константин", "Костя", "Костик", "Анатолій", "Костянтин", "анатолий", "толя", "толик", "константин", "костя", "костик", "анатолій", "костянтин");
if ($z[1] && $z[2] && $z[3] && in_array($z[2], $realname)) {

  // mail("schodya@gmail.com", "заполнена форма stupeni-a.com.ua", $z[1] . "\n" . $z[2] . "\n" . $z[3] ."\n" . $z[4]); // сообщение на ваш email о новом отзыве

  if (strpos($z[3], 'http://') === false) { // если в тексте отзыва нет http://
    // $fp = fopen("comments.txt", "c+"); // режим записи
    $mytext = "<dt>" . $z[1] . "</dt><dd>" . $z[4] . "</dd><dd>" . $z[6] . "</dd><dd  class='com-dd' ><img class='com-img' src='/photo-com/" . $z[5] . ".jpg' alt='Бетонні сходи' ><p class='com-text'> " . $z[3] . "</p> </dd> <button onClick='deletecom(\"" . $z[5] . "\")'>УДАЛИТЬ </button> <hr class='com-hr'>   \n";

    //$text = "Не удалось скопировать файлы: \n";

    $mytext .= file_get_contents("../comments.txt") . PHP_EOL; //читаем и "дописываем" в начало текста
    file_put_contents("../comments.txt", $mytext . "\n");


    //    $save = fwrite($fp, "\n".$mytext."\n"); // запись в файл
    //   fclose($fp); // закрытие файла
    Header("Location: " . $_SERVER['PHP_SELF']); // обновить страницу; обновлённая версия содержит опубликованный комментарий
    exit;
  } else { // если в тексте есть http://
    $dl = '<b style="color: red;">Your feedback will be published after verification by the author of the site </b>'; // показан этот текст
  }
} else {

  $fp = @fopen("../comments.txt", "r"); // режим чтения
  if ($fp) {
    while (!feof($fp)) {
      $dl .= fgetss($fp, 8000, "<dl>,<dt>,<dd>,<span>,<img>,<hr>,<p>,<button>"); // <dl>,<dt>,<dd> - это список тегов, разрешённых для публикации
    }
  }
  fclose($fp);
}
?>


<?php

$meta_keywords = "reviews, company, Stairs-A, stairs, concrete, comments, make a review";

$meta_description = "Reviews about the company Stairs-A, leave a review about concrete stairs and railings of the company Stairs-A";

$meta_title = "Reviews about the company Stairs-A";

require('header.php');

?>


<!-- banner text -->
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="innerbanner-text text-center">
      <h1 style="font-size:2.5em;">Reviews about the company Stairs-A</h1>
      <!-- banner text -->
    </div>
  </div>
</div>
</section>


<section id="descripton" class="section descripton">
  <div>


    <div class="row">
      <h2 style="text-align: center;font-size: 30px;">Leave a review</h2>
      <div class="com-forms">
        <form id="upload-comment" name="upload-comment" method="post">
          <label>1. Your name:</label> <input type='text' name='name' required /><span style='color:red' id='namef'></span><br />
          <label>2. The name of the stair builder:</label><input type='text' name='prorab' placeholder="Enter name" required /><span style='color:red' id='prorabf'>
          </span><br />
          <label>3. City (locality):</label><input type='text' name='town' style="width: 250px;" placeholder="Where were the stairs built?" required /><span style='color:red' id='townf'></span><br />
          <label>4. Feedback:</label><textarea name='content' style="width:100%;" placeholder="Tell us where you found out about us, why you turned to us, what you liked about the work process, what you didn't like. Your opinion is very important to us. We strive to be better! " required rows="5"></textarea><span style='color:red' id='contentf'></span><br />
          <input type="hidden" name="curdatetime" value="<?php echo str_replace("-", "", date("j-m-y-h-i-s")) ?>" />
          <input id="submit-comment" class="button_light" type='submit' value='публикация' style="display:none" />
        </form>

        <!--Загрузка изображения-------------------------->
        <div class="image-preview">
          <img id="preview" src="" alt="" style="width:100%; max-width:400px;margin-bottom: 20px;"><span style='color:red' id='previewf'></span><br />
        </div>
        <form id="upload-image" enctype="multipart/form-data" method='post'>
          <div class="form-group">
            <label for="image" style="float:left;">5. Upload a photo of the stairs:</label>
            <input type="file" name="image" id="image">
          </div>
          <input class="button_light" type="submit" style="display: block;margin-left: auto;margin-right: auto;" value='PUBLISH '>
        </form>
        <div id="result">
        </div>
        <!----------------------------------------------->
      </div>

      <hr class='com-hr'>
      <dl style="margin: 20px;">
        <? echo $dl; ?>
        <!-- PHP -->
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


  function submit_contactform() {
    var name = jQuery('#cf-name').val();
    var message = jQuery('#cf-message').val();
    var email = jQuery('#cf-email').val();
    if (!name) {
      show_info("You did not enter a name");
      return;
    };
    if (!email) {
      show_info('You did not specify e-mail ');
      return;
    };
    if (!message) {
      show_info('Write the text of the letter ');
      return;
    };
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
        if (data.slice(-1) == "1") show_info("Thank you:) <br> We will contact you soon ");
        if (data.slice(-1) == "0") show_info('Error sending email <br> Send email again ');
      }
    });

  };
</script>


<script type="text/javascript">
  function deletecom(nameimg) {
    var pass = prompt('Введіть пароль для видалення коментаря', 0000);
    console.log(pass + nameimg);
    $.ajax({
      url: "../delete-com.php",
      type: "POST",
      data: {
        nameimg: nameimg,
        pass: pass
      },
      dataType: 'json',
      success: function(data) {
        obj = typeof data == 'object' ? data : jQuery.parseJSON(data);
        if (obj.status == "success") {
          // console.log("YESS! TEXT1 "+obj.text1+"\n TEXT2 "+obj.text2+"\n\n TEXT3 "+obj.text3+"\n\n TEXT4 "+obj.text4+"\n\n TEXT5 "+obj.text0+"\n\n");
          location.reload();
        };
        if (obj.status == "wrongpass") {
          show_info("Невірний пароль.");
        };
      }
    });
  }

  $(document).ready(function() {

    function readImage(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    function printMessage(destination, msg) {
      $(destination).removeClass();
      if (msg == 'success') {
        $(destination).addClass('alert alert-success').text('Thank you:) Review successfully uploaded! ');
      }
      if (msg == 'error') {
        $(destination).addClass('alert alert-danger').text('An error occurred while uploading the photo:(');
      }
    }

    $('#image').change(function() {
      readImage(this);
    });

    function validate() {
      //Считаем значения из полей name и email в переменные x и y
      var x = document.forms["upload-comment"]["name"].value;
      var y = document.forms["upload-comment"]["prorab"].value;
      //Если поле name пустое выведем сообщение и предотвратим отправку формы
      if (x.length == 0) {
        document.getElementById("namef").innerHTML = "*this field is mandatory ";
        show_info("You did not enter your name.");
        return false;
      }
      //If the email field is empty, we will output a message and prevent the form from being sent
      if (y.length == 0) {
        document.getElementById("prorabf").innerHTML = "*this field is mandatory";
        show_info("You did not enter the name of the contractor who made the stairs for you. This is necessary to verify that you are really our client.");
        return false;
      }

      var t = document.forms["upload-comment"]["town"].value;
      if (t.length == 0) {
        document.getElementById("townf").innerHTML = "*You did not enter the settlement where the stairs are located.";
        show_info("You did not enter the town where the stairs are located.");
        return false;
      }

      var c = document.forms["upload-comment"]["content"].value;
      if (c.length == 0) {
        document.getElementById("contentf").innerHTML = "*You did not enter the feedback text.";
        show_info("You have not entered a feedback text.");
        return false;
      }
      if (document.getElementById('preview').getAttribute('src') == '') {
        document.getElementById("previewf").innerHTML = "*Please upload a photo of the stairs.";
        show_info("Upload a photo of the stairs from files or take a photo by clicking the upload button.");
        return false;
      }
      return true;
    }

    $('#upload-image').on('submit', (function(e) {
      e.preventDefault();
      if (!validate()) {
        return;
      }
      var input = $('#image')[0];
      if (!input.files[0].type.match('image.*')) {
        show_info('Upload photo in .jpg format');
        return;
      }
      var formData = new FormData(this);
      var prorab = document.forms["upload-comment"]["prorab"].value;
      var curdatetime = document.forms["upload-comment"]["curdatetime"].value;
      var nameimg = curdatetime + ":" + prorab;
      formData.append('nameimg', nameimg);
      $.ajax({
        type: 'POST', // Request type
        url: '../upload.php', // Handler script
        data: formData, // The data we transfer
        cache: false, // Disabled by default in POST requests, but let's play it safe
        contentType: false, // We set the type of data encoding in the form, we will turn it off
        processData: false, // We turn it off because we are transferring a file
        success: function(data) {
          obj = typeof data == 'object' ? data : jQuery.parseJSON(data);
          if (obj.status == "success") {
            printMessage('#result', 'success');
            setInterval(function() {
              $('#submit-comment').trigger('click');
            }, 3000);
          };
          if (obj.status == "error") {
            printMessage('#result', 'error');
          };
          if (obj.status == "wrongprorab") {
            show_info("Invalid executable name");
          };
        }
      });

    }));
  });
</script>



</body>

</html>