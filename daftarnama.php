<?php


$dataPesertadidik = [
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "083893164726",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "081234567890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"

    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "081234567890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "081234567890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
    [
        "namalengkap" => "Haekal Figo Anwar",
        "kelas" => "X RPL 2",
        "alamat" => "Jl. Duriselatan",
        "nisn" => "1234567890",
        "nomor_whatsapp" => "08123765890",
        "hobi" => "Futsal",
        "cita_cita" => "Pemain bola profesional"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Lengkap</th>
            <th>Kelas </th>
            <th>Alamat</th>
            <th>Nisn</th>
            <th>Nomor Whatsapp</th>
            <th>Hobi</th>
            <th>Cita_Cita</th>
        </tr>
        <?php foreach ($dataPesertadidik as $data) : ?>
            <tr>
                <td><?= $data["namalengkap"] ?></td>
                <td><?= $data["kelas"] ?></td>
                <td><?= $data["alamat"] ?></td>
                <td><?= $data["nisn"] ?></td>
                <td><?= $data["nomor_whatsapp"] ?></td>
                <td><?= $data["hobi"] ?></td>
                <td><?= $data["cita_cita"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>