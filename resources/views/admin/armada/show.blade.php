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
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Kendaraan</th>
                    <th>No. Polisi</th>
                    <th>Tahun Beli</th>
                    <th>Deskripsi</th>
                    <th>Jenis Kendaraan</th>
                    <th>Kapasitas Kursi</th>
                    <th>Biaya</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $armada->id }}</td>
                    <td>{{ $armada->merk }}</td>
                    <td>{{ $armada->nopol }}</td>
                    <td>{{ $armada->thn_beli }}</td>
                    <td>{{ $armada->deskripsi }}</td>
                    <td>{{ $armada->jenis_kendaraan->nama }}</td>
                    <td>{{ $armada->kapasitas_kursi }}</td>
                    <td>{{ $armada->biaya }}</td>
                    <td>{{ $armada->rating }}</td>
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