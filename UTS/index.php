<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="shortcut icon" href="gambar/gambarCamp.jpg" type="image/x-icon">
    <title>UTS</title>
    <style>
        .custom-container {
            background-image: url('gambar/gambarCamp.jpg');
            background-size: cover;
            background-position: bottom;
            min-height: 50vh;
            width: 80%;
            max-width: 600px;
            margin: auto;
        }
        #campForm {
            display: none;
        }
        body {
            background-image: url('gambar/gambarLangit.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
        }
        #jumlahAlatContainer {
            min-height: 270px;
        }
        .btn-disabled {
            pointer-events: none;
            background-color: grey;
            border-color: grey;
        }
    </style>
</head>
<body>
    <div class="text-center mt-4">
        <h1 class="text-light mb-4">Penyewaan Perlengkapan Camp</h1>
    </div>
    <div class="d-flex flex-column justify-content-between align-items-center rounded-4 custom-container">
        <div class="text-center w-70 mt-auto mb-4">

            <form id="nameForm" class="mt-4" method="post">
                <div class="form-group text-light">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Nama Anda" required>
                </div>
                <br>
                <input type="submit" class="btn btn-secondary" value="Lanjutkan" id="submitButton">
                <br>
            </form>

            <form id="campForm" action="prosesPinjam.php" method="post" class="mt-4">
                <div class="form-group text-light">
                    <label for="alat">Pilih Perlengkapan Alat Camp:</label>
                    <select class="form-control" id="alat" name="alat[]" multiple required>
                        <option value="tenda">Tenda</option>
                        <option value="matras">Matras</option>
                        <option value="kompor">Kompor Portable</option>
                        <option value="sleepingBag">Sleeping Bag</option>
                    </select>
                </div>
                <br>
                <div id="jumlahAlatContainer" class="mt-3"></div>
                <div id="jumlahHariContainer" class="mt-3" style="display: none;">
                    <div class="form-group text-light">
                        <label for="jumlahHari">Jumlah Hari Penyewaan:</label>
                        <input type="number" class="form-control mb-4" id="jumlahHari" name="jumlahHari" min="1" placeholder="Jumlah Hari Penyewaan" required>
                    </div>
                </div>
                <button type="button" class="btn btn-disabled" id="lanjutJumlahButton">Lanjutkan</button>
                <input type="hidden" name="username" id="hiddenUsername">
                <input type="submit" class="btn btn-disabled" value="Submit" id="submitCampButton" disabled style="display: none;">
            </form>

        </div>       
    </div>

    <script>
    $(document).ready(function() {
        $("#username").on('input', function() {
            var namaPemesan = $(this).val();
            if (namaPemesan) {
                $("#submitButton").removeClass('btn-secondary').addClass('btn-primary').prop('disabled', false);
            } else {
                $("#submitButton").removeClass('btn-primary').addClass('btn-secondary').prop('disabled', true);
            }
        });

        $("#nameForm").submit(function(e) {
            e.preventDefault();
            var namaPemesan = $("#username").val();
            if (namaPemesan !== "") {
                $("#hiddenUsername").val(namaPemesan);
                $("#campForm").slideDown();
                $(this).hide();
            }
        });

        $("#alat").change(function() {
            $("#jumlahAlatContainer").empty();
            $(this).val().forEach(function(alat) {
                var alatLabel = $('option[value="'+ alat +'"]').text();
                var inputJumlah = `
                    <div class="form-group text-light">
                        <label for="jumlah_${alat}">Jumlah ${alatLabel}:</label>
                        <input type="number" class="form-control jumlahAlat" id="jumlah_${alat}" 
                        name="jumlah_${alat}" min="1" placeholder="jumlah ${alatLabel}" required>
                    </div>`;
                $("#jumlahAlatContainer").append(inputJumlah);
            });
            $(".jumlahAlat").on('input', function() {
                checkJumlahInput();
            });
        });

        function checkJumlahInput() {
            let allFilled = true;
            $(".jumlahAlat").each(function() {
                if ($(this).val() === "" || $(this).val() <= 0) {
                    allFilled = false;
                    return false;
                }
            });

            if (allFilled) {
                $("#lanjutJumlahButton").removeClass('btn-disabled').removeClass('btn-secondary').addClass('btn-primary').prop('disabled', false);
            } else {
                $("#lanjutJumlahButton").addClass('btn-disabled').addClass('btn-secondary').removeClass('btn-primary').prop('disabled', true);
            }
        }

        $("#lanjutJumlahButton").click(function() {
            $("#jumlahAlatContainer").slideUp();
            $("#alat").parent().slideUp();
            $(this).hide();
            
            $("#jumlahHariContainer").slideDown();

            $("#submitCampButton").show();
            $("#submitCampButton").removeClass('btn-disabled').addClass('btn-secondary');

            $("#jumlahHari").on('input', function() {
                var jumlahHari = $(this).val();
                if (jumlahHari > 0) {
                    $("#submitCampButton").removeClass('btn-disabled').removeClass('btn-secondary').addClass('btn-primary').prop('disabled', false);
                } else {
                    $("#submitCampButton").addClass('btn-disabled').addClass('btn-secondary').removeClass('btn-primary').prop('disabled', true);
                }
            });
        });
    });
    </script>
</body>
</html>
