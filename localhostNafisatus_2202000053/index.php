<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru STKIPNU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .header-content {
            position: relative;
            text-align: center;
            color: white;
            height: 500px;
        }
        .background-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .centered {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -20%);
            text-align: center;
            font-family: 'Palatino', serif;
        }
        .centered img {
            height: 150px;
            margin-bottom: 20px;
        }
        .centered .btn {
            margin-top: 30px;
        }
        .centered h1 {
            margin-bottom: 10px;
        }
        .centered h1 strong {
            font-size: 2.5rem;
            transition: color 0.3s;
        }
        .centered h1 strong:hover {
            color: #ffc107;
        }
        .registration-timeline {
            text-align: center;
            color: black;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .registration-timeline h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: black;
        }
        .timeline-table, .syarat-pendaftaran-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .timeline-table th, .timeline-table td, .syarat-pendaftaran-table th, .syarat-pendaftaran-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .timeline-table th, .syarat-pendaftaran-table th {
            background-color: #f2f2f2;
        }
        .program-studi {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
            padding: 20px;
            border-radius: 10px;
            background-color: #343a40; /* Warna hitam seperti navbar */
            color: white;
        }
        .program-studi h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .program-studi ul {
            list-style-type: none;
            padding: 0;
        }
        .program-studi ul li {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .syarat-pendaftaran {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
        }
        .syarat-pendaftaran h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .syarat-pendaftaran table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .syarat-pendaftaran th, .syarat-pendaftaran td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .syarat-pendaftaran th {
            background-color: #f2f2f2;
        }
        .kontak-kami {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #343a40; /* Warna hitam seperti navbar */
            color: white;
        }
        .kontak-kami h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .kontak-kami p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .footer {
            background-color: #343a40; /* Warna hitam seperti navbar */
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        .footer p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <span class="navbar-brand mb-0 h1">
            <img src="images/logo.png" alt="Logo">
            Penerimaan Mahasiswa Baru STKIPNU
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#waktu">Waktu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#program">Program Studi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#syarat">Syarat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Gambar di bawah header dengan teks dan logo -->
    <div id="home" class="header-content">
        <img src="images/backgroun.jpeg" alt="Background Image" class="background-image">
        <div class="centered">
            <img src="images/logo.png" alt="Logo">
            <h1><strong>WELCOME TO PMB ONLINE STKIPNU TEGAL</strong></h1>
            <a href="create.php" class="btn btn-primary" role="button">Daftar Broo</a>
        </div>
    </div>

    <!-- Tabel Waktu Pendaftaran di bawah background-image -->
    <div id="waktu" class="container registration-timeline">
        <h4><strong>WAKTU PENDAFTARAN</strong></h4>
        <table class="timeline-table">
            <thead>
                <tr>
                    <th>Gelombang</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gelombang Pertama</td>
                    <td>1 Februari s/d 28 Maret 2024</td>
                </tr>
                <tr>
                    <td>Gelombang Kedua</td>
                    <td>1 April s/d 28 Juni 2024</td>
                </tr>
                <tr>
                    <td>Gelombang Ketiga</td>
                    <td>1 Juli s/d 30 Agustus 2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Teks Program Studi di bawah tabel -->
    <div id="program" class="container program-studi">
        <h4><strong>PROGRAM STUDI</strong></h4>
        <hr>
        <ul>
            <li>S1 Bimbingan Konseling</li>
            <li>S1 Pendidikan Ekonomi</li>
            <li>S1 Pendidikan Informatika</li>
        </ul>
    </div>

    <!-- Syarat Pendaftaran di bawah Program Studi -->
    <div id="syarat" class="container syarat-pendaftaran">
        <h4><strong>SYARAT PENDAFTARAN</strong></h4>
        <table class="syarat-pendaftaran-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Syarat Pendaftaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Ijazah atau surat keterangan lulus.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Identitas (akta kelahiran/KTP).</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Sertifikat prestasi.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Surat keterangan penghasilan orang tua.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Surat catatan berperilaku baik.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Surat keterangan sehat.</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Keterangan kesanggupan membayar biaya kuliah (keterangan program beasiswa jika mendapatkan beasiswa).</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Kontak Kami -->
    <div id="kontak" class="container kontak-kami">
        <h4><strong>KONTAK KAMI</strong></h4>
        <hr>
        <p>Email: info@stkiptugal.ac.id</p>
        <p>Telepon: (0283) 123456</p>
    </div>

    <!-- Daftar Calon Mahasiswa Baru -->
    <div class="container content">
        <br>
        <h4 class="text-center">Daftar Calon Mahasiswa Baru</h4>
        <?php
        include "koneksi.php";

        if (isset($_GET['id_calon_mahasiswa'])) {
            $id_calon_mahasiswa = htmlspecialchars($_GET["id_calon_mahasiswa"]);

            $sql = "DELETE FROM calon_mahasiswa WHERE id_calon_mahasiswa='$id_calon_mahasiswa'";
            $hasil = mysqli_query($kon, $sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="my-3 table table-bordered">
            <thead class="thead-dark">
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Program Studi</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_mahasiswa ORDER BY id_calon_mahasiswa DESC";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;

                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($data["nama"]); ?></td>
                    <td><?php echo htmlspecialchars($data["asal_sekolah"]); ?></td>
                    <td><?php echo htmlspecialchars($data["program_studi"]); ?></td>
                    <td><?php echo htmlspecialchars($data["no_hp"]); ?></td>
                    <td><?php echo htmlspecialchars($data["alamat"]); ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="update.php?id_calon_mahasiswa=<?php echo htmlspecialchars($data['id_calon_mahasiswa']); ?>" class="btn btn-warning mr-2" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_calon_mahasiswa=<?php echo htmlspecialchars($data['id_calon_mahasiswa']); ?>" class="btn btn-danger" role="button">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Penerimaan Mahasiswa Baru STKIPNU. All rights reserved.</p>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Ze4Fv9T5cUszl5MkqpFwnvg+OvNmYhe0vb8L+2Z7rrJm7Sc4CZPcgSrhzyU+Q1QQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-7KLu0Cga8hjl/lm2s8oquTLp26YtPOTtw3Ppef/hPhyDn1HymC+Dm8gqa/n5pVZr" crossorigin="anonymous"></script>
</body>
</html>
