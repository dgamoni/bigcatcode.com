	<div class="work-item wow fadeInUp animated popup_joinup" data-wow-delay=".5s">
		<img class="work-fon" src="<?php echo DECO_THEME_URI; ?>assets/image/joinup-bg.jpg" height="301" width="400" alt="">
		<img class="work-logo image" src="<?php echo DECO_THEME_URI; ?>assets/img/logoJoin.png" alt="Travel agency">

		<div class="work-logo desc">
			<span>Theme Development / Plugin Development</span>

			<p class="big">JoinUp.ua</p>

			<p>One of the biggest<br />ukrainian tour operator</p>
		</div>
		<div class="fon nature"></div>
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
					<li>- Multi domain and multi language</li>
					<li>- Custom post type, taxonomy, custom fields</li>
					<li>- Integration with external database</li>
					<li>- API Integration yahoo tripadvisor instagram</li>
					<li>- SQL Integration with ticket system</li>
					<li>- Calendar of tours and inquiry tours</li>
					<li>- functions ratings and visits posts</li>
					<li>- Ajax load more, search, filter tours and more</li>
					<li>- Advanced seach tours</li>
					<li>- Custom widget</li>
					<li>- Walker menu</li>
					<li>- shortcode</li>
					<li>- Theme settings</li>
					<li>- Page template</li>
					<li>- Cache and Transients API</li>`, 
			    url: 'joinup.ua', 
			    joinupimageTitle1:'1. Homepage',
			    joinupimageUrl1_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup01.png', 
			    joinupimageTitle2:'2. CPT Contry',
			    joinupimageUrl2_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup02.png', 
			    joinupimageTitle3:'3. Single',
			    joinupimageUrl3_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup03.png', 
			    joinupimageTitle4:'4. Taxonomy',
			    joinupimageUrl4_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup04.png', 
			    joinupimageTitle5:'5. Term',
			    joinupimageUrl5_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup05.png', 
			    joinupimageTitle6:'6. Search',
			    joinupimageUrl6_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup06.png', 
			    joinupimageTitle7:'7. Ticket systems',
			    joinupimageUrl7_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup07.png', 
			    joinupimageTitle8:'8. Blog',
			    joinupimageUrl8_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup08.png', 
			    joinupimageTitle9:'9. Single',
			    joinupimageUrl9_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup09.png', 
			    joinupimageTitle10:'10. Contact',
			    joinupimageUrl10_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup10.png', 
			    joinupimageTitle11:'11. Serach tours',
			    joinupimageUrl11_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/2/joinup11.png', 
			  },
			  
			
			];

			// initalize popup
			$('.popup_joinup').magnificPopup({ 
			  key: 'my-popup-joinup', 
			  items: data,
			  type: 'inline',
			  inline: {
			    // Define markup. Class names should match key names.
			    markup: '<div class="white-popup"><div class="mfp-close"></div>'+
			    		  '<div class="mfp-tag"></div>'+
			    		  '<ul class="mfp-descript"></ul>'+
			              '<span class="mfp-url big"></span>'+
			              '<div class="mfp-joinupimageTitle1 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl1"></div>'+
			              '<div class="mfp-joinupimageTitle2 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl2"></div>'+
			              '<div class="mfp-joinupimageTitle3 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl3"></div>'+
			              '<div class="mfp-joinupimageTitle4 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl4"></div>'+
			              '<div class="mfp-joinupimageTitle5 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl5"></div>'+
			              '<div class="mfp-joinupimageTitle6 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl6"></div>'+
			              '<div class="mfp-joinupimageTitle7 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl7"></div>'+
			              '<div class="mfp-joinupimageTitle8 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl8"></div>'+
			              '<div class="mfp-joinupimageTitle9 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl9"></div>'+
			              '<div class="mfp-joinupimageTitle10 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl10"></div>'+
			              '<div class="mfp-joinupimageTitle11 porto-title"></div>'+
			              '<div class="mfp-joinupimageUrl11"></div>'+
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