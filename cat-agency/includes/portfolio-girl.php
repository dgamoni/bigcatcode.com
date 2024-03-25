	<div class="work-item wow fadeInUp animated popup_girl">
		<img class="work-fon" src="<?php echo DECO_THEME_URI; ?>assets/image/pre_girl.png" height="301" width="400" alt="">
		<img class="work-logo image" src="<?php echo DECO_THEME_URI; ?>assets/image/logo_girl_white2.png" alt="">

		<div class="work-logo desc">
			<span>Theme Development / Plugin Development</span>

			<p class="big">girlsintech.org</p>

			<p>Women. Technology. Entrepreneurship.</p>
		</div>
		<div class="fon girl_tech"></div>
		<!-- <a href="" target="_blank"></a> -->
	</div>

	<script>
		jQuery(document).ready(function($) {

			// Define data for the popup
			var data = [
			  {
			    tag: "THEME DEVELOPMENT / PLUGIN DEVELOPMENT",
			    descript: `
					<li>- custom framework</li>
					<li>- Multi site, multi domain, more 20 sites</li>
					<li>- Main theme, child theme</li>					
					<li>- Custom post type, taxonomy, custom fields</li>
					<li>- API Integration google, job manager, twitter, instagram</li>
					<li>- functions ratings and visits posts</li>
					<li>- Ajax load more</li>
					<li>- Custom widgets</li>
					<li>- Custom comments teplate</li>
					<li>- Walker menu</li>
					<li>- shortcode</li>
					<li>- Theme settings</li>
					<li>- Page template, User template</li>
					<li>- Intagrate with Visual composer</li>
					<li>- And much more</li>`, 
			    url: 'girlsintech.org', 
			    imageTitle1:'1. Homepage',
			    imageUrl1_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/5/home.png', 
			    imageTitle2:'2. Single',
			    imageUrl2_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/5/blog_single.png', 
			    imageTitle3:'3. Child home',
			    imageUrl3_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/5/chapter_single.jpg', 
			    imageTitle4:'4. Blog, archive',
			    imageUrl4_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/5/Blog.png', 
			    imageTitle5:'5. About',
			    imageUrl5_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/5/about.png', 
			  },
			  
			
			];

			// initalize popup
			$('.popup_girl').magnificPopup({ 
			  key: 'my-popup', 
			  items: data,
			  type: 'inline',
			  inline: {
			    // Define markup. Class names should match key names.
			    markup: '<div class="white-popup"><div class="mfp-close"></div>'+
			    		  '<div class="mfp-tag"></div>'+
			    		  '<ul class="mfp-descript"></ul>'+
			              '<span class="mfp-url big"></span>'+
			              '<div class="mfp-imageTitle1 porto-title"></div>'+
			              '<div class="mfp-imageUrl1"></div>'+
			              '<div class="mfp-imageTitle2 porto-title"></div>'+
			              '<div class="mfp-imageUrl2"></div>'+
			              '<div class="mfp-imageTitle3 porto-title"></div>'+
			              '<div class="mfp-imageUrl3"></div>'+
			              '<div class="mfp-imageTitle4 porto-title"></div>'+
			              '<div class="mfp-imageUrl4"></div>'+
			              '<div class="mfp-imageTitle5 porto-title"></div>'+
			              '<div class="mfp-imageUrl5"></div>'+
			            '</div>'
			  },
			  gallery: {
			    enabled: true 
			  },
			  callbacks: {
			    markupParse: function(template, values, item) {
			      // optionally apply your own logic - modify "template" element based on data in "values"
			      // console.log('Parsing:', template, values, item);
			    }
			  }
			});



		});
	</script>	