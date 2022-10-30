@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Message</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Message</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
										<th class="sorting sorting_asc">SN</th>
										<th class="sorting">Name</th>
										<th class="sorting">Email</th>
										<th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($message as $message)
									<tr class="odd">
										<td>{{$message-> id}}</td>
										<td>{{$message-> name}}</td>
										<td>{{$message-> email}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$message->id}}" class="btn btn-info" id="messageshBtn" ><i class="fas fa-eye" ></i> </button>&nbsp;
												<button type="button" value="{{$message->id}}" class="btn btn-danger" id="messageDbtn" ><i class="fas fa-trash"></i> </button>
											</div>
										</td>   
									</tr>
									@empty
										<div colspan="14">No records found</div>
									@endforelse
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- show Message Modal -->
<div id="show___message" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Name:&nbsp;</label>
							<div class="" id="ShName"></div>
						</div>
					</div>

                    <div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Email:&nbsp;</label>
							<div class="" id="ShEmail"></div>
						</div>
					</div>

                    <div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Phone:&nbsp;</label>
							<div class="" id="ShPhone"></div>
						</div>
					</div>

                    <div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Message:&nbsp;</label>
							<div class="" id="ShMessage"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /show Message Modal -->
<!-- Delete Message Modal -->
<div class="modal custom-modal fade" id="delete_message" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Message</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-message')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_messageId" name="d_message">
                                <button type="submit" class="btn btn-danger continue-btn">Delete</button>		
							</form>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-info cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Message Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>

<script>
	$(document).ready(function(){

        $(document).on('click','#messageDbtn',function(){
            // alart("ok");
			var message_id=$(this).val();
			$('#delete_message').modal('show');
			$('#delete_messageId').val(message_id);
		});


        $(document).on('click','#messageshBtn',function(){
			//  alert("ok");

			var messagesh_id=$(this).val();
			// alert(messagesh_id);

			$('#show___message').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-message/"+messagesh_id,
				success:function(response){
					console.log(response);
					$('#cmbMessageSHId').html(messagesh_id);
					$('#ShName').html(response.message.name);
					$('#ShEmail').html(response.message.email);
					$('#ShPhone').html(response.message.phone);
					$('#ShMessage').html(response.message.message);

				}
			});
		});
    
	});

	$("#table-1").dataTable({
		"columnDefs": [
			{ "sortable": false, "targets": [2,3] }
		]
	});

</script>
@endsection
@endsection