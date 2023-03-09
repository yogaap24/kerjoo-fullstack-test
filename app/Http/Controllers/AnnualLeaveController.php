<?php

namespace App\Http\Controllers;

use App\AnnualLeave;
use App\Http\Requests\StoreAnnualLeaveRequest;
use Illuminate\Support\Facades\DB;

class AnnualLeaveController extends Controller
{
    public function index()
    {
        return response()->json([
            'status'    => 200,
            'data'   => AnnualLeave::all()
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'status'    => 200,
            'data'      => AnnualLeave::where('id', $id)->first()
        ]);
    }

    public function store(StoreAnnualLeaveRequest $request)
    {
        try {
            $row = AnnualLeave::create([
                'user_id'     => $request->user_id,
                'reason'      => $request->reason,
                'start_date'  => $request->start_date,
                'end_date'    => $request->end_date,
            ]);

            return response()->json([
                'status'    => 200,
                'message'   => "Annual Leave Created Succes",
                'data'      => $row
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => $exception->getCode(),
                'message'=> $exception->getMessage(),
                'data'   => null
            ]);
        }
    }
}
