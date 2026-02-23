<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .hasil {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.8;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Input Data Mahasiswa</h2>

    <input type="text" id="nama" placeholder="Masukkan Nama">
    <input type="text" id="nim" placeholder="Masukkan NIM">
    <input type="text" id="jurusan" placeholder="Masukkan Jurusan">

    <button onclick="tampilkanData()">Tampilkan Data</button>

    <div class="hasil" id="output"></div>
</div>

<script>
    // Class Mahasiswa
    class Mahasiswa {
        constructor(nama, nim, jurusan) {
            this.nama = nama;
            this.nim = nim;
            this.jurusan = jurusan;
        }

        tampilData() {
            return `
                Nama : ${this.nama} <br>
                NIM : ${this.nim} <br>
                Jurusan : ${this.jurusan}
            `;
        }
    }

    function tampilkanData() {
        const nama = document.getElementById("nama").value;
        const nim = document.getElementById("nim").value;
        const jurusan = document.getElementById("jurusan").value;

        const mhs = new Mahasiswa(nama, nim, jurusan);

        document.getElementById("output").innerHTML = mhs.tampilData();
    }
</script>

</body>
</html>