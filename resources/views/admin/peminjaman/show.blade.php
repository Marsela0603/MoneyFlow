@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Peminjaman</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active"><a href="/dashboard/peminjaman">Peminjaman</a></li>
    <li class="breadcrumb-item active">{{ $peminjaman->nama_peminjam }}</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Peminjaman atas nama {{ $peminjaman->nama_peminjam }}</h5>
              <p>Detail peminjaman
              </p>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <th>NIK</th>
                    @endif
                    @endauth
                    <th>Keperluan Pinjam</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Armada</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $peminjaman->id }}</td>
                    <td>{{ $peminjaman->nama_peminjam }}</td>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <td>{{ $peminjaman->ktp_peminjam }}</td>
                    @endif
                    @endauth
                    <td>{{ $peminjaman->keperluan_pinjam }}</td>
                    <td>{{ $peminjaman->mulai }}</td>
                    <td>{{ $peminjaman->selesai }}</td>
                    <td>{{ $peminjaman->komentar_peminjam }}</td>
                    <td>{{ $peminjaman->status_pinjam }}</td>
                    <td>{{ $peminjaman->armada->merk }}</td>
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