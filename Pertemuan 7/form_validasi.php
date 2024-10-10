<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>

    <form id="myForm">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id ="password-error" style="color: red"></span><br>

        <input type="submit" value="submit">
    </form>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }else{
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("email harus diisi.");
                    valid = false;
                }else{
                    $("#email-error").text("");
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                }else{
                    $("#email-error").text("");
                }
                if (!valid) {
                    (event.preventDefault());
                }
            });
        });
        $(document).ready(function(){
            $("#myForm").submit(function(e){
                e.preventDefault();
                var formData = $("#myForm").serialize();
                $.ajax({
        url: 'proses_validasi.php',
        type: 'POST',
        data: {
        nama: $("#nama").val(),
        email: $("#email").val(),
        password: $("#password").val()
    },
    success: function (response) {
        alert("Form berhasil dikirim!");
    },
    error: function (jqXHR, textStatus, errorThrown) {
        alert("Terjadi kesalahan: " + textStatus);
    }
});
            });
        });
    
    </script>
</body>
</html>