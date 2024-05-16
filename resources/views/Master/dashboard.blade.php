@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    {{-- <div class="main-title">
      <p class="font-weight-bold">DASHBOARD</p>
    </div> --}}

    <div class="main-cards">
      <div class="card-bg-yellow">
        <span class="text-primary font-weight-bold">249</span>
        <div class="card-inner">
          <p class="text-primary">Total User Register</p>
          <div class="icon-wrapper">
                <span class="material-icons-outlined text-blue">person</span>
          </div>
        </div>
      </div>

      <div class="card-bg-blue">
        <span class="text-primary font-weight-bold">83</span>
        <div class="card-inner">
          <p class="text-primary">Total Company</p>
            <div class="icon-wrapper">
                <span class="material-icons-outlined text-blue">account_balance</span>
            </div>
        </div>
      </div>

      <div class="card-bg-green">
        <span class="text-primary font-weight-bold">79</span>
        <div class="card-inner">
          <p class="text-primary">Total Permission</p>
            <div class="icon-wrapper">
                <span class="material-icons-outlined text-blue">add</span>
            </div>
        </div>
      </div>

      <div class="card-bg-red">
        <span class="text-primary font-weight-bold">56</span>
        <div class="card-inner">
          <p class="text-primary">Total expert</p>
            <div class="icon-wrapper">
                <span class="material-icons-outlined text-blue">supervisor_account</span>
            </div>
        </div>
      </div>
    </div>

    {{-- <div class="charts">
      <div class="charts-card">
        <p class="chart-title">Top 5 Products</p>
        <div id="bar-chart"></div>
      </div>

      <div class="charts-card">
        <p class="chart-title">Purchase and Sales Orders</p>
        <div id="area-chart"></div>
      </div>
    </div> --}}
@endsection
