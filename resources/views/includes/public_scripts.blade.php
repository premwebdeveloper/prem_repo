<script type="text/javascript">

    $(document).ready(function(){

        // Bootstrap Datepicker
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight:'TRUE',
        });

        /*Personal Info Update*/
        $(document).on('click', '.edit_profile', function(){

            $(".personal_info").removeAttr('readonly');
            $(".personal_info").removeAttr('disabled');
            $('.update_personal_info').css({
                'display' : 'block'
            });
            $(".personal_radio").attr('disabled', false);

            $("#family_add_show_btn").css({
              'display':'block'
            });

        });
        /*Personal Info Update*/

        /*Email Info Update*/
        $(document).on('click', '.edit_optional_information', function(){

            $('.optional_info').removeAttr('readonly');
            $('.update_optional_info').css({
                'display' : 'block'
             });
            $(".radio").attr('disabled', false);

            $("#family_add_show_btn").css({
              'display':'block'
            });
        });
        /*Email Info Update*/

        /*Religion Info Update*/
        $(document).on('click', '#edit_member_profile', function(){
          $('.member_profile').removeAttr('readonly');
            $('.update_member_profile').css({
                'display' : 'block'
             });
            $(".member_radio").attr('disabled', false);
        });

        /*Religion Info Update*/
        $(document).on('click', '#edit_member_optional', function(){
            $('.member_optional').removeAttr('readonly');
            $('.update_member_optional').css({
                'display' : 'block'
             });
            $(".member_optional_radio").attr('disabled', false);
        });

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
        $(".personal_radio").attr('disabled', true);
        $(".member_radio").attr('disabled', true);
        $(".member_optional_radio").attr('disabled', true);
        //$('.member_profile').attr('readonly');
        $('.update_member_profile').css({
            'display':'none'
        });
        $('.update_member_optional').css({
            'display':'none'
        });
        //$(".wrap").css('opacity', '.2');

       setTimeout(function(){
            $('.alert').slideUp();
        }, 3000);

         /*Update Family Member*/
        $(document).on('click', '.edit_member', function(){
            $(".view_member_info").removeAttr('readonly');
            $('.update_member_info').css({
                'display' : 'block'
            });
            $(".radio").attr('disabled', false);
        });

        /*remove family_info class*/

        $("#family_info").on('click', function(){

          $("#family_add_show_btn").css({
            'display':'block'
          });
        });

        $("#profile").on('click', function(){
          $("#family_add_show_btn").css({
            'display':'none'
          });
        });
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
              $("#add_member_form_div").slideDown('slow');
              //$("#family").hide();
              $("#family_info_trable").hide();
              $("#family_add_show_btn").hide();
          });

          $("#show_family_members").on("click", function(){
              $("#add_member_form_div").hide();
              $("#family").slideDown('slow');
              $("#family_info_trable").show();
              $("#family_add_show_btn").show();
          });

          $(document).on('click', '.member_type', function() {
              var member = $(this).val();
           });

        });
        $(document).ready(function(){
          $(document).on('click', '.marry', function() {
            var mar = $(this).val();
            if(mar==2)
            {
              $('.unmarried').css({
                'display' : 'none',
              });
              $('.formarried').css({
                'display' : 'block'
              });
            }
            else{
              $('.unmarried').css({
                'display' : 'block'
              });
              $('.formarried').css({
                'display' : 'none'
              });
            }
          });
        });
</script>