<?php snippet('header'); ?>
	
	<main>
		<?= $page->text()->toBlocks() ?>
		<div class="wrapper wrapper--text">
			<div class="wrapper--text_restrict flow">
				<div class="letter flow">
					<div class="content flow">
						<?= $page->letter()->kt() ?>
						<span id="signaturies"></span>
					</div>
					<div class="form">
						<!-- Begin Sendinblue Form -->
<!-- START - We recommend to place the below code in head tag of your website html  -->
<style>
  @font-face {
    font-display: block;
    font-family: Roboto;
    src: url(https://assets.sendinblue.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2"), url(https://assets.sendinblue.com/font/Roboto/Latin/normal/normal/25c678feafdc175a70922a116c9be3e7.woff) format("woff")
  }

  @font-face {
    font-display: fallback;
    font-family: Roboto;
    font-weight: 600;
    src: url(https://assets.sendinblue.com/font/Roboto/Latin/medium/normal/6e9caeeafb1f3491be3e32744bc30440.woff2) format("woff2"), url(https://assets.sendinblue.com/font/Roboto/Latin/medium/normal/71501f0d8d5aa95960f6475d5487d4c2.woff) format("woff")
  }

  @font-face {
    font-display: fallback;
    font-family: Roboto;
    font-weight: 700;
    src: url(https://assets.sendinblue.com/font/Roboto/Latin/bold/normal/3ef7cf158f310cf752d5ad08cd0e7e60.woff2) format("woff2"), url(https://assets.sendinblue.com/font/Roboto/Latin/bold/normal/ece3a1d82f18b60bcce0211725c476aa.woff) format("woff")
  }

  #sib-container input:-ms-input-placeholder {
    text-align: left;
    font-family: "Helvetica", sans-serif;
    color: #c0ccda;
  }

  #sib-container input::placeholder {
    text-align: left;
    font-family: "Helvetica", sans-serif;
    color: #c0ccda;
  }
</style>
<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
<style>
.sib-form{
	padding-top:0px;
}	
</style>
<!--  END - We recommend to place the above code in head tag of your website html -->

<!-- START - We recommend to place the below code where you want the form in your website html  -->
<div class="sib-form">
	<h2>Sign the Letter</h2>
  <div id="sib-form-container" class="sib-form-container" style="margin-top:1rem;">
    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:3px; border-width:1px; border-color:#C0CCD9; border-style:solid;">
      <form id="sib-form" method="POST" action="https://f473aaff.sibforms.com/serve/MUIEAG2zeCwCNTABJ-vFCeDZ9FGxlD5aY2MQRiatJSJAaElLBROpwJ49ZyPG3QzF0bHwLg-fKZoPz5iypnEDihNe2RvGLk5-XCjjcSOIASflFM84HlYy2MTifAdfVIlsYkqewA-dD-HKmhuI9T7yJ28kEbfjR3SSeVcrP07FeqdUxVp5nYN1lKayedX8DQtUDsdlFrAR2P6zdmIB">
        <div style="padding: 8px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">
                  Email
                </label>

                <div class="entry__field">
                  <input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="you@example.com" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="FIRSTNAME" data-required="*">
                  First Name
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="FIRSTNAME" name="FIRSTNAME" autocomplete="off" placeholder="Jim" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="LASTNAME" data-required="*">
                  Last Name
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="LASTNAME" name="LASTNAME" autocomplete="off" placeholder="Smith" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-optin sib-form-block">
            <div class="form__entry entry_mcq">
              <div class="form__label-row ">
                <div class="entry__choice">
                  <label>
                    <input type="checkbox" class="input_replaced" value="1" id="HOST" name="HOST" />
                    <span class="checkbox checkbox_tick_positive"></span><span style="font-size:14px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#3C4858; background-color:transparent;"><p>I Am Hosting Ukranian Refugee(s)</p></span> </label>
                </div>
              </div>
              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>

        </div>
        <div style="padding: 8px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="NUMBER_OF_REFUGEES_HOSTED">
                  If You Are A Host How Many Refugees Are You Hosting?
                </label>
                <div class="entry__field">
                  <input maxlength="200" type="text" data-numeric="true" class="input" id="NUMBER_OF_REFUGEES_HOSTED" name="NUMBER_OF_REFUGEES_HOSTED" autocomplete="off" placeholder="1" />
                </div>
              </div>
              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
              <label class="entry__specification" style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4;">
                Please enter whole numbers only
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-select sib-form-block" data-required="true">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="LOCATION" data-required="*">
                  Your Location
                </label>
                <div class="entry__field">
                  <select class="input" id="LOCATION" name="LOCATION" data-required="true">
                    <option value="" disabled selected hidden>Select one</option>

                    <option class="sib-menu__item" value="1">
                      Scotland
                    </option>
                    <option class="sib-menu__item" value="2">
                      Wales
                    </option>
                    <option class="sib-menu__item" value="3">
                      Northern Ireland
                    </option>
                    <option class="sib-menu__item" value="4">
                      North East England
                    </option>
                    <option class="sib-menu__item" value="5">
                      North West England
                    </option>
                    <option class="sib-menu__item" value="6">
                      Yorkshire and the Humber
                    </option>
                    <option class="sib-menu__item" value="7">
                      East Midlands
                    </option>
                    <option class="sib-menu__item" value="8">
                      West Midlands
                    </option>
                    <option class="sib-menu__item" value="9">
                      East of England
                    </option>
                    <option class="sib-menu__item" value="10">
                      London
                    </option>
                    <option class="sib-menu__item" value="11">
                      South East England
                    </option>
                    <option class="sib-menu__item" value="12">
                      South West England
                    </option>
                  </select>
                </div>
              </div>
              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-optin sib-form-block">
            <div class="form__entry entry_mcq">
              <div class="form__label-row ">
                <div class="entry__choice">
                  <label>
                    <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" />
                    <span class="checkbox checkbox_tick_positive"></span><span style="font-size:14px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#3C4858; background-color:transparent;"><p>I agree to receive updates from Sanctuary Foundation about this campaign and receive their regular updates. I accept the data privacy statement.</p></span> </label>
                </div>
              </div>
              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
              <label class="entry__specification" style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4;">
                You may unsubscribe at any time using the link in our newsletter.
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-form-block" style="text-align: left">
            <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#FFFFFF; background-color:#3E4857; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
              <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
                <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
              </svg>
              SIGN THE LETTER
            </button>
          </div>
        </div>
        <input type="text" name="email_address_check" value="" class="input--hidden">
        <input type="hidden" name="locale" value="en">
        <input type="hidden" name="html_type" value="simple">
      </form>
    </div>
  </div>
</div>
<!-- END - We recommend to place the below code where you want the form in your website html  -->
<!-- End Sendinblue Form -->
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<script>
		$(window).ready(function(){
		    $.get( "/getSignaturies.php", function( data ) {
			 	$( "#signaturies" ).html( data );
			});
	    })
	</script>
	
<?php snippet('footer'); ?>