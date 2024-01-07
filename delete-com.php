<?php

	
if ($_POST["nameimg"]){$nameimg=($_POST["nameimg"]);}   
if ($_POST["pass"]){
		    $pass=($_POST["pass"]);
		    if($pass  != "creator76"){
				  $response1 = Array(
								  'status' => 'wrongpass'
						   );
							  print json_encode($response1);
							 exit; 	
			 }else{
				 $comments="comments.txt";
				 
		        $txt = file_get_contents($comments);
             // $txt = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\r\n", $txt);
			//   $txt = preg_replace('/[\n\r]+/', '', $txt);
            //   $txt = str_replace(array("\n", "\r"), '', $txt);
			    $txt =preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $txt);
				$fp = fopen($comments,"w");
                fwrite($fp, $txt);
                fclose($fp);
				
				 
				
				$content = file_get_contents ($comments);
				$old_text = array();
				$new_text = array();
				// $pattern1="/(.*?)<dt>(.*?)".$nameimg."\.jpg(.*?)class='com-hr'>(.*?)/";
				// $pattern1="/<dt>".$nameimg."(.+)".$nameimg."'>)/";
				$pattern1="/([\s\S]*)<dt>([\s\S]+)".$nameimg."\.jpg([\s\S]*?)class='com-hr'>([\s\S]+)/"; //Вместо символа . можно использовать [\s\S] (все пробельные и непробельные символы, включая символ новой строки). 
				  if(preg_match($pattern1,$content,$strdel)) {
				  $old_text[0]=$strdel[0];
				  $new_text[0]=$strdel[1].$strdel[4];
				}
				
			  $newcontent = str_replace($old_text, $new_text, $content);
			  $open = fopen($comments, "w");
				if(flock($open, LOCK_EX)) {  // выполняем эксклюзивную блокировку
					  ftruncate($open, 0); // очищаем файл
					  fwrite($open,$newcontent);
					  fflush($open);   // очищаем вывод перед отменой блокировки
					  flock($open, LOCK_UN); // отпираем файл
					  
					   $response1 = Array(
										  'status' => 'success',
										  'text1' => $strdel[1],
										  'text2' => $strdel[2],
										  'text3' => $strdel[3],
										  'text4' => $strdel[4],
										  'text0' => $strdel[0],
										  'nameimg' => $nameimg,
										  'content' => $content
								   );
									  print json_encode($response1);
									 exit; 	
					  
				}
			 }
} 