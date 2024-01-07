<?php
?>


<!-- footer -->
<footer class="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12" style="padding: 30px 0 30px 0px;">
					<a href="contact.php" class="button_black">
						Написати лист
					</a>
				</div>
				<div class="col-md-6 col-xs-12" style="padding: 30px 0 30px 0px;">
					<!-- <h5 style="letter-spacing: 2px !important;">Бетонні сходи: (+38)067-409-40-85, (+38)050-981-67-70  </h5> -->
					<h5 style="letter-spacing: 2px !important;">&#128222; (+38)096-933-63-33 </h5>
				</div><br>
				<div class="col-md-12" style="width:100%">
					<h3 class="footer-h3" style=" text-transform:none; letter-spacing:8px;">Сходи-А</h3>
				</div>


				<div class="col-md-12" style="color:#4b4b4b;margin-bottom: 20px;">
					<h6>© 2011 - <?php echo date('Y') ?> Сходи-А. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Всі права захищені. </h6>
				</div>

				<div class="counter-liv" style="width:100%;float:left;font-size: 12px;margin-bottom: 20px;">

					<!-- counter-->
					<?php
					//counter
					$COUNT_FILE = "counter.txt";
					$message = "";
					$ip = getenv("REMOTE_ADDR") . "::" . getenv("HTTP_X_FORWARDED_FOR");
					$datum = date("d.m.Y", time() - 3 * 3600);
					$fp = fopen("$COUNT_FILE", "rb");
					flock($fp, 1);
					$contents = fread($fp, filesize($COUNT_FILE));
					fclose($fp);
					$content = explode("\n", $contents);
					$counts = explode("|", $content[0]);
					$counts[3] = chop($counts[3]);
					if ($counts[3] == "") {
						$counts[3] = "1";
					}
					if (!in_array($ip, $content)) {
						$content[] = $ip;
						$counts[1]++;
					}
					$counts[2]++;
					$counts[3]++;
					// полночь. ;) 
					if ($counts[0] != $datum) {
						$message = "total hits:    " . $counts[3] . "\ntoday hits:    " . $counts[2] . "\ntoday uniques: " . $counts[1];
						$r11 = $counts[1];
						$r21 = $counts[2];
						$counts[0] = $datum;
						$counts[1] = 1;
						$counts[2] = 1;
					}
					echo ("<div align=\"center\"><span class=\"counter\">Всього переглядів - " . $counts[3] . " | Всього за день - " . $counts[2] . " | Унікальних за день - " . $counts[1] . " | Зараз на сайті: - " . sizeof(file($base)) . "</span></div>");
					$content[0] = $counts[0] . "|" . $counts[1] . "|" . $counts[2] . "|" . $counts[3];
					$fd = fopen("$COUNT_FILE", "a");
					$locked = flock($fd, 2);
					if ($locked) {
						$fp = fopen("$COUNT_FILE", "wb");
						if ($message == "") {
							fwrite($fp, implode("\n", $content));
						} else {
							fwrite($fp, $content[0]);
						}
						fclose($fp);
					}
					fclose($fd);
					//end counter
					?>

				</div>
				<div class="counter-my" style="display:none;">
				</div>

			</div>
		</div>
	</div>
</footer>
<!-- footer -->

<!-- JS FILES -->
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/jquery.fancybox.pack.js"></script>
<script src="/static/js/jquery.waypoints.min.js"></script>
<script src="/static/js/retina.min.js"></script>
<script src="/static/js/modernizr.js"></script>
<script src="/static/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116362889-1"></script>-->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->


<script type="text/javascript">
	//Background slideshow////////////////////////////
	var imgHead = [
			'/static/images/background10.jpg',
			'/static/images/background12.jpg',
			'/static/images/background9.jpg',
			'/static/images/background.jpg',
			'/static/images/background8.jpg',
			'/static/images/background6.jpg'

		],
		i = 1;
	var posX = [
		'center',
		'center',
		'center',
		'center',
		'center',
		'center'
	];

	var h2text = [
		'<a href="arhitekturnyj-mramor-beton.php"  target="_blank" rel="noopener" >Архітектурний Мармур-Бетон власного виробництва</a>',
		'Креативна команда дизайнерів та інженерів',
		'Інженерний розрахунок в ЛІРА-САПР з повним комплектом креслень',
		'Індивідуальний підхід і гарантія якості',
		'Інноваційні технології для виробництва бетонних перил',
		'Величезний виробничий досвід з 2011 року'


	];

	$('#promo').html(h2text[0]);

	function csaHead() {

		if (i > (imgHead.length - 1)) {
			$('.banner-image').animate({
				'opacity': '0'
			}, 800, function() {
				i = 1;
				$('.banner-image').css({
					'background': 'url(' + imgHead[0] + ')',
					'background-size': 'cover',
					'background-position-x': '' + posX[0] + '',
					'background-position-y': 'center'
				});
			});
			$('.banner-image').animate({
				'opacity': '0.3'
			}, 800);
			$('#promo').html(h2text[0]);
		} else {
			$('.banner-image').animate({
				'opacity': '0'
			}, 800, function() {
				$('.banner-image').css({
					'background': 'url(' + imgHead[i] + ')',
					'background-size': 'cover',
					'background-position-x': '' + posX[i] + '',
					'background-position-y': 'center'
				});
				i++;
			});
			$('.banner-image').animate({
				'opacity': '0.3'
			}, 800);
			$('#promo').html(h2text[i]);
		}

	}
	var intervalCsaHead = setInterval(csaHead, 7000);




	var width = $('body').innerWidth();
	if (width < 471) $('.div_image, .div_text').css('width', '100%');
</script>