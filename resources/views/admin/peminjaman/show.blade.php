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
                    <th class="text-center">No</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama</th>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <th class="text-center">NIK</th>
                    @endif
                    @endauth
                    <th class="text-center">Keperluan Pinjam</th>
                    <th class="text-center">Mulai</th>
                    <th class="text-center">Selesai</th>
                    <th class="text-center">Komentar</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Armada</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">{{ $peminjaman->id }}</td>
                    <td class="text-center">{{ $peminjaman->nama_peminjam }}</td>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <td class="text-center">{{ $peminjaman->ktp_peminjam }}</td>
                    @endif
                    @endauth
                    <td class="text-center">{{ $peminjaman->keperluan_pinjam }}</td>
                    <td class="text-center">{{ $peminjaman->mulai }}</td>
                    <td class="text-center">{{ $peminjaman->selesai }}</td>
                    <td class="text-center">{{ $peminjaman->komentar_peminjam }}</td>
                    <td class="text-center">
                    ````@if ($peminjaman->status_pinjam == 'Berhasil diajukan')
                            <span class="badge bg-success">Berhasil diajukan</span>
                        @elseif ($peminjaman->status_pinjam == 'Sedang diajukan')
                            <span class="badge bg-warning text-dark">Sedang diajukan</span>
                        @else
                            {{ $peminjaman->status_pinjam }}
                        @endif
                    </td>
                    <td class="text-center">{{ $peminjaman->armada->merk }}</td>
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