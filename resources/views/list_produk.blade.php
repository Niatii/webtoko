<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
<section class="bg-white dark:bg-gray-900 h-screen">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">INPUT PRODUK</h2>
      <form method="POST" action="{{ route('produk.simpan') }}">
      @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Produk" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="deskripsii" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                  <textarea id="deskripsi" name="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi"></textarea>
              </div>
              <div class="w-full">
                  <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                  <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga" required="">
              </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Simpan
          </button>
      </form>
  </div>
</section>



    <!-- <div><h1>Input Produk</h1></div>
    <form method="POST" action="{{ route('produk.simpan') }}">
     @csrf
        <table class="table">
            <tr>
                <td>Nama:</td>
                <td colspan="3"><input type="text" class="form-control" id="nama" name="nama" ></td>
            </tr>
            <tr>
                <td>Deskripsi:</td>
                <td colspan="3"><textarea class="form-contol" name="deskripsi" id="deskripsi"></textarea></td>
            </tr>
            <tr>
                <td>Harga:</td>
                <td><input type="number" class="form-control" id="harga" name="harga" ></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary" >Simpan</button>
    </form> -->




<!-- tailwind -->
    <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
    </div> -->
    

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



