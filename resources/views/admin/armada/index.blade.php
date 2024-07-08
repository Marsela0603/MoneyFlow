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
              <a href="{{ url('/dashboard/armada/create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Kapasitas Kursi</th>
                    <th>Biaya</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($armadas as $armada)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $armada->merk }}</td>
                    <td>{{ $armada->jenis_kendaraan->nama }}</td>
                    <td>{{ $armada->kapasitas_kursi }}</td>
                    <td>{{ $armada->biaya }}</td>
                    <td>{{ $armada->rating }}</td>
                    <td>
                    <a href="{{ url('/dashboard/armada/show', $armada->id) }}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                    <a href="{{ url('/dashboard/armada/edit', $armada->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                    <form action="{{ url('dashboard/armada/destroy', $armada->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $armada->merk }}?')">
                        <i class="ri-delete-bin-5-line"></i>
                      </button>
                    </form>
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