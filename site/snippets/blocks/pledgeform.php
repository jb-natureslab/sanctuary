<div class="wrapper wrapper--event">
	<div class="wrapper--event_text">
		<div class="restrict">
			<div class="flow">
			<h2><?= $block->heading() ?></h2>
			<?= $block->intro()->kt() ?>
			<?php if (strlen($block->button())>0): ?>
			<a class="button light" href="<?= $block->buttonurl() ?>"><?= $block->button() ?></a>
			<?php endif; ?>
			</div>
			<div class="flow">
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
<!--  END - We recommend to place the above code in head tag of your website html -->

<!-- START - We recommend to place the below code where you want the form in your website html  -->
<div class="sib-form" style="">
  <div id="sib-form-container" class="sib-form-container">
    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:3px; border-width:1px; border-color:#C0CCD9; border-style:solid;">
      <form id="sib-form" method="POST" action="https://f473aaff.sibforms.com/serve/MUIEAEKorbhCGPk7HZyCLCttAfSvoZrK7qmeNP5ujTaUtqWnZ8mL7uNFg-8-MX6t0f3-OuGPqZStakYgFvLWk8IT8h4jsMDAAIgrBYB4sLTjpg0s8en20us84Mx1XdchI80I7SPbYoW41sRoqfBLoBTDXGk3R3x941-PAT7_8kNB-fuGSb2dJQ1wF6S7IpmXLNE3YFTSvMGIvXnD">
        <div style="padding: 8px 0;">
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="FIRSTNAME" data-required="*">
                  Your name
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="FIRSTNAME" name="FIRSTNAME" autocomplete="off" placeholder="Name" data-required="true" required />
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
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">
                  Your email address
                </label>

                <div class="entry__field">
                  <input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="you@example.com" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
              <label class="entry__specification" style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4;">
                Provide your email address to subscribe. For e.g abc@xyz.com
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-select sib-form-block" data-required="true">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="LOCATION" data-required="*">
                  Your location
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
          <div class="sib-input sib-form-block">
            <div class="form__entry entry_block">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="MOTIVATION" data-required="*">
                  Please share what has motivated you to become a host?
                </label>

                <div class="entry__field">
                  <input class="input" maxlength="200" type="text" id="MOTIVATION" name="MOTIVATION" autocomplete="off" placeholder="Your motivation" data-required="true" required />
                </div>
              </div>

              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
              </label>
            </div>
          </div>
        </div>
        <div style="padding: 8px 0;">
          <div class="sib-form__declaration">
            <div class="declaration-block-icon">
              <svg class="icon__SVG" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <symbol id="svgIcon-sphere" viewBox="0 0 63 63">
                    <path class="path1" d="M31.54 0l1.05 3.06 3.385-.01-2.735 1.897 1.05 3.042-2.748-1.886-2.738 1.886 1.044-3.05-2.745-1.897h3.393zm13.97 3.019L46.555 6.4l3.384.01-2.743 2.101 1.048 3.387-2.752-2.1-2.752 2.1 1.054-3.382-2.745-2.105h3.385zm9.998 10.056l1.039 3.382h3.38l-2.751 2.1 1.05 3.382-2.744-2.091-2.743 2.091 1.054-3.381-2.754-2.1h3.385zM58.58 27.1l1.04 3.372h3.379l-2.752 2.096 1.05 3.387-2.744-2.091-2.75 2.092 1.054-3.387-2.747-2.097h3.376zm-3.076 14.02l1.044 3.364h3.385l-2.743 2.09 1.05 3.392-2.744-2.097-2.743 2.097 1.052-3.377-2.752-2.117 3.385-.01zm-9.985 9.91l1.045 3.364h3.393l-2.752 2.09 1.05 3.393-2.745-2.097-2.743 2.097 1.05-3.383-2.751-2.1 3.384-.01zM31.45 55.01l1.044 3.043 3.393-.008-2.752 1.9L34.19 63l-2.744-1.895-2.748 1.891 1.054-3.05-2.743-1.9h3.384zm-13.934-3.98l1.036 3.364h3.402l-2.752 2.09 1.053 3.393-2.747-2.097-2.752 2.097 1.053-3.382-2.743-2.1 3.384-.01zm-9.981-9.91l1.045 3.364h3.398l-2.748 2.09 1.05 3.392-2.753-2.1-2.752 2.096 1.053-3.382-2.743-2.102 3.384-.009zM4.466 27.1l1.038 3.372H8.88l-2.752 2.097 1.053 3.387-2.743-2.09-2.748 2.09 1.053-3.387L0 30.472h3.385zm3.069-14.025l1.045 3.382h3.395L9.23 18.56l1.05 3.381-2.752-2.09-2.752 2.09 1.053-3.381-2.744-2.1h3.384zm9.99-10.056L18.57 6.4l3.393.01-2.743 2.1 1.05 3.373-2.754-2.092-2.751 2.092 1.053-3.382-2.744-2.1h3.384zm24.938 19.394l-10-4.22a2.48 2.48 0 00-1.921 0l-10 4.22A2.529 2.529 0 0019 24.75c0 10.47 5.964 17.705 11.537 20.057a2.48 2.48 0 001.921 0C36.921 42.924 44 36.421 44 24.75a2.532 2.532 0 00-1.537-2.336zm-2.46 6.023l-9.583 9.705a.83.83 0 01-1.177 0l-5.416-5.485a.855.855 0 010-1.192l1.177-1.192a.83.83 0 011.177 0l3.65 3.697 7.819-7.916a.83.83 0 011.177 0l1.177 1.191a.843.843 0 010 1.192z" fill="#0092FF"></path>
                  </symbol>
                </defs>
              </svg>
              <svg class="svgIcon-sphere" style="width:63px; height:63px;">
                <use xlink:href="#svgIcon-sphere"></use>
              </svg>
            </div>
            <p style="font-size:14px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#687484; background-color:transparent;">
              We use Sendinblue as our marketing platform. By Clicking below to submit this form, you acknowledge that the information you provided will be transferred to Sendinblue for processing in accordance with their <a target="_blank" class="clickable_link" href="https://www.sendinblue.com/legal/termsofuse/">terms of use</a>
            </p>
          </div>

        </div>
        <div style="padding: 8px 0;">
          <div class="sib-optin sib-form-block" data-required="true">
            <div class="form__entry entry_mcq">
              <div class="form__label-row ">
                <label class="entry__label" style="font-weight: 700; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;" for="OPT_IN" data-required="*">
                  Opt-in
                </label>
                <div class="entry__choice">
                  <label>
                    <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" required />
                    <span class="checkbox checkbox_tick_positive"></span><span style="font-size:14px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#3C4858; background-color:transparent;"><p style="color:#687484 !important">I agree to receive your newsletters and accept the data privacy statement.</p></span> </label>
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
              SUBSCRIBE
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