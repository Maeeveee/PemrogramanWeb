<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Tugas</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Form Tugas</h1>
        <form action="" class="mt-4">
            <label for="jumlah">Masukkan Jumlah Form</label>
            <input type="number" id="jumlah" class="form-control mx-auto" style="width: 200px;">
        </form>
        <div id="formContainer" class="mt-4"></div>
        <button id="submit" class="btn btn-primary mt-3">Submit</button>
        <div id="resultContainer" class="mt-4"></div>
    </div>
    
   <script>
        const jumlahData = document.getElementById('jumlah');
        const formContainer = document.getElementById('formContainer');
        const submit = document.getElementById('submit');
        const resultContainer = document.getElementById('resultContainer');

        jumlahData.addEventListener('input', function(){
            formContainer.innerHTML = '';
            resultContainer.innerHTML = '';
            const jumlahForm = jumlahData.value;

            if (jumlahForm>0) {
                for (let i = 1; i <= jumlahForm; i++){
                    const formGroup = document.createElement('div')
                    formGroup.classList.add('mb-3');

                    const labelNama = document.createElement('label');
                    labelNama.innerText = `Nama ${i}`;
                    labelNama.setAttribute('for',`nama${i}`);
                    const inputNama = document.createElement('input');
                    inputNama.type = 'text';
                    inputNama.classList.add('form-control');
                    inputNama.id = `nama${i}`;
                    inputNama.placeholder = `Masukkan nama ke-${i}`;
                   
                    const labelAlamat = document.createElement('label');
                    labelAlamat.innerText = `Alamat ${i}`;
                    labelAlamat.setAttribute('for',`alamat${i}`);
                    const inputAlamat = document.createElement('input');
                    inputAlamat.type = 'text';
                    inputAlamat.classList.add('form-control');
                    inputAlamat.id = `alamat${i}`;
                    inputAlamat.placeholder = `Masukkan alamat ke-${i}`;

                    const labelTelepon = document.createElement('label');
                    labelTelepon.innerText = `Nomor Telepon ${i}`;
                    labelTelepon.setAttribute('for',`telepon${i}`);
                    const inputTelepon = document.createElement('input');
                    inputTelepon.type = 'text';
                    inputTelepon.classList.add('form-control');
                    inputTelepon.id = `telepon${i}`;
                    inputTelepon.placeholder = `Masukkan Nomor Telepon ke-${i}`;

                    formGroup.appendChild(labelNama);
                    formGroup.appendChild(inputNama);
                    formGroup.appendChild(labelAlamat);
                    formGroup.appendChild(inputAlamat);
                    formGroup.appendChild(labelTelepon);
                    formGroup.appendChild(inputTelepon);

                    formContainer.appendChild(formGroup);
                }
            }
        });

        submit.addEventListener('click', function(){
        resultContainer.innerHTML = '';
        const jumlahForm = parseInt(jumlahData.value);
            if (jumlahForm > 0) {
                for (let i = 1; i <= jumlahForm; i++) {
                    const nama = document.getElementById(`nama${i}`).value;
                    const alamat = document.getElementById(`alamat${i}`).value;
                    const telepon = document.getElementById(`telepon${i}`).value;                    
                    const result = document.createElement('p');
                    result.innerHTML = `<strong>form ${i}</strong><br>Nama : ${nama} Alamat : ${alamat} Nomor Telepon : ${telepon}`;
                    resultContainer.appendChild(result);
                }
            }else{
                const error = document.createElement('p');
                error.innerText = 'Masukkan Jumlah form yang valid';
                resultContainer.appendChild(error);
            }
        });
   </script>

</body>
</html>
