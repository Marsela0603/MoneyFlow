<x-layout>
    <x-slot name="page_name">Pembayaran</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active"><a href="/dashboard/jenis_kendaraan">Pembayaran</a></li>
    <li class="breadcrumb-item active">{{ $pembayaran->tanggal }}</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $pembayaran->tanggal }}</h5>
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
                    <th>Peminjaman_id</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->tanggal }}</td>
                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                    <td>{{ $pembayaran->peminjaman_id }}</td>
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