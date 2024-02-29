<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <html>

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
</div>
