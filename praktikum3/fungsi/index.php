<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <form>
        <div class="form-group row">
            <label for="nama lengkap" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input id="nama lengkap" name="nama lengkap" placeholder="Nama Lengkap" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai uts" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
                <input id="nilai uts" name="nilai uts" placeholder="Nilai UTS" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="Dasar-Dasar Pemrograman">DDP</option>
                    <option value="Sistem Informasi">SO</option>
                    <option value="Pembentukan Karakter">PK</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai uas" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-8">
                <input id="nilai uas" name="nilai uas" placeholder="Nilai UAS" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label>
            <div class="col-8">
                <input id="nilai tugas" name="nilai tugas" placeholder="Nilai Tugas" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>