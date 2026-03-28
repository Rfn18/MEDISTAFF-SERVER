<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\AttendanceSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceSettingController extends Controller
{
    public function index()
    {
        $attandance_setting = AttendanceSetting::paginate(10);

        if ($attandance_setting->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data attendance setting.', $attandance_setting);
    } 

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'rs_name' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'radius_meters' => 'required|integer',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $attandance_setting = AttendanceSetting::create(request()->all());

        return new ApiResources(true, 'Data attendance setting berhasil ditambahkan.', $attandance_setting);
    }

    public function update(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'rs_name' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'radius_meters' => 'required|integer',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $attandance_setting = AttendanceSetting::find($id);
        if (!$attandance_setting) {
            return response()->json([
                'status' => false,
                'message' => 'Data attendance setting tidak ditemukan.'
            ], 404);
        }

        $attandance_setting->update(request()->all());

        return new ApiResources(true, 'Data attendance setting berhasil diubah.', $attandance_setting);
    }

    public function show($id) {
        $attandance_setting = AttendanceSetting::find($id);
        if (!$attandance_setting) {
            return response()->json([
                'status' => false,
                'message' => 'Data attendance setting tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data attendance setting.', $attandance_setting);
    }

    public function destroy($id) {
        $attandance_setting = AttendanceSetting::find($id);
        if (!$attandance_setting) {
            return response()->json([
                'status' => false,
                'message' => 'Data attendance setting tidak ditemukan.'
            ], 404);
        }

        $attandance_setting->delete();
        return new ApiResources(true, 'Data attendance setting berhasil dihapus.', $attandance_setting);
    }

}
