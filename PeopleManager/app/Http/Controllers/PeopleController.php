<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Http\JsonResponse;

class PeopleController extends Controller
{
    public function create(Request $request)
    {
        
    }

    public function show()
    {
        return response() -> json(People::all(), 200);
    }

    public function index($id)
    {
        $res = People::find($id);

        if($res)
            return response() -> json($res, 200);
        else
            return response() -> json(['message' => 'res not found'], 204);
    }

    public function update(Request $request, $id)
    {
        $res = People::find($id);

        if (!$res) {
            return response()->json(['error' => 'res not found'], 204);
        }

        $res->update($request->all());

        return response()->json($res);
    }

    public function delete($id)
    {
        $res = People::find($id);

        if (!$res) {
            return response()->json(['error' => 'res not found'], 204);
        }

        $res->delete();
        if ($res) {
            return response()->json(['message' => 'res deleted'], 200);
        }
        else
            return response()->json(['message' => 'Failed to delete res'], 200);
    }
}
