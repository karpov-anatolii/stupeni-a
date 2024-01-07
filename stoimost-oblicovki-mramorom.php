<?php

$meta_keywords = "подсчитать, цену, облицовки, отделки, мрамором, бетонной, лестницы,  калькулятор,  узнать, стоимость,  мрамор , ступеней ";

$meta_description = "Компания Ступени-А предлагает подсчитать цену облицовки архитектурным мрамор-бетоном бетонной лестницы. Воспользуйтесь калькулятором чтобы узнать стоимость отделки мрамором прямых и лекальных ступеней, подступенков и плинтуса.";

$meta_title = "Цена облицовки архитектурным мрамор-бетоном бетонной лестницы";

require('header.php');
?>

<!-- banner text -->
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="innerbanner-text text-center">
            <h1 style="font-size:2.5em;">Цена облицовки архитектурным мрамор-бетоном бетонной лестницы</h1>


            <!-- banner text -->
        </div>
    </div>
</div>
</section>
<section id="descripton" class="section descripton">
    <div class="container text-center">
        <h2 style="font-family: 'Ubuntu' !important;font-size: 16px;text-transform: none;color: #7f7f7f !important;letter-spacing: 0.5px;margin: 30px; text-align:left;">Компания Ступени-А предлагает расчет стоимости облицовки бетонной лестницы архитектурным мрамор-бетоном. Выберите тип облицовочных элементов, введите их усредненную длину (площадь), введите их количество и получите стоимость изготовления элементов облицовки. Стоимость их монтажа составляет дополнительно плюс 30% от их изготовления. </h2>

        <h3 style="font-family: Vollkorn !important;font-size: 26px;text-transform: none;color: #7f7f7f !important;letter-spacing: 2px;margin: 30px;">Расчитайте стоимость облицовки вашей лестницы, выбрав нужные элементы и введя их длины и количество. Общая цена отобразится внизу страницы.</h3>
        <hr>

        <!--------- 1.Прямая проступь ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 1. Прямая проступь<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент проступь со всеми прямыми сторонами. Толщина 27мм. ')"></h4>
                <img src="/static/images/marble/prise/element1.jpg" alt="прямая проступь">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой линии на рисунке. Измерьте все длины прямых проступей, сложите их и разделите сумму на их количество. Например: на лестнице 15 прямых проступей, из которых 10шт длиной 1000мм, 3шт длиной 1150мм и 2шт длиной 1300. Сумму всех длин  16050мм делим на 15 проступей и получаем 1070мм.  ')"></p>
                <input type="text" id="pramprostl" name="pramprostl" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="pramprostn" name="pramprostn" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="pramprost" name="pramprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 2.Лекальная проступь ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 2. Лекальная проступь<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент проступь с дугообразной передней стороной. Толщина 27мм. Радиус дуги большой, от 1000мм и выше. ')"></h4>
                <img src="/static/images/marble/prise/element2.jpg" alt="лекальная проступь">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой дуге на рисунке. Измерьте все длины лекальных проступей, сложите их и разделите сумму на их количество. Например: на лестнице 2 лекальные проступи, из которых одна длиной 1100мм а вторая 1260мм. Сумму всех длин  2360мм делим на 2  и получаем 1180мм.  ')"></p>
                <input type="text" id="lekprostl" name="lekprostl" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="lekprostn" name="lekprostn" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="lekprost" name="lekprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 3.Пригласительная проступь ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 3. Пригласительная проступь<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент проступь с криволинейной передней стороной. Толщина 27мм. Радиус  кривой маленький, от 100мм и выше. ')"></h4>
                <img src="/static/images/marble/prise/element3.jpg" alt="пригласительная проступь">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой кривой (сплайн) на рисунке. Измерьте все длины пригласительных проступей, сложите их и разделите сумму на их количество. Например: на лестнице 2 пригласительные проступи, из которых первая длиной 2440мм, а вторая 1620мм. Сумму всех длин 4060мм делим на 2  и получаем 2030мм.  ')"></p>
                <input type="text" id="prigprostl" name="prigprostl" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="prigprostn" name="prigprostn" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="prigprost" name="prigprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 4.Прямой подступенок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 4. Прямой подступенок<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент подступенок прямолинейный. Толщина 20мм.')"></h4>
                <img src="/static/images/marble/prise/element4.jpg" alt="Прямой подступенок">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой  линии на рисунке. Измерьте все длины пригласительных проступей, сложите их и разделите сумму на их количество. Например: на лестнице 15 прямых подступенков, из которых 10шт длиной 1000мм, 3шт длиной 1150мм и 2шт длиной 1300. Сумму всех длин  16050мм делим на 15 подступенков и получаем 1070мм.  ')"></p>
                <input type="text" id="prampodstl" name="prampodstl" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="prampodstn" name="prampodstn" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="prampodst" name="prampodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 5.Лекальный подступенок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 5. Лекальный подступенок <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент подступенок дугообразный. Толщина 20мм. Радиус дуги большой, от 1000мм и выше.')"></h4>
                <img src="/static/images/marble/prise/element5.jpg" alt="Лекальный подступенок">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой  дуге на рисунке. Измерьте все длины лекальных подступенков, сложите их и разделите сумму на их количество.  Например: на лестнице 2 лекальных подступенка, из которых один длиной 1100мм а второй 1260мм. Сумму всех длин  2360мм делим на 2  и получаем 1180мм. ')"></p>
                <input type="text" id="lekpodstl" name="lekpodstl" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="lekpodstn" name="lekpodstn" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="lekpodst" name="lekpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 6. Пригласительный подступенок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 6. Пригласительный подступенок <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент подступенок криволинейный. Толщина 20мм. Радиус кривой разный, от 100мм и выше. Элемент состоит из 2-х, 3-х кусков.')"></h4>
                <img src="/static/images/marble/prise/element6.jpg" alt="Пригласительный подступенок">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой  дуге на рисунке. Измерьте все длины пригласительных  подступенков, сложите их и разделите сумму на их количество.   Например: на лестнице 2 пригласительных подступенка, из которых первый длиной 2440мм, а второй 1620мм. Сумму всех длин 4060мм делим на 2  и получаем 2030мм.. ')"></p>
                <input type="text" id="prigpodstl" name="prigpodstl" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>элементов(шт)</p>
                <input type="text" id="prigpodstn" name="prigpodstn" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="prigpodst" name="prigpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 7. Прямой плинтус  ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 7. Прямой плинтус <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент плинтус прямолинейный. Толщина 20мм. Комплект на одну ступень состоит из 2-х кусков. ')"></h4>
                <img src="/static/images/marble/prise/element7.jpg" alt="Пригласительный подступенок">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по 2-м зеленым  линиям на рисунке. Измерьте все длины   прямого плинтуса, сложите их и разделите сумму на  количество ступеней.   Например: на лестнице 15 ступеней с прямым плинтусом. Высота подступенка 170мм, а ширина проступей (возле стены) 10-ти  ступеней 280мм, 3-х ступеней 300мм и 2-х ступеней 325мм. Общая длина плинтуса равна  10*(170+280)+3*(170+300)+2*(170+325)=6900мм. А усредненная длина прямого плинтуса на одну ступень равна 6900/15=460мм. ')"></p>
                <input type="text" id="pramplintl" name="pramplintl" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450">
            </div>
            <div class="form-field2">
                <p> Количество</br>ступеней(шт)</p>
                <input type="text" id="pramplintn" name="pramplintn" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="pramplint" name="pramplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 8. Криволинейный плинтус   ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 8. Криволинейный плинтус <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент плинтус криволинейный. Толщина 20мм. Комплект на одну ступень состоит из 2-х криволинейных кусков. ')"></h4>
                <img src="/static/images/marble/prise/element8.jpg" alt="Криволинейный плинтус ">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по 2-м зеленым  линиям на рисунке. Измерьте все длины   криволинейного плинтуса, сложите их и разделите сумму на  количество ступеней.   Например: на лестнице 15 ступеней с криволинейным плинтусом. Высота подступенка 170мм, а ширина проступей (возле стены) 10-ти  ступеней 280мм, 3-х ступеней 300мм и 2-х ступеней 325мм. Общая длина плинтуса равна  10*(170+280)+3*(170+300)+2*(170+325)=6900мм. А усредненная длина криволинейного плинтуса на одну ступень равна 6900/15=460мм. ')"></p>
                <input type="text" id="krivplintl" name="krivplintl" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450">
            </div>
            <div class="form-field2">
                <p> Количество</br>ступеней(шт)</p>
                <input type="text" id="krivplintn" name="krivplintn" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="krivplint" name="krivplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 9. Площадка прямоугольная   ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 9. Площадка прямоугольная <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент площадка прямоугольная. Толщина 27мм. Максимальный размер одного куска 1200х1200мм. ')"></h4>
                <img src="/static/images/marble/prise/element9.jpg" alt="Площадка прямоугольная  ">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Если площадка одна, то введите длинную сторону. Если площадок несколько, то подсчитайте среднюю длинную сторону всех площадок. Например: 2 площадки, у одной длинная сторона 1000мм, а у второй 1160мм. Усредненная длина равна (1000+1160)/2=1080мм.   ')"></p>
                <input type="text" id="plopraml" name="plopraml" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> ширина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Если площадка одна, то введите короткую сторону. Если площадок несколько, то подсчитайте среднюю короткую сторону всех площадок. Например: 2 площадки, у одной короткая сторона 900мм, а у второй 1040мм. Усредненная ширина равна (900+1040)/2=970мм.   ')"></p>
                <input type="text" id="plopramb" name="plopramb" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>площадок(шт)</p>
                <input type="text" id="plopramn" name="plopramn" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="plopram" name="plopram" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 10. Прямая проступь с криволинейными боковыми сторонами   ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 10. Прямая проступь с криволинейными боковыми сторонами <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Это элемент проступь с прямолинейными передней и задней сторонами и с криволинейными боковыми сторонами.')"></h4>
                <img src="/static/images/marble/prise/element10.jpg" alt="Прямая проступь с криволинейными боковыми сторонами  ">
            </div>
            <div class="form-field2">
                <p> Усредненная </br> длина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Длина этого элемента измеряется по зеленой линии на рисунке. Измерьте все длины прямых проступей, сложите их и разделите сумму на их количество. Например: на лестнице 15 прямых проступей с криволинейными боковыми сторонами, из которых 10шт длиной 1000мм, 3шт длиной 1150мм и 2шт длиной 1300. Сумму всех длин  16050мм делим на 15 проступей и получаем 1070мм.   ')"></p>
                <input type="text" id="pramprostkrivbokl" name="pramprostkrivbokl" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Количество</br>ступеней(шт)</p>
                <input type="text" id="pramprostkrivbokn" name="pramprostkrivbokn" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Стоимость</br>изготовления</br>(грн)</h4>
                <input type="text" id="pramprostkrivbok" name="pramprostkrivbok" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>









        <div class="formField rsform-block rsform-block-prisel" style="margin:30px">
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Общая стоимость изготовления всех элементов составляет(грн):<input type="text" class="input-text2" id="prisemarble" name="prisemarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Монтаж элементов составляет 30% от стоимости изготовления(грн):<input type="text" class="input-text2" id="installmarble" name="installmarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Скидка %:<input type="text" class="input-text2light" id="discount" name="discount" oninput="changeprise()" size="2" value="0"></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Общая сметная стоимость(грн):<input type="text" class="input-text2" id="fullprise" name="fullprise" size="8" value="0" readonly></h4>


        </div>
    </div>

    <hr>


</section>

<?php
require('footer.php');
?>

<script type="text/javascript">
    jQuery('section.banner').css('min-height', '220px');
    jQuery('.banner-image').css('height', '871px');


    /*-----------------Подсчет стоимости мрамора------------------------------------------------------------------*/

    function changeprise() {
        $('#prisemarble').val(parseInt($('#pramprost').val()) + parseInt($('#lekprost').val()) + parseInt($('#prigprost').val()) + parseInt($('#prampodst').val()) + parseInt($('#lekpodst').val()) + parseInt($('#prigpodst').val()) + parseInt($('#pramplint').val()) + parseInt($('#krivplint').val()) + parseInt($('#plopram').val()) + parseInt($('#pramprostkrivbok').val()));
        $('#installmarble').val(parseInt($('#prisemarble').val() * 0.3));
        var prise = parseInt($('#prisemarble').val()) + parseInt($('#installmarble').val());
        $('#fullprise').val(parseInt(prise - prise * parseInt($('#discount').val()) / 100));
    }

    function prise2(element) {
        function changeclass(el) {
            if (document.getElementById(el).value > 0) {
                $('#' + el).removeClass('input-text2').addClass('input-text2light');
                setTimeout(function() {
                    $('#' + el).removeClass('input-text2light').addClass('input-text2');
                }, 200);
            };
            changeprise();
        };

        function resetprise(el) {
            $('#' + el).val(0);
            $('#' + el + 'n').val(0);
            changeprise();
        }

        const koefPrise = 1.3;

        /*---------------1.Прямая проступь------------*/
        if (element == 'pramprost') {
            var l = document.getElementById("pramprostl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("pramprostn").value;
            var baseprise = 2000 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------2.Лекальная проступь------------*/
        if (element == 'lekprost') {
            var l = document.getElementById("lekprostl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("lekprostn").value;
            var baseprise = 3000 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------3.Пригласительная проступь------------*/
        if (element == 'prigprost') {
            var l = document.getElementById("prigprostl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("prigprostn").value;
            var baseprise = 3500 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------4.Прямой подступенок------------*/
        if (element == 'prampodst') {
            var l = document.getElementById("prampodstl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("prampodstn").value;
            var baseprise = 1000 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------5.Лекальный подступенок ------------*/
        if (element == 'lekpodst') {
            var l = document.getElementById("lekpodstl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("lekpodstn").value;
            var baseprise = 3000 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------6. Пригласительный подступенок ------------*/
        if (element == 'prigpodst') {
            var l = document.getElementById("prigpodstl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("prigpodstn").value;
            var baseprise = 3500 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };
        /*---------------7. Прямой плинтус ------------*/
        if (element == 'pramplint') {
            var l = document.getElementById("pramplintl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 450) l = 450;
            var n = document.getElementById("pramplintn").value;
            var baseprise = 500 * koefPrise;
            document.getElementById(element).value = parseInt(l / 450 * baseprise * n);
            changeclass(element);
        };
        /*---------------8. Криволинейный плинтус ------------*/
        if (element == 'krivplint') {
            var l = document.getElementById("krivplintl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 450) l = 450;
            var n = document.getElementById("krivplintn").value;
            var baseprise = 1500 * koefPrise;
            document.getElementById(element).value = parseInt(l / 450 * baseprise * n);
            changeclass(element);
        };
        /*---------------9. Площадка прямоугольная  ------------*/
        if (element == 'plopram') {
            var l = document.getElementById("plopraml").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var b = document.getElementById("plopramb").value;
            if (b <= 100) return;
            if (b < 900) b = 900;
            var n = document.getElementById("plopramn").value;
            var baseprise = 8000 * koefPrise;
            document.getElementById(element).value = parseInt((l / 1000) * (b / 1000) * baseprise * n);
            changeclass(element);
        };
        /*---------------10. Прямая проступь с криволинейными боковыми сторонами ------------*/
        if (element == 'pramprostkrivbok') {
            var l = document.getElementById("pramprostkrivbokl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("pramprostkrivbokn").value;
            var baseprise = 2500 * koefPrise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };

    };



    function submit_orderform() {
        //   show_info('Извините<br>но в данный момент заказ можно сделать только по телефону');
        //   return;
        var string1 = "<p>Высота лестницы: " + jQuery('#heightl').val() + " мм.<br>";
        var string2 = "Средняя ширина марша: " + jQuery('#widthl').val() + " мм.<br>";
        var string3 = "Форма лестницы в плане: " + jQuery("input[name='form_forml']:checked").val() + ".<br>";
        var string4 = "Тип конструкции: " + jQuery("input[name='form_typel']:checked").val() + ".<br>";
        var string5 = "Положение лестницы относительно стен: " + jQuery("input[name='form_positionl']:checked").val() + ".<br>";
        var string6 = "Форма ступеней лестницы: " + jQuery("input[name='form_forms']:checked").val() + ".<br>";
        var string7 = "форма первых ступеней лестницы: " + jQuery("input[name='form_priglasits']:checked").val() + ".<br>";
        var string8 = "Общая стоимость работ и материалов на изготовление бетонной лестницы (без отделки) составляет " + jQuery('#prisel').val() + " грн.</p>";
        var alltext = string1 + string2 + string3 + string4 + string5 + string6 + string7 + string8;
        var name = jQuery('#cf-name').val();
        var phone = jQuery('#cf-phone').val();
        var email = jQuery('#cf-email').val();
        if (!name) {
            show_info('Вы не указали имя');
            return;
        }
        if (!phone) {
            show_info('Вы не указали телефон');
            return;
        }
        if (!email) {
            show_info('Вы не указали e-mail');
            return;
        }
        console.log(name + phone + email);
        $.ajax({
            type: "POST",
            url: "send_mail.php",
            data: {
                order_text: alltext,
                name: name,
                phone: phone,
                email: email
            },
            success: function(data) {
                /* obj = typeof data =='object' ? data : jQuery.parseJSON(data);
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

    function prise() {
        var hl, hlv, wl, kwl, ns, fl = 0,
            tl, kfl, ktl, pl, kpl, kfs, priglasits, prises, prisel, kasseta, kassetaplus = 0;
        var kpriglasits = 0,
            costm = 350,
            costwb = 400,
            kploshad = 0,
            kostet = 0;
        var hl = parseInt(document.getElementById('heightl').value);
        if (!hl) {
            show_info("Вы не ввели высоту лестницы");
            return;
        }
        var kkfl = kktl = kkpl = kkfs = kkpriglasits = 1;
        //if(hl<3000)hl=((3000-hl)/3+hl);

        ns = parseFloat(hl / 170);
        wl = parseInt(document.getElementById('widthl').value);
        if (wl < 1000) wl = 1000;
        if (!wl) {
            show_info("Вы не ввели среднюю ширину марша");
            return;
        }
        kwl = wl / 1000;

        //Форма лестницы 1.Прямая 2.Г-обр с площадкой 3.П-обр с площадкой 4.Г-обр //П-обр с забежными 5.Винтовая 6.Криволинейная
        fl = document.getElementsByName('form_forml');
        console.log('fl.length=' + fl.length);
        for (i = 0; i < fl.length; i++)
            if (fl[i].checked) {
                kkfl = parseInt(fl[i].value)
            };
        switch (kkfl) {
            case 1:
                kfl = 0.95, kassetaplus = 1.2;
                break;
            case 2:
                kfl = 1.0, kploshad = 1.5, kassetaplus = 1.1;
                break;
            case 3:
                kfl = 1.0, kploshad = 3, kassetaplus = 1.1;
                break;
            case 4:
                kfl = 1.4;
                break;
            case 5:
                kfl = 1.45;
                break;
            default:
                kfl = 1.5;
        }

        //Тип лестницы 1.Гладкоподшитая 2.Тетивная гладкоподшитая 3.Тетивная с открыт подступ 4.Косоурная 5.Двойной каркас 6.Консольная 7.Наружный косоур с тетивой 8.Внутренний косоур с тетивой
        tl = document.getElementsByName('form_typel');
        for (i = 0; i < tl.length; i++)
            if (tl[i].checked) kktl = parseInt(tl[i].value);
        switch (kktl) {
            case 1:
                ktl = 1;
                break;
            case 2:
                ktl = 1.5;
                break;
            case 3:
                ktl = 1.9, kasseta = 1;
                break;
            case 4:
                ktl = 1.95, kasseta = 1;
                break;
            case 5:
                ktl = 1.8;
                break;
            case 6:
                ktl = 2.0, kasseta = 1;
                break;
            case 7:
                ktl = 2.15, kostet = 1, kasseta = 1;
                break;
            case 8:
                ktl = 2.1, kostet = 1, kasseta = 1;
                break;
        }

        //Положение лестницы 1.Пристенная 2.Полупристенная 3.Отдельностоящая
        pl = document.getElementsByName('form_positionl');
        for (i = 0; i < pl.length; i++)
            if (pl[i].checked) kkpl = parseInt(pl[i].value);

        switch (kkpl) {
            case 1:
                kpl = 1;
                break;
            case 2:
                kpl = 1.2;
                break;
            case 3:
                kpl = 1.4;
                break;
        }

        if (kostet == 1) kpl = 1.4;

        //Форма ступеней 1.Прямые ступени 2.Лекальные ступени
        fs = document.getElementsByName('form_forms');
        for (i = 0; i < fs.length; i++)
            if (fs[i].checked) kkfs = parseInt(fs[i].value);
        switch (kkfs) {
            case 1:
                kfs = 1;
                break;
            case 2:
                kfs = 1.2;
                break;
        }

        //Подсчет стоимости работы одной ступени 'costw'
        costw = costwb * kwl * kfl * ktl * kpl * kfs;
        //Вычисление стоимости пригласительных ступеней 1.Обычные  2.Первая пригласит  3.Первая и вторая приглас.
        priglasits = document.getElementsByName('form_priglasits');
        for (i = 0; i < priglasits.length; i++)
            if (priglasits[i].checked) kkpriglasits = parseInt(priglasits[i].value);
        switch (kkpriglasits) {
            case 2:
                kpriglasits = costw * 0.8;
                break;
            case 3:
                kpriglasits = costw * 0.8 + costw * 0.5;
                break;
        }

        //Подсчитываем стоимость одной ступени и всей лестницы
        prises = costm + costw;

        prisel = document.getElementById('prisel');
        prisel.value = parseInt((prises * (ns + kploshad) + kpriglasits) * 2 * 0.95);
        if (kasseta == 1 && kassetaplus > 0) prisel.value = parseInt(prisel.value * kassetaplus);

    }
</script>

</body>

</html>