<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Produk
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item }}
                    </td>
                    <td class="px-6 py-4">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4">{{ $harga[$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

    <!-- <div class="ml-10 mt-20">
        <table class=" table-auto">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $desc[$index] }}</td>
                    <td>{{ $harga[$index] }}</td>
                </tr>            
                @endforeach
            </tbody>
        </table>
    </div> -->

    
</body>
</html>



