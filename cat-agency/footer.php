</main>
<!-- end main -->
<!-- footer -->
<footer id="contact" role="contentinfo">
	<div class="wrapper">
		<div class="top-footer">
			<ul class="contact fl">
				<li>
					<h5></h5>
					<span class="address"  ></span>
					<a class="phone" href="tel:"></a>
				</li>
				<li>
					<h5></h5>
					<span class="address"  ></span>
					<a class="phone" href="tel:"></a>
				</li>
				<li>
					<h5>E-mail</h5>
					<a class="mail" href="mailto:bigcatcode@gmail.com ">bigcatcode@gmail.com</a>
				</li>
			</ul>
			<ul class="social fr">
				<li class="fc"><a target="_blank" href="#"><span class="disp-none">Facebook</span></a></li>
				<li class="go"><a target="_blank" href="#"><span class="disp-none">Google +</span></a></li>
				<li class="be"><a target="_blank" href="#"><span class="disp-none">Be</span></a></li>
			</ul>
		</div>
	</div>
	<p class="copyright">made with love 2015</p>
</footer>
<!-- end footer -->
<div class="request-modal modal-wrap">

	<div class="grid-2">
		<div class="center">
			<h4>
			<span>Describe your WordPress tasks</span><br />
			and get dev estimate<br />
			in the same day
			</h4>
<!-- 			<div class="logo-small">
			</div> -->
			<div class="contact-block">
				<h5>
				<!-- <i class="icon-flag icon-ua"></i> -->
				</h5>
				<address>

				</address>
				<a class="phone" href="tel:"></a>
			</div>
			<div class="contact-block">
				<h5>
				<!-- <i class="icon-flag icon-pl"></i> -->
				</h5>
				<address>

				</address>
				<a class="phone" href="tel:"></a>
			</div>
			<div class="mail-block">
				<a href="mailto:bigcatcode@gmail.com">bigcatcode@gmail.com</a>
			</div>
			<p class="txt-bottom">Feel free to contact us with any questions</p>
		</div>
	</div>
	<div class="grid-2">
		<span class="close-modal"></span>
		<div class="center">
			<form class="request-form"  action="" onsubmit="sub()" method="POST" id="reqform">
				<div class="inp-wrap">
					<input class="inp" name="name" type="text" placeholder="Name *" />
				</div>
				<div class="inp-wrap">
					<input class="inp" name="email" type="email" required placeholder="E-mail *" />
				</div>
				<div class="inp-wrap">
					<input class="inp" name="site" type="text" placeholder="Site" />
				</div>

				<textarea class="txtarea" name="message" id="" placeholder="My WordPress desire is ..."></textarea>

<!--				<div class="inp-file">-->
<!--					<input type="file" />-->
<!--					Attach files-->
<!--				</div>-->
				<button class="btn-big">Send</button>
				<p class="error-msg"></p>
			</form>
		</div>
	</div>
</div>
<span class="request-modal-overlay"></span>

<!-- bower:js -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<?php wp_footer(); ?>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/wow/dist/wow.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/jquery.gsap.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/TimelineMax.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/easing/EasePack.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/plugins/CSSPlugin.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/vendors/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/js/min/slick.min.js"></script>
<script src="<?php echo DECO_THEME_URI; ?>assets/js/function.js"></script>
<!-- endbower -->
</body>
</html>