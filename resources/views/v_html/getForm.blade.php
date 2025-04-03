<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 100%;
            max-width: 950px;
            border: 1px solid #808080;
            padding: 20px;
            box-sizing: border-box;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 5px 15px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim">
        </div>
        
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama">
        </div>
        
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas">
        </div>
        
        <div class="form-group">
            <button type="button">Simpan</button>
        </div>
    </div>
</body>
</html>
