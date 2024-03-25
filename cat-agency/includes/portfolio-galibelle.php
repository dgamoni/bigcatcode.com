	<div class="work-item wow fadeInUp animated popup_galibelle" data-wow-delay=".3s">
		<img class="work-fon" src="<?php echo DECO_THEME_URI; ?>assets/image/preview_gall.jpg" height="301" width="400" alt="">
		<img class="work-logo image" src="<?php echo DECO_THEME_URI; ?>assets/image/logo_big_gall.png">

		<div class="work-logo desc">
			<span>Theme Development / Plugin Development</span>

			<p class="big">galibelle.com</p>

			<p>Famous Brazilian shoes brand</p>
		</div>
		<div class="fon gall"></div>
		<!-- <a href="" target="_blank"></a> -->
	</div>

	<script>
		jQuery(document).ready(function($) {

			// Define data for the popup
			var data = [
			  {
			    tag: "THEME DEVELOPMENT / PLUGIN DEVELOPMENT",
			    descript: `
					<li>- Custom post type, taxonomy, custom fields</li>
					<li>- Mega menu, custom walker </li>
					<li>- Contact page search and filter for term</li>
					<li>- Ajax load more post</li>
					<li>- shortcode</li>
					<li>- custom widgets</li>
					<li>- Page template</li>
					<li>- And much more</li>`, 
			    url: 'galibelle.com', 
			    imageTitle1:'1. Homepage',
			    imageUrl1_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/4/galibelle1.png', 
			    imageTitle2:'2. Arcticle',
			    imageUrl2_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/4/galibelle2.png', 
			    imageTitle3:'3. Single',
			    imageUrl3_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/4/galibelle3.png', 
			    imageTitle4:'4. Contact',
			    imageUrl4_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/4/galibelle4.png', 
			    imageTitle5:'',
			    imageUrl5_img: '', 
			    imageTitle6:'',
			    imageUrl6_img: '', 
			    imageTitle7:'',
			    imageUrl7_img: '', 
			    imageTitle8:'',
			    imageUrl8_img: '', 
			    imageTitle9:'',
			    imageUrl9_img: '', 
			    imageTitle10:'',
			    imageUrl10_img: '', 
			    imageTitle11:'',
			    imageUrl11_img: '', 
			  },
			  
			
			];

			// initalize popup
			$('.popup_galibelle').magnificPopup({ 
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
			              '<div class="mfp-imageTitle5 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl5"></div>'+
			              '<div class="mfp-imageTitle6 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl6"></div>'+
			              '<div class="mfp-imageTitle7 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl7"></div>'+
			              '<div class="mfp-imageTitle8 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl8"></div>'+
			              '<div class="mfp-imageTitle9 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl9"></div>'+
			              '<div class="mfp-imageTitle10 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl10"></div>'+
			              '<div class="mfp-imageTitle11 porto-title hide"></div>'+
			              '<div class="mfp-imageUrl11"></div>'+
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