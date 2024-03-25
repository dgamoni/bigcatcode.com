	<div class="work-item wow fadeInUp animated popup_sinevo" data-wow-delay=".7s">
		<img class="work-fon" src="<?php echo DECO_THEME_URI; ?>assets/image/preview_sinevo.png" height="301" width="400" alt="">
		<img class="work-logo image" src="<?php echo DECO_THEME_URI; ?>assets/image/logo-sinevo.png" alt="">

		<div class="work-logo desc">
			<span>Theme Development / Plugin Development</span>

			<p class="big">konkurs.synevo.ua</p>

			<p>The "Mind Games" competition for the Synevo Laboratory</p>
		</div>
		<div class="fon blue"></div>
		<!-- <a href="#" target="_blank"></a> -->
	</div>

	<script>
		jQuery(document).ready(function($) {

			// Define data for the popup
			var data = [
			  {
			    tag: "THEME DEVELOPMENT / PLUGIN DEVELOPMENT",
			    descript: `
<li>- Join over 3,000 participants</li>
<li>- Advanced profile</li>
<li>- Referral system prompts in the progression to third level</li>
<li>- Point system - for the answer to a crossword puzzle, buying tips for the control word for the invited</li>
<li>- Function tips</li>
<li>- Automatic rating on each stage, the general, the calculation of the winners</li>
<li>- Layout and Script 3 crossword</li>
<li>- Admin for questions crossword</li>
<li>- Encryption crosswords</li>
<li>- Reverse timer crosswords</li>
<li>- Admin panel for switching crosswords</li>
<li>- Statistics of participants, various sorting (the leaders of the winners, etc.)</li>
<li>- Customizable CSV export user statistics</li>
<li>- Admin Center to check the crossword, the control words</li>
<li>- Admin for manual adjustment of the data for each participant</li>
<li>- Faq (answers to questions) from the admin panel, the possibility of an answer, and the status of waiting for a response</li>
<li>- Ajax conservation crossword answers</li>
<li>- Full custom wordpress admin panel</li>
<li>- Documentation</li>
<li>- Full support and complete the project</li>`, 
			    url: 'konkurs.synevo.ua', 
			    imageTitle1:'1. Homepage start',
			    imageUrl1_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/6/sinevo1.png', 
			    imageTitle2:'2. Homepage finish',
			    imageUrl2_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/6/sinevo2.png', 
			    imageTitle3:'3. Registration',
			    imageUrl3_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/6/sinevo3.png', 
			    imageTitle4:'4. FAQ',
			    imageUrl4_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/6/sinevo4.png', 
			    imageTitle5:'5. Custom Admin',
			    imageUrl5_img: '<?php echo DECO_THEME_URI; ?>assets/porfolio/6/sinevo5.png', 
			  },
			  
			
			];

			// initalize popup
			$('.popup_sinevo').magnificPopup({ 
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