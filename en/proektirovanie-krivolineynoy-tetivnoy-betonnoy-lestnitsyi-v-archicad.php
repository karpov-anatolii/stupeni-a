<?php

$meta_keywords = "Calculation, steps, concrete, stairs, bent, curvilinear, design of curved stairs, wall stairs, calculation, Designing, string, transparent, stairs, ArchiCad, visualization, 3ds max, steps, width of stair march";

$meta_description = "Design of curved concrete stairs in ArchiCad, visualization of concrete stairs in 3ds max, how to create stairs yourself, creating stairs in ARCHICAD, archicad, ARCHICAD lessons.";

$meta_title = "Design of curved concrete stairs in ArchiCad";

require('header.php');
?>

<!-- banner text -->
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="innerbanner-text text-center">

      <h1 style="font-size:2.5em;">Design of curved concrete stairs in ArchiCad</h1>

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

    <br> <br>
    <h2 class="newH2"> In this article, I will tell you how to design concrete stairs of curvilinear (arbitrary) shape in the ArchiCad program. In ArchiCad, it is easy to design smooth concrete stairs, but curvilinear chords and kosours have to be refined in 3ds Max, because concrete curvilinear chords and kosours are designed in 3ds Max much faster and more beautifully than in ArchiCad. In addition, rendering for visualization still has to be done in 3ds Max. Designers and designers of the Stairs-A company adhere to the following scheme: the geometry is designed in ARCHICAD (walls, floors, windows, doors, inviting steps and other stairs without bowstrings) and saved in .dwg format, and then imported into max, the stair casing and bowstrings are drawn , materials are applied, lighting is set and rendering is performed.</h2>
    <h2 class="newH2">I'm using ArchiCad 19. Any other version will work too. I assume that you have basic knowledge of ArchiCad and we will not be distracted by the construction of the first and second floor plan. In the next article <a href="proektirovanie-betonnoy-tetivnoy-lestnitsyi-iz-archicad-v-3ds-max.php"> &quot;Design of concrete tie stairs with ArchiCad in 3ds Max&quot;</a> we will make a 3d visualization of these stairs in the 3ds Max program. I immediately show the result of our work:</h2>
    <p> <br><img src="/static/images/article/3d_1.jpg" style="width:100%;max-width:553px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/3d_2.jpg" style="width:100%;max-width :553px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/3d_3.jpg" style="width:100%;max-width :553px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <p>&nbsp;</p> <br>
    <h2 class="newH2">A few years ago, I received an order to design and build concrete stairs in a two-story cottage in Ternopil. The customer sent a photo of the room where the future stairs should be located.</h2>
    <p> <br><img src="/static/images/article/image(1).jpg" style="width:100%;max-width:300px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" />
      <img src="/static/images/article/image(4).jpg" style="width:100%;max-width:304px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" />
      <img src="/static/images/article/image(5).jpg" style="width:100%;max-width:540px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" />
      <img src="/static/images/article/image(6).jpg" style="width:100%;max-width:537px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" />
    </p> <br>
    <h2 class="newH2">On the plan, the beginning of the stairs should be located in the rectangle ABCD, where a concrete slab-cushion is poured, specially for the stairs. And the upper connection should be in the area of points G-H.</h2>
    <p> <br><img src="/static/images/article/plan1.jpg" style="width:100%;max-width:598px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/plan2.jpg" style="width:100%; max-width:712px; " alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">I offered the customer to make a Z-shaped staircase:</h2>
    <p> <br><img src="/static/images/article/plan3.jpg" style="width:100%;max-width:720px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /></p> <br>
    <h2 class="newH2">Without thinking for a long time, I decided to use the standard Archikadov version of the Z-shaped stairs. I enter the net height of the stairs - 3120 mm, the width of the march - 1100 mm, and all other dimensions intuitively, according to the plan.</h2> <br>
    <p><img src="/static/images/article/plan4.jpg" style="width:100%;max-width:528px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/plan5.jpg" style="width:100%;max-width :677px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">The width of the steps turned out to be 284 mm, the height of the steps - 173 mm. These are normal, good steps parameters. Since the stairs must be without corners and with a smooth, curvilinear contour, I press on each corner of the stairs and round them to the maximum. For corner 1 - 480mm, 2 - 1580mm, 3 - 580mm, 4 - 1680mm.</h2>
    <br>
    <p><img src="/static/images/article/plan6.jpg" style="width:100%;max-width:424px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/plan7.jpg" style="width:100%;max-width:404px; " alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">And here we see errors:</h2>
    <h3 class="newH3">1. The main line of the march should pass through the center of the march, ensuring the same step width for all steps (corrected in pink). And here it is clearly visible that on the front steps it is shifted and is not in the center.</h3>
    <h3 class="newH3">2. From the 2nd to the 3rd corner and from the 1st to the 4th corner, the lateral contour of the stairs is not smooth enough due to straight sections. And we would like it to be a spline curve (corrected in red).</h3>
    <h2 class="newH2">Having analyzed the situation, we understand that the regular Archidovsky tool &quot; Stairs &quot; cannot create the type of stairs we need. But we will insert the obtained stairs (let's call them L1) on the drawing, expand them as we would like and use it as a reference point.</h2>
    <br>
    <p><img src="/static/images/article/plan8.jpg" style="width:100%;max-width:699px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">By moving and rotating the stairs, we control the width of the passages in passage zones 1 and 3. For comfort, it should be about 900 mm.</h2>
    <h2 class="newH2">With the spline-curve tool, draw a smooth side contour for the stairs (red) and the main line (pink), which passes exactly in the center.</h2>
    <br>
    <p><img src="/static/images/article/plan9.jpg" style="width:100%;max-width:700px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Turn on Lines and anchor points (1), press Adjust Value of Anchor Points (2), write 17 in parts, so we have 17 steps, mark Parts (17) (3).</h2>
    <h2 class="newH2">Hovering the mouse over the main march line divides it into 17 equal parts. After pressing the M key on the keyboard, take a ruler and measure the distance between the two drawn strokes.</h2>
    <h2 class="newH2">It turns out 260 mm. Too small ... I would like the width of the step to be 284 mm, as ArchiCad built it for us. So you need to slightly lengthen the main line (HL) and all the steps. We multiply the difference 284-260 = 24mm by 17 and get 408mm.</h2>
    <h2 class="newH2">But if we increase the GL by 408 mm, the first step will turn out to be a prepared concrete slab-cushion ABCD. Let's make the width of the step a little smaller - 275 mm. So the GL needs to be increased by (275-260) * 17 = 255mm.</h2>
    <br>
    <p><img src="/static/images/article/plan10.jpg" style="width:100%;max-width:410px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stair-A" /> <img src="/static/images/article/plan11.jpg" style="width:100%;max-width :832px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">We extend the GL by 255 mm and the side spline curves, respectively, the bend of the stairs. Now, when hovering the mouse over the GL, it is divided into 17 parts with a length of 275 mm. Let's put black nodal dots in all the places of the dividing lines.</h2>
    <h2 class="newH2">Let's draw a green ellipse - the first inviting step. As can be seen in the figure below, the main part of the ellipse is on the concrete pad ABCD, thereby ensuring the transfer of the weight of all the stairs exactly to the pre-poured concrete pad.</h2>
    <h2 class="newH2"> In curved stairs like this, I like inviting egg-shaped steps, so let's create an orange egg using a spline curve in a green ellipse (the ellipse will be deleted later). </h2>
    <br>
    <p><img src="/static/images/article/plan12.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <h2 class="newH2">It's time to draw the stairs themselves. Let's create them using the ArchiSuite-ArchiStair2 add-on. In many ArchiCad 19 instruction archives, this application is already in the program. If your version does not have it, then you need to download and install it.</h2>
    <h2 class="newH2">Press Design - &gt; Additions to construction - &gt; ArchiSuite - &gt; Show ArchiSuite Palette. We select ArchiStair2.</h2>
    <h2 class="newH2">Select 2 lateral red spline curves of the stairs and the lines connecting them. All these elements must be precisely connected to each other, that is, form a contour without a gap!</h2>
    <br>
    <p><img src="/static/images/article/plan13.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <h2 class="newH2">We select the Hatching tool (1), take the magic wand (2) and press it into the inner part of the specified contour, thereby creating a shading-projection of our stairs.</h2>
    <br>
    <p><img src="/static/images/article/plan14.jpg" style="width:100%;max-width:1200px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Then select the hatching created and press the upper left Create stairs button in the ArchiStair panel. The program will ask you to specify the first step and the last.</h2>
    <h2 class="newH2">Move the cursor first on segment 1-2 so that a dash appears in the center of the pencil cursor and click. Then we move the cursor to the segment 3-4, and when a line appears in the pencil - click.</h2>
    <br>
    <p><img src="/static/images/article/plan15.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">In the first Curve segmentation settins window, just click Ok.</h2>
    <h2 class="newH2">In the second window (Main settings) in the vertical menu (VM) on the left, click on the second button from the top (1) and select the type of connection of stairs with an overlap (2).</h2>
    <br>
    <p><img src="/static/images/article/plan16.jpg" style="width:100%;max-width:900px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Next, press the 1st button in the VM and enter the number of treads in the upper right corner - 17. The height of the step will change to 173mm, which corresponds to step L1.</h2>
    <br>
    <p><img src="/static/images/article/plan17.jpg" style="width:100%;max-width:1065px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Then press the third button in VM and set the thickness of the concrete steps to 70mm. The rest are zeros.</h2>
    <br>
    <p><img src="/static/images/article/plan18.jpg" style="width:100%;max-width:841px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Then click on the 6th button in VM and set the checkboxes as in the picture below.</h2>
    <br>
    <p><img src="/static/images/article/plan19.jpg" style="width:100%;max-width:826px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Click on the 7th button in VM. Select the radio button as in the picture below and press Ok.</h2>
    <br>
    <p><img src="/static/images/article/plan20.jpg" style="width:100%;max-width:829px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">And we get such an ugly staircase L2 with the wrong arrangement of steps (marked in purple).</h2>
    <br>
    <p><img src="/static/images/article/plan21.jpg" style="width:100%;max-width:1100px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">But the stairs from the ArchiSuite add-on ArchiStair2 consist of nodes on each step and can be easily moved as we need (and in the standard Archikadov staircase L1 you cannot move the nodes of the steps).</h2>
    <h2 class="newH2">And we need the steps of the L2 ladder to be visually approximated with the steps of the L1 ladder (for this we created the L1 ladder), and also pass through the nodal points that we placed on the GL.</h2>
    <h2 class="newH2">For this, select L2 and manually start moving all nodes on each step. For example, the nodes of the last step should be moved so that the distance <u> <strong> a </strong> </u> is less than the distance <u> <strong> b </strong> </u>, and the step passes through the dot <u><strong>c</strong></u><strong></strong> .</h2>
    <h2 class="newH2">The whole procedure takes no more than 10 minutes, and allows you to create a staircase with your unique shape.</h2>
    <br>
    <p><img src="/static/images/article/plan22.jpg" style="width:100%;max-width:1000px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">This is what the L2 stairs should look like after approximation.</h2>
    <br>
    <p><img src="/static/images/article/plan23.jpg" style="width:100%;max-width:1200px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">We will add 2 cylinders with a diameter of 200 mm to the first inviting step. The string for the stairs will come out of them. To do this, simply draw circles and turn them with a magic wand into a 300 mm-thick overlap.</h2>
    <h2 class="newH2">The sides of the stairs (spline curves) must enter the cylinders 80 mm from the edge (the chord thickness will be 80 mm). Adjust the spline curves and move the nodes of the lower steps along them.</h2>
    <h2 class="newH2">Shading and L1 can already be removed. We also turn the egg-shaped ellipse into an overlap with a thickness of 173 mm. We do not pay attention to the first step in L2, because it will be replaced by an inviting step.</h2>
    <br>
    <p><img src="/static/images/article/plan24.jpg" style="width:100%;max-width:1100px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">We go into perspective, mark L2 and the inviting step and lower them 40mm down (along the Z axis), because they will be covered with 40mm thick wooden linings. We will create them in 3d max, as well as 2 chords.</h2>
    <br>
    <p><img src="/static/images/article/plan25.jpg" style="width:100%;max-width:1127px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">This is how the stairs look in perspective, save it in dwg format (in perspective mode, press File - &gt; Save as - &gt; Select a folder, file type .dwg - &gt; 03 To output as is - &gt; Parameters, Parameters, requisites, Layers, Methods enter window in Windows, enter door in Door - &gt; Save and close - &gt; Save.</h2>
    <br>
    <p><img src="/static/images/article/plan26.jpg" style="width:100%;max-width:1100px;" alt="Design of concrete stairs photo" title="Project of concrete stairs in ArchiCad from Stairs-A" /></p>
    <br>
    <h2 class="newH2">Everything with ArchiCad is finished! Now we import our .dwg file into 3d Max, draw 2 curvilinear bowstrings (in ARCHICAD you can't do it beautifully), create a stair casing, throw textures on the objects and after rendering we get the pictures that I displayed at the very beginning of this article. </h2>
    <h2 class="newH2">But that will be in the next lesson.</h2>
    <p>&nbsp;</p>
    <h2 class="newH2"> The author of the article is Anatoliy Karpov (founder of Stairs-A)</h2> <br> <br>




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