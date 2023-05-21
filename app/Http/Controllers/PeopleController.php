<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Http\JsonResponse;

class PeopleController extends Controller
{
    public function create(Request $request)
    {
        $res = People::create($request->all());
        return response()->json($res, 201);
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
            return response() -> json(['error' => 'Person not found'], 204);
    }

    public function update(Request $request, $id)
    {
        $person = People::find($id);
        
        if (!$person) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $res = People::where('Id', $id)->update($request->all());

        if($res)
            return response() -> json(['message' => 'Person updated!'], 200);
        else
            return response()->json(['error' => 'Failed to update person'], 304);
    }

    public function delete($id)
    {
        $res = People::find($id);

        if (!$res) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        People::where('Id', $id)->delete();
        if ($res) {
            return response()->json(['message' => 'Person deleted'], 204);
        }
        else
            return response()->json(['error' => 'Failed to delete person'], 304);
    }
}
