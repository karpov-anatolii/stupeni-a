<?php
// Проверяем установлен ли массив файлов и массив с переданными данными
if(isset($_FILES) && isset($_FILES['image'])) {
	
	   if ($_POST["nameimg"]){
		   
		   
		   $info=explode(":", ($_POST["nameimg"]));
		   $nameimg=$info[0];
		   $prorab=$info[1];
		   $realname = array("Анатолий", "Толя", "Толик", "Константин", "Костя", "Костик","Анатолій", "Костянтин" ,"анатолий", "толя", "толик", "константин", "костя", "костик","анатолій", "костянтин"   );
           if (!in_array($prorab, $realname)) {
		   
			     $response1 = Array(
								  'status' => 'wrongprorab'
						   );
							  print json_encode($response1);
							 exit; 	
		   }
		   
       }   
	 
	
 
		//Переданный массив сохраняем в переменной
		$image = $_FILES['image'];
		// Получаем нужные элементы массива "image"
		$fileTmpName = $_FILES['image']['tmp_name'];
		    
 
 
			// Проверяем размер файла и если он превышает заданный размер
			// завершаем выполнение скрипта и выводим ошибку
			if ($image['size'] > 5000000) {
			  die('error');
			}
		   
			// Достаем формат изображения
			$imageFormat = explode('.', $image['name']);
			$imageFormat = $imageFormat[1];
			// Достаем имя изображения
			$uploadedFile = basename($_FILES['image']['name']);
		   
			// Генерируем новое имя для изображения. Можно сохранить и со старым
			// но это не рекомендуется делать
		   // $imageFullName = 'https://stupeni-a.com.ua/photo-com/' . hash('crc32',time()) . '.' . $imageFormat;
		   $imageFullName = './photo-com/'.$nameimg .'.jpg';
			// Сохраняем тип изображения в переменную
			$imageType = $image['type'];
		   
			// Сверяем доступные форматы изображений, если изображение соответствует,
			// копируем изображение в папку images
			if ($imageType == 'image/jpeg' ) {
			  if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
			//	echo 'success';
			    $response2 = Array(
								  'status' => 'success'
						   );
							  print json_encode($response2);
							 exit; 	
			   
			
			
			  } else {
			//	echo 'error';
			   $response2 = Array(
		 						  'status' => 'error'
						   );
							  print json_encode($response2);
							 exit; 	
			
			
			  }
			}
			
		
		
}


?>