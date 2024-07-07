<x-layout>
    <x-slot name="page_name">Peminjaman</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Peminjaman</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Peminjaman</h5>
              <p>Kelola dan pantau semua transaksi peminjaman dengan mudah. Pastikan setiap pemesanan berjalan lancar.
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Keperluan Pinjam</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Armada id</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamans as $peminjaman)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjaman->nama_peminjam }}</td>
                    <td>{{ $peminjaman->ktp_peminjam }}</td>
                    <td>{{ $peminjaman->keperluan_pinjam }}</td>
                    <td>{{ $peminjaman->mulai }}</td>
                    <td>{{ $peminjaman->selesai }}</td>
                    <td>{{ $peminjaman->komentar_peminjam }}</td>
                    <td>{{ $peminjaman->status_pinjam }}</td>
                    <td>{{ $peminjaman->nama_peminjam }}</td>
                    <th>{{ $peminjaman->armada_id }}</th>
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