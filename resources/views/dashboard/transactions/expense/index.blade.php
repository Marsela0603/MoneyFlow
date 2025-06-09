@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Expense Transactions</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Expense</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Expense List</h5>

              @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              <a href="{{ route('transactions.expense.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add Expense</a>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>description</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transactions as $transaction)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ \Carbon\Carbon::parse($transaction->date)->translatedFormat('d F Y') }}</td>
                    <td>{{ $transaction->category->name }}</td>
                    <td>{{ $transaction->description ?? '-' }}</td>
                    <td>Rp {{ number_format($transaction->amount, 2, ',', '.') }}</td>
                    <td>
                      <div class="btn-group">
                        <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                        <form action="#" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>
