@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Dashboard</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section dashboard">
      <div class="row">

        <!-- Summary Cards -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Total Income -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Income</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-down-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp {{ number_format($totalIncome, 0, ',', '.') }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Expense -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Expense</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-up-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp {{ number_format($totalExpense, 0, ',', '.') }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Current Balance -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Current Balance</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-wallet2"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp {{ number_format($currentBalance, 0, ',', '.') }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Chart & Notifications -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-3">
              <h5 class="card-title">Income vs Expense Composition</h5>
              <div id="pieChart"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [{{ $totalExpense }}, {{ $totalIncome }}],
                    chart: {
                      type: 'pie',
                      height: 300
                    },
                    labels: ['Expense', 'Income'],
                    colors: ['#ff5b5b', '#28a745']
                  }).render();
                });
              </script>
            </div>
          </div>
        </div>

        

        <!-- Recent Transactions -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <h5 class="card-title">Recent Transactions</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
  @foreach ($recentTransactions as $index => $trx)
  <tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $trx->category->name ?? '-' }}</td> {{-- Replace with category name --}}
    <td>Rp {{ number_format($trx->amount, 0, ',', '.') }}</td>
    <td>{{ \Carbon\Carbon::parse($trx->date)->format('d M Y') }}</td>
  </tr>
  @endforeach
</tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-12">
          <div class="card">
            <div class="card-body pt-3">
              <h5 class="card-title">Quick Actions</h5>
              <a href="{{ route('transactions.income.create') }}" class="btn btn-success me-2">+ Add Income</a>
              <a href="{{ route('transactions.expense.create') }}" class="btn btn-danger me-2">+ Add Expense</a>
              <a href="{{ route('dashboard.categories.create') }}" class="btn btn-secondary me-2">+ Add Category</a>
              <a href="{{ route('reports.index') }}" class="btn btn-success">📊 Generate Report</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    </x-slot>
</x-layout>
