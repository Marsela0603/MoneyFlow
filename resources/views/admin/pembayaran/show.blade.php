<x-layout>
    <x-slot name="page_name">Pembayaran</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active"><a href="/dashboard/pembayaran">Pembayaran</a></li>
    <li class="breadcrumb-item active">Pembayaran atas nama {{ $pembayaran->peminjaman->nama_peminjam }}</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembayaran atas nama {{ $pembayaran->peminjaman->nama_peminjam }}</h5>
              <p>Detail pembayaran customer
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Jumlah Bayar</th>
                    <th class="text-center">Nama Peminjam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">{{ $pembayaran->id }}</td>
                    <td class="text-center">{{ $pembayaran->tanggal }}</td>
                    <td class="text-center">{{ $pembayaran->jumlah_bayar }}</td>
                    <td class="text-center">{{ $pembayaran->peminjaman->nama_peminjam }}</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>