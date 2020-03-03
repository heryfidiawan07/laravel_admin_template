@extends('layouts.app-guest')

@section('title')
INDEX
@endsection

@section('content')
<section class="section">
	<div class="section-body">
		
		<div class="row">
			<div class="col-md-8 p-1">
				<h2 class="section-title">Functionality Card</h2>
				@for($i=0; $i<5; $i++)
					<div class="card card-primary mb-2">
						<div class="card-body">
							<a href="#" class="text-primary">
								<h5>The title lorem ipsum dolor sit amet</h5>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta architecto ipsa corrupti, sapiente possimus esse, corporis eius facere optio quasi facilis aliquid laudantium voluptatum debitis fugiat molestias. Velit, aut est?</p>
							<span><i class="far fa-heart"></i> 100</span>
							<span class="ml-3"><i class="far fa-comment"></i> 100</span>
						</div>
					</div>
				@endfor
			</div>
			<div class="col-md-4"></div>
		</div>

	</div>
</section>
@endsection