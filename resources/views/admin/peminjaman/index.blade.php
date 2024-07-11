@use(App\Models\User)
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
              @if (session('pesan'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <a href="{{ url('/dashboard/peminjaman/create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Armada</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($peminjamans as $peminjaman)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjaman->nama_peminjam }}</td>
                    <td>{{ $peminjaman->mulai }}</td>
                    <td>{{ $peminjaman->selesai }}</td>
                    <td>{{ $peminjaman->komentar_peminjam }}</td>
                    <td>{{ $peminjaman->status_pinjam }}</td>
                    <td>{{ $peminjaman->armada->merk }}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                    <a href="{{ url('/dashboard/peminjaman/show', $peminjaman->id) }}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <a href="{{ url('/dashboard/peminjaman/edit', $peminjaman->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                    <form action="{{ url('dashboard/peminjaman/destroy', $peminjaman->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $peminjaman->nama_peminjaman }}?')">
                        <i class="ri-delete-bin-5-line"></i>
                      </button>
                    </form>
                    @endif
                    @endauth
                    </div>
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