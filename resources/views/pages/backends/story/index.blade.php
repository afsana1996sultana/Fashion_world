@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/bootstrap4-toggle-3.6.1/css/bootstrap4-toggle.min.css')}}">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Our Story</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Our Story</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_story"><i class="fa fa-plus"></i>Add New</a> 
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
										<th class="sorting">Status</th>
										<th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($story as $story)
									<tr class="odd">
										<td>{{$story-> id}}</td>
										<td>{{$story-> story_name}}</td>
										<td>
											@if($story->status==1)
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$story->s_name}}" data-off="InActive" data-onstyle="success" data-offstyle="danger">   
											</div>
											@elseif($story->status==2)
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$story->s_name}}" data-off="Active" data-onstyle="danger" data-offstyle="success">   
											</div>
											@else
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$story->s_name}}" data-off="Active" data-onstyle="warning" data-offstyle="success">   
											</div>
											@endif
										</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$story->id}}" class="btn btn-primary" id="editstory" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$story->id}}" class="btn btn-danger" id="storyDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Story Modal -->
<div id="add_story" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Story</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('story.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtStoryName" name="txtStoryName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Status:&nbsp;</label>
                                <select id="txtStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section float-right">
                        <button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Close</button>
                        <input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width:80px;" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Story Modal -->

<!-- Edit Story Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Story</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('story-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbStoryId" name="cmbStoryId" >
								<label class="col-form-label">Name:&nbsp;</label>
								<input type="text" class="form-control" id="eStoryName" name="txtStoryName">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Status:&nbsp;</label>
                                <select id="eStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>

					<div class="submit-section float-right">
						<button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Cancle</button>
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Story Modal -->
<!-- Delete Story Modal -->
<div class="modal custom-modal fade" id="delete_story" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Story</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-story')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_storyId" name="d_story">
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
<!-- /Delete Promise Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/bootstrap4-toggle-3.6.1/js/bootstrap4-toggle.min.js')}}"></script>

<script>
	$(document).ready(function(){

        $(document).on('click','#storyDbtn',function(){
            // alart("ok");
			var story_id=$(this).val();
			$('#delete_story').modal('show');
			$('#delete_storyId').val(story_id);
		});

		$(document).on('click','#editstory',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-story/"+eid,
				success:function(response){
					$('#cmbStoryId').val(eid);		
					$('#eStoryName').val(response.story.story_name);
                    $('#eStatus').val(response.story.status);
					
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