<?php

 $meta_keywords="Расчет, ступеней, бетонной, лестницы, гнутой,криволинейной,  проектирование криволинейной, пристенной,  вычисление, Проектирование,  тетивной, прозрачной,  лестница, ArchiCad, визуализация,   3ds max, подступенков, и, ширины, проступи, косоур, архикад, макс";
 
 $meta_description="Проектирование бетонной тетивной лестницы из ArchiCad в 3ds Max от компании Ступени-А, визуализация бетонной лестницы в 3ds max,  как самому сделать дизайн лестницы, создание лестницы в архикад, 3dsmax, макс, архикад, archicad, макс уроки";
 
 $meta_title="Проектирование бетонной тетивной лестницы из ArchiCad в 3ds Max";

require('header.php');
?>

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        
    <h1 style="font-size:2.5em;" >Проектирование бетонной тетивной лестницы из ArchiCad в 3ds Max</h1>
 
        <!-- banner text -->
      </div>
    </div>
  </div>
</section>
<section id="descripton" class="section descripton">
  <div class="container text-center">
    
<style>
 .newH2{font-size:1.0em;font-family: 'Ubuntu', sans-serif !important;text-transform: none;letter-spacing: 0px;font-weight: 400 !important;color: #6c7279 !important;}
 .newH3{font-size:1.0em;font-family: 'Ubuntu', sans-serif !important;text-transform: none;letter-spacing: 0px;font-weight: 400 !important;color: #6c7279 !important;}
</style>

<h2 class="newH2">Данный урок является продолжением урока <a href="/proektirovanie-krivolineynoy-tetivnoy-betonnoy-lestnitsyi-v-archicad.php"> &quot;Проектирование криволинейной тетивной бетонной лестницы в ArchiCad&quot;</a>. ArchiCad легко проектирует гладкоподшитые лестницы с помощью инструмента Лестница и дополнительных расширений и дополнений типа ArchiSuite ArchiStair 2, но криволинейные тетивы и косоуры приходится проектировать в максе, т.к. инструменты архикада не могут сделать это красиво и быстро. Проектировщики компании Ступени-А проектируют в архикаде стены, перекрытия, окна, двери, ступени без тетив и косоуров и сохраняют файл в .dwg формате, а потом дизайнеры импортируют файл в 3ds max, дорисовывают обшивку проступей, криволинейные тетивы, косоуры, накладывают материалы, выставляют освещение и выполняют рендер. Визуализация является важным документом в пакете договора на производство бетонной лестницы от Ступени-А. </h2><br>
<h3 class="newH3">Предполагается, что у Вас имеются базовые навыки работы в программе 3ds Max. Напомню, что в прошлом уроке в ArchiCad мы создали вот такую лестницу:</h3>
<p><img src="static/images/article/plan26.jpg" style="width:100%;max-width:870px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Сейчас нам нужно создать обшивку проступей из 40мм доски и 2 криволинейные тетивы.</h3>
<h3 class="newH3">Открываем 3ds Max. Обычно я сразу открываю свой, заранее подготовленный файл MaxStart.max, в котором на сцене только источники освещения (солнце, dome) и имеется библиотека материалов, которые я постоянно использую. В открытый MaxStart.max в окно Perspective перетаскиваем наш .dwg файл, в появившемся окне жмем Import File. Помещаем наш дом с лестницей по центру окна перспективы.</h3>
<p><img src="static/images/article/plan27.jpg"  style="width:100%;max-width:1255px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Сразу конвертируем в Poly нашу отмеченную геометрию, нажав правой кнопкой мышки на экран и выбрав Convert to Editable Poly. Потом кидаем материалы на все слоя (wall, floor1, window, door).</h3>
<h3 class="newH3">Ставим камеру перед лестницей и расставляем освещение: первый свет Plane я ставлю на первом этаже под потолком между камерой и лестницей, а второй Plane ставлю над лестницей на втором этаже под потолком.</h3>
<h3 class="newH3">Также удаляю первую ступень в лестнице, т.к. вместо нее существует пригласительная ступень. На все объекты ставим модификатор UVW Map, а на двери ( и потом на обшивку проступей) ставим Unwrap UVW.</h3>
<p><img src="static/images/article/plan28.jpg"  style="width:100%;max-width:994px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Рисуем обшивку первой пригласительной ступени (дерево 40мм). Выделяем ее верхний полигон -&gt; Detach -&gt; ok для создания нового объекта Object001 -&gt; выделяем  Object001-&gt; выделяем полигон -&gt; Outline (Settings) вводим 30mm -&gt; подтверждаем зеленой птичкой</h3>
<p><img src="static/images/article/plan29.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Выделяем Object001 и применяем модификатор Shell. Outer Amount выставляем 40mm.</h3>
<p><img src="static/images/article/plan30.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Чтобы работать только с Object001 жмем Alt+Q. Выделяем Object001 и конвертируем в Editable Poly. Далее выделяем все верхние ребра и жмем Chamfer (Settings)</h3>
<p><img src="static/images/article/plan31.jpg"  style="width:100%;max-width:1232px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Подтверждаем зеленой птичкой, жмем Alt+Q и получаем вот такую красивую накрывку на первую пригласительную ступень.</h3>
<p><img src="static/images/article/plan32.jpg"  style="width:100%;max-width:800px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">То же самое делаем с остальными ступенями. Выделяем слой с лестницей stair1, Alt+Q, жмем Polygon, отмечаем все верхние полигоны на ступеньках  и Detach.</h3>
<p><img src="static/images/article/plan33.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Подтверждаем Detach Ok, и выделяем наш новообразовавшийся объект Object002. В нем жмем на Polygon -&gt; Outline (Settings) вводим 30mm -&gt; подтверждаем зеленой птичкой</h3>
<h3 class="newH3">Выделяем Object002 и применяем модификатор Shell. Outer Amount выставляем 40mm. Кликаем по центру экрана -&gt; Conver to: Convert To Editable Poly.</h3>
<h3 class="newH3">Выбираем режим выделения ребер (Edge) и выделяем все ребра в накрывке ступени, которые нужно закруглить (передние верхние ребра).</h3>
<p><img src="static/images/article/plan34.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Жмем Chamfer (Settings), выставляем Edge Chamfer Amount = 25mm, Connect Edge Cegments = 12, Ok, Alt+Q, и получаем вот такую красивую накрывку на наши бетонные ступени.</h3>
<p><img src="static/images/article/plan35.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Накладываем на Object002 материал дерево и применяем модификатор  Unwrap UVW, чтобы текстура дерева (волокна) лежали вдоль длинной стороны ступени.</h3>
<h3 class="newH3">Теперь время создать тетивы. Создаем тетиву из Shapes -&gt; Line -&gt; Initial Type - Smooth -&gt; включаем привязку к вершинам Snaps Toggle -&gt;  и кликаем по нижним задним вершинам бетонной ступени, создавая сплайн-кривую.</h3>
<p><img src="static/images/article/plan36.jpg"  style="width:100%;max-width:1100px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Лучше это делать предварительно выделив ступени и обшивку и нажав на Alt+Q, т.е.убрав все остальные объекты со сцены. Нарисовав тетиву с одной стороны лестницы - рисуем другую.</h3>
<h3 class="newH3">После выделяем первую сплайн-кривую (Line001) и применяем модификатор Extrude -&gt; Amount =450mm и опускаем Line001 приблизительно на 65-70mm вниз.</h3>
<p><img src="static/images/article/plan37.jpg"  style="width:100%;max-width:1200px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Затем применяем модификатор Shell -&gt; Inner Amount =40mm, Outer Amount =40mm. </h3>
<p><img src="static/images/article/plan38.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">В центральной части наблюдаем небольшой горб на тетиве. Включаем режим Vertex, включаем кнопку Show end resalt on, выделяем вершину в центре горба и опускаем ее вниз. Это удобнее делать в окне Front. Таким образом редактируем и другие вершины, добиваясь того, чтобы вся тетива была плавной без горбов.</h3>
<p><img src="static/images/article/plan39.jpg"  style="width:100%;max-width:655px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Для красивого сопряжения тетивы и бочонка в режиме Vertex (1) переносим нижнюю вершину к центру бочонка и с помощью манипуляторов Безъе (при отмеченной вершине жмем по центру экрана и выбираем тип Bezier) задаем нужную кривизну.</h3>
<h3 class="newH3">Жмем на Refine (2) и добавим еще 2 вершины (3) (4) для более плавной формы тетивы (тип для этих вершин задаем Smooth). Все эти операции сначала делаем в окне Top, а регулировку по высоте делаем в окнах Front или Perspective.</h3>
<p><img src="static/images/article/plan40.jpg"  style="width:100%;max-width:1300px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Таким же образом создаем и вторую тетиву. На втором этаже по краю проема создаем бордюр, который соединяется с тетивами (на рисунке ниже розового цвета).Он создается Shapes -&gt; Line и с применением модификаторов Extrude  и Shell.</h3>
<p><img src="static/images/article/plan41.jpg"  style="width:100%;max-width:1300px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Накладываем материалы на тетивы, накрывку ступеней и бордюр и получаем такую визуализацию.</h3>
<p><img src="static/images/article/3d_1.jpg"  style="width:100%;max-width:663px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/> <img src="static/images/article/3d_2.jpg"  style="width:100%;max-width:668px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/><img src="static/images/article/3d_3.jpg"  style="width:100%;max-width:662px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h3 class="newH3">Давайте посмотрим как эту лестницу изготовила наша компания <a href="http://stupeni-a.com.ua" > Ступени-А.</a></h3>
<p>&nbsp;</p>
<p><img src="static/images/article/stair_concrete_2.jpg"  style="width:100%;max-width:741px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/> <img src="static/images/article/stair_concrete_3.jpg"  style="width:100%;max-width:420px;"  alt="Дизайн бетонных лестниц фото" title="Проект бетонной лестницы в 3ds max от Ступени-А"/></p>
<h2 class="newH2">Просмотреть больше бетонных лестниц от компании &quot;Ступени-А&quot; Вы можете по ссылке <a href="/betonnyie-lestnitsyi.php">Бетонные лестницы от Ступени-А</a></h2>
<br> <br>
<h2 class="newH2"> Автор статьи - Анатолий Карпов (фаундер Ступени-А)</h2> <br> <br>
    
  
  </div>
</section>






<?php
     require('footer.php');
  ?>
  
  <script type="text/javascript">
    jQuery('section.banner').css('min-height', '220px');
    jQuery('.banner-image').css('height', '871px');
	
  </script>

</body>
</html>
