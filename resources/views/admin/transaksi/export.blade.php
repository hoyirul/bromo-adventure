<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Export PDF</title>
  <style>
    body{
      font-family: sans-serif;
    }
    table{
      border-collapse: collapse;
      font-family: sans-serif;
      font-size: 10pt
    }
  </style>
</head>
<body>
  <h4>Laporan Transaksi</h4>
  <table border="1" cellpadding="5">
    <thead>
      <tr>
        <th scope="col">#ID Transaksi</th>
        <th scope="col">Tipe Paket</th>
        <th scope="col">Pemesan</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Tanggal Pesan</th>
        <th scope="col">Tanggal Bayar</th>
        <th scope="col">Tanggal Tour</th>
        {{-- <th scope="col">Total</th> --}}
        <th scope="col">Dibuat</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tables as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->paket->tipe->tipe }}</td>
          <td>{{ $item->nama_pemesan }}</td>
          <td>{{ $item->nomor_hp }}</td>
          <td>{{ $item->keterangan }}</td>
          <td>{{ $item->tanggal_pesan }}</td>
          <td>
            @if ($item->status == 'unpaid')
              <a href="/admin/transaksi/{{ $item->id }}/bayar" class="btn btn-primary text-white btn-sm">Bayar</a>
            @else
              <span class="btn btn-success text-white btn-sm">{{ $item->tanggal_bayar }}</span>
            @endif
          </td>
          <td>{{ $item->tanggal_tour }}</td>
          {{-- <td>{{ $item->total }}</td> --}}
          <td>{{ substr($item->created_at, 0, 10) }}</td>
          <td>
            @if ($item->status == 'unpaid')
              <span class="btn btn-danger text-white btn-sm">{{ $item->status }}</span>
            @else
              <span class="btn btn-success text-white btn-sm">{{ $item->status }}</span>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>