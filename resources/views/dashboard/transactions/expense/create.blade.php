<x-layout>
    <x-slot name="page_name">Add Expense</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transactions.expense.index') }}">Expense</a></li>
        <li class="breadcrumb-item active">Add</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Expense</h5>

              <form action="{{ route('transactions.expense.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="mb-3">
                  <label for="category_id" class="form-label">Category</label>
                  <select class="form-select" id="category_id" name="category_id" required>
                    <option selected disabled>Choose category</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="amount" class="form-label">Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" required>
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description (Optional)</label>
                  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                <a href="{{ route('transactions.expense.index') }}" class="btn btn-secondary">Cancel</a>
              </form>

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>