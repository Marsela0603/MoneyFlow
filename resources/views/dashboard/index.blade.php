@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Dashboard</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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

                    <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'today']) }}">Today</a></li>
                  <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'month']) }}">This Month</a></li>
                  <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'year']) }}">This Year</a></li>
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

                  <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'today']) }}">Today</a></li>
                  <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'month']) }}">This Month</a></li>
                  <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'year']) }}">This Year</a></li>

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
    <span class="{{ $expenseGrowth >= 0 ? 'text-success' : 'text-danger' }} small pt-1 fw-bold">
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
    <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'week']) }}">This Week</a></li>
    <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'month']) }}">This Month</a></li>
    <li><a class="dropdown-item" href="{{ route('dashboard', ['range' => 'year']) }}">This Year</a></li>
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

      

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

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

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

    </x-slot><!-- End page content slot -->
</x-layout><!-- End layout component -->
