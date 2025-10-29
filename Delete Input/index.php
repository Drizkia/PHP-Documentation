<?php 
    $conn = include_once "config.php";

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    if (!$result) {
        echo (mysqli_error($conn));
    }

    $nomor = 0;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konek Html</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen flex justify-center items-center bg-slate-900 [background-image:radial-gradient(ellipse_400px_300px_at_bottom_left,_#34d399,_#0f182a)]">
    <div class=" flex flex-col">
        <h1 class="text-3xl font-bold mb-4 text-white text-center">Daftar Mahasiswa</h1>
        <table class="border border-white border-collapse shadow-lg">
            <tr>
                <th class="border border-white px-3 py-2 text-white">No</th>
                <th class="border border-white px-3 py-2 text-white">AKSI</th>
                <th class="border border-white px-3 py-2 text-white">NIM</th>
                <th class="border border-white px-3 py-2 text-white">NAMA</th>
                <th class="border border-white px-3 py-2 text-white">JURUSAN</th>
                <th class="border border-white px-3 py-2 text-white">FAKULTAS</th>
            </tr>
    
            <?php while( $row = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td class="border border-white px-3 py-2 text-white"><?= $nomor += 1 ?></td>
                    <td class="border border-white px-3 py-2 text-white">
                        <a class="rounded-xs bg-blue-400 text-center text-xs p-1 hover:bg-blue-600 hover:scale-120 active:scale-95 transition-all duration-200" href="">Ubah</a>
                        <a class="rounded-xs bg-red-400 text-center text-xs p-1 hover:bg-red-600 hover:scale-125 active:scale-95 transition-all duration-200" href="">Hapus</a>
                    </td>
                    <td class="border border-white px-3 py-2 text-white"><?= $row->nim ?></td>
                    <td class="border border-white px-3 py-2 text-white"><?= $row->nama ?></td>
                    <td class="border border-white px-3 py-2 text-white"><?= $row->jurusan ?></td>
                    <td class="border border-white px-3 py-2 text-white"><?= $row->fakultas ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="tambah.php" class=" text-white hover:text-blue-600 text-center">Tambah Data Mahasiswa</a>
    </div>
</body>
</html>