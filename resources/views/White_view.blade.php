<html>
<head>
    <title>Tabel Data</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Perhatikan: tailwind harus dipanggil sebagai script -->
</head>
<body class="bg-gray-100 p-8">

    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Data Pasar</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nama</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Harga</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Gambar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach($data as $dataku)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-800">{{ $dataku['id'] }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $dataku['nama'] }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $dataku['harga'] }}</td>
                        <td class="px-6 py-4">
                            @if($dataku['id'] == 1)
                                <img src="/image/gambar1.jpg" alt="{{ $dataku['nama'] }}" class="w-24 h-auto rounded">
                            @elseif($dataku['id'] == 2)
                                <img src="/image/gambar2.jpg" alt="{{ $dataku['nama'] }}" class="w-24 h-auto rounded">
                            @else
                                <span class="text-gray-500 italic">Tidak ada gambar</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
