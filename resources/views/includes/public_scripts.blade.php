<script type="text/javascript">

    $(document).ready(function(){
        $(document).on('click', '.edit_profile', function(){
            $(".personal_info").removeAttr('readonly');
            $('.update_per_info').css({
                'display' : 'block'
            })
        });
        $(document).on('click', '.edit_email', function(){
             $('.email_info').removeAttr('readonly');
             $('.update_email').css({
                'display' : 'block'
             });
        });       
        $(document).on('click', '.edit_religion', function(){
             $('.religion_info').removeAttr('readonly');
             $('.update_religion').css({
                'display' : 'block'
             });
        });        
        $(document).on('click', '.edit_extra', function(){
             $('.update_extra').css({
                'display' : 'block'
             });
        });        
        $(document).on('click', '.Profie_image', function(){
            $('.primage').slideDown();
             $('.primage').css({
                'display' : 'block'
             });
        });
      
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
        $("input[name$='family']").click(function() {

        var test = $(this).val();
        
        $("div.user_family").hide();
        $("#Member" + test).show();
    });
    });
</script>

