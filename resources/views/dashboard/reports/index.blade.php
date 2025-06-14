@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Reports</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Financial Reports</li>
    </x-slot>

    <x-slot name="page_content">

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Transactions <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $todayTransactions }}</h6>
@if (!is_null($transactionGrowth))
    <span class="{{ $transactionGrowth >= 0 ? 'text-success' : 'text-danger' }} small pt-1 fw-bold">
        {{ round($transactionGrowth) }}%
    </span>
    <span class="text-muted small pt-2 ps-1">
        {{ $transactionGrowth >= 0 ? 'increase' : 'decrease' }}
    </span>
@endif

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'today']) }}">Today</a></li>
                  <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'month']) }}">This Month</a></li>
                  <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'year']) }}">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Income<span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp {{ number_format($thisMonthIncome, 0, ',', '.') }}</h6>
@if (!is_null($incomeGrowth))
    <span class="{{ $incomeGrowth >= 0 ? 'text-success' : 'text-danger' }} small pt-1 fw-bold">
        {{ round($incomeGrowth) }}%
    </span>
    <span class="text-muted small pt-2 ps-1">
        {{ $incomeGrowth >= 0 ? 'increase' : 'decrease' }}
    </span>
@endif

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <a class="dropdown-item" href="{{ route('reports.index', ['range' => 'week']) }}">This Week</a>
                    <a class="dropdown-item" href="{{ route('reports.index', ['range' => 'month']) }}">This Month</a>
                    <a class="dropdown-item" href="{{ route('reports.index', ['range' => 'year']) }}">This Year</a>


                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Expense<span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp {{ number_format($thisMonthExpense, 0, ',', '.') }}</h6>
@if (!is_null($expenseGrowth))
    <span class="{{ $expenseGrowth >= 0 ? 'text-danger' : 'text-success' }} small pt-1 fw-bold">
        {{ round($expenseGrowth) }}%
    </span>
    <span class="text-muted small pt-2 ps-1">
        {{ $expenseGrowth >= 0 ? 'increase' : 'decrease' }}
    </span>
@endif


                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>| {{ ucfirst($range) }}</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                 <div class="filter">
  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <li class="dropdown-header text-start">
      <h6>Filter</h6>
    </li>
    <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'week']) }}">This Week</a></li>
    <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'month']) }}">This Month</a></li>
    <li><a class="dropdown-item" href="{{ route('reports.index', ['range' => 'year']) }}">This Year</a></li>
  </ul>
</div>

<div class="card-body">
  
  <div id="reportsChart"></div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#reportsChart"), {
        series: [
          { name: 'Total Transactions', data: @json($transactionSeries) },
          { name: 'Income', data: @json($incomeSeries) },
          { name: 'Expense', data: @json($expenseSeries) }
        ],
        chart: { height: 350, type: 'area', toolbar: { show: false } },
        xaxis: { categories: @json($chartLabels) },
        colors: ['#4154f1', '#2eca6a', '#ff771d'],
        stroke: { curve: 'smooth', width: 2 },
        fill: {
          type: "gradient",
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.3,
            opacityTo: 0.4,
            stops: [0, 90, 100]
          }
        },
        dataLabels: { enabled: false },
        markers: { size: 4 },
        tooltip: { x: { show: true } }
      }).render();
    });
  </script>
</div>


                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

      

          </div>
        </div><!-- End Left side columns -->

<div class="row">
  <div class="col-md-6">
    <div class="card p-3">
      <h5>Report Summary  ({{ ucfirst($range) }})</h5>
      <p><strong>Total Income:</strong> Rp {{ number_format($incomeSum, 0, ',', '.') }}</p>
      <p><strong>Total Expense:</strong> Rp {{ number_format($expenseSum, 0, ',', '.') }}</p>
    </div>
  </div>

<div class="col-md-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Expence Category</h5>

      @foreach ($categoryExpenses as $cat)
        <div class="d-flex justify-content-between">
          <span>{{ $cat['name'] }}</span>
          <span>Rp {{ number_format($cat['amount'], 0, ',', '.') }} ({{ $cat['percentage'] }}%)</span>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $cat['percentage'] }}%;" aria-valuenow="{{ $cat['percentage'] }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      @endforeach

    </div>
  </div>
</div>


      </div>
    </section>

    </x-slot><!-- End page content slot -->
</x-layout><!-- End layout component -->
