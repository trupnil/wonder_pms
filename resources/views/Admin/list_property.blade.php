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
                                       <h1>Property Type</h1>
                                    </div>
                                    <div class="col-xs-4 ">
                                       <button class="btn vd_btn vd_bg-green" data-toggle="modal" data-target="#myModal" type="button">New</button>
                                       <!-- Modal -->
                                       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">Property Type</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-horizontal" method="POST" action="{{ route('property-store') }}" enctype="multipart/form-data">
                                                      {{csrf_field()}}
                                                      <div class="form-group">
                        <label class="col-sm-4 control-label">Property types</label>
                        <div class="col-sm-7 controls">
                          <select name="property_type_id">
                           @foreach($getAllPropertiesType as $index)
                            <option value="{{ $index->id }}">{{ $index->property_type_name }}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Property Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="property_name">
                                                         </div>
                                                      </div>
                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Property  LocalName</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="property_localname">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Property No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="property_no">
                                                         </div>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Way No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="way_no">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Street No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="street_no">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Landmark</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name=" landmark">
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
                                                         <label class="col-sm-4 control-label">Country</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" 
                                                            name="country">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Photos</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="file" 
                                                            name="photos" multiple="">
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
                                             <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> List Of Property</h3>
                                          </div>
                                          <div class="panel-body table-responsive">
                                             <table class="table table-striped" id="data-tables">
                                                <thead>
                                                   <tr>
                                                      <th> Sr.No </th>
                                                      <th>Property Name</th>
                                                      <th>Property LocalName</th>
                                                      <th>Type</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp
                                                   @foreach($allProperty as $property)
                                                   <tr class="odd gradeX">
                                                      <td> {{ $i++ }} </td>
                                                      <td>{{ $property->property_name }}</td>
                                                       <td>{{ $property->property_localname }}</td>
                                                      <td>{{ $property->allPropertiesWithTypes->property_type_name }}</td>
                                                      <td class="center menu-action">
                                                         <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"> <i class="fa fa-eye"></i> </a>
                                                         <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"> <i class="fa fa-pencil"></i> </a>
                                                         <a data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a>
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
                    
                

          
           
@stop