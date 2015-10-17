<?php $title="Contacts";
$content='<section class="well well__offset-3">
            <div class="container">
                <h2><em>Our</em>Contacts</h2>
                <div class="map">
                  <div id="mainbody">
					<p><?php echo $content;?></p>
					<iframe width=\'100%\' height=\'500px\' frameBorder=\'0\' src=\'https://a.tiles.mapbox.com/v4/cjay554.nhglk9fj/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiY2pheTU1NCIsImEiOiJjaWV5emt0N2cwdHB3c2dtMGV2OWV2bjM0In0.Pm8tCr9ESl77Q0Jx9QiaFQ\'></iframe>
					
			

			
			</div>
                <div class="row box-3">
                    <div class="grid_5">
                        <h2>Contacts Form</h2>
                        <form id="contact-form" class=\'contact-form\'>
                            <div class="contact-form-loader"></div>
                            <fieldset>
                                <label class="name">
                                    Your Name:
                                    <input type="text" name="name" placeholder="" value=""
                                           data-constraints="@Required @JustLetters"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>
                
                                <label class="email">
                                    Your E-mail:
                                    <input type="text" name="email" placeholder="" value=""
                                           data-constraints="@Required @Email"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>
                
                                <label class="Subject">
                                    Subject:
                                    <input type="text" name="phone" placeholder="" value=""
                                           data-constraints="@Required"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>
                
                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder=""
                                              data-constraints=\'@Required @Length(min=20,max=999999)\'></textarea>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>
                
                                <div class="btn-wr">
                                    <a class="" href="#" data-type="reset">Clear</a>
                                    <a class="" href="#" data-type="submit">Send</a>
                                </div>
                            </fieldset>
                            <div class="modal fade response-message">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">
                                                &times;
                                            </button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            You message has been sent! We will be in touch soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>    
                    <div class="preffix_1 grid_6">
                        <h2>Contacts Information</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym.<br><br>Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique.</p>
                        <address class="address-2">
                            <div class="address_container"><p>The Company Name Inc. 9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd>+1 800 603 6035</dd><br>
                                <dt>FAX:</dt> <dd>+1 800 899 9898</dd><br>
                                <dt>E-mail:</dt> <dd><a href="mailto:mail@demolink.org">mail@demolink.org</a></dd>
                            </dl>                        
                        </address>
                    </div>
                </div>
            </div>
        </section>'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./assets/structure/general/head.php')?>
	    <link rel="stylesheet" href="css/contact-form.css">

</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <?php include('./assets/structure/general/stuckContainer.php')?>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
		<?php echo $content ?>
		</main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <?php include('./assets/structure/footer.php') ?>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>