<x-layout>
    <x-slot name="page_name">Armada</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active"><a href="/dashboard/armada">Armada</a></li>
    <li class="breadcrumb-item active">{{ $armada->merk }}</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $armada->merk }}</h5>
              <p>Detail armada
              </p>

               <!-- Table with stripped rows -->
               <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Kendaraan</th>
                    <th class="text-center">No. Polisi</th>
                    <th class="text-center">Tahun Beli</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Jenis Kendaraan</th>
                    <th class="text-center">Kapasitas Kursi</th>
                    <th class="text-center">Biaya</th>
                    <th class="text-center">Rating</th>
                    <th class="text-center">Gambar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">{{ $armada->id }}</td>
                    <td class="text-center">{{ $armada->merk }}</td>
                    <td class="text-center">{{ $armada->nopol }}</td>
                    <td class="text-center">{{ $armada->thn_beli }}</td>
                    <td>{{ $armada->deskripsi }}</td>
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