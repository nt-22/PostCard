<script> 
    $(document).ready (function () {
        $("#logup").click (function () {
            $('#message-logup').hide ();
            var name = $("#name-logup").val ();
            var password = $("#password-logup").val ();
            var nm = /^[0-9A-Z\А-ЯЁ]{3,15}$/i;
            var pwd = /^(?=.*\d)(?=.*[a-z\а-яё])(?=.*[A-Z\А-ЯЁ])(?=.*[-#!$@%^&*_+~=:;?])[-\w#!$@%^&*+~=:;?]{8,20}$/;
            var fail = "";
            
            if (nm.test(name) == false) { 
                fail = "Некорректное имя пользователя";
            } 
            else if (pwd.test(password) == false) {
                fail = "Пароль должен содержать:</p> <p>• 8-20 символов</p> <p>• верхний и нижний регистр</p> <p>• минимум одну цифру</p> <p>• минимум один спецсимвол</p> ";
            }
            
            if (fail != "") {
                $('#message-logup').html (fail + "<div class='clear'><br></div>");
                $('#message-logup').show ();
                return false;
            }
        });
    });
</script>