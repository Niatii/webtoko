<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
<section class="bg-white min-h-screen">
    <!-- simpan -->
  <div class="py-8 px-4 mx-auto max-w-2xl bg-sky-200 my-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900">INPUT PRODUK</h2>
      <form method="POST" action="{{ route('produk.simpan') }}">
      @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Produk" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="deskripsii" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                  <textarea id="deskripsi" name="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Deskripsi"></textarea>
              </div>
              <div class="w-full">
                  <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                  <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Harga" required="">
              </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-sky-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
              Simpan
          </button>
      </form>
  </div>

  <!-- delete -->
  <div class="relative overflow-x-auto shadow-md px-12  pb-12">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-sky-500 ">
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
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr class="bg-sky-100 border-b hover:bg-sky-200">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item }}
                    </td>
                    <td class="px-6 py-4">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4">{{ $harga[$index] }}</td>
                    <td class="px-6 py-4">
                        <form action="{{ route('produk.delete', $id[$index] )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are tou sure you want to delete {{ $item }}?')" 
                            class="bg-sky-600 py-1 px-2 text-white rounded-lg hover:bg-blue-700 active:bg-blue-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>



    
    

    <!-- <div class="ml-10 mt-20">
        <table class=" table-auto">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $desc[$index] }}</td>
                    <td>{{ $harga[$index] }}</td>
                    <td>
                        <form action="{{ route('produk.delete', $id[$index] )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are tou sure you want to delete {{ $item }}?')" >Delete</button>
                        </form>
                    </td>
                </tr>            
                @endforeach
            </tbody>
        </table>
    </div> -->
    
    
</body>
</html>



