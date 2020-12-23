@extends('Admin.master')
@section('main-section')

                  
                    <div class="vd_content-wrapper">
                        <div class="vd_container">
                           <div class="vd_content clearfix">
                              <div class="vd_head-section clearfix">
                                 <div class="vd_panel-header">
                                    <ul class="breadcrumb">
                                       <li><a href="">Home</a> </li>
                                       <li><a href="listtables-tables-variation.html">List &amp; Tables</a> </li>
                                       <li class="active">Data Tables</li>
                                    </ul>
                                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
                                       <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                       <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                       <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
                                    </div>
                                 </div>
                              </div>
                              @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="icon-cross"></i></button>
                        <i class="fa fa-check-circle append-icon"></i><strong>Well done!</strong> {{ Session::get('message') }}. </div>
                        @endif
                      <div class="alert alert-info alert-dismissable">
                              <div class="vd_title-section clearfix">
                                 <div class="vd_panel-header col-xs-12">
                                    <div class="col-xs-8 left">
                                       <h1>Agreement Type</h1>
                                    </div>
                                    <div class="col-xs-4 ">
                                       <button class="btn vd_btn vd_bg-green" data-toggle="modal" data-target="#myModal" type="button">New</button>
                                       <!-- Modal -->
                                       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">Agreement Add</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-horizontal" method="POST" action="{{ route('agreement-store') }}" enctype="multipart/form-data">
                                                      {{csrf_field()}}

                                                       <div class="form-group">
                        <label class="col-sm-4 control-label">Units</label>
                        <div class="col-sm-7 controls">
                          <select name="unit_id" id="unit_id" onchange="getUnitTypeForAgreement(this.value)">
                           @foreach($getAllUnits as $index)
                            <option value="{{ $index->id }}">{{ $index->unit_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-4 control-label">Unit types</label>
                        <div class="col-sm-7 controls">
                          <select id="unit_type_id" name="unit_type_id">
                           @foreach($getAllUnitTypes as $index)
                            <option value="{{ $index->id }}">{{ $index->unit_type_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">Properties</label>
                        <div class="col-sm-7 controls">
                          <select id="property_id" name="property_id">
                           @foreach($getAllProperties as $index)
                            <option value="{{ $index->id }}">{{ $index->property_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-4 control-label">Property types</label>
                        <div class="col-sm-7 controls">
                          <select id="property_type_id" name="property_type_id">
                           @foreach($getAllPropertiesType as $index)
                            <option value="{{ $index->id }}">{{ $index->property_type_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-4 control-label">Tenant</label>
                        <div class="col-sm-7 controls">
                          <select name="tenant_id" id="tenant_id" onchange="getTenant(this.value)">
                           @foreach($getAllTenant as $index)
                            <option value="{{ $index->id }}">{{ $index->tenant_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls" 
                                                         id="resident_get_image" >
                                                         
                                                      </div>
                                                   </div>
                                                     <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls"  >
                                                          <input type="text" readonly="" name="resident_card" >
                                                      </div>
                                                      
                                                         </div>

                                                    
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Passport</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="passport">
                                                         </div>
                                                      </div>
                                                   
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Mobile</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="mobile">
                                                         </div>
                                                      </div>
                                                      
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Telephone</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="telephone">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Work</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_work">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant CR.</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_cr">
                                                         </div>
                                                      </div>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Sponser Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="sponser_name">
                                                         </div>
                                                      </div>
                                                        <div class="form-group">
                                                         <label class="col-sm-4 control-label">Unit Type Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="unit_type_name">
                                                         </div>
                                                      </div>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Unit Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="unit_name">
                                                         </div>
                                                      </div>

                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Period Of</label><small>in Month</small>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="number" name="period_of">
                                                         </div>
                                                      </div>
                                                         <div class="form-group">
                                                         <label class="col-sm-4 control-label">Agreement Start</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="agreement_start">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Agreement End</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="agreement_end">
                                                         </div>
                                                      </div>
                                                       
                                                        <div class="form-group">
                                                         <label class="col-sm-4 control-label">Document Attach</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" name="document_attach">
                                                         </div>
                                                      </div>
                                                       
                                                        <div class="form-group">
                                                         <label class="col-sm-4 control-label"> Monthly Rent</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="monthly_rent">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label"> Payment Type</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="payment_type">
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="modal-footer background-login">
                                                   <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn vd_btn vd_bg-green">Save</button>
                                                </div>
                                                </form>
                                             </div>
                                             <!-- /.modal-content --> 
                                          </div>
                                          <!-- /.modal-dialog --> 
                                       </div>

                                       <!-- /.modal --> 
                                       <div class="btn-group">
                                          <button type="button" class="btn btn-primary">Export</button>
                                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
                                          <ul class="dropdown-menu" role="menu">
                                             <li><a href="#">Excel</a></li>
                                             <li><a href="#">PDF</a></li>
                                          </ul>
                                       </div>
                                       <button class="btn vd_btn vd_bg-black" type="button">Print</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="vd_content-section clearfix">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="panel widget">
                                          <div class="panel-heading vd_bg-grey">
                                             <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> List Of Agreement</h3>
                                          </div>
                                          <div class="panel-body table-responsive">
                                             <table class="table table-striped" id="data-tables">
                                                <thead>
                                                   <tr>
                                                      <th> Sr.No </th>
                                                      <th>Unit Type Name</th>
                                                      <th>Unit Name</th>
                                                      <th>Property Type Name</th>
                                                      <th>Property Name</th>
                                                      <th>Tenant Name</th>
                                                      <th>Agreement No</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp
                                                   @foreach($getAllAgreements as $getAllAgreement)
                                                   <tr class="odd gradeX">
                                                      <td> {{ $i++ }} </td>
                                                      <td>{{ $getAllAgreement->hasOneUnitType->unit_type_name }}</td>
                                                       <td>{{ $getAllAgreement->hasOneUnit->unit_name }}</td>
                                                      <td>{{ $getAllAgreement->hasOnePropertType->property_type_name }}</td>
                                         <td>{{ $getAllAgreement->hasOneProperty->property_name }}</td> 
                                                        <td>{{ $getAllAgreement->hasOneTenant->tenant_name }}</td>
                                                        <td>{{ $getAllAgreement->agreement_no }}</td>
                                                      <td class="center menu-action">
                                                         <a data-original-title="view" data-toggle="modal" data-target="#viewModal" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green" onclick="getData({{$getAllAgreement->id}})" > <i class="fa fa-eye"></i> </a>
                                                         <a data-original-title="edit" data-toggle="modal" data-target="#editModal"data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow" 
                                                         onclick="getEditData({{$getAllAgreement->id}})"  > <i class="fa fa-pencil"></i> </a>
                                                         <form method="POST" action="{{ route('delete-agreement',$getAllAgreement->id) }}">
                                                          @csrf @method('DELETE')

                                                         <button type="submit" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red" onclick="return confirm('Are you sure you want to delete this item?')";><i class="fa fa-times"></i>
                                                         </button>
                                                         
                                                         </form>
                                                      </td>
                                                   </tr>
                                                  @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Panel Widget --> 
                                    </div>
                                    <!-- col-md-12 --> 
                                 </div>
                                 <!-- row --> 
                              </div>
                              <!-- .vd_content-section --> 
                           </div>
                           <!-- .vd_content --> 
                        </div>
                        <!-- .vd_container --> 
                     </div>



<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header vd_bg-blue vd_white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>
        </button>
        <h4 class="modal-title" id="myModalLabel">Agreement Add</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{ route('agreement-store') }}" enctype="multipart/form-data">{{csrf_field()}}
          <div class="form-group">
            <label class="col-sm-4 control-label">Unit Type</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="unit_type_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Unit Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="unit_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Property type</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="property_type_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Property</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="property_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Current Resident Card</label>
            <div class="col-sm-7 controls" id="resident_get_image_view"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Passport</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="passport">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Mobile</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="mobile">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Telephone</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="telephone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant Work</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_work">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant CR.</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_cr">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Sponser Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="sponser_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Period Of</label><small>in Month</small>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="number" name="period_of">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Agreement Start</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="date" name="agreement_start">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Agreement End</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="date" name="agreement_end">
            </div>
          </div>
         <div class="form-group">
            <label class="col-sm-4 control-label">Document Attach</label>
            <div class="col-sm-7 controls" id="document_attach_view"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Monthly Rent</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="monthly_rent">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Payment Type</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="payment_type">
            </div>
          </div>
      </div>
      <div class="modal-footer background-login">
        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header vd_bg-blue vd_white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>
        </button>
        <h4 class="modal-title" id="myModalLabel">Agreement Edit</h4>
      </div>
      <div class="modal-body">
        
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<script type="text/javascript">
   
   function getUnitTypeForAgreement(unit_id)
   {
      alert(unit_id);
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({

         type:"POST",
         url:"get-unit-type-id/"+unit_id,
         data:{"_token": "{{ csrf_token() }}",'id': unit_id},
         success:function(response)
         {
            console.log(response);
             $('input[name="unit_type_name"]').val(response[0]['has_one_unit_type'].unit_type_name);
             $('input[name="unit_name"]').val(response[0].unit_name);

            $('#unit_type_id').html("<option value="+response[0].unit_type_id+"> "+ response[0]['has_one_unit_type'].unit_type_name +"  </option>");

             $('#property_id').html("<option value="+response[0].property_id+"> "+ response[0]['has_one_property'].property_name +"  </option>");

             $('#property_type_id').html("<option value="+response[0].property_type_id+"> "+ response[0]['has_one_propert_type'].property_type_name +"  </option>");

         }

      });
   }

   function getTenant(id)
   {
      alert(id);
       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

      $.ajax({

         type:"POST",
         data:{"_token": "{{ csrf_token() }}",'id': id},
         url:'get-tenant-ajax/'+id,
         success:function(response)
         {
            console.log(response);

              $('#resident_get_image').html('<img src="/tenant/'+response.resident_card+'" />');

              $('#resident_get_image_edit').html('<img src="/tenant/'+response.resident_card+'" />');

              $('input[name="tenant_name"]').val(response.tenant_name);
              $('input[name="passport"]').val(response.passport);
              $('input[name="mobile"]').val(response.mobile);
              $('input[name="telephone"]').val(response.telephone);
              $('input[name="tenant_work"]').val(response.tenant_work);
              $('input[name="tenant_cr"]').val(response.tenant_cr);
              $('input[name="sponser_name"]').val(response.sponser_name);
              $('input[name="resident_card"]').val(response.resident_card);
         }

      });
   }


  function getData(id) {
//alert(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

        type: "POST",
        url: 'get-agreement-view/'+id,
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        success: function (response) {

           console.log(response[0]['has_one_tenant'].resident_card);

           $('#resident_get_image_view').html('<img src="/tenant/'+response[0]['has_one_tenant'].resident_card+'" />');

            $('#document_attach_view').html('<embed src="/documents/'+response[0].document_attach+'" />');

            $('input[name="unit_type_id"]').val(response[0]['has_one_unit_type'].unit_type_name).attr('readonly', true);
             $('input[name="unit_id"]').val(response[0]['has_one_unit'].unit_name).attr('readonly', true);
              $('input[name="property_type_id"]').val(response[0]['has_one_propert_type'].property_type_name).attr('readonly', true);

               $('input[name="property_id"]').val(response[0]['has_one_property'].property_name).attr('readonly', true);

               $('input[name="tenant_name"]').val(response[0]['has_one_tenant'].tenant_name).attr('readonly', true);
               $('input[name="passport"]').val(response[0]['has_one_tenant'].passport).attr('readonly', true);
               $('input[name="mobile"]').val(response[0]['has_one_tenant'].mobile).attr('readonly', true);
               $('input[name="telephone"]').val(response[0]['has_one_tenant'].telephone).attr('readonly', true);
               $('input[name="tenant_work"]').val(response[0]['has_one_tenant'].tenant_work).attr('readonly', true);;
               $('input[name="tenant_cr"]').val(response[0]['has_one_tenant'].tenant_cr).attr('readonly', true);
               $('input[name="sponser_name"]').val(response[0]['has_one_tenant'].sponser_name).attr('readonly', true);
               $('input[name="resident_card"]').val(response[0]['has_one_tenant'].resident_card).attr('readonly', true);
               $('input[name="period_of"]').val(response[0].period_of).attr('readonly', true);
               $('input[name="monthly_rent"]').val(response[0].monthly_rent).attr('readonly', true);
               $('input[name="payment_type"]').val(response[0].payment_type).attr('readonly', true);
               $('input[name="agreement_start"]').val(response[0].agreement_start).attr('readonly', true);
               $('input[name="agreement_end"]').val(response[0].agreement_end).attr('readonly', true);
               



        }


    });

}





</script>

<script type="text/javascript">

function getUnitTypeForAgreementEdit(unit_id)
   {
      alert('edit check');
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({

         type:"POST",
         url:"get-unit-type-id/"+unit_id,
         data:{"_token": "{{ csrf_token() }}",'id': unit_id},
         success:function(response)
         {
            console.log(response);
             $('input[name="unit_type_name"]').val(response[0]['has_one_unit_type'].unit_type_name);
             $('input[name="unit_name"]').val(response[0].unit_name);
             $('#unit_type_id_edit').html("<option value="+response[0].unit_type_id+"> "+ response[0]['has_one_unit_type'].unit_type_name +"  </option>");
             $('#property_id_edit').html("<option value="+response[0].property_type_id+"> "+ response[0]['has_one_property'].property_name +"  </option>");
             $('#property_type_id_edit').html("<option value="+response[0].property_type_id+"> "+ response[0]['has_one_propert_type'].property_type_name +"  </option>");

         }

      });
   }

    
   function getEditData(id) {
   //alert(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var action = "update-agreement/"+id;

    $.ajax({

        type: "POST",
        url: 'get-agreement-view/'+id,
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        success: function (response) {

             console.log(response);
           //   $("#unit_id option[value= "+response[0]['has_one_unit'].unit_id+"]").attr("selected","selected");

           // $('#resident_get_image_edit').html('<img src="/tenant/'+response[0]['has_one_tenant'].resident_card+'" />');

           //     $('#document_attach_edit').html('<embed src="/documents/'+response[0].document_attach+'" class="img-responsive"/>');
           //      $('#editForm input[name="agreement_no"]').val(response[0].agreement_no).attr('readonly', true);
           //        $('input[name="tenant_name"]').val(response[0]['has_one_tenant'].tenant_name).attr('readonly', true);
           //         $('input[name="resident_card"]').val(response[0]['has_one_tenant'].resident_card).attr('readonly', true);
                    
           //     $('#editForm input[name="passport"]').val(response[0]['has_one_tenant'].passport);
           //     $('#editForm input[name="mobile"]').val(response[0]['has_one_tenant'].mobile);
           //     $('#editForm input[name="telephone"]').val(response[0]['has_one_tenant'].telephone);
           //     $('#editForm input[name="tenant_work"]').val(response[0]['has_one_tenant'].tenant_work);;
           //     $('#editForm input[name="tenant_cr"]').val(response[0]['has_one_tenant'].tenant_cr);
           //     $('#editForm input[name="sponser_name"]').val(response[0]['has_one_tenant'].sponser_name);
           //     $('#editForm input[name="period_of"]').val(response[0].period_of);
           //     $('#editForm input[name="monthly_rent"]').val(response[0].monthly_rent);
           //     $('#editForm input[name="payment_type"]').val(response[0].payment_type);
           //     $('#editForm input[name="agreement_start"]').val(response[0].agreement_start);
           //     $('#editForm input[name="agreement_end"]').val(response[0].agreement_end);
           //     $('#editForm input[name="unit_type_name"]').val(response[0].unit_type_name).attr('readonly', true);
           //       $('#editForm input[name="document_attach"]').val(response[0].document_attach).attr('readonly', true);
           //     $('#editForm input[name="unit_name"]').val(response[0].unit_name).attr('readonly', true);
           //     $('#editForm').prop('action', action);
               
                $('.modal-body').html(`<form class="form-horizontal" id="editForm" method="POST" enctype="multipart/form-data">{{csrf_field()}}
          <div class="form-group">
            <label class="col-sm-4 control-label">Agreement No:</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="agreement_no" value ="`+response[0].agreement_no+`">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Units</label>
            <div class="col-sm-7 controls">
              <select name="unit_id" id="unit_id" onchange="getUnitTypeForAgreementEdit(this.value)">@foreach($getAllUnits as $index)
                <option value="{{ $index->id }}">{{ $index->unit_name }}</option>@endforeach</select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Unit types</label>
            <div class="col-sm-7 controls">
              <select id="unit_type_id_edit" name="unit_type_id">@foreach($getAllUnitTypes as $index)
                <option value="{{ $index->id }}">{{ $index->unit_type_name }}</option>@endforeach</select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Properties</label>
            <div class="col-sm-7 controls">
              <select id="property_id_edit" name="property_id">@foreach($getAllProperties as $index)
                <option value="{{ $index->id }}">{{ $index->property_name }}</option>@endforeach</select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Property types</label>
            <div class="col-sm-7 controls">
              <select id="property_type_id_edit" name="property_type_id">@foreach($getAllPropertiesType as $index)
                <option value="{{ $index->id }}">{{ $index->property_type_name }}</option>@endforeach</select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant</label>
            <div class="col-sm-7 controls">
              <select name="tenant_id" id="tenant_id" onchange="getTenant(this.value)">@foreach($getAllTenant as $index)
                <option value="{{ $index->id }}">{{ $index->tenant_name }}</option>@endforeach</select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Current Resident Card</label>
            <div class="col-sm-7 controls" id="resident_get_image_edit"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Resident Card</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="resident_card">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Passport</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="passport">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Mobile</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="mobile">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Telephone</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="telephone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant Work</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_work">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Tenant CR.</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="tenant_cr">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Sponser Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="sponser_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Period Of</label><small>in Month</small>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="number" name="period_of">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Agreement Start</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="date" name="agreement_start">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Agreement End</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="date" name="agreement_end">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Document Attach</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="file" name="document_attach">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Current Document Attach</label>
            <div class="col-sm-7 controls" id="document_attach_edit"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Unit Type Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="unit_type_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Unit Name</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="unit_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Monthly Rent</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="monthly_rent">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Payment Type</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm" type="text" name="payment_type">
            </div>
          </div>
      </div>
      <div class="modal-footer background-login">
        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
        <button type="submit" class="btn vd_btn vd_bg-green">Save</button>
      </div>
      </form>`);



        }


    });

}



 

</script>
                                   
@stop