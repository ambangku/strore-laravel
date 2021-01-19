@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Admin Dashboard</h2>
      <p class="dashboard-subtitle">This is Store Administrator Panel</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Costumer</div>
              <div class="dashboard-card-subtitle">{{ $customer }}</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Revenue</div>
              <div class="dashboard-card-subtitle">${{ $revenue }}</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Transactions</div>
              <div class="dashboard-card-subtitle">{{ $transaction }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection