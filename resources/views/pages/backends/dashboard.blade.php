@extends('layout.backends.home')
@section('page')
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="fas fa-shopping-cart"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Today Order</h4>
						</div>
						<div class="card-body">
							0
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="fas fa-shopping-cart"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Today Complete Order</h4>
						</div>
						<div class="card-body">
							6
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-shopping-cart"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Earning</h4>
						</div>
						<div class="card-body">
							$600817.98
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="fas fa-shopping-cart"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Product Sale</h4>
						</div>
						<div class="card-body">
							23
						</div>
					</div>
				</div>
			</div>                  
		</div>
	</section>
</div>
@endsection
