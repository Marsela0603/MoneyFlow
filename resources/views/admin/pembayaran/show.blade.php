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
                    <th>No</th>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Jumlah Bayar</th>
                    <th>Nama Peminjam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->tanggal }}</td>
                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                    <td>{{ $pembayaran->peminjaman->nama_peminjam }}</td>
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