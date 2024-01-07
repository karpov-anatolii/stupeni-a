<?php

$meta_keywords = "Calculation, stairs, concrete, stairs, bent, curvilinear, design curvilinear, wall, calculation, Design, string, transparent, stairs, ArchiCad, visualization, 3ds max, steps, and, width, kosour, ARCHICAD, max";

$meta_description = "Design of concrete string stairs with ArchiCad in 3ds Max from the company Stairs-A, visualization of concrete stairs in 3ds max, how to design stairs yourself, creating stairs in ARCHICAD, 3dsmax, max, ARCHICAD, archicad, max lessons";

$meta_title = "Design of concrete string stairs with ArchiCad in 3ds Max";

require('header.php');
?>

<!-- banner text -->
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="innerbanner-text text-center">

      <h1 style="font-size:2.5em;">Design of concrete string stairs with ArchiCad in 3ds Max</h1>

      <!-- banner text -->
    </div>
  </div>
</div>
</section>
<section id="descripton" class="section descripton">
  <div class="container text-center">

    <style>
      .newH2 {
        font-size: 1.0em;
        font-family: 'Ubuntu', sans-serif !important;
        text-transform: none;
        letter-spacing: 0px;
        font-weight: 400 !important;
        color: #6c7279 !important;
      }

      .newH3 {
        font-size: 1.0em;
        font-family: 'Ubuntu', sans-serif !important;
        text-transform: none;
        letter-spacing: 0px;
        font-weight: 400 !important;
        color: #6c7279 !important;
      }
    </style>

    <h2 class="newH2">This lesson is a continuation of the lesson <a href="proektirovanie-krivolineynoy-tetivnoy-betonnoy-lestnitsyi-v-archicad.php"> &quot; Design of curved concrete stairs in ArchiCad &quot; </a>. ArchiCad easily designs smoothly hemmed stairs with the help of the Stairs tool and additional extensions and additions such as ArchiSuite ArchiStair 2, but curvilinear chords and kosours have to be designed in max, because ARCHICAD tools cannot do it beautifully and quickly. The designers of the Stairs-A company design walls, ceilings, windows, doors, stairs without bowstrings and kosours in ARCHICAD and save the file in .dwg format, and then the designers import the file into 3ds max, draw the stair casing, curved bowstrings, kosours, apply materials, set the lighting and render. Visualization is an important document in the contract package for the production of concrete stairs from Stair-A.</h2><br>
    <h3 class="newH3">It is assumed that you have basic skills in 3ds Max. Let me remind you that in the last lesson in ArchiCad we created such a staircase:</h3>
    <p><img src="/static/images/article/plan26.jpg" style="width:100%;max-width:870px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Now we need to create a stair casing from a 40mm board and 2 curved chords.</h3>
    <h3 class="newH3">Open 3ds Max. I usually immediately open my previously prepared MaxStart.max file, in which only the light sources (sun, dome) are on the scene and there is a library of materials that I use all the time. Drag our .dwg file into the open MaxStart.max into the Perspective window, press Import File in the window. We place our house with stairs in the center of the perspective window.</h3>
    <p><img src="/static/images/article/plan27.jpg" style="width:100%;max-width:1255px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">We immediately convert our selected geometry to Poly by right-clicking on the screen and selecting Convert to Editable Poly. Then we throw materials on all layers (wall, floor1, window, door).</h3>
    <h3 class="newH3">We put the camera in front of the stairs and arrange the lighting: I put the first Plane light on the first floor under the ceiling between the camera and the stairs, and I put the second Plane above the stairs on the second floor under the ceiling.</h3>
    <h3 class="newH3">Also removing the first step in the staircase, because there is an inviting step instead. Apply the UVW Map modifier to all objects, and apply Unwrap UVW to the door (and then to the stair cladding).</h3>
    <p><img src="/static/images/article/plan28.jpg" style="width:100%;max-width:994px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">We paint the cladding of the first inviting step (wood 40 mm). Select its upper polygon - &gt; Detach - &gt; ok to create a new object Object001 - &gt; select Object001- &gt; select a polygon - &gt; Outline (Settings) enter 30mm - &gt; confirm with a green bird</h3>
    <p><img src="/static/images/article/plan29.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Select Object001 and apply the Shell modifier. We set the Outer Amount to 40mm.</h3>
    <p><img src="/static/images/article/plan30.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">To work only with Object001, press Alt + Q. Select Object001 and convert it to Editable Poly. Next, select all the upper edges and press Chamfer (Settings)</h3>
    <p><img src="/static/images/article/plan31.jpg" style="width:100%;max-width:1232px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">We confirm with a green bird, press Alt + Q and we get such a beautiful cover for the first inviting step.</h3>
    <p><img src="/static/images/article/plan32.jpg" style="width:100%;max-width:800px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">We do the same with other steps. Select the layer with stairs stair1, Alt + Q, press Polygon, mark all upper polygons on the stairs and Detach.</h3>
    <p><img src="/static/images/article/plan33.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Confirm Detach Ok, and select our newly created object Object002. In it, click on Polygon - &gt; Outline (Settings) enter 30mm - &gt; confirm with a green bird</h3>
    <h3 class="newH3">Select Object002 and apply the Shell modifier. We set the Outer Amount to 40mm. Click on the center of the screen - &gt; Convert to: Convert To Editable Poly.</h3>
    <h3 class="newH3">Select the edge selection mode (Edge) and select all the edges in the covers of the steps that need to be rounded (front upper edges).</h3>
    <p><img src="/static/images/article/plan34.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Press Chamfer (Settings), set Edge Chamfer Amount = 25mm, Connect Edge Cegments = 12, Ok, Alt + Q, and we get such a beautiful cover for our concrete stairs.</h3>
    <p><img src="/static/images/article/plan35.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Put the wood material on Object002 and apply the Unwrap UVW modifier so that the wood texture (fibers) lie along the long side of the step.</h3>
    <h3 class="newH3">Now it's time to create the bowstrings. We create a chord with Shapes - &gt; Line - &gt; Initial Type - Smooth - &gt; include binding to Snaps Toggle vertices - &gt; and press on the lower back tops of the concrete steps, creating a spline curve.</h3>
    <p><img src="/static/images/article/plan36.jpg" style="width:100%;max-width:1100px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">It is better to do this by selecting the steps and cladding in advance and pressing Alt + Q, removing all other objects from the scene. Having drawn the string on one side of the stairs - draw the other.</h3>
    <h3 class="newH3">Then select the first spline curve (Line001) and apply the Extrude modifier - &gt; Amount = 450mm and lower Line001 approximately 65-70mm down.</h3>
    <p><img src="/static/images/article/plan37.jpg" style="width:100%;max-width:1200px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Then we apply the Shell modifier - &gt; Inner Amount = 40mm, Outer Amount = 40mm.</h3>
    <p><img src="/static/images/article/plan38.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">In the central part we can see a small hump on the string. Turn on the Vertex mode, turn on the Show end resalt on button, select the vertex in the center of the hump and lower it down. It is more convenient to do this in the Front window. In this way, we also edit the other vertices, ensuring that the entire bowstring is smooth without humps.</h3>
    <p><img src="/static/images/article/plan39.jpg" style="width:100%;max-width:655px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">For a good combination of chord and cylinder in Vertex mode (1), we move the lower vertex to the center of the cylinder and with the help of Bezier manipulators (at the indicated vertex, press the center of the screen and select the Bezier type) set the required curvature. </h3>
    <h3 class="newH3">Click on Refine (2) and add 2 more vertices (3) (4) for a smoother shape of the chord (set the type for these vertices to Smooth). All these operations are first performed in the Top window, and the height adjustment is performed in the Front or Perspective windows.</h3>
    <p><img src="/static/images/article/plan40.jpg" style="width:100%;max-width:1300px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">In the same way, we create the second chord. On the second floor, along the edge of the opening, we create a border that connects to the bowstrings (pink in the picture below). It is created by Shapes - &gt; Line and using Extrude and Shell modifiers.</h3>
    <p><img src="/static/images/article/plan41.jpg" style="width:100%;max-width:1300px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">We apply materials to the bowstrings, the stair cover and the border and get the following visualization.</h3>
    <p><img src="/static/images/article/3d_1.jpg" style="width:100%;max-width:663px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /> <img src="/static/images/article/3d_2.jpg" style="width:100%;max-width:668px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stair-A" /><img src="/static/images/article/3d_3.jpg" style="width:100%;max-width:662px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h3 class="newH3">Let's see how these stairs were made by our company <a href="http://stupeni-a.com.ua"> Stairs-A.</a></h3>
    <p>&nbsp;</p>
    <p><img src="/static/images/article/stair_concrete_2.jpg" style="width:100%;max-width:741px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stair-A" /> <img src="/static/images/article/stair_concrete_3.jpg" style="width:100%;max-width:420px ;" alt="Design of concrete stairs photo" title="Project of concrete stairs in 3ds max from Stairs-A" /></p>
    <h2 class="newH2">See more concrete stairs from &quot; Stairs-A &quot; You can follow the link <a href="betonnyie-lestnitsyi.php">Concrete stairs from Stairs-A</a></h2>
    <br> <br>
    <h2 class="newH2"> The author of the article is Anatoliy Karpov (founder of Shody-A)</h2> <br> <br>


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