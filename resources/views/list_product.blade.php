@extends('layout.list')

@section('title', 'Ini Adalah Judul Pada Meta')
@section('content')
<div class="overflow-x-auto">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr class="bg-base-200">
                <th>{{ $post['id'] }}</th>
                <td>{{ $post['product'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection