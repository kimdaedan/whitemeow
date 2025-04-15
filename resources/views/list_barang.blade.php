<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Barang</title>
    <script src="/style/tailwindcss3.4.1.js"></script> <!-- Panggil dari public/style -->
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">List Barang</h1>
        <p class="text-gray-700"><span class="font-semibold">Kode Barang:</span> {{ $id }}</p>
        <p class="text-gray-700"><span class="font-semibold">Nama Barang:</span> {{ $nama }}</p>
    </div>

</body>
</html>
