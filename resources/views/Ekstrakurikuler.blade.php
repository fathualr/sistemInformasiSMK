<html>
    <head>
        <title>Daftar Ekstrakurikuler</title>
    </head>
    <body>
        <h1>Daftar Ekstrakurikuler</h1>
        <ul>
            @foreach($ekstrakurikuler as $ekstrakurikuler)
                <li>
                    <h2>{{ $ekstrakurikuler['nama'] }}</h2>
                    <p>{{ $ekstrakurikuler['deskripsi'] }}</p>
                    <img src="{{ asset('images/' . $ekstrakurikuler['gambar']) }}" alt="{{ $ekstrakurikuler['nama'] }}">
                </li>
            @endforeach
        </ul>
    </body>
</html>
