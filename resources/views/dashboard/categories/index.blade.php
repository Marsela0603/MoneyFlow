@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Category</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Category</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category List</h5>
              <p>These categories are used to group your transactions based on their type and purpose.</p>

              @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @auth
              <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add Category</a>
              @endauth

              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($categories as $category)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $category->name }}</td>
                    <td class="text-center">
                      @if ($category->type === 'income')
                        <span class="badge bg-success">Income</span>
                      @else
                        <span class="badge bg-danger">Expenses</span>
                      @endif
                    </td>
                    <td class="text-center">
                      <div class="btn-group" role="group" aria-label="Aksi">
                        <a href="{{ route('dashboard.categories.edit', $category->id) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                        <form action="{{ route('dashboard.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus kategori {{ $category->name }}?')">
                            <i class="ri-delete-bin-5-line"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="4" class="text-center">Belum ada kategori.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>
