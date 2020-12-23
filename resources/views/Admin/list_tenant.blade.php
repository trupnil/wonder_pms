@extends('Admin.master')
@section('main-section')

                  
                    <div class="vd_content-wrapper">
                        <div class="vd_container">
                           <div class="vd_content clearfix">
                              <div class="vd_head-section clearfix">
                                 <div class="vd_panel-header">
                                    <ul class="breadcrumb">
                                       <li><a href="index.html">Home</a> </li>
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
                                       <h1>Units</h1>
                                    </div>
                                    <div class="col-xs-4 ">
                                       <button class="btn vd_btn vd_bg-green" data-toggle="modal" data-target="#myModal" type="button">New</button>
                                       <!-- Modal -->
                                       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">Add Tenant</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-horizontal" method="POST" action="{{ route('tenant-store') }}" enctype="multipart/form-data">
                                                      {{csrf_field()}}
                   
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant LocalName</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_localname">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" name="resident_card">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Driving Lic</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="driving_lic">
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
                                                         <label class="col-sm-4 control-label">Email</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="email"
                                                             name="email">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Alternat Contact</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="  alternate_contact">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Country</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="country">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">State</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="state">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">provine</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="provine">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Area</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="area">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">City</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="city">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Landmark</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="landmark">
                                                         </div>
                                                      </div>
                                                      
                                                        <div class="form-group">
                        <label class="col-sm-4 control-label">Other Details</label>
                        <div class="col-sm-7 controls">
                          <textarea rows="3" class="width-90" name="other_details"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Spouse</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_spouse">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Blood Group</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="blood_group">
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
                                                         <label class="col-sm-4 control-label">Photos</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" 
                                                            name="photo">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Birthdate</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" 
                                                            name="birthdate">
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
                                                     
                                                   
                                                </div>
                                                <div class="modal-footer background-login">
                                                   <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn vd_btn vd_bg-green">Save changes</button>
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
                                             <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> List Of Tenant</h3>
                                          </div>
                                          <div class="panel-body table-responsive">
                                             <table class="table table-striped" id="data-tables">
                                                <thead>
                                                   <tr>
                                                      <th> Sr.No </th>
                                                      <th>Tenant Name</th>
                                                      <th>Tenant LocalName</th>
                                                      <th>Mobile</th>
                                                      <th>Telephone</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp
                                                    @foreach($getAllTenant as $getAllTenant)
                                                   <tr class="odd gradeX">
                                                      <td> {{ $i++ }} </td>
                                                      <td>{{ $getAllTenant->tenant_name }}</td>
                                                       <td>{{ $getAllTenant->tenant_localname }}</td>
                                                      <td>{{ $getAllTenant->mobile}}</td>
                                                       <td>{{ $getAllTenant->telephone}}</td>
                                                      <td class="center menu-action">
                                                         <a data-original-title="view" data-toggle="modal" data-target="#viewModal" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"  onclick="getData({{$getAllTenant->id}})"> <i class="fa fa-eye"></i> </a>
                                                         <a data-original-title="edit" data-toggle="modal" data-target="#editModal"data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"  onclick="editData({{$getAllTenant->id}})"> <i class="fa fa-pencil"></i> </a>
                                                         <form action="{{ route('tenant-delete',$getAllTenant->id) }}" method="POST" > 
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
                    
                

        <!-- View Tenant -->
  <!-- Modal -->
                                       <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">View Tenant</h4>
                                                </div>
                                                <div class="modal-body">
                                                  
                                             </div>
                                             <!-- /.modal-content --> 
                                          </div>
                                          <!-- /.modal-dialog --> 
                                       </div>
                                     </div>
        <!-- End tenant view -->

        <!-- Edit Tenant -->
  <!-- Modal -->
                                       <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">Edit Tenant</h4>
                                                </div>
                                                <div class="modal-body">
                                                  
                                             </div>
                                             <!-- /.modal-content --> 
                                          </div>
                                          <!-- /.modal-dialog --> 
                                       </div>
                                     </div>
        <!-- End tenant edit -->




         <script type="text/javascript">
                        
                   function getData(id) {
//alert(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

        type: "POST",
        url: 'get-tenant-view/'+id,
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        success: function (response) {
            //alert(response.id);
            console.log(response.id);
            $('.modal-body').html(` <form class="form-horizontal" method="POST" action="{{ route('tenant-store') }}" enctype="multipart/form-data">
                                                      {{csrf_field()}}
                   
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name" readonly value="`+response.tenant_name+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant LocalName</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_localname" readonly value="`+response.tenant_localname+`">
                                                         </div>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls">
                                                              <img src="/tenant/`+response.resident_card+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Driving Lic</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="driving_lic" readonly value="`+response.driving_lic+`">
                                                         </div>
                                                      </div>
                                                   
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Passport</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="passport" readonly value="`+response.passport+`">
                                                         </div>
                                                      </div>
                                                   
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Mobile</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="mobile" readonly value="`+response.mobile+`">
                                                         </div>
                                                      </div>
                                                      
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Telephone</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="telephone" readonly value="`+response.telephone+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Email</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="email"
                                                             name="email" readonly value="`+response.email+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Alternat Contact</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="alternate_contact" readonly value="`+response.alternate_contact+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Country</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="country" readonly value="`+response.country+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">State</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="state" readonly value="`+response.state+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">provine</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="provine" readonly value="`+response.provine+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Area</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="area" readonly value="`+response.area+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">City</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="city" readonly value="`+response.city+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Landmark</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="landmark" readonly value="`+response.landmark+`">
                                                         </div>
                                                      </div>
                                                      
                                                        <div class="form-group">
                        <label class="col-sm-4 control-label">Other Details</label>
                        <div class="col-sm-7 controls">
                          <textarea rows="3" class="width-90" readonly name="other_details">`+response.other_details+`"</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Spouse</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_spouse"  value="`+response.tenant_spouse+`">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Blood Group</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="blood_group"  value="`+response.blood_group+`">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Work</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_work"  value="`+response.tenant_work+`">
                                                         </div>
                                                      </div>
                                                      
                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls">
                                                              <img src="/tenant/`+response.photo+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Birthdate</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" 
                                                            name="birthdate"  value="`+response.birthdate+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant CR.</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_cr"  value="`+response.tenant_cr+`">
                                                         </div>
                                                      </div>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Sponser Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="sponser_name"  value="`+response.sponser_name+`">
                                                         </div>
                                                      </div>
                                                     
                                                   
                                                </div>
                                                <div class="modal-footer background-login">
                                                   <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn vd_btn vd_bg-green">Save changes</button>
                                                </div>
                                                </form>`);
        }


    });
}


                   function editData(id) {
//alert(id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

var action = "update-tenant/"+id;
    $.ajax({

        type: "POST",
        url: 'get-tenant-view/'+id,
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        success: function (response) {
            //alert(response.id);
            console.log(response.id);
            $('.modal-body').html(` <form class="form-horizontal" method="POST" action="`+action+`" enctype="multipart/form-data">
                                                      {{csrf_field()}}
                   
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name"  value="`+response.tenant_name+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant LocalName</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_localname"  value="`+response.tenant_localname+`">
                                                         </div>
                                                      </div>
                                                        <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" name="resident_card">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Resident Card</label>
                                                         <div class="col-sm-7 controls">
                                                              <img src="/tenant/`+response.resident_card+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Driving Lic</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="driving_lic"  value="`+response.driving_lic+`">
                                                         </div>
                                                      </div>
                                                   
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Passport</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="passport"  value="`+response.passport+`">
                                                         </div>
                                                      </div>
                                                   
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Mobile</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="mobile"  value="`+response.mobile+`">
                                                         </div>
                                                      </div>
                                                      
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Telephone</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="telephone"  value="`+response.telephone+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Email</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="email"
                                                             name="email"  value="`+response.email+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Alternat Contact</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="alternate_contact"  value="`+response.alternate_contact+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Country</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="country"  value="`+response.country+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">State</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="state"  value="`+response.state+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">provine</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="provine"  value="`+response.provine+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Area</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text"
                                                             name="area"  value="`+response.area+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">City</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="city"  value="`+response.city+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Landmark</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="landmark"  value="`+response.landmark+`">
                                                         </div>
                                                      </div>
                                                      
                                                        <div class="form-group">
                        <label class="col-sm-4 control-label">Other Details</label>
                        <div class="col-sm-7 controls">
                          <textarea rows="3" class="width-90"  name="other_details">`+response.other_details+`"</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Spouse</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_spouse"  value="`+response.tenant_spouse+`">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Blood Group</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="blood_group"  value="`+response.blood_group+`">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Work</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_work"  value="`+response.tenant_work+`">
                                                         </div>
                                                      </div>
                                                      
                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Current Photo</label>
                                                         <div class="col-sm-7 controls">
                                                              <img src="/tenant/`+response.photo+`">
                                                         </div>
                                                      </div>
                                                          <div class="form-group">
                                                         <label class="col-sm-4 control-label">change Photo</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" 
                                                            name="photo">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Birthdate</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" 
                                                            name="birthdate"  value="`+response.birthdate+`">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant CR.</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="tenant_cr"  value="`+response.tenant_cr+`">
                                                         </div>
                                                      </div>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Sponser Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="sponser_name"  value="`+response.sponser_name+`">
                                                         </div>
                                                      </div>
                                                     
                                                   
                                                </div>
                                                <div class="modal-footer background-login">
                                                   <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn vd_btn vd_bg-green">Save changes</button>
                                                  
                                                </div>
                                                </form>`);
        }


    });
}


</script>
           
           
@stop