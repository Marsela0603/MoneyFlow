@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Armada</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Armada</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Armada</h5>
              <p>Kami memiliki berbagai armada berkualitas yang siap untuk disewakan. Setiap armada kami dijaga dengan baik untuk memastikan kenyamanan dan keselamatan Anda.
              </p>
              @if (session('pesan'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <a href="{{ url('/dashboard/armada/create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Kendaraan</th>
                    <th class="text-center">Jenis Kendaraan</th>
                    <th class="text-center">Kapasitas Kursi</th>
                    <th class="text-center">Biaya</th>
                    <th class="text-center">Rating</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($armadas as $armada)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $armada->merk }}</td>
                    <td class="text-center">{{ $armada->jenis_kendaraan->nama }}</td>
                    <td class="text-center">{{ $armada->kapasitas_kursi }}</td>
                    <td class="text-center">{{ $armada->biaya }}</td>
                    <td class="text-center">{{ $armada->rating }}</td>
                    <td class="text-center">
                        @if ($armada->gambar)
                        <img src="{{ Storage::url($armada->gambar) }}" width="150px" alt="Gambar Armada">
                        @else
                        <span>Gambar belum tersedia</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ url('/dashboard/armada/show', $armada->id) }}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                            @auth
                            @if (Auth::user()->role == User::ROLE_ADMIN)
                            <a href="{{ url('/dashboard/armada/edit', $armada->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                            <form action="{{ url('dashboard/armada/destroy', $armada->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $armada->merk }}?')">
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