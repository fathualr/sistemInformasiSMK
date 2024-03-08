<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="font-bold text-2xl h-64 text-center py-20">
        <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
        Selamat datang di Home {{$nama}}<br>
        Anda adalah seorang {{$pekerjaan}}

    </div>
    <h1 class="text-center text-xl font-bold">MY GALERY</h1>
    <div class="grid justify-items-center">
        <div class="flex my-10 gap-3">
            <img src="{{ asset("images/dessert.jpg") }}" alt=""
                class="w-64 p-4 rounded-md border-solid border-2 border-indigo-600">
            <img src=" {{ asset("images/nasa.jpg") }}" alt=""
                class="w-64 p-4 rounded-md border-solid border-2 border-indigo-600">
        </div>
    </div>
</body>

</html>