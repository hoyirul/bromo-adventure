<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVOICE {{ $transaksi->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <!--
      Include Tailwind JIT CDN compiler
      More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
      -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!-- Specify a custom Tailwind configuration -->
    <script type="tailwind-config">
      {
        theme: {
          extend: {
            colors: {
              gray: colors.blueGray,
              pink: colors.fuchsia,  
            }
          }
        }
      }
    </script>
    <!-- Snippet -->
    <section class="flex flex-col justify-center antialiased bg-gray-200 text-gray-600 min-h-screen p-4">
      <div class="h-full">
        <!-- Card -->
        <div class="max-w-[360px] mx-auto">
          <div class="bg-white shadow-lg rounded-lg mt-9">
            <!-- Card header -->
            <header class="text-center px-5 pb-3">
              <!-- Avatar -->
              <div class="p-2"></div>
              <!-- Card name -->
              <h3 class="text-xl font-bold text-gray-900">Invoice from Bromo Adventure.</h3>
              <div class="text-sm font-medium text-gray-500">Invoice #{{ $transaksi->id }}</div>
            </header>
            <!-- Card body -->
            <div class="bg-white text-center px-3 py-6">
              <div class="text-sm text-left mb-2"><strong class="font-semibold">Tanggal Pesan - </strong> {{ $transaksi->tanggal_pesan }}</div>
              <table class="table table-striped table-bordered text-sm">
                <thead>
                  <tr>
                    <td class="text-left">Paket</td>
                    {{-- <td class="text-left">:</td> --}}
                    <td class="text-left">{{ $transaksi->paket->tipe->tipe }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Nama</td>
                    {{-- <td class="text-left">:</td> --}}
                    <td class="text-left">{{ $transaksi->nama_pemesan }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">No. HP</td>
                    {{-- <td class="text-left">:</td> --}}
                    <td class="text-left">{{ $transaksi->nomor_hp }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Trip</td>
                    {{-- <td class="text-left">:</td> --}}
                    <td class="text-left">{{ $transaksi->tanggal_tour }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Status</td>
                    {{-- <td class="text-left">:</td> --}}
                    <td class="text-left">
                      @if ($transaksi->status == 'unpaid')
                        <button style="font-size: 9pt" type="button" class="btn btn-sm btn-danger w-100">Unpaid</button>
                      @else
                        <button style="font-size: 9pt" type="button" class="btn btn-sm btn-success w-100">Paid</button>
                      @endif
                    </td>
                  </tr>
                </thead>
              </table>
              <p class="text-sm text-left">
                Keterangan : {{ $transaksi->keterangan }}
              </p>
            </div>

            <header class="text-center px-3 pb-3">
              <!-- Avatar -->
              <div class="p-2"></div>
              <!-- Card name -->
              <div style="font-size: 8pt" class="text-justify font-medium text-gray-500"><span class="text-danger">Note : </span> Silahkan hubungi nomor 08767655456 untuk mengkonfirmasi pemesanan! silahkan salin link <a class="text-primary" href="#">http://localhost:8000/inv/{{ $transaksi->id }}/status</a> untuk melihat status pembayaran.</div>
            </header>
          </div>
        </div>
      </div>
    </section>
    <!-- More components -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>