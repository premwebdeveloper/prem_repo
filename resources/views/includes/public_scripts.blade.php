<script type="text/javascript">

    $(document).ready(function(){
        /*Personal Info Update*/
        $(document).on('click', '.edit_profile', function(){
            $(".personal_info").removeAttr('readonly');
            $('.update_per_info').css({
                'display' : 'block'
            });
            $(".radio").attr('disabled', false);
        });
        /*Personal Info Update*/

        /*Email Info Update*/
        $(document).on('click', '.edit_email', function(){
             $('.email_info').removeAttr('readonly');
             $('.update_email').css({
                'display' : 'block'
             });
        });
        /*Email Info Update*/

        /*Religion Info Update*/
        $(document).on('click', '.edit_religion', function(){
             $('.religion_info').removeAttr('readonly');
             $('.update_religion').css({
                'display' : 'block'
             });
        });
        /*Religion Info Update*/

        /*Extra Info update*/
        $(document).on('click', '.edit_extra', function(){
             $('.update_extra').css({
                'display' : 'block'
             });
             $(".radio").attr('disabled', false);
        });
        /*Extra Info update*/

        /*Profile Info image*/
        $(document).on('click', '.Profie_image', function(){
            $('.primage').slideDown();
             $('.primage').css({
                'display' : 'block'
             });
        });
        /*Profile Info image*/

         /* radio disable*/
        $(".radio").attr('disabled', true);
        //$(".wrap").css('opacity', '.2');

       setTimeout(function(){
            $('.alert').slideUp();
        }, 3000);

    });

    // Activate Carousel
    $(document).ready(function(){
        $("#myCarousel").carousel({interval: 15000});
    });

     // Activate Carousel
    $(document).ready(function(){
        $("#myCarousel2").carousel({interval: 15000});
    });

    // Activate Carousel
    $(document).ready(function(){
        $("#myCarousel3").carousel({interval: 5000});
    });

    //profile according

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            }
          }
        }
        $(document).ready(function(){

          $("#addmember").on("click", function(){
              $(".member").slideDown('slow');
              $('#MemberMale').slideDown('slow');
          });

          $(document).on('click', '.member_type', function() {

              var member = $(this).val();



          });
        });
</script>

