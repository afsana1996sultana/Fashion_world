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
			<h1>Product Unit</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Product Unit</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_unit"><i class="fa fa-plus"></i>Add Unit</a> 
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Unit</th>
                                        <th class="sorting">Status</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($unit as $unit)
									<tr class="odd">
                                        <td>{{$unit-> id}}</td>
                                        <td>{{$unit-> unit_name}}</td>
                                        <td>
											@if($unit->status==1)
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$unit->s_name}}" data-off="InActive" data-onstyle="success" data-offstyle="danger">   
											</div>
											@elseif($unit->status==2)
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$unit->s_name}}" data-off="Active" data-onstyle="danger" data-offstyle="success">   
											</div>
											@else
											<div>
												<input type="checkbox" checked data-toggle="toggle" data-on="{{$unit->s_name}}" data-off="Active" data-onstyle="warning" data-offstyle="success">   
											</div>
											@endif
										</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$unit->id}}" class="btn btn-primary" id="editunit" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$unit->id}}" class="btn btn-danger" id="unitDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Unit Modal -->
<div id="add_unit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Unit</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('units.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Unit:&nbsp;</label>
                                <input type="text" class="form-control" id="txtUnitName" name="txtUnitName"required>
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
<!-- /Add Unit Modal -->
<!-- Edit Unit Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Unit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('units-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbUnitId" name="cmbUnitId" >
								<label class="col-form-label">Unit:&nbsp;</label>
								<input type="text" class="form-control" id="eUnitName" name="txtUnitName" required>
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
<!-- /Edit Unit Modal -->
<!-- Delete Unit Modal -->
<div class="modal custom-modal fade" id="delete_unit" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Unit</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-units')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_unitId" name="d_unit">
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
<!-- /Delete Unit Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/bootstrap4-toggle-3.6.1/js/bootstrap4-toggle.min.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#unitDbtn',function(){
            // alart("ok");
			var unit_id=$(this).val();
			$('#delete_unit').modal('show');
			$('#delete_unitId').val(unit_id);
		});

		$(document).on('click','#editunit',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-units/"+eid,
				success:function(response){	
					$('#cmbUnitId').val(eid);		
					$('#eUnitName').val(response.unit.unit_name);
                    $('#eStatus').val(response.unit.status);
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