<html>

<h1>096</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku ['id'] }}</td>
            <td> {{ $dataku ['nama'] }}</td>
            <td> {{ $dataku ['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</html>