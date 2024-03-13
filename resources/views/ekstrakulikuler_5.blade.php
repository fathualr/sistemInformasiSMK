<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ekstrakurikuler</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.js">
</head>
<body class="bg-red-100">
<table>
    <thead>
        <tr>
            <th class="my-9 px-9 text-x1 font-serif">Nama</th>
            <th class="my-9 px-9 text-x1 font-serif">Deskripsi</th>
            <th class="my-9 px-9 text-x1 font-serif">Gambar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ekstrakulikuler_ as $ekstrakulikuler)
<tr>
    <td class="my-9 px-9 text-x1 font-serif">{{ $ekstrakulikuler['nama'] }}</td>
    <td class="my-9 px-9 text-x1 font-serif">{{ $ekstrakulikuler['deskripsi'] }}</td>
    <td class="my-9 px-9 text-x1 font-serif"><img src="{{ asset($ekstrakulikuler['gambar']) }}" alt="{{ $ekstrakulikuler['nama'] }}"></td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
