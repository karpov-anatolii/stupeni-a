<?php

$meta_keywords = "calculate, price, cladding, decoration, marble, concrete, stairs, calculator, find out, cost, marble, steps";

$meta_description = "Stairs-A company offers to calculate the price of facing concrete stairs with architectural marble-concrete. Use the calculator to find out the cost of marble treatment of straight and patterned steps, risers and plinths.";

$meta_title = "The price of facing concrete stairs with architectural marble-concrete";

require('header.php');
?>

<!-- banner text -->
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="innerbanner-text text-center">
            <h1 style="font-size:2.5em;">The price of facing concrete stairs with architectural marble-concrete</h1>


            <!-- banner text -->
        </div>
    </div>
</div>
</section>
<section id="descripton" class="section descripton">
    <div class="container text-center">
        <h2 style="font-family: 'Ubuntu' !important;font-size: 16px;text-transform: none;color: #7f7f7f !important;letter-spacing: 0.5px;margin: 30px; text-align:left;">The Stairs-A company offers a calculation of the cost of facing concrete stairs with architectural marble-concrete. Choose the type of cladding elements, enter their average length (area), enter their quantity and get the cost of manufacturing cladding elements. The cost of their installation is additionally plus 30% of their production. </h2>

        <h3 style="font-family: Vollkorn !important;font-size: 26px;text-transform: none;color: #7f7f7f !important;letter-spacing: 2px;margin: 30px;">Calculate the cost of facing your stairs, by selecting the required elements and entering their length and quantity. The total price will be displayed at the bottom of the page.</h3>
        <hr>

        <!---------1. Straight step ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 1. Straight step<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is a step element with all straight sides. Thickness 27mm. ')"></h4>
                <img src="/static/images/marble/prise/element1.jpg" alt="straight staircase">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green lines in the picture. Measure all the lengths of the straight steps, add them up and divide the sum by their number. For example: there are 15 straight steps on the stairs, of which 10 are 1000mm long, 3 are 1150mm long, and 2 are 1300mm long. The sum of all lengths of 16050mm is divided by 15 steps and we get 1070 mm. ')"></p>
                <input type="text" id="pramprostl" name="pramprostl" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pieces)</p>
                <input type="text" id="pramprostn" name="pramprostn" oninput="prise2('pramprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production </br>(UAH)</h4>
                <input type="text" id="pramprost" name="pramprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 2. Lekalna step ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 2. Lecal step<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is an element of a step with an arc-shaped front side. The thickness is 27mm. The radius of the arc is large, from 1000 mm and above. ')"></h4>
                <img src="/static/images/marble/prise/element2.jpg" alt="Lekal step">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green arc in the figure. Measure all the lengths of the patterned steps, add them up and divide the sum by their number. For example: there are 2 patterned steps on the stairs, one of which is 1100mm long and the other 1260mm. We divide the sum of all lengths of 2360mm by 2 and get 1180mm. ')"></p>
                <input type="text" id="lekprostl" name="lekprostl" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000 ">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pcs)</p>
                <input type="text" id="lekprostn" name="lekprostn" oninput="prise2('lekprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production </br> (UAH)</h4>
                <input type="text" id="lekprost" name="lekprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 3.Запрошувальна сходинка ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 3. Invitation step<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is an element of a step with a curved front side. Thickness 27mm. The radius of the curve is small , from 100 mm and above.')"></h4>
                <img src="/static/images/marble/prise/element3.jpg" alt="Inviting step">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green curve (spline) in the picture. Measure all the lengths of the inviting steps, add them up and divide the sum by their number. For example: there are 2 inviting steps on the stairs, including the first one with a length of 2440 mm, and the second one with a length of 1620 mm. The sum of all lengths of 4060 mm is divided by 2 and we get 2030 mm. ')"></p>
                <input type="text" id="prigprostl" name="prigprostl" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000 ">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pcs)</p>
                <input type="text" id="prigprostn" name="prigprostn" oninput="prise2('prigprost')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="prigprost" name="prigprost" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 4. Direct landing ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 4. Straight steps<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This element of the steps is straight. The thickness is 20mm.')"></h4>
                <img src="/static/images/marble/prise/element4.jpg" alt="Direct staircase">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green lines in the picture. Measure all the lengths of the straight steps, add them up and divide the sum by their number. For example: there are 15 straight steps on the stairs, of which 10 are 1000mm long, 3 are 1150mm long, and 2 are 1300mm long. The sum of all lengths of 16050mm is divided by 15 steps and we get 1070 mm.  ')"></p>
                <input type="text" id="prampodstl" name="prampodstl" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pieces)</p>
                <input type="text" id="prampodstn" name="prampodstn" oninput="prise2('prampodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="prampodst" name="prampodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 5. Lekalny step ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 5. Lekal step <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This element of the steps is arc-shaped. The thickness is 20 mm. The radius of the arc is large , from 1000 mm and above.')"></h4>
                <img src="/static/images/marble/prise/element5.jpg" alt="Lekal step">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green arc in the picture. Measure all the lengths of the patterned steps, add them up and divide the sum by their number. For example: there are 2 patterned steps on the stairs, one of which is 1100mm long and the other 1260mm. We divide the sum of all lengths of 2360mm by 2 and get 1180mm. ')"></p>
                <input type="text" id="lekpodstl" name="lekpodstl" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000 ">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pcs)</p>
                <input type="text" id="lekpodstn" name="lekpodstn" oninput="prise2('lekpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="lekpodst" name="lekpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 6. Invitation step ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 6. Inviting steps <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This element of the steps is bent. The thickness is 20mm. The radius of the curve is different , from 100 mm and above. The element consists of 2 or 3 pieces.')"></h4>
                <img src="/static/images/marble/prise/element6.jpg" alt="Inviting step">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green arc in the picture. Measure all the lengths of the invitation steps, add them up and divide the sum by their number. For example: there are 2 invitation steps on the stairs, the first of which is 2440 mm long, and the second 1620 mm. The sum of all lengths of 4060 mm is divided by 2 and we get 2030 mm. ')"></p>
                <input type="text" id="prigpodstl" name="prigpodstl" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pieces)</p>
                <input type="text" id="prigpodstn" name="prigpodstn" oninput="prise2('prigpodst')" class="input-text2light input-text3" maxlength="4" value="" placeholder="2 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="prigpodst" name="prigpodst" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 7. Straight plinth ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 7. Straight plinth <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is a straight plinth element. Thickness 20mm. Set for one step consists of 2 pieces. ')"></h4>
                <img src="/static/images/marble/prise/element7.jpg" alt="Straight plinth">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in 2 m green lines in the picture. Measure all the lengths of the straight plinth, add them up and divide the sum by the number of steps. For example: there are 15 steps on the stairs with a straight plinth. The height of the step is 170mm, and the width of the step (near the wall) of 10 steps is 280mm, 3 steps 300 mm and 2 steps 325 mm. The total length of the plinth is 10 * (170 + 280) + 3 * (170 + 300) + 2 * (170 + 325) = 6900 mm. And the average length of the straight plinth for one step is 6900/15 = 460mm. ')"></p>
                <input type="text" id="pramplintl" name="pramplintl" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450 ">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pcs)</p>
                <input type="text" id="pramplintn" name="pramplintn" oninput="prise2('pramplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="pramplint" name="pramplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 8. Curvilinear plinth ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 8. Curvilinear plinth <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is a curved plinth element. Thickness 20mm. Set for one step consists of 2 curved pieces. ')"></h4>
                <img src="/static/images/marble/prise/element8.jpg" alt="Curvilinear plinth ">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in 2 along the green lines in the picture. Measure all the lengths of the curved plinth, add them up and divide the sum by the number of steps. For example: there are 15 steps on the stairs with a curved plinth. The height of the step is 170mm, and the width of the step (near the wall) of 10 steps is 280mm, 3 steps 300 mm and 2 steps 325 mm. The total length of the plinth is 10 * (170 + 280) + 3 * (170 + 300) + 2 * (170 + 325) = 6900 mm. And the average length of the straight plinth for one step is 6900/15 = 460 mm. ')"></p>
                <input type="text" id="krivplintl" name="krivplintl" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="450">
            </div>
            <div class="form-field2">
                <p> Number of </br> elements (pieces)</p>
                <input type="text" id="krivplintn" name="krivplintn" oninput="prise2('krivplint')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="krivplint" name="krivplint" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 9. Rectangular site ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 9. Rectangular playground <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is a rectangular playground element. Thickness 27mm. The maximum size of one piece 1200x1200 mm. ')"></h4>
                <img src="/static/images/marble/prise/element9.jpg" alt="Rectangular site">
            </div>
            <div class="form-field2">
                <p> Average </br> length (mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('If the site is one, then enter long side. If there are several platforms, then calculate the average long side of all platforms. For example: 2 platforms, one has a long side of 1000mm, and the second has 1160mm. The average length is equal to (1000 + 1160) / 2 = 1080mm. ')"></ p>
                    <input type="text" id="plopraml" name="plopraml" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000 ">
            </div>
            <div class="form-field2">
                <p> Average </br> width (mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('If the site is one, then enter short side. If there are several platforms, then calculate the average short side of all platforms. For example: 2 platforms, one has a short side of 900 mm, and the second has 1040 mm. The average width is equal to (900 + 1040) / 2 = 970 mm. ')"></ p>
                    <input type="text" id="plopramb" name="plopramb" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000 ">
            </div>
            <div class="form-field2">
                <p> Number</br> of pitches (pieces)</p>
                <input type="text" id="plopramn" name="plopramn" oninput="prise2('plopram')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="plopram" name="plopram" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>

        <!--------- 10. A straight step with curved sides ----------->
        <div class="form-section2">
            <div class="form-field2" style="width:100%">
                <h4> 10. A straight step with curved sides <img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('This is an element of a step with straight front and back sides and with curved side sides.')"></h4>
                <img src="/static/images/marble/prise/element10.jpg" alt="Straight step with curved sides ">
            </div>
            <div class="form-field2">
                <p> Average </br> length(mm)<img src="/static/images/icon-q.png" class="helper" alt="question" onClick="helper('The length of this element is measured in green lines in the picture. Measure all the lengths of the straight steps, add them up and divide the sum by their number. For example: on the stairs there are 15 straight steps with curved sides, of which 10 pieces are 1000 mm long, 3 pieces are 1150 mm long, and 2 pieces are 1300 mm long. We divide the sum of all lengths by 16050 mm by 15 steps and we get 1070mm. ')"></p>
                <input type="text" id="pramprostkrivbokl" name="pramprostkrivbokl" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="1000">
            </div>
            <div class="form-field2">
                <p>Number of </br> elements (pieces)</p>
                <input type="text" id="pramprostkrivbokn" name="pramprostkrivbokn" oninput="prise2('pramprostkrivbok')" class="input-text2light input-text3" maxlength="4" value="" placeholder="15 ">
            </div>
            <div class="form-field2" style="width:100%">
                <h4 class="prise">Cost </br> of production</br>(UAH)</h4>
                <input type="text" id="pramprostkrivbok" name="pramprostkrivbok" class="input-text2 input-text3" size="12" value="0" readonly>
            </div>
        </div>
        <hr>









        <div class="formField rsform-block rsform-block-prisel" style="margin:30px">
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">The total production cost of all elements is (UAH):<input type="text" class="input-text2" id="prisemarble" name="prisemarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Installation of elements is 30% of the production cost (UAH):<input type="text" class="input-text2" id="installmarble" name="installmarble" size="8" value="0" readonly></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Discount %:<input type="text" class="input-text2light" id="discount" name="discount" oninput="changeprise()" size="2" value="0"></h4>
            <h4 style="font-family: Vollkorn !important;font-size: 22px;">Total estimated cost (UAH):<input type="text" class="input-text2" id="fullprise" name="fullprise" size="8" value="0" readonly></h4>


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
    var koefprise = 1.3;

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

        /*---------------1.Прямая сходинка------------*/
        if (element == 'pramprost') {
            var l = document.getElementById("pramprostl").value;
            if (l <= 100) {
                resetprise(element);
                return;
            }
            if (l < 900) l = 900;
            var n = document.getElementById("pramprostn").value;
            var baseprise = 2000 * koefprise;
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
            var baseprise = 3000 * koefprise;
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
            var baseprise = 3500 * koefprise;
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
            var baseprise = 1000 * koefprise;
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
            var baseprise = 3000 * koefprise;
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
            var baseprise = 3500 * koefprise;
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
            var baseprise = 500 * koefprise;
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
            var baseprise = 1500 * koefprise;
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
            var baseprise = 8000 * koefprise;
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
            var baseprise = 2500 * koefprise;
            document.getElementById(element).value = parseInt(l / 1000 * baseprise * n);
            changeclass(element);
        };

    };



    function submit_orderform() {
        //   show_info('Извините<br>но в данный момент заказ можно сделать только по телефону');
        //   return;
        var string1 = "<p>The height of the ladder: " + jQuery('#heightl').val() + " mm.<br>";
        var string2 = "Average march width: " + jQuery('#widthl').val() + " mm.<br>";
        var string3 = "The form of the ladder in the plan: " + jQuery("input[name='form_forml']:checked").val() + ".<br>";
        var string4 = "Construction type: " + jQuery("input[name='form_typel']:checked").val() + ".<br>";
        var string5 = "The position of the ladder relative to the walls: " + jQuery("input[name='form_positionl']:checked").val() + ".<br>";
        var string6 = "The form of the steps of the ladder: " + jQuery("input[name='form_forms']:checked").val() + ".<br>";
        var string7 = "form of the first steps of the ladder: " + jQuery("input[name='form_priglasits']:checked").val() + ".<br>";
        var string8 = "The total cost of work and materials for the production of concrete stairs (without finishing) is " + jQuery('#prisel').val() + " UAH.</p>";
        var alltext = string1 + string2 + string3 + string4 + string5 + string6 + string7 + string8;
        var name = jQuery('#cf-name').val();
        var phone = jQuery('#cf-phone').val();
        var email = jQuery('#cf-email').val();
        if (!name) {
            show_info('You did not specify a name');
            return;
        }
        if (!phone) {
            show_info('You did not specify a phone');
            return;
        }
        if (!email) {
            show_info('You did not specify an e-mail');
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
show_info('Thank you:)<br>We will contact you soon');
};
if (obj.status=="error"){
show_info('Error sending message<br>Send the message again');
};
*/
                if (data.slice(-1) == "1") show_info('Thank you:)<br>We will contact you soon');
                if (data.slice(-1) == "0") show_info('Error sending message<br>Send the message again');
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
            show_info("You did not enter the height of the ladder");
            return;
        }
        var kkfl = kktl = kkpl = kkfs = kkpriglasits = 1;
        //if(hl<3000)hl=((3000-hl)/3+hl);

        ns = parseFloat(hl / 170);
        wl = parseInt(document.getElementById('widthl').value);
        if (wl < 1000) wl = 1000;
        if (!wl) {
            show_info("You have not entered the average march width");
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