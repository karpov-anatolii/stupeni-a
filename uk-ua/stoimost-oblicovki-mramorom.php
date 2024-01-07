<?php

$meta_keywords = "підрахувати, ціну, облицювання, оздоблення, мармуром, бетонної, сходи, калькулятор, дізнатися, вартість, мармур, сходинок";

$meta_description = "Компанія Сходи-А пропонує підрахувати ціну облицювання архітектурним мармур-бетоном бетонних сходів. Скористайтеся калькулятором щоб дізнатися вартість обробки мармуром прямих і лекальних сходинок, підсходинок і плінтуса.";

$meta_title = "Ціна облицювання архітектурним мармур-бетоном бетонних сходів";

require('header.php');
?>

<!-- banner text -->
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="innerbanner-text text-center">
            <h1 style="font-size:2.5em;">Ціна облицювання архітектурним мармур-бетоном бетонних сходів</h1>


            <!-- banner text -->
        </div>
    </div>
</div>
</section>
<section id="descripton" class="section descripton">
    <div class="container text-center">
        <h2 style="font-family: 'Ubuntu' !important;font-size: 16px;text-transform: none;color: #7f7f7f !important;letter-spacing: 0.5px;margin: 30px; text-align:left;">Компанія Сходи-А пропонує розрахунок вартості облицювання бетонних сходів архітектурним мармур-бетоном. Виберіть тип облицювальних елементів, введіть їх усереднену довжину (площу), введіть їх кількість і отримаєте вартість виготовлення елементів облицювання. Вартість їх монтажу становить додатково плюс 30% від їх виготовлення. </h2>

        <h3 style="font-family: Vollkorn !important;font-size: 26px;text-transform: none;color: #7f7f7f !important;letter-spacing: 2px;margin: 30px;">Розрахуйте вартість облицювання ваших сходів, вибравши потрібні елементи і ввівши їх довжини і кількість. Загальна ціна відобразиться внизу сторінки.</h3>
        <hr>

        <!---------1. Пряма сходинка ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 1. Пряма сходинка<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент сходинка з усіма прямими сторонами. Товщина 27мм. ')"></h4>
                <img src="/static/images/marble/prise/element1.jpg" alt="прямая сходинка">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій лінії на малюнку. Виміряйте всі довжини прямих сходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 15 прямих сходинок, з яких 10шт довжиною 1000мм, 3шт довжиною 1150мм і 2шт довжиною 1300. Суму всіх довжин 16050мм ділимо на 15 сходинок і отримуємо 1070мм. ')"></p>
                <input type="text" id="pramprostl" name="pramprostl" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="pramprostn" name="pramprostn" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення </br>(грн)</h4>
                <input type="text" id="pramprost" name="pramprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 2.Лекальна сходинка ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 2. Лекальна сходинка<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент сходинка з дугоподібною передньою стороною. Товщина 27мм. Радіус дуги великий, від 1000мм і вище. ')"></h4>
                <img src="/static/images/marble/prise/element2.jpg" alt="Лекальна сходинка">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій дузі на малюнку. Виміряйте всі довжини лекальних  сходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 2 лекальні сходинки, з яких одна довжиною 1100мм а друга 1260мм. Суму всіх довжин 2360мм ділимо на 2 і отримуємо 1180мм. ')"></p>
                <input type="text" id="lekprostl" name="lekprostl" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="lekprostn" name="lekprostn" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення </br>(грн)</h4>
                <input type="text" id="lekprost" name="lekprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 3.Запрошувальна сходинка ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 3. Запрошувальна сходинка<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент сходинка з криволінійною передньою стороною. Товщина 27мм. Радіус кривої маленький, від 100мм і вище.')"></h4>
                <img src="/static/images/marble/prise/element3.jpg" alt="Запрошувальна сходинка">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій кривій (сплайн) на малюнку. Виміряйте всі довжини запрошувальних сходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 2 запрошувальних сходинок, у тому числі перша довжиною 2440мм, а друга 1620мм. Суму всіх довжин 4060мм ділимо на 2 і отримуємо 2030мм.  ')"></p>
                <input type="text" id="prigprostl" name="prigprostl" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="prigprostn" name="prigprostn" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="prigprost" name="prigprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 4.Прямий підсходинок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 4.Прямий підсходинок<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент підсходинок прямолінійний. Товщина 20мм.')"></h4>
                <img src="/static/images/marble/prise/element4.jpg" alt="Прямий підсходинок">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій лінії на малюнку. Виміряйте всі довжини прямих підсходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 15 прямих підсходинок, з яких 10шт довжиною 1000мм, 3шт довжиною 1150мм і 2шт довжиною 1300. Суму всіх довжин 16050мм ділимо на 15 сходинок і отримуємо 1070мм.  ')"></p>
                <input type="text" id="prampodstl" name="prampodstl" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="prampodstn" name="prampodstn" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="prampodst" name="prampodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 5.Лекальний підсходинок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 5. Лекальний підсходинок <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент підсходинок дугоподібний. Товщина 20мм. Радіус дуги великий, від 1000мм і вище.')"></h4>
                <img src="/static/images/marble/prise/element5.jpg" alt="Лекальний підсходинок">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій дузі на малюнку. Виміряйте всі довжини лекальних підсходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 2 лекальні підсходинки, з яких одна довжиною 1100мм а друга 1260мм. Суму всіх довжин 2360мм ділимо на 2 і отримуємо 1180мм. ')"></p>
                <input type="text" id="lekpodstl" name="lekpodstl" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="lekpodstn" name="lekpodstn" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="lekpodst" name="lekpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 6. Запрошувальний підсходинок ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 6. Запрошувальний підсходинок <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент підсходинок гнутий. Товщина 20мм. Радіус кривої різний, від 100мм і вище. Елемент складається з 2-х, 3-х шматків.')"></h4>
                <img src="/static/images/marble/prise/element6.jpg" alt="Запрошувальний підсходинок">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій дузі на малюнку. Виміряйте всі довжини запрошувальних підсходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 2 запрошувальні підсходинки, з яких перший довжиною 2440мм, а другий 1620мм. Суму всіх довжин 4060мм ділимо на 2 і отримуємо 2030мм. ')"></p>
                <input type="text" id="prigpodstl" name="prigpodstl" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="prigpodstn" name="prigpodstn" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="prigpodst" name="prigpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 7. Прямий плінтус  ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 7. Прямий плінтус <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент плінтус прямолінійний. Товщина 20мм. Комплект на одну сходинку складається з 2-х шматків. ')"></h4>
                <img src="/static/images/marble/prise/element7.jpg" alt="Прямий плінтус">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по 2-м зелених лініях на малюнку. Виміряйте всі довжини прямого плінтуса, складіть їх і розділіть суму на кількість сходинок. Наприклад: на сходах 15 сходинок з прямим плінтусом. Висота підсходинка 170мм, а ширина сходинки (біля стіни) 10-ти сходинок 280мм, 3-х сходинок 300мм і 2-х сходинок 325мм. Загальна довжина плінтуса дорівнює 10 * (170 + 280) + 3 * (170 + 300) + 2 * (170 + 325) = 6900мм. А усереднена довжина прямого плінтуса на одну сходинку дорівнює 6900/15 = 460мм. ')"></p>
                <input type="text" id="pramplintl" name="pramplintl" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="pramplintn" name="pramplintn" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="pramplint" name="pramplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 8. Криволінійний плінтус   ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 8. Криволінійний плінтус <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент плінтус вигнутий. Товщина 20мм.  Комплект на одну сходинку складається з 2-х криволінійних шматків. ')"></h4>
                <img src="/static/images/marble/prise/element8.jpg" alt="Криволінійний плінтус  ">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по 2-м зелених лініях на малюнку. Виміряйте всі довжини криволінійного плінтуса, складіть їх і розділіть суму на кількість сходинок. Наприклад: на сходах 15 сходинок з криволінійним плінтусом. Висота підсходинки 170мм, а ширина сходинки (біля стіни) 10-ти сходинок 280мм, 3-х сходинок 300мм і 2-х сходинок 325мм. Загальна довжина плінтуса дорівнює 10 * (170 + 280) + 3 * (170 + 300) + 2 * (170 + 325) = 6900мм. А усереднена довжина прямого плінтуса на одну сходинку дорівнює 6900/15 = 460мм. ')"></p>
                <input type="text" id="krivplintl" name="krivplintl" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="krivplintn" name="krivplintn" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="krivplint" name="krivplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 9. Майданчик прямокутний  ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 9. Майданчик прямокутний <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент майданчик прямокутний. Товщина 27мм. Максимальний розмір одного шматка 1200х1200мм. ')"></h4>
                <img src="/static/images/marble/prise/element9.jpg" alt="Майданчик прямокутний ">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Якщо майданчик один, то введіть довгу сторону. Якщо майданчиків кілька, то підрахуйте середню довгу сторону всіх майданчиків. Наприклад: 2 майданчики, у одного довга сторона 1000мм, а у другого 1160мм. Усереднена довжина дорівнює (1000 + 1160) / 2 = 1080мм.  ')"></p>
                <input type="text" id="plopraml" name="plopraml" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> ширина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Якщо майданчик один, то введіть коротку сторону. Якщо майданчиків кілька, то підрахуйте середню коротку сторону всіх майданчиків. Наприклад: 2 майданчики, у одного коротка сторона 900мм, а у другого 1040мм. Усереднена ширина дорівнює (900 + 1040) / 2 = 970мм.   ')"></p>
                <input type="text" id="plopramb" name="plopramb" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість</br>майданчиків(шт)</p>
                <input type="text" id="plopramn" name="plopramn" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="plopram" name="plopram" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 10. Пряма сходинка з криволінійними бічними сторонами   ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 10. Пряма сходинка з криволінійними бічними сторонами <img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Це елемент сходинка з прямолінійними передньою і задньою сторонами і з криволінійними бічними сторонами.')"></h4>
                <img src="/static/images/marble/prise/element10.jpg" alt="Пряма сходинка з криволінійними бічними сторонами  ">
            </div>
            <div class="form-field2">
                <p> Усереднена </br> довжина(мм)<img src="/static/images/icon-q.png" class="helper" alt="вопрос" onClick="helper('Довжина цього елемента вимірюється по зеленій лінії на малюнку. Виміряйте всі довжини прямих сходинок, складіть їх і розділіть суму на їх кількість. Наприклад: на сходах 15 прямих сходинок з криволінійними бічними сторонами , з яких 10шт довжиною 1000мм, 3шт довжиною 1150мм і 2шт довжиною 1300. Суму всіх довжин 16050мм ділимо на 15 сходинок і отримуємо 1070мм.  ')"></p>
                <input type="text" id="pramprostkrivbokl" name="pramprostkrivbokl" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Кількість </br> елементів(шт)</p>
                <input type="text" id="pramprostkrivbokn" name="pramprostkrivbokn" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Вартість </br> виготовлення</br>(грн)</h4>
                <input type="text" id="pramprostkrivbok" name="pramprostkrivbok" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>









        <div class="formField rsform-block rsform-block-prisel" style="margin:30px">
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Загальна вартість виготовлення всіх елементів становить(грн):<input type="text" class="input-text2" id="prisemarble" name="prisemarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Монтаж елементів становить 30% від вартості виготовлення(грн):<input type="text" class="input-text2" id="installmarble" name="installmarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Знижка %:<input type="text" class="input-text2light" id="discount" name="discount" oninput="changeprise()" size="2" value="0"></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Загальна кошторисна вартість(грн):<input type="text" class="input-text2" id="fullprise" name="fullprise" size="8" value="0" readonly></h4>


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

        /*---------------1.Прямая сходинка------------*/
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
        /*---------------2.Лекальная сходинка------------*/
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
        /*---------------3.Запрошувальна сходинка------------*/
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
        /*---------------10. Прямая сходинка с криволинейными боковыми сторонами ------------*/
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