@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/bootstrap4-toggle-3.6.1/css/bootstrap4-toggle.min.css')}}">
@endsection

@section('page')
<style>
	img {
  border-radius: 50%;
  background-color: #fff;
}
</style>
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Our Partners</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Our Partners</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_partner"><i class="fa fa-plus"></i>Add New</a> 
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
                                        <th class="sorting">Logo</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($partner as $partner)
									<tr class="odd">
                                        <td>{{$partner-> id}}</td>
                                        <td>{{$partner-> name}}</td>
                                        <td><img src="{{asset('img/'.$partner->partner_logo)}}" height="70px" width="70px" alt=""></td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$partner->id}}" class="btn btn-primary" id="editpartner" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$partner->id}}" class="btn btn-danger" id="partnerDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Partners Modal -->
<div id="add_partner" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Partner</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('partners.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mb-5">
                                <label for="">Partner Logo</label>
                                <input type="file" name="filePhoto" class="form-control-file">
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
<!-- /Add Partners Modal -->
<!-- Edit Partners Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Partner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('partners-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Name:&nbsp;</label>
								<input type="text" class="form-control" id="eName" name="txtName">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group">
                            <input type="hidden" value="" id="cmbPartnerId" name="cmbPartnerId" >
								<div class="form-group" id="eFilelogo"></div>	
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
                                <label class="col-form-label">Logo:&nbsp;</label>
								<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
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
<!-- /Edit Partners Modal -->
<!-- Delete Partners Modal -->
<div class="modal custom-modal fade" id="delete_partner" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Partner</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-partners')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_partnerId" name="d_partner">
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
<!-- /Delete Partners Modal -->


@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/bootstrap4-toggle-3.6.1/js/bootstrap4-toggle.min.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#partnerDbtn',function(){
            // alart("ok");
			var partner_id=$(this).val();
			$('#delete_partner').modal('show');
			$('#delete_partnerId').val(partner_id);
		});

		$(document).on('click','#editpartner',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-partners/"+eid,
				success:function(response){	
					$('#cmbPartnerId').val(eid);	
					$('#eName').val(response.partner.name);	
					$("#eFilelogo").html(
                        `<img src="img/${response.partner.partner_logo}" width="100" class="img-fluid img-thumbnail">`);
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