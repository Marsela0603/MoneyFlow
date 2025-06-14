@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Add Category</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">Category</a></li>
        <li class="breadcrumb-item active">Add Category</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Category Form</h5>

              <form action="{{ route('dashboard.categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Category Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
                  @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="type" class="form-label">Category Type</label>
                  <select name="type" id="type" class="form-select @error('type') is-invalid @enderror" required>
                    <option value="" disabled selected>-- Select Category Type --</option>
                    <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>Income</option>
                    <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>Expense</option>
                  </select>
                  @error('type')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                <a href="{{ route('dashboard.categories.index') }}" class="btn btn-secondary">Cancel</a>
              </form>

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>
