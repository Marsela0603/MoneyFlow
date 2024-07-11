<x-layout>
    <x-slot name="page_name">Jenis Kendaraan</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active"><a href="/dashboard/jenis_kendaraan">Jenis Kendaraan</a></li>
    <li class="breadcrumb-item active">{{ $jenis_kendaraan->nama }}</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $jenis_kendaraan->nama }}</h5>
              <p>Detail jenis kendaraan
              </p>

              <!-- Table with stripped rows -->
              <table class="table datable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Deskripsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">{{ $jenis_kendaraan->id }}</td>
                    <td class="text-center">{{ $jenis_kendaraan->nama }}</td>
                    <td class="text-center">{{ $jenis_kendaraan->deskripsi }}</td>
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