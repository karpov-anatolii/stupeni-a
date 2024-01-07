<?php

$meta_keywords = "Concrete railings, concrete railings, Photo of railings, visualization of railings, design of railings, beautiful railings, design railings, types of railings, types of railings, railings for platforms, concrete railings for platforms, concrete railings from Stairs-A, concrete, stairs, handrails, handrails, concrete handrails, order handrails, order handrails for stairs, price of handrails, cost of handrails, from the company Stairs-A";

$meta_description = "Stairs-A company offers the manufacture of concrete railings and handrails for stairs and platforms. Concrete railings for stairs, platforms, types and types of concrete railings for the home and street, railing design, concrete railings in the house, railing design, railings for concrete stairs to the second floor.";

$meta_title = "Concrete railings for stairs";
$canonical = "https://stupeni-a.com.ua/betonnyie-perila.php";

require('header.php');
$koefprise = 1.3;
$main_prise_railing_concrete = 5500 * $koefprise;
$main_prise_railing_plaster = 4000 * $koefprise;
$main_prise_handrail_concrete = 3500 * $koefprise;
$discount = 0; //для отмены акции ставим 0
$discount2 = "20";
$discountname = "(акційна знижка тільки в травні)";

$koef_artdeco1 = 1;
$koef_artdeco2 = 0.9;
$koef_artdeco3 = 1;
$koef_artdeco4 = 1.1;
$koef_artnouveau1 = 1;
$koef_artnouveau2 = 0.9;
$koef_barocco1 = 1.1;
$koef_barocco2 = 1.1;
$koef_asia1 = 1.3;
$koef_asia2 = 1.1;
$koef_classic1 = 1.0;
$koef_classic2 = 1.0;
$koef_classic3 = 1.1;
$koef_classic4 = 1.2;
$koef_futurism1 = 0.9;
$koef_futurism2 = 1.0;
$koef_futurism3 = 1.0;
$koef_bionica1 = 1.0;
$koef_bionica2 = 1.0;
$koef_bionica3 = 1.0;
$koef_minimalism1 = 0.8;
$koef_minimalism2 = 0.85;
$koef_loft1 = 1.2;
$koef_loft2 = 0.9;
$koef_modern1 = 1.0;
$koef_modern2 = 1.1;
$koef_modern3 = 1.2;
$koef_floral1 = 1.1;
$koef_floral2 = 1.0;
$koef_heraldic1 = 1.0;
$koef_heraldic2 = 1.1;
$koef_heraldic3 = 1.0;
$koef_gothic1 = 1.2;

?>

<style>
    /*
.pattern {
	height: 140px;
	margin-bottom: 30px;
	
}
*/
    .railing-table_prise {
        width: 100%;
        margin: 0 0 20px;
        float: left;

    }

    .railing-table_prise_cell {
        border: solid 1px #7F7F7F;
        width: 32.5%;
        min-height: 30px;
        float: left;
        margin-right: 2px;
        background-color: #fff;
        min-width: 140px;

    }

    .railing-table_prise_cell_h3 {
        font-size: 16px;
        letter-spacing: 2px;
    }

    .letter_spacing0 {
        letter-spacing: 0px
    }
</style>

<!-- banner text-->
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="innerbanner-text text-center">
            <h1 style="font-size: 3.5em;">Concrete railings for stairs</h1>
            <!-- banner text-->
        </div>
    </div>
</div>
</section>
<section id="descripton" class="section descripton">
    <div class="container text-center">


        <div class="row">
            <div class='list-group gallery'>


                <p style="text-align: left;margin: 40px;">
                    &nbsp;&nbsp;The company "Stairs-A" is in a hurry to please you! Since November 2018, we have started the production of concrete railings for concrete stairs. <br>
                    This field of production has no analogues and will greatly please all designers and customers who are thinking- what railing to choose for concrete stairs? <br>
                    All test production processes have been completed, demonstration models of concrete railings have been created, dozens of 3d models of railings have been designed. You can use them already as a ready-made solution or create your own pattern for the railing.
                    We can design and manufacture concrete railings with almost any pattern. In order to make it easier for you to orient yourself with the pattern, we suggest viewing the 3d models presented below. <br> Also, read the information on <a href="/en/betonnyie-poruchni.php" class="a_light_gray"> &nbsp; &nbsp; Concrete handrails. </a> <br> Call &nbsp; <Span class="a_light_gray"> +38-096-933-63-33 </span> &nbsp; and we will answer any question regarding concrete railings.<br>
                </p>

                <div class="">
                    <p style="text-align: left; margin: 40px;">
                        You will be able to visually appreciate the beauty of concrete railings by visiting our exhibition center, which is located at the address of Kyiv, Osokorka district, Slavutych, corner of Tsentralnaya and Sadova Streets 53. <br> Various models of concrete stairs and concrete stairs are presented at the exhibition railing We will tell you about our innovative technologies that allow you to make almost any pattern for concrete railings. <br> The beauty and variety of concrete railings will be a revelation for you!
                        <br> Call now &nbsp; <Span class="a_light_gray"> +38-096-933-63-33 </span> &nbsp; and we will arrange a meeting! <br><br>
                    </p>
                </div>
                <div class="div_image">
                    <img class="pattern" src="/static/images/showroom2-700x395.jpg" alt="Stairs-A Showroom" title="Stairs-A Exhibition Center" style=" width:700px;">
                </div>




                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Deco 1</h2>

                <div>
                    <img class="pattern" alt="Art Deco Concrete Railing Pattern1 from Stairs-A" src="/static/images/railing/models/art-deco/pattern-artdeco1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artdeco1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artdeco1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artdeco1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco1.1.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco1.1.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco1.1.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco1.1.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco1.1.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco1.1.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco1.1.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco1.1.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Art Deco style from Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco1.1.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco1.1.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Deco 2</h2>

                <div>
                    <img class="pattern" alt="Art Deco Concrete Railing Pattern2 from Stairs-A" src="/static/images/railing/models/art-deco/pattern-artdeco2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artdeco2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artdeco2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artdeco2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Бетонні перила для сходів в стилі Арт Деко від Сходи-А" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco2.1.6.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco2.1.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Deco 3</h2>

                <div>
                    <img class="pattern" alt="Art Deco Concrete Railing Pattern3 from Stairs-A" src="/static/images/railing/models/art-deco/pattern-artdeco3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artdeco3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artdeco3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artdeco3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco3.1.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco3.1.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco3.1.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco3.1.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco3.1.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco3.1.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Art Deco style from Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco3.1.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco3.1.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco3.1.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style by Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco3.1.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Deco 4</h2>

                <div>
                    <img class="pattern" alt="Art Deco Concrete Railing Pattern4 from Stairs-A" src="/static/images/railing/models/art-deco/pattern-artdeco4.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artdeco4 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artdeco4 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artdeco4 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco4.1.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco4.1.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco4.1.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco4.1.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco4.1.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco4.1.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Art Deco style from Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco4.1.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco4.1.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Deco Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-deco/betonnyie-perila-art-deco4.1.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Deco style from Stairs-A" src="/static/images/railing/models/art-deco/thumbs/betonnyie-perila-art-deco4.1.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->






                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Nouveau 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for Art Nouveau Concrete Railing1 from Stairs-A" src="/static/images/railing/models/art-nouveau/pattern-artnouveau1.jpg?v2" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artnouveau1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artnouveau1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artnouveau1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.2.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Art Nouveau style from Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau1.3.6.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau1.3.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Art Nouveau 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in Art Nouveau style2 from Stairs-A" src="/static/images/railing/models/art-nouveau/pattern-artnouveau2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_artnouveau2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_artnouveau2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_artnouveau2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.1.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Art Nouveau style from Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Art Nouveau Concrete Stair Railing by Stairs-A" href="/static/images/railing/models/art-nouveau/betonnyie-perila-art-nouveau2.3.6.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Art Nouveau style from Stairs-A" src="/static/images/railing/models/art-nouveau/thumbs/betonnyie-perila-art-nouveau2.3.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Baroque 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in Baroque style1 from Stairs-A" src="/static/images/railing/models/barocco/pattern-barocco1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_barocco1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_barocco1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_barocco1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Manufacturing a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco1.4.1. jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco1.4.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco1.4.2. jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco1.4.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco1.4.3. jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco1.4.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco1.4.4. jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco1.4.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Baroque 2</h2>

                <div>
                    <img class="pattern" alt="Barocco2 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/barocco/pattern-barocco2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_barocco2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_barocco2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_barocco2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.1.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railings for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.2.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railings for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.3.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railings for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.4.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railings for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railings for stairs in Baroque style from Stairs-A" href="/static/images/railing/models/barocco/betonnyie-perila-barocco2.4.6.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs in Baroque style from Stairs-A" src="/static/images/railing/models/barocco/thumbs/betonnyie-perila-barocco2.4.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Asia 1</h2>

                <div>
                    <img class="pattern" alt="Asia 1 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/asia/pattern-asia1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_asia1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_asia1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_asia1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia1 from Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia1.5.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia1 from Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia1.5.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia1 from Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia1.5.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia1 from Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia1.5.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia1 from Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia1.5.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia1 from Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia1.5.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia1 from Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia1.5.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia1 from Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia1.5.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia1 from Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia1.5.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia1 from Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia1.5.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Asia 2</h2>

                <div>
                    <img class="pattern" alt="Asia 2 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/asia/pattern-asia2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_asia2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_asia2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_asia2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia2 by Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia2.5.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia2 by Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia2.5.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia2 by Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia2.5.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia2 by Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia2.5.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia2 by Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia2.5.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia2 by Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia2.5.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia2 by Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia2.5.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia2 by Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia2.5.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the style of Asia2 by Stairs-A" href="/static/images/railing/models/asia/betonnyie-perila-asia2.5.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the style of Asia2 by Stairs-A" src="/static/images/railing/models/asia/thumbs/betonnyie-perila-asia2.5.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Classic 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Classic 1 from Stairs-A" src="/static/images/railing/models/classic/pattern-classic1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_classic1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_classic1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_classic1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic1.6.6.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic1.6.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Classic 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Classic 2 from Stairs-A" src="/static/images/railing/models/classic/pattern-classic2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_classic2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_classic2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_classic2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.1.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.2.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.3.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.4.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic2.6.6.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic2.6.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Classic 3</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Classic 3 from Stairs-A" src="/static/images/railing/models/classic/pattern-classic3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_classic3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_classic3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_classic3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic3.6.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic3.6.1.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic3.6.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic3.6.2.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic3.6.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic3.6.3.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic3.6.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic3.6.4.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic3.6.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic3.6.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->





                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Classic 4</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Classic 4 from Stairs-A" src="/static/images/railing/models/classic/pattern-classic4.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_classic4 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_classic4 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_classic4 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.1.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs in the Classic style from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs in the Classic style from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.2.jpg " />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/classic/betonnyie-perila-classic4.6.6.jpg">
                        <img class="img-responsive" alt="Бетонні перила для сходів  від Сходи-А" src="/static/images/railing/models/classic/thumbs/betonnyie-perila-classic4.6.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Futurism 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Futurism 1 from Stairs-A" src="/static/images/railing/models/futurism/pattern-futurism1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_futurism1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_futurism1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_futurism1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/futurism/betonnyie-perila-futurism1.7.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism1.7.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/futurism/betonnyie-perila-futurism1.7.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism1.7.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/futurism/betonnyie-perila-futurism1.7.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism1.7.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/futurism/betonnyie-perila-futurism1.7.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism1.7.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/futurism/betonnyie-perila-futurism1.7.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism1.7.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->





                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Futurism 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Futurism 2 from Stairs-A" src="/static/images/railing/models/futurism/pattern-futurism2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_futurism2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_futurism2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_futurism2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism2.7.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism2.7.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism2.7.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism2.7.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism2.7.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism2.7.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism2.7.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism2.7.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism2.7.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism2.7.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Futurism 3</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Futurism 3 from Stairs-A" src="/static/images/railing/models/futurism/pattern-futurism3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_futurism3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_futurism3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_futurism3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism3.7.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism3.7.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism3.7.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism3.7.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism3.7.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism3.7.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-futurism3.7.4.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/futurism/thumbs/betonnyie-perila-futurism3.7.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->






                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Bionics 1</h2>

                <div>
                    <img class="pattern" alt="Bionic 1 concrete railing pattern from Stairs-A" src="/static/images/railing/models/bionica/pattern-bionica1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_bionica1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_bionic1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_bionica1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica1.8.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica1.8.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica1.8.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica1.8.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica1.8.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica1.8.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica1.8.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica1.8.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica1.8.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica1.8.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Bionics 2</h2>

                <div>
                    <img class="pattern" alt="Bionic 2 concrete railing pattern from Stairs-A" src="/static/images/railing/models/bionica/pattern-bionica2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_bionica2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_bionic2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_bionica2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica2.8.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica2.8.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica2.8.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica2.8.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica2.8.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica2.8.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica2.8.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica2.8.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica2.8.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica2.8.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Bionics 3</h2>

                <div>
                    <img class="pattern" alt="Bionic 3 concrete railing pattern from Stairs-A" src="/static/images/railing/models/bionica/pattern-bionica3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_bionica3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_bionic3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_bionica3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-bionica3.8.6.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/bionica/thumbs/betonnyie-perila-bionica3.8.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Minimalism 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Minimalism 1 from Stairs-A" src="/static/images/railing/models/minimalism/pattern-minimalism1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_minimalism1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_minimalism1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_minimalism1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism1.9.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism1.9.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism1.9.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism1.9.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism1.9.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism1.9.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism1.9.4.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism1.9.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Minimalism 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in Minimalism 2 style from Stairs-A" src="/static/images/railing/models/minimalism/pattern-minimalism2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_minimalism2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_minimalism2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_minimalism2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism2.9.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism2.9.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism2.9.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism2.9.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism2.9.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism2.9.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism2.9.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism2.9.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-minimalism2.9.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/minimalism/thumbs/betonnyie-perila-minimalism2.9.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Loft 1</h2>

                <div>
                    <img class="pattern" alt="Loft 1 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/loft/pattern-loft1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_loft1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_loft1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_loft1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft from Stairs-A" href="/static/images/railing/models/loft/betonnyie-perila-loft1.10.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft1.10.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft from Stairs-A" href="/static/images/railing/models/loft/betonnyie-perila-loft1.10.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft1.10.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft1.10.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft1.10.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft from Stairs-A" href="/static/images/railing/models/loft/betonnyie-perila-loft1.10.4.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft1.10.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Loft 2</h2>

                <div>
                    <img class="pattern" alt="Loft 2 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/loft/pattern-loft2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_loft2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_loft2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_loft2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft2.10.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft2.10.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft2.10.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft2.10.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft2.10.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft2.10.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft2.10.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft2.10.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-loft2.10.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/loft/thumbs/betonnyie-perila-loft2.10.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->



                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Modern 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Modern 1 from Stairs-A" src="/static/images/railing/models/modern/pattern-modern1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_modern1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_modern1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_modern1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern1.11.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern1.11.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern1.11.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern1.11.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern1.11.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern1.11.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern1.11.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern1.11.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern1.11.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern1.11.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Modern 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Modern 2 from Stairs-A" src="/static/images/railing/models/modern/pattern-modern2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_modern2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_modern2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_modern2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern2.11.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern2.11.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern2.11.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern2.11.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern2.11.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern2.11.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern2.11.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern2.11.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern2.11.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern2.11.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Modern 3</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Modern 3 from Stairs-A" src="/static/images/railing/models/modern/pattern-modern3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_modern3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_modern3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_modern3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-modern3.11.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern3.11.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern3.11.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern3.11.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern3.11.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern3.11.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern3.11.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern3.11.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/modern/betonnyie-perila-modern3.11.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/modern/thumbs/betonnyie-perila-modern3.11.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Floristics 1</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Floral 1 from Stairs-A" src="/static/images/railing/models/floral/pattern-floral1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_floral1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_floral1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_floral1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral1.12.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral1.12.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/floral/betonnyie-perila-floral1.12.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral1.12.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral1.12.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral1.12.6.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral1.12.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Floristics 2</h2>

                <div>
                    <img class="pattern" alt="Pattern for concrete railings in the style of Floral 2 from Stairs-A" src="/static/images/railing/models/floral/pattern-floral2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_floral2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_floral2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_floral2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.5.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-floral2.12.6.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.6.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Concrete railing for stairs from Stairs-A" href="/static/images/railing/models/floral/betonnyie-perila-floral2.12.7.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/floral/thumbs/betonnyie-perila-floral2.12.7.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Heraldry 1</h2>

                <div>
                    <img class="pattern" alt="Heraldic 1 concrete railing pattern from Stairs-A" src="/static/images/railing/models/heraldic/pattern-heraldic1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_heraldic1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_heraldic1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_heraldic1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic1.13.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic1.13.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic1.13.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic1.13.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic1.13.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic1.13.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic1.13.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic1.13.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic1.13.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic1.13.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Heraldry 2</h2>

                <div>
                    <img class="pattern" alt="Heraldic 2 Concrete Railing Pattern from Stairs-A" src="/static/images/railing/models/heraldic/pattern-heraldic2.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_heraldic2 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_heraldic2 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_heraldic2 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic2.13.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic2.13.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic2.13.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic2.13.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic2.13.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic2.13.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic2.13.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic2.13.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic2.13.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic2.13.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->


                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Heraldry 3</h2>

                <div>
                    <img class="pattern" alt="Heraldic 3 concrete railing pattern from Stairs-A" src="/static/images/railing/models/heraldic/pattern-heraldic3.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_heraldic3 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                        echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_heraldic3 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                    }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_heraldic3 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic3.13.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic3.13.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic3.13.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic3.13.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic3.13.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic3.13.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic3.13.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic3.13.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-heraldic3.13.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/heraldic/thumbs/betonnyie-perila-heraldic3.13.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <h2 class="railing-types" style="clear: both;padding: 60px 0 40px;">Gothic 1</h2>

                <div>
                    <img class="pattern" alt="Gothic Concrete Railing Pattern 1 from Stairs-A" src="/static/images/railing/models/gothic/pattern-gothic1.jpg" />
                </div>

                <div class="railing-table_prise">
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Stage of making railings in concrete </h3>
                        <span><?php echo $main_prise_railing_concrete * $koef_gothic1 ?> UAH/r.m<?php if ($discount > 0) {
                                                                                                    echo '- ' . $discount2 . '%' . $discountname . ' = ' . ($main_prise_railing_concrete * $koef_gothic1 * (100 - $discount) / 100) . "hrn/r.m";
                                                                                                }; ?></span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Pulling and painting railings </h3>
                        <span><?php echo $main_prise_railing_plaster * $koef_gothic1 ?> UAH/r.m</span>
                    </div>
                    <div class="railing-table_prise_cell">
                        <h3 class="railing-table_prise_cell_h3">Making a handrail for a railing</h3>
                        <span>Concrete- <?php echo $main_prise_handrail_concrete ?> UAH/r.m</span>
                    </div>
                </div>


                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-gothic1.14.1.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/gothic/thumbs/betonnyie-perila-gothic1.14.1.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-gothic1.14.2.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/gothic/thumbs/betonnyie-perila-gothic1.14.2.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-gothic1.14.3.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/gothic/thumbs/betonnyie-perila-gothic1.14.3.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-gothic1.14.4.jpg">
                        <img class="img-responsive" alt="Concrete railing for stairs from Stairs-A" src="/static/images/railing/models/gothic/thumbs/betonnyie-perila-gothic1.14.4.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" title="Betonnyie perila-gothic1.14.5.jpg">
                        <img class="img-responsive" alt="Concrete railings for stairs from Stairs-A" src="/static/images/railing/models/gothic/thumbs/betonnyie-perila-gothic1.14.5.jpg" />
                        <div class='text-right'>

                        </div> <!-- text-right / end-->
                    </a>
                </div> <!-- col-6 / end-->




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

    var model = ['art-deco', '', 'art-nouveau', 'barocco', 'asia', 'classic', 'futurism', 'bionica', 'minimalism', 'loft', 'modern', 'floral', 'heraldic', 'gothic'];
    var model_rus = ['Арт-Деко', '', 'Арт-Нуво', 'Бароко', 'Азія', 'Класика', 'Футуризм', 'Біоніка', 'Мінімалізм', 'Лофт', 'Модерн', 'Флористика', 'Геральдика', 'Готика'];

    $(function() {
        // цикл проходит все теги <a> на странице
        $('a.thumbnail.fancybox').each(function() {
            var src = jQuery(this).children("img").attr('src');
            var data_num = src.match(/(\d+)\.(\d\d?)\.?(\d?)/);
            var num = data_num[0];
            var num_1 = data_num[1];
            var num_2 = data_num[2];
            var num_3 = data_num[3];
            jQuery(this).children("div").html('<h5 class="letter_spacing0">Concrete railings ' + model[num_2 - 1] + num + '</h5>');
            jQuery(this).children("div").removeClass("text-right");

            jQuery(this).attr('title', 'Concrete railings for stairs ' + model[num_2 - 1] + '  №' + num);
            jQuery(this).children("img").attr('alt', 'Concrete railings for stairs  ' + model[num_2 - 1] + '  №' + num + ' photo');
            jQuery(this).children("img").attr('title', 'Concrete railings for the house ' + model[num_2 - 1] + num);
        });
    });

    $(function() {
        // убираем цену на шпаклевку перил и на поручни
        // цикл проходит все теги <div> с классом railing-table_prise_cell на странице
        $('div.railing-table_prise_cell').each(function() {
            var text = jQuery(this).children("h3").text();
            if (text == "Pulling and painting railings ") {
                jQuery(this).hide();
                $('.railing-table_prise_cell').css('width', '49%');
            };
        });
    });
</script>

</body>

</html>