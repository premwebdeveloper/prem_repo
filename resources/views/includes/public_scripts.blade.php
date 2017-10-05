<script type="text/javascript">

    $(document).ready(function(){
        $(document).on('click', '.edit_profile', function(){
            $(".personal_info").removeAttr('readonly');
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
            $(".member").slideDown('slow');
            $('#MaleMember').slideDown('slow');
        });
        $("#Male").on("click", function(){
            if(this.checked)
            {
                $('#MaleMember').slideDown('slow');
            }
            else
            {
                $('#MaleMember').slideUp('slow');
            }
        });
        $("#Female").on("click", function(){
            if(this.checked)
                $('#FemaleMember').slideDown('slow');
            else
                $('#FemaleMember').slideUp('slow');
        });
    });
</script>

