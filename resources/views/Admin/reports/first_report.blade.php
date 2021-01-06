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
                                       <h1>Reports</h1>
                                    </div>
                                    <div class="col-xs-4 ">
                                      <button class="btn vd_btn vd_bg-green" data-toggle="modal" data-target="#myModal" type="button">Add</button>
                                       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                   <h4 class="modal-title" id="myModalLabel">Add Rent Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-horizontal" method="POST" action="{{ route('payment-store') }}">
                                                      {{csrf_field()}}
                                                     
                                            <div class="form-group">
                                                         <label class="col-sm-4 control-label">Voucher No:</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="voucher_no" value="{{ rand(1,9999) }}">
                                                         </div>
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Agreement No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="agreement_no" onkeyup="getPaymentData(this.value)">
                                                         </div>
                                                      </div>
                                                     
                                                <div class="form-group">
                                                         <label class="col-sm-4 control-label">Voucher Date:</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="voucher_date">
                                                         </div>
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name">
                                                         </div>
                                                      </div>

                                                       <div class="form-group">
                                                         <label class="col-sm-4 control-label">Payment Date</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="payment_date" onclick="getMonthName(this.value)">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Month</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="month">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Payment Type</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="payment_type" >
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Cheque No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="cheque_no">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Cheque Date</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="cheque_date">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Rent Amount</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="rent_amount" onkeyup="getRentValue(this.value)" >
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Paid Amount</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="paid_amount" >
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Balance Amount</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="balance_amount" >
                                                         </div>
                                                      </div>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Status</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="radio" name="status" value="paid" >PAID &nbsp;
                                                            <input class="input-border-btm" type="radio" name="status" value="unpaid" >UNPAID &nbsp;
                                                            <input class="input-border-btm" type="radio" name="status" value="partially" >PARTIALLY &nbsp;
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
                                 <br>
                                 <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-6">
                                                   <form method="POST" action="{{ route('first_report_search') }}">
                                                      @csrf
                                                   <div class="form-group">
                                                         <label class="col-sm-4 control-label">Voucher No:</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" id="voucher_no_search" type="text" name="voucher_no">
                                                         </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Agreement No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="agreement_no" id="agreement_no_search" onkeyup="getPaymentData(this.value)">
                                                         </div>
                                                      </div>
                                                      <br>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                         <label class="col-sm-4 control-label">Voucher Date:</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="date" name="voucher_date" id="voucher_date_search">
                                                         </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name" id="tenant_name_search">
                                                         </div>
                                                      </div>
                                                      <br>
                                                </div>


                                              </div>
                                              <div class="row">
                                                <div class="col-md-12"> 

                                                     <center> <button type="submit" class="btn vd_btn vd_bg-green"  >Search</button></center>



                                                </div>
                                             </form>
                                               </div>

                                          </div>
                              </div>

                              <div class="vd_content-section clearfix">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="panel widget">
                                          <div class="panel-heading vd_bg-grey">
                                             <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> List Of Payments History</h3>
                                          </div>
                                          
                                        

                                          <div class="panel-body table-responsive">
                                             <table class="table table-striped" id="data-tables">
                                                <thead>



                                                   <tr>
                                                      <th> Sr.No </th>
                                                      <th>Tenant Name</th>
                                                      <th>Payment Date</th>
                                                      <th>Month</th>
                                                      <th>Payment Type</th>
                                                      <th>Cheque No</th>
                                                      <th>Cheque Date</th>
                                                      <th>Rent Amount</th>
                                                      <th>Paid Amount</th>
                                                      <th>Balance Amount</th>
                                                      <th> Payment Status </th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp

                                                    @foreach($PaymentRecords as $index)
                                                     <tr class="odd gradeX" >
                                                      <td>{{ $i++ }} </td>
                                                      <td> {{ $index->tenant_name }} </td>
                                                      <td>{{ $index->payment_date }}</td>
                                                      <td>{{ $index->month }}</td>
                                                      <td>{{ $index->payment_type }}</td>
                                                      <td>{{ $index->cheque_no }}</td>
                                                      <td>{{ $index->cheque_date }}</td>
                                                      <td>{{ $index->rent_amount }}</td>
                                                      <td>{{ $index->paid_amount }}</td>
                                                      <td>{{ $index->balance_amount }}</td>
                                                      <td>{{ $index->status }}</td>
                                                      <td class="center menu-action">
                                                         <a data-original-title="view" data-toggle="modal" data-target="#viewModal" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"  > <i class="fa fa-eye"></i> </a>
                                                         <a data-original-title="edit" data-toggle="modal" data-target="#editModal"data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"  > <i class="fa fa-pencil"></i> </a>
                                                       
                                                         <button type="submit" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red" onclick="return confirm('Are you sure you want to delete this item?')";><i class="fa fa-times"></i>
                                                         </button>

                                                         </form>
                                                      </td>
                                                   </tr>
                                                    @endforeach()
                                                    
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Panel Widget --> 
                                    </div>
                                    <!-- col-md-12 --> 
                                 </div>

                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="panel widget">
                                          <div class="panel-heading vd_bg-grey">
                                             <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> List Of Payments History</h3>
                                          </div>
                                          
                                        

                                          <div class="panel-body table-responsive">
                                             <table class="table table-striped" id="myTable">
                                                <thead>



                                                   <tr>
                                                      <th> Sr.No </th>
                                                      <th>Tenant Name</th>
                                                      <th>Payment Date</th>
                                                      <th>Month</th>
                                                      <th>Payment Type</th>
                                                      <th>Cheque No</th>
                                                      <th>Cheque Date</th>
                                                      <th>Rent Amount</th>
                                                      <th>Paid Amount</th>
                                                      <th>Balance Amount</th>
                                                      <th> Payment Status </th>
                                                     
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                 

                                                   
                                                   
                                                  
                                                    
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Panel Widget --> 
                                    </div>
                                 </div>
                                 <div id="search-payment-data"></div>
                                 <!-- row --> 
                              
                              </div>


                              <!-- .vd_content-section --> 
                           </div>
                           <!-- .vd_content --> 
                        </div>
                        <!-- .vd_container --> 
                     </div>
                     <!-- Modal -->
                                   
                <script type="text/javascript">
                  function getRentValue(rentvalue)
                  {
                    //alert(rentvalue);
                    $('input[name="balance_amount"]').val(rentvalue).attr('readonly', true);

                  }


                    function getMonthName(payment_date)
                    {
                      //alert(payment_date);
                      var month = new Array();
                      month[0] = "January";
                      month[1] = "February";
                      month[2] = "March";
                      month[3] = "April";
                      month[4] = "May";
                      month[5] = "June";
                      month[6] = "July";
                      month[7] = "August";
                      month[8] = "September";
                      month[9] = "October";
                      month[10] = "November";
                      month[11] = "December";
                       var d = new Date(payment_date);
                      var n = month[d.getMonth()];
                      //alert(n);
                       $('input[name="month"]').val(n).attr('readonly', true);

                    }



                    function getPaymentData(agreement_no)
                    {
                      //alert(agreement_no);
                     $.ajaxSetup({
                          headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  }
                                });
                        $.ajax({
                        type:"POST",
                        url:'get-payment-data',
                        data:{"_token": "{{ csrf_token() }}", "agreement_no":agreement_no },
                        success:function(response)
                        {
                          console.log(response);
                           $('input[name="tenant_name"]').val(response['has_one_tenant'].tenant_name).attr('readonly', true);
                           $('#tenant_name_search').val(response['has_one_tenant'].tenant_name);
                        }

                        });
                    }


                    function getSearchReport()
                    {
                        var voucherNo = $('#voucher_no_search').val();
                        var voucherDate = $('#voucher_date_search').val();
                        var agreementNo = $('#agreement_no_search').val();
                        var tenantName = $('#tenant_name_search').val();
                       
                        $.ajax({

                           type:'POST',
                           url:'get-search-report',
                           data:{"_token": "{{ csrf_token() }}",'voucher_no':voucherNo,'voucher_date':voucherDate,'agreement_no':agreementNo,'agreement_no':agreementNo,'tenant_name':tenantName},
                              success:function(response){
                              // $.each(response, function(index) {

                                    

                              //       var resdata = `<tr><td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td>
                              //                                 <td>`+response[index].id+`</td></tr>`;
                              //                                 alert(resdata);

                              //                                 var val = "<li>"+response[index].id+"</li>";
                              //                                 $('#search-payment-data').html(val);

                              //                              });

                              for (var i = 0; i < response.length; i++) {
                                    
                                           var resdata = `<tr><td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td>
                                                              <td>`+response[i].id+`</td></tr>`;
                                                              alert(resdata);
                                                      $('#search-payment-data').html(resdata);
                                 }
                              
                              }

                        });



                    }





                </script>
  
          
           
@stop