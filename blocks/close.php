<script>
    $(document).ready(function(){
        $(".open-form").click(function() {
            $(".form-bg").fadeIn(800);
        });

        $(".close").click(function() {
            $(".form-bg").fadeOut(800);
        });
        $('.form-bg').click(function (e) {
            if (!$(e.target).closest(".form").length) {
                $('.form-bg').fadeOut(600);
            }
        });
        $(".open-page").click(function(){
            if($(".logup-page").is(":visible")){
                $(".logup-page").fadeOut(200);
                $(".login-page").fadeIn(200);
            }
            else{
                $(".logup-page").fadeIn(200);
            }
        })  
    });
</script>

