<div id="shoot" class="contact col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<i class="fa fa-circle-o first"></i>
	<form>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 primera-col">
			<div class="form-group email">

			<input type="email" name="email" class="form-control  required" id="InputEmail" placeholder="Email">

			</div>

			<div class="form-group">

			<input type="text" name="ciudad" class="form-control required" id="InputCiudad" placeholder="Ciudad">

			</div>

			<div class="form-group">

			<input type="text" name="instagram" class="form-control required" id="InputInstagram" placeholder="Instagram">

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">

			<input type="text" name="nombre" class="form-control nombre required" id="Inputnombre" placeholder="Nombre">

			</div>

			<div class="form-group">

			<input type="text" name="edad" class="form-control edad required" id="InputEdad" placeholder="Edad">

			</div>

			<div class="form-group">

			<input type="text" name="twitter" class="form-control required" id="InputTwitter" placeholder="Twitter">

			</div>

			<div class="form-group">

			<input type="text" name="msg" class="form-control required" id="InputMensaje" placeholder="Mensaje">

			</div>
		</div>
	
		<div class="button">
			<button id="#sendb" type="submit" class="btn btn-default"><i class="fa fa-circle-o second"></i></button>
			<input type="hidden" name="submitted" id="submitted" value="true"/>
		</div>
		<p>Enviar</p>
	</form>

</div>

<script>
    $(document).ready(function() {

      $('form').submit(function() {
        var hasError = false;

        $(this).find(".required").each(function() {

          if(!$(this).val()) {
            $(this).addClass("form-error");
            hasError = true;
          } else if($(this).hasClass('edad')) {
            var nombreReg = /^[0-9\-]{2}$/i; 
            if(!nombreReg.test($.trim($(this).val()))) {
              $(this).addClass("form-error");
              hasError = true;
            }else{
              $(this).removeClass('form-error');
            }
          }else if($(this).hasClass('nombre')) {
          var nombreReg = /^[á-úa-zA-Z\s]{2,30}$/;
          if(!nombreReg.test($.trim($(this).val()))) {
           $(this).addClass("form-error");
            hasError = true;
            }else{
              $(this).removeClass('form-error');
            }
          }else{
            $(this).removeClass('form-error');
          }
        });


        if (hasError) {
         return false;
        }else{
          var bu = $('form').find("#sendb");
          $(bu).attr("disabled", true);

	       var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$('form').slideUp("fast", function() {				   
					$(this).before('<h4 style="background:none; border: none; padding:25%; color:#0088FF !important;"> Tu mensaje ha sido enviado, te contactaremos pronto, gracias! </h4>');
				});
			});

	         return false;
        }

      });
      
    });
  </script>