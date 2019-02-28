@extends ('layouts.master')
@section ('content')

<section class="portfolio_details_area section_gap">
	<div class="container">
		<div class="portfolio_details_inner">
			<div class="row">
				<div class="col-lg-6">
					<div class="left_img">
						<img class="img-fluid" src="{{ asset('custom/img/taskform.jpg') }}" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5">
					<div class="portfolio_right_text mt-30">
						<h4 class="text-uppercase">Task Form Application</h4>
						<p>
							I created this application with Laravel 5.7, Bootstrap 4 and MySql. Also I used third party package like as SweetAlert. This App can be created CRUD for Task Form, Task Type, Contact, Assignee Person and Priority Setting.
						</p>
						<ul class="list">
								<li><span>Frontend</span>: HTML, CSS, Bootstrap 4</li>
								<li><span>Backend</span>: PHP (Laravel 5.7)</li>
								<li><span>Database</span>: MySQL</li>
								<li><span>Server</span>: Apache2</li>
								<li><span>Other</span>: Support Responsive,</li>
								<li><span></span>&nbsp; Single Page Application(SPA)</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection