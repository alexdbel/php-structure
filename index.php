<?php include "header.php";?>

<script>
    $(document).ready(function() {

        $("#submit").on('click', function() {
            var username = $("#username").val()
            var password = $("#password").val()
            $.ajax({
                url: 'verification.php',
                type: 'post',
                data: {
                    username: username,
                    password: password,
                },
                success: function(result) {
                    $("#result").html(result)
                }
            })
        })
    })
</script>

<div class="d-flex align-items-center justify-content-center flex-column" style="height: 100vh;  margin: 0 auto" >
    <div class="w-50">
        <label>Username</label>    
        <input id="username" name="username" class="form-control" />

        <label>Password</label>    
        <input id="password" name="password" class="form-control" type="password" />

        <span id="result" class="text-danger"></span>

        <button id="submit" class="mt-3 w-100 btn btn-primary">Envoyer</button>
    </div>
    <a class="mt-3" href="/">Accueil</a>
</div>