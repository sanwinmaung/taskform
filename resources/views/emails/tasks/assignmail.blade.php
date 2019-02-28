@component('mail::message')
<style>
th {
	border-bottom: none !important;
}
</style>
<div style="text-align: center">
	<img src="{{ asset('custom/img/benline-logo.svg') }}" style="width: 150px;height: 90px;" alt="">
</div><br>
<div class="container" style="border: 2px solid #eee;min-width: 800px">
	<div class="row" style="margin-left: 40px;margin-top: 40px;">
		<h1>Hello {{ $task->user->name }},</h1>
		<p>A new task ({{$task->company}} - {{$task->objective}} ) is assigned to you.</p>
		<br>
	</div>
	<h3 style="background-color: #0a0a48;color: #fff;font-weight: bold;padding: 20px 0 20px 40px;">Task Details</h3>
	<br>
	
	<div style="margin-left: 40px;">
		<table class="table table-borderless">
			<thead>
				<tr>
					<th style="min-width: 250px;"></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="font-weight: bold;">Subject / Objective</td>
					<td>{{ $task->objective }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Due Date</td>
					<td>{{ $task->due_date }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Priority</td>
					<td>{{ $task->priority->title }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Task Type</td>
					<td>{{ $task->taskType->title }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Company</td>
					<td>{{ $task->company }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Contact</td>
					<td>{{ $task->contact->name }}</td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Created By</td>
					<td>Office</td>
				</tr>
			</tbody>
		</table>
	</div>

	@component('mail::button', ['url' => url('/task-forms', $task->id), 'color' => 'red' ])
	View Task
	@endcomponent

	<div style="margin-left: 40px;">
		<p style="font-size: 15px;font-weight: bold;margin-bottom: 0px !important">Regards,</p>
		<p style="color: #0a0a48;font-size: 17px;font-weight: bold;margin-top: 0px !important;margin-bottom: 100px !important;">
			TASK FORM APPLICATION
		</p>
		<hr style="margin-right: 40px !important;">
		<br>
		<p style="margin-bottom: 100px !important;">If you're having trouble clicking the "View Task" button, copy and paste the URL below into your web browser : <a href="{{ url('/task-forms', $task->id) }}" style="color: red;">{{ url('/task-forms', $task->id) }}</p></a>
	</div>
</div>

@endcomponent
