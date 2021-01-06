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
                                    
                                       <div class="btn-group">
                                          <button type="button" class="btn btn-primary">Export</button>
                                         
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
                                                <div class="col-md-4">
                                                   <form method="POST" action="{{ route('get.payment.overall.report') }}">
                                                      @csrf
                                                   <div class="form-group">
                                                         <label class="col-sm-4 control-label">From Date</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm"  type="date" name="from_date" required="">
                                                         </div>
                                                      </div>

                                                      <br>

                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Agreement No</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="agreement_no" id="agreement_no_search" onkeyup="getPaymentData(this.value)" required="">
                                                         </div>
                                                      </div>
                                                      <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                         <label class="col-sm-4 control-label">To Date</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm"  type="date" name="to_date" required="">
                                                         </div>
                                                      </div>
                                                  
                                                      <br>
                                                      <div class="form-group">
                                                         <label class="col-sm-4 control-label">Tenant Name</label>
                                                         <div class="col-sm-7 controls">
                                                            <input class="input-border-btm" type="text" name="tenant_name" id="tenant_name_search" required="">
                                                         </div>
                                                      </div>
                                                      <br>
                                                </div>

                                                   <div class="col-md-4">
                                                    <div class="form-group">
                                                         <label class="col-sm-4 control-label">Month</label>
                                                         <div class="col-sm-7 controls">
                                                           
                                                            <select name="month" >
                                                               <option value=""><-select-></option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                            <option value="March">March</option>
                              <option value="April">April</option>
                                <option value="May">May</option>
                                  <option value="June">June</option>
                                    <option value="July">July</option>
                                      <option value="August">August</option>
                                        <option value="September">September</option>
                                          <option value="October">October</option>
                                            <option value="November">November</option>
                                             <option value="December">December</option>
                          </select>
                                                         </div>
                                                      </div>
                                                   
                                                      <br>
                                                 
                                                        <div class="form-group">
                        <label class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-7 controls">
                          <select name="status" >
                          <option value="paid">PAID</option>
                          <option value="unpaid">UNPAID</option>
                          <option value="partially">PARTIALLY</option>
                          </select>
                        </div>
                      </div>
                                                      <br>
                                                </div>


                                              </div>
                                              <div class="row">
                                                <div class="col-md-12"> 

                                                     <center> <button type="submit" class="btn vd_btn vd_bg-green" >Search</button></center>  

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
                                                      <th>Payment Date</th>
                                                      <th>Agreement No</th>
                                                      <th>Tenant Name</th>
                                                      <th>Contact No</th>
                                                      <th>Email Id</th>
                                                      <th>Property Type Name</th>
                                                      <th>Property Name</th>
                                                      <th>Unit Type</th>
                                                      <th>Unit Name</th>
                                                      <th>Payment Type</th>
                                                      <th>Rent Amount</th>
                                                      <th>Paid Amount</th>
                                                      <th>Balance Amount</th>
                                                      <th> Payment Status </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=1; @endphp
                                                @foreach($paymentHistory as $index)
                                                     <tr class="odd gradeX" >
                                                      <td>{{ $i++ }} </td>
                                                      <td>{{ $index->payment_date }}</td>
                                                      <td>{{ $index->agreement_no }}</td>
                                                      <td> {{ $index->tenant_name }} </td>
                                                      <td> {{ $index->mobile }} </td>
                                                      <td> Bug </td>
                                                    <td> {{ $index->property_type_name }} </td>
                                                      <td> {{ $index->property_name }} </td>
                                                      <td> {{ $index->unit_type_name }} </td>
                                                      <td> {{ $index->unit_name }} </td>
                                                       <td> {{ $index->payment_type }} </td>
                                                      <td>{{ $index->rent_amount }}</td>
                                                      <td>{{ $index->paid_amount }}</td>
                                                      <td>{{ $index->balance_amount }}</td>
                                                      <td>{{ $index->status }}</td>
                                                     

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


                    // function getSearchReport()
                    // {
                    //     var voucherNo = $('#voucher_no_search').val();
                    //     var voucherDate = $('#voucher_date_search').val();
                    //     var agreementNo = $('#agreement_no_search').val();
                    //     var tenantName = $('#tenant_name_search').val();
                       
                    //     $.ajax({

                    //        type:'POST',
                    //        url:'get-search-report',
                    //        data:{"_token": "{{ csrf_token() }}",'voucher_no':voucherNo,'voucher_date':voucherDate,'agreement_no':agreementNo,'agreement_no':agreementNo,'tenant_name':tenantName},
                    //           success:function(response){
                    //           // $.each(response, function(index) {

                                    

                    //           //       var resdata = `<tr><td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td>
                    //           //                                 <td>`+response[index].id+`</td></tr>`;
                    //           //                                 alert(resdata);

                    //           //                                 var val = "<li>"+response[index].id+"</li>";
                    //           //                                 $('#search-payment-data').html(val);

                    //           //                              });

                    //           for (var i = 0; i < response.length; i++) {
                                    
                    //                        var resdata = `<tr><td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td>
                    //                                           <td>`+response[i].id+`</td></tr>`;
                    //                                           alert(resdata);
                    //                                   $('#search-payment-data').html(resdata);
                    //              }
                              
                    //           }

                    //     });



                    // }





                </script>
  
          
           
@stop