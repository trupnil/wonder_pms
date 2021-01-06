<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

use App\Models\agreement;

class ReportsController extends Controller
{
    //
    public function index()
    {
        $PaymentRecords = Payment::getAllPaymentRecord();
        //dd($PaymentRecords);
        return view('Admin.reports.first_report',compact('PaymentRecords'));
    }

    public function getSearchReport(Request $request)
    {
        //dd($request->all());

        if($request->filled('voucher_date')) {
            
            $voucherDate = date("d-m-y", strtotime($request->voucher_date));
          }
          else
          {
            $voucherDate = null; 
          }

          return Payment::where('agreement_no',$request->agreement_no)
                                      ->orwhere('voucher_no',$request->voucher_no)
                                      ->orwhere('voucher_date',$voucherDate)
                                      ->orwhere('tenant_name',$request->tenant_name)->get();
                                      




   

    }

      public function getFirstReportSearch(Request $request)
    {
        //dd($request->all());

        if($request->filled('voucher_date') || $request->filled('agreement_no') || $request->filled('voucher_no') || $request->filled('tenant_name') )
        {
             if($request->filled('voucher_date')) {
            
            $voucherDate = date("d-m-y", strtotime($request->voucher_date));
          }
          else
          {
            $voucherDate = null; 
          }

          $reportResult =  Payment::where('agreement_no',$request->agreement_no)
                                      ->orwhere('voucher_no',$request->voucher_no)
                                      ->orwhere('voucher_date',$voucherDate)
                                      ->orwhere('tenant_name',$request->tenant_name)->get();
        }
        else
        {
             $reportResult = Payment::getAllPaymentRecord();   
        }

       

                return view('Admin.reports.first_report_result',compact('reportResult'));
                                      
         }


    public function storePayment(Request $request)
    {
    	$payment = new Payment();
        $requestData = $request->all();
        $paymentDate = date("d-m-y", strtotime($request->payment_date));
        $voucherDate = date("d-m-y", strtotime($request->voucher_date));
        $chequeDate = date("d-m-y", strtotime($request->cheque_date));
        
        $requestData['payment_date'] = $paymentDate;
        $requestData['voucher_date'] = $voucherDate;
        if($request->has('cheque_date'))
        {
            $requestData['cheque_date'] = $chequeDate;    
        }

        $payment->fill($requestData);
        if ($payment->save())
        {
            return redirect()
                ->back()
                ->with('message', 'Data added successfully!!');
        }
        else
        {
            return redirect()
                ->back()
                ->with('message', 'Something went wrong');
        }

      }

    public function getPaymentData(Request $request)
    {
    	return agreement::with('hasOneTenant')->where('agreement_no',$request->agreement_no)->first();
    }

    public function getPaymentOverallReportSearch(Request $request)
    {


         if($request->filled('from_date') || $request->filled('to_date') || $request->filled('month') || $request->filled('agreement_no') || $request->filled('tenant_name'))
         {

              $from_date = date("d-m-y", strtotime($request->from_date));
              $to_date = date("d-m-y", strtotime($request->to_date));
              $paymentHistory = \DB::table('payment')
                ->join('agreements', 'agreements.agreement_no', '=', 'payment.agreement_no')
                ->join('unit_type', 'agreements.unit_type_id', '=', 'unit_type.id')
                ->join('unit', 'agreements.unit_id', '=', 'unit.id')
                ->join('property_types', 'agreements.property_type_id', '=', 'property_types.id')
                ->join('properties', 'agreements.property_id', '=', 'properties.id')
                ->whereBetween('payment_date', [$from_date, $to_date])
                   ->where('month',$request->month)
                   ->where('payment.agreement_no',$request->agreement_no)
                   ->where('payment.tenant_name',$request->tenant_name)
                   ->where('payment.status',$request->status)
                   ->get();  
         }
         else
         {
            $paymentHistory = \DB::table('payment')
            ->join('agreements', 'agreements.agreement_no', '=', 'payment.agreement_no')
            ->join('unit_type', 'agreements.unit_type_id', '=', 'unit_type.id')
            ->join('unit', 'agreements.unit_id', '=', 'unit.id')
            ->join('property_types', 'agreements.property_type_id', '=', 'property_types.id')
            ->join('properties', 'agreements.property_id', '=', 'properties.id')->get(); 
         }

        
         
        return  view('Admin.reports.get_payment_overall_report',compact('paymentHistory'));

    }
}
