<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remark;

class RemarkController extends Controller
{
    // index
//     public function index() {

//         $datetime = Remark::all();
//         $remarks= Remark::all();
  
  
//        return view('remarks.index')
//         ->with(['datetime'=>$datetime])
//         ->with(['remarks'=> $remarks]);
//    }
  
   //edit
   public function edit(Remark $remark)
   {
       
       return view('remarks.edit')
        ->with(['remark' => $remark]);
   }
  
   //update
   public function update(Remark $remark, Request $request) {
  
    //    $request->validate([
    //        'datetime' => 'required',
    //        'title' => 'required',
    //        'body' => 'required',
    //    ],[
    //        'datetime.required' => '記録日を記入してください',
    //        'title.required' => 'タイトルを記入してください',
    //        'body' => '内容を記入してください',
    //    ]);
       $remark->datetime = $request->datetime;
       $remark->title = $request->title;
       $remark->body = $request->body;
       $remark->update();
  
       return redirect()
        ->route('remarks.show');
   }
  
   //show
   public function show() {
  
       $datetime = Remark::all();
       $remarks = Remark::all();
  
       return view('remarks.show')
        ->with(['datetime' => $datetime])
        ->with(['remarks'=> $remarks]);
   }
  
    //create
    public function create() {
  
       return view('remarks.create');
   }
  
   //store
   public function store(Request $request) {

      //    $request->validate([
    //        'datetime' => 'required',
    //        'title' => 'required',
    //        'body' => 'required',
    //    ],[
    //        'datetime.required' => '記録日を記入してください',
    //        'title.required' => 'タイトルを記入してください',
    //        'body' => '内容を記入してください',
    //    ]);

  
       $remarks = new Remark();
       $remarks->datetime = $request->datetime;
       $remarks->title = $request->title;
       $remarks->body = $request->body;
       $remarks->save();
  
       return redirect()
        ->route('remarks.show');
  }

//   public function test(Request $request)
//   {
//       if(!empty($request['from']) && !empty($request['until'])) {
//           $outsourcing_deposits = OutsourcingDeposit::getOutsourcingDeposit($request['from'],$request['until']);
//       } else {
//           $outsourcing_deposits = OutsourcingDeposit::get();
//       }

//       return view('outsourcing_deposits.show')
//       ->with(['outsourcing_deposits'=> $outsourcing_deposits]);
//   }

      // destroy
      public function destroy(Remark $remark)
      {
          $remark->delete();
  
          return to_route('remarks.show');
      }
  
   
}
