<?php 

function main_menu(){ ?>

	<nav class="navbar navbar-default">

        <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tarful_collapse">

              <span class="sr-only">Toggle navigation</span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt=""></a>

          </div>

        

      <?php 

        $argsm = array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse' , 'container_id' => 'tarful_collapse' );

        $var = wp_nav_menu( $argsm );

      ?>

      </div>

    </nav>

  <?php 
    image_hover();
    ease_scrolling();
}

function ease_scrolling(){ ?>
  <script>
    $('#menu-primary a').click(function(){
      $('html, body').animate({
          scrollTop: $( $(this).attr('href') ).offset().top
      }, 2000);
      return false;
    });
  </script>
<?php }

function image_hover(){ ?>
  <div class="data" data-image="<?php echo get_stylesheet_directory_uri();?>/images/rollover.png"></div>
  <script>
    $(document).ready(function(){
      $(".menu-item").hover(function(){
        var imgurl = $('.data').data("image");
        $(this).css("background-image", "url(" + imgurl + ")");
        }, function(){
            $(this).css("background-image", "");
      });
    });
  </script>
<?php }

function pop_up() { ?>
  <script>
    $(document).ready(function() {
      $(this).on("click","a.pic-link",function(event){
      
            var id_d = $(this).data("id");
            $(document).keyup(function(e) {
              if(e.keyCode == 27 && $('#pic-'+id_d).css("visibility") != "hidden" ) {
                $('#pic-'+id_d).addClass("closing");
                $('.navbar-default').removeClass("closing");
                 $('.navbar-default').addClass("openning");
                window.location.hash = "#port";
              }
            });
            var aux = $(this).find('#pic-'+id_d).hasClass("closing");
            if ($(aux)) {
              $('#pic-'+id_d).removeClass("closing");
              $('.navbar-default').addClass("closing");
              $('#pic-'+id_d).addClass("openning");
               window.location.hash = "#port";
            };

            $('#pic-'+id_d+' .close').on( 'click', function ( e ) {
              event.preventDefault();
            $('.navbar-default').removeClass("closing");
            $('#pic-'+id_d).addClass("closing");
            $('.navbar-default').addClass("openning");
            window.location.hash = "#port";
          });
      
           $('#pic-'+id_d).on( 'click', function ( e ) {
          if ( $( e.target ).closest('#pic-'+id_d+' .content').length === 0 ) {
            $('#pic-'+id_d).addClass("closing");
            $('.navbar-default').addClass("openning");
            window.location.hash = "#port";
          }
        });

      });
    });
  </script>
<?php } 

function contact_form(){
  
  error_reporting(E_ALL ^ E_NOTICE);
  //If the form is submitted
  if(isset($_POST['submitted'])) {

    $email = trim($_POST['email']);

    $ciudad = trim($_POST['ciudad']);

    $instagram = trim($_POST['instagram']);
    
    $nombre = trim($_POST['nombre']);

    $edad = trim($_POST['edad']);

    $twitter = trim($_POST['twitter']);

    $msg = trim($_POST['msg']);


      $emailTo = get_option( 'admin_email' );

      $subject = 'Contacto desde Sitio Web - Donald.photo' ;

      $message = '<html><body><br />';
      $message .= '<table border="0" cellpadding="10" width="600px">';
      $message .= '<tr style="'.$tr_style.'"><td>Data:</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Email: '.$email.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Ciudad: '.$ciudad.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Instagram: '.$instagram.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Nombre: '.$nombre.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Edad: '.$edad.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Twitter: '.$twitter.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Mensaje: '.$msg.'</td></tr>';
      $message .= '</table>';
      $message .= '</body></html>';
      
          
      $headers = 'From: ADMIN' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
  
      add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
      
       wp_mail( $emailTo, $subject, $message, $headers);
            
    // global $wpdb;
    //   $wpdb->insert( 
    //   'tarful_inscritos', 
    //   array( 
    //     'id_retiro' => $idretiro
    //     )
    //   );

      // tarful_send_mail($email, $emailorganizer, $idretiro, $llamada);  
  }   
}

function scrolling_effects(){ ?>
  <script>
    $(function(){
     var startY = $(' header').position().top + $('.intro').outerHeight(true) + $('.beforetagline').outerHeight(true) + $('#donald').outerHeight(true) + $('#port').outerHeight(true)+ $('#servicios').outerHeight(true) + 100;
        
        $(window).scroll(function(){
          checkY();
        });

        function checkY(){

           if ($(window).scrollTop()>0) {
              $('.navbar-default > .container-fluid').addClass("highlight-menu animated flipInX ");
            } else {
              $('.navbar-default > .container-fluid').removeClass("highlight-menu animated flipInX");
            }

            if ($(window).width() > 760) { 
              if( ($(window).scrollTop() > startY)) {
                if( $(window).scrollTop() > startY + 150 ){
                  $('.services > .no-padding .service:nth-child(2)') .fadeIn('slow');
                }
                if( $(window).scrollTop() > startY + 270){
                  $('.services > .no-padding .service:nth-child(3)') .fadeIn('slow');
                }
                if( $(window).scrollTop() > startY + 360){
                  $('.services > .no-padding .service:nth-child(4)') .fadeIn('slow');
                }
              }

                if (($(window).scrollTop() - $("#servicios > .no-padding").offset().top) >= $("#servicios > .no-padding").height() - $("#servicios > .no-padding").innerHeight() && ($(window).scrollTop() - $("#servicios > .no-padding").offset().top) <= $('#servicios > .no-padding').height()) {
                  $('.service').css('top', $(window).scrollTop() - $("#servicios > .no-padding").offset().top + 100 + "px");
                }
              }
        }
        // Do this on load just in case the user starts half way down the page
        checkY();

        var effects = 'animated zoomIn';
        var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $('.service').hover(function() {
          $(this).find("img").addClass(effects).one( animationend ,function(){
              $(this).removeClass(effects);
            });

          $(this).find(".content").addClass('animated fadeInUp').one( animationend ,function(){
              $(this).removeClass('animated fadeInUp');
            });
        });
    });
  </script>
<?php }

function effects_donald(){ ?>
  <script>
  $(function(){
    var effects = 'animated zoomIn';
      var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    
    $( ".donaldbio" ).hover(
      function() {
        $( ".picsobre").css("visibility", "visible");
        $(this).find("img").addClass(effects).one( animationend ,function(){
                $(this).removeClass(effects);
              });
      }, function() {
        $( ".picsobre").css("visibility", "hidden");
      }
    );
  });
  </script>
<?php }
?>