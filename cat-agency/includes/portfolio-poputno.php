	<div class="work-item wow fadeInUp animated popup_poputno" data-wow-delay=".7s">
		<img class="work-fon" src="<?php echo DECO_THEME_URI; ?>assets/image/ts-bg.jpg" height="301" width="400" alt="">
		<img class="work-logo image" src="<?php echo DECO_THEME_URI; ?>assets/image/logo_poputno.png" alt="">

		<div class="work-logo desc">
			<span>Theme Development / Plugin Development</span>

			<p class="big">poputno.info</p>

			<p>Site for independent travelers</p>
		</div>
		<div class="fon blue2"></div>
		<!-- <a href="#" target="_blank"></a> -->
	</div>


	<script>
		jQuery(document).ready(function($) {

			// Define data for the popup
			var data = [
			  {
			    tag: "THEME DEVELOPMENT / PLUGIN DEVELOPMENT",
			    descript: `
					<li>- custom framework</li>
					<li>- Custom post type, taxonomy, custom fields</li>
					<li>- Integration google api, instagram</li>
					<li>- Calendar post and archive</li>
					<li>- functions ratings and visits posts</li>
					<li>- Ajax load more, search, filter post and more</li>
					<li>- Advanced search</li>
					<li>- Advanced filter post in term</li>
					<li>- social login</li>
					<li>- Walker menu</li>
					<li>- shortcode</li>
					<li>- Theme settings</li>
					<li>- Page template</li>
					<li>- And much more</li>`, 
			    url: 'poputno.info', 
			    imageTitle1:'1. Homepage',
			    imageUrl1_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/3/poputno01.png', 
			    imageTitle2:'2. Ajax filter term',
			    imageUrl2_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/3/poputno02.png', 
			    imageTitle3:'3. Single',
			    imageUrl3_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/3/poputno03.png', 
			    imageTitle4:'4. Search',
			    imageUrl4_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/3/poputno041.png', 
			    imageTitle5:'5. Archive',
			    imageUrl5_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/3/poputno05.png', 
			  },
			  
			
			];

			// initalize popup
			$('.popup_poputno').magnificPopup({ 
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