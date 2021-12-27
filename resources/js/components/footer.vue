<template>
<!-- Footer -->
	<footer>

		<div class="footer1 container-fluid">
			<br><div class="container" id="brand-name"><p>BEM</p></div>
			<div class="Contact-socialLinks container">
				<div style="display:flex;">
					<div style="width:50%;">
						<a href="#contact">Contact</a>
					</div>
					<div class="subscribe_modal">
						<div>
							<p style="color:white;">Get all my best stuff in your inbox.</p>
							<button id="subscribeButton-footer" data-target="#subscribemodal" title="Subscribe to receive my latest news">Subscribe</button>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="socialLinks container" style="color:white; font-size:120%;">
				<div>Share : </div>
				<div class="template-demo"> 
					<button type="button" class="btn btnSocialIcon btn-facebook"><img src="images/facebook-icon.PNG" /></button> 
					<button type="button" class="btn btnSocialIcon btn-twitter"><img src="images/twitter-icon.PNG" /></button> 
					<button type="button" class="btn btnSocialIcon btn-linkedin"><img src="images/linkedin-icon.PNG" /></button> 
					<button type="button" class="btn btnSocialIcon btn-instagram"><img src="images/instagram-icon.PNG" /></button> 
					<button type="button" class="btn btnSocialIcon btn-whatsapp"><img src="images/whatsapp-icon.PNG" /></button> 
				</div>
				<br><div class="hr"></div><br>
			</div>
		</div>

		<div class="footer2 container-fluid footer_container">
			<div class="container">
				<div class="copyright">
					<p>Copyright © &nbsp;</p><p id='year' style="color:blue;"></p>{{ year }}&nbsp; . &nbsp;
					<u><a href="/" style="color:white;" title="Welcome">BEM</a></u>&nbsp; .
				</div>  
			</div>
			<br>
		</div> 
	</footer>
<!-- // <script>
	/* Insert the current year in the element with the specified id */
	// function get_year(id){
    //     let this_date = new Date();
    //     let this_year = this_date.getFullYear();
    //     document.getElementById(id).innerHTML = this_year;
    // }

	/* Call Functions */

	// let onclickLines = document.getElementById("menu_lines") ;
	//onclickLines.addEventListener("click" , show_hide_navbar);
	//onclickLines.addEventListener("click" , changeToCross);
	//show_hide_navbar_adapt_with_width();
// </script> -->
</template>


<script>
// import { defineComponent } from '@vue/composition-api'

	export default {
		data() {
			return {
				year:""
			}
		},
		created() {
			// `this` points to the vm instance
			// console.log('count is: ' + this.count) // => "count is: 1"
			// get_year(){
			let this_date = new Date();
			let this_year = this_date.getFullYear();
			this.year = this_year;
				// console.log(this_year);
			// }
		},
		methods: {
			/* Insert the current year in the element with the specified id */
		}
	}

</script>