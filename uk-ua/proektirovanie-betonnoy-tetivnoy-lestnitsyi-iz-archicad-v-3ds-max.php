<?php

 $meta_keywords="Розрахунок, сходів, бетонної, сходи, гнутих, криволінійної, проектування криволінійної, пристінна, обчислення, Проектування, тятивних, прозорою, сходи, ArchiCad, візуалізація, 3ds max, сходинок, і, ширини,  косоур, АРХІКАД, макс";
 
 $meta_description="Проектування бетонних тятивних сходів з ArchiCad в 3ds Max від компанії Сходи-А, візуалізація бетонних сходів в 3ds max, як самому зробити дизайн сходів, створення сходів в АРХІКАД, 3dsmax, макс, АРХІКАД, archicad, макс уроки";
 
 $meta_title="Проектування бетонних тятивних сходів з ArchiCad в 3ds Max";

require('header.php');
?>

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        
    <h1 style="font-size:2.5em;" >Проектування бетонних тятивних сходів з ArchiCad в 3ds Max</h1>
 
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

<h2 class="newH2">Даний урок є продовженням уроку <a href="proektirovanie-krivolineynoy-tetivnoy-betonnoy-lestnitsyi-v-archicad.php"> &quot; Проектування криволінійних тятивних бетонних сходів в ArchiCad &quot; </a>. ArchiCad легко проектує гладкопідшиті сходи за допомогою інструменту Сходи і додаткових розширень і доповнень типу ArchiSuite ArchiStair 2, але криволінійні тятиви і косоури доводиться проектувати в максі, тому що інструменти АРХІКАД не можуть зробити це красиво і швидко. Проектувальники компанії Сходи-А проектують в АРХІКАД стіни, перекриття, вікна, двері, сходи без тятив і косоурів і зберігають файл в .dwg форматі, а потім дизайнери імпортують файл в 3ds max, домальовують обшивку сходинок, криволінійні тятиви, косоури, накладають матеріали, виставляють освітлення і виконують рендер. Візуалізація є важливим документом в пакеті договору на виробництво бетонних сходів від Сходи-А.</h2><br>
<h3 class="newH3">Передбачається, що у Вас є базові навички роботи в програмі 3ds Max. Нагадаю, що в минулому уроці в ArchiCad ми створили ось такі сходи:</h3>
<p><img src="/static/images/article/plan26.jpg" style="width:100%;max-width:870px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Зараз нам потрібно створити обшивку сходинок з 40мм дошки і 2 криволінійні тятиви.</h3>
<h3 class="newH3">Відкриваємо 3ds Max. Зазвичай я відразу відкриваю свій, заздалегідь підготовлений файл MaxStart.max, в якому на сцені тільки джерела освітлення (сонце, dome) і є бібліотека матеріалів, які я постійно використовую. У відкритий MaxStart.max в вікно Perspective перетягуємо наш .dwg файл, у вікні тиснемо Import File. Розміщуємо наш будинок зі сходами по центру вікна перспективи.</h3>
<p><img src="/static/images/article/plan27.jpg"  style="width:100%;max-width:1255px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Відразу конвертуємо в Poly нашу відзначену геометрію, натиснувши правою кнопкою мишки на екран і вибравши Convert to Editable Poly. Потім кидаємо матеріали на всі шари (wall, floor1, window, door).</h3>
<h3 class="newH3">Ставимо камеру перед сходами і розставляємо освітлення: перше світло Plane я ставлю на першому поверсі під стелею між камерою і сходами, а другий Plane ставлю над сходами на другому поверсі під стелею.</h3>
<h3 class="newH3">Також видаляю першу сходинку в сходах, тому що замість неї існує запрошувальна сходинка. На всі об'єкти ставимо модифікатор UVW Map, а на двері (і потім на обшивку сходинок) ставимо Unwrap UVW.</h3>
<p><img src="/static/images/article/plan28.jpg"  style="width:100%;max-width:994px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Малюємо обшивку першої запрошувальної сходинки (дерево 40мм). Виділяємо її верхній полігон - &gt; Detach - &gt; ok для створення нового об'єкта Object001 - &gt; виділяємо Object001- &gt; виділяємо полігон - &gt; Outline (Settings) вводимо 30mm - &gt; підтверджуємо зеленою пташкою</h3>
<p><img src="/static/images/article/plan29.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Виділяємо Object001 і застосовуємо модифікатор Shell. Outer Amount виставляємо 40mm.</h3>
<p><img src="/static/images/article/plan30.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Щоб працювати тільки з Object001 тиснемо Alt + Q. Виділяємо Object001 і конвертуємо в Editable Poly. Далі виділяємо всі верхні ребра і тиснемо Chamfer (Settings)</h3>
<p><img src="/static/images/article/plan31.jpg"  style="width:100%;max-width:1232px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Підтверджуємо зеленою пташкою, тиснемо Alt + Q і отримуємо ось таку красиву накривку на першу запрошувальну сходинку.</h3>
<p><img src="/static/images/article/plan32.jpg"  style="width:100%;max-width:800px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Те ж саме робимо з іншими сходинками. Виділяємо шар зі сходами stair1, Alt + Q, тиснемо Polygon, відзначаємо всі верхні полігони на сходинках і Detach.</h3>
<p><img src="/static/images/article/plan33.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Підтверджуємо Detach Ok, і виділяємо наш новоутворений об'єкт Object002. У ньому тиснемо на Polygon - &gt; Outline (Settings) вводимо 30mm - &gt; підтверджуємо зеленою пташкою</h3>
<h3 class="newH3">Виділяємо Object002 і застосовуємо модифікатор Shell. Outer Amount виставляємо 40mm. Тиснемо по центру екрана - &gt; Conver to: Convert To Editable Poly.</h3>
<h3 class="newH3">Вибираємо режим виділення ребер (Edge) і виділяємо всі ребра в накривки сходинки, які потрібно закруглити (передні верхні ребра).</h3>
<p><img src="/static/images/article/plan34.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Тиснемо Chamfer (Settings), виставляємо Edge Chamfer Amount = 25mm, Connect Edge Cegments = 12, Ok, Alt + Q, і отримуємо ось таку красиву накривку на наші бетонні сходи.</h3>
<p><img src="/static/images/article/plan35.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Накладаємо на Object002 матеріал дерево і застосовуємо модифікатор Unwrap UVW, щоб текстура дерева (волокна) лежали вздовж довгої сторони сходинки.</h3>
<h3 class="newH3">Тепер час створити тятиви. Створюємо тятиву з Shapes - &gt; Line - &gt; Initial Type - Smooth - &gt; включаємо прив'язку до вершин Snaps Toggle - &gt; і натискаємо по нижнім заднім вершинам бетонних сходинок, створюючи сплайн-криву.</h3>
<p><img src="/static/images/article/plan36.jpg"  style="width:100%;max-width:1100px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Краще це робити заздалегідь виділивши сходинки і обшивку і натиснувши на Alt + Q, убрав всі інші об'єкти зі сцени. Намалювавши тятиву з одного боку сходів - малюємо іншу.</h3>
<h3 class="newH3">Після виділяємо першу сплайн-криву (Line001) і застосовуємо модифікатор Extrude - &gt; Amount = 450mm і опускаємо Line001 приблизно на 65-70mm вниз.</h3>
<p><img src="/static/images/article/plan37.jpg"  style="width:100%;max-width:1200px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Потім застосовуємо модифікатор Shell - &gt; Inner Amount = 40mm, Outer Amount = 40mm.</h3>
<p><img src="/static/images/article/plan38.jpg"  style="width:100%;max-width:1000px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">У центральній частині спостерігаємо невеликий горб на тятиві. Включаємо режим Vertex, включаємо кнопку Show end resalt on, виділяємо вершину в центрі горба і опускаємо її вниз. Це зручніше робити у вікні Front. Таким чином редагуємо і інші вершини, домагаючись того, щоб вся тятива була плавною без горбів.</h3>
<p><img src="/static/images/article/plan39.jpg"  style="width:100%;max-width:655px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Для гарного сполучення тятиви і циліндра в режимі Vertex (1) переносимо нижню вершину до центру циліндра і за допомогою маніпуляторів Без'є (при зазначеній вершині тиснемо по центру екрану і вибираємо тип Bezier) задаємо потрібну кривизну.</h3>
<h3 class="newH3">Тиснемо на Refine (2) і додамо ще 2 вершини (3) (4) для більш плавної форми тятиви (тип для цих вершин задаємо Smooth). Всі ці операції спочатку робимо в вікні Top, а регулювання по висоті робимо в вікнах Front або Perspective.</h3>
<p><img src="/static/images/article/plan40.jpg"  style="width:100%;max-width:1300px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Таким же чином створюємо і другу тятиву. На другому поверсі по краю отвору створюємо бордюр, який з'єднується з тятивами (на малюнку нижче рожевого кольору). Він створюється Shapes - &gt; Line і з застосуванням модифікаторів Extrude і Shell.</h3>
<p><img src="/static/images/article/plan41.jpg"  style="width:100%;max-width:1300px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Накладаємо матеріали на тятиви, накривку сходів і бордюр і отримуємо таку візуалізацію.</h3>
<p><img src="/static/images/article/3d_1.jpg"  style="width:100%;max-width:663px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/> <img src="/static/images/article/3d_2.jpg"  style="width:100%;max-width:668px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/><img src="/static/images/article/3d_3.jpg"  style="width:100%;max-width:662px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h3 class="newH3">Давайте подивимося як ці сходи виготовила наша компанія <a href="http://stupeni-a.com.ua" > Сходи-А.</a></h3>
<p>&nbsp;</p>
<p><img src="/static/images/article/stair_concrete_2.jpg"  style="width:100%;max-width:741px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/> <img src="/static/images/article/stair_concrete_3.jpg"  style="width:100%;max-width:420px;"  alt="Дизайн бетонних сходів фото" title="Проект бетонних сходів в 3ds max від Сходи-А"/></p>
<h2 class="newH2">Переглянути більше бетонних сходів від компанії &quot; Сходи-А &quot; Ви можете за посиланням <a href="betonnyie-lestnitsyi.php">Бетонні сходи від Сходи-А</a></h2>
<br> <br>
<h2 class="newH2"> Автор статті - Анатолій Карпов (фаундер Сходи-А)</h2> <br> <br>
    
  
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
