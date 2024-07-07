<x-layout>
    <x-slot name="page_name">Pembayaran</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Pembayaran</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Pembayaran</h5>
              <p>Lihat semua transaksi pembayaran yang telah dilakukan untuk memastikan transparansi dan akuntabilitas
              </p>
              <a href="/dashboard/pembayaran/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Bayar</th>
                    <th>Peminjaman_id</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($pembayarans as $pembayaran)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pembayaran->tanggal }}</td>
                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                    <td>{{ $pembayaran->peminjaman_id }}</td>
                    <td>
                        <a href="#" class="btn btn-info">Lihat</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                @endforeach
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