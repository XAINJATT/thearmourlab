<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkOrder;
use App\Models\WorkOrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkOrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $workOrderStatus = WorkOrderStatus::orderBy('id', 'DESC')->get();
        return view('admin.workOrderStatus.index', compact('workOrderStatus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workOrders = WorkOrder::orderBy('id', 'DESC')->get();
        return view('admin.workOrderStatus.add', compact('workOrders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        DB::beginTransaction();
        $Affected = null;
        $Affected = WorkOrderStatus::create([
            'car_name' => $request['car_name'],
            'work_order_id' => $request['work_order_id'],
            'status' => $request['status'],
            'created_at' => Carbon::now()
        ]);
        
        if ($Affected) {
            DB::commit();
            return redirect()->route('admin.WorkOrderStatus')->with('success-message', 'Work Order Status added successfully');
        } else {
            return redirect()->route('admin.WorkOrderStatus')->with('error-message', 'An unhandled error occurred');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $workOrderStatus = WorkOrderStatus::find($id);
        return view('admin.workOrderStatus.edit', compact('workOrderStatus'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'work_order_id' => 'required',
            'status' => 'required',
        ]);

        $workOrderStatus = WorkOrderStatus::find($request->id);
        $workOrderStatus->update([
            'car_name' => $request->car_name,
            'work_order_id' => $request->work_order_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.WorkOrderStatus')->with('success', 'Work Order Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        // Get the existing product details
        $workOrderStatusDetails = WorkOrderStatus::where('id', $id)->delete();

        if ($workOrderStatusDetails) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function statusUpdate(Request $request, $id)
    {
        try {
            $blog = WorkOrderStatus::findOrFail($id);
            if ($blog->status == 'General') {
                $blog->status = 'Paint Protection Film';
            }elseif($blog->status == 'Paint Protection Film'){
                $blog->status = 'Ceramic Coating';
            }elseif($blog->status == 'Ceramic Coating'){
                $blog->status = 'Window Tint';
            }elseif($blog->status == 'Window Tint'){
                $blog->status = 'Final';
            }
            $blog->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
