@extends('template.layout')

@section('container')

<!-- Running-Text -->
<section class="running-text">
  <div class="container">
    <h1 class="text-center fw-600">Dae Pharmacy</h1>
    <p>
      Situs Pengelolaan Obat by <span class="typed-text"></span>
      <span class="cursor">&nbsp;</span>
    </p>
  </div>
</section>

<!-- Chart -->
<div class="row">
  <div class="col-lg-8">
    <div class="chart">
      <div class="card shadow-lg rounded-5 bg-transparent text-light fw-bolder fs-4">
        <div class="card-header ps-4">
          Charts
        </div>
        <div class="card-body">
          <canvas class="myChart" id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>


  <!-- Account info -->
  <div class="container col-lg-4 text-white d-flex justify-content-between flex-column align-items-center mb-lg">
    <div class="card shadow-lg rounded-5 bg-transparent text-light fw-bolder fs-4 w-100 overflow-hidden mt-lg">
      <div class="card-header border-0 px-4">
        Account Info
      </div>
      <div class="card-body px-4">
        <h6>You're Logged in as <span class="fw-bold">{{ auth()->user()->username }}</span></h6>
        <div class="email pt-3 fw-600">
          <h6 class="fw-600">Email</h6>
          <h6>{{ auth()->user()->email }}</h6>
        </div>
      </div>
    </div>
    <div class="card shadow-lg rounded-5 bg-transparent text-light fw-bolder fs-4 w-100 mt-lg">
      <div class="card-header border-0 px-4">
        Recapitulation
      </div>
      <div class="card-body px-4">
        <table class="table text-white table-borderless fs-7">
          <tr>
            <td>This Month</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="fw-600">
            <td>Product Sold</td>
            <td>:</td>
            <td>2.567 pcs</td>
          </tr>
          <tr class="fw-600">
            <td>Most Sold Product</td>
            <td>:</td>
            <td>Panadol</td>
          </tr>
        </table>
      </div>
    </div>
  </div>


</div>

@endsection