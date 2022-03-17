<?php

namespace App\Http\Controllers;

use App\Http\Requests\RealStateRequestPost;
use App\Models\RealState;
use App\Services\ISOCodeService;
use Illuminate\Http\Request;

class RealStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RealState::select('id','name','real_state_type','city','country')->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $realStateType = $request->input('real_state_type');
        $bathrooms =  $request->input('bathrooms');
        $isoCode = (new ISOCodeService())->validateISO3166Code($request->input('country'));
        $validated = $request->validate([
            'name' => 'required',
            'real_state_type' => 'required',
            'street' => 'required',
            'external_number' => 'required',
            'internal_number' => $realStateType === 'department'  || $realStateType === 'commercial_ground'   ? 'required' : 'nullable',
            'neighborhood' => 'required',
            'city' => 'required',
            'country' => [
                function ($attribute, $value, $fail) use($isoCode) {
                    if (empty($isoCode)) {
                        $fail('The '.$attribute.' is not ISO3166.');
                    }
                },
            ] ,
            'rooms' => 'required',
            'bathrooms' => 'required',
            'comments' => 'nullable',
        ]);
        $realState = RealState::create($validated);

        return response()->json(['msg' => 'Real state stored', 'data' =>$realState ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $realState = RealState::find($id);
        if(empty($realState)){

            return response()->json(['msg' => 'Not found', 'data' => [] ]);
        }
        return response()->json(['msg' => 'Found', 'data' => $realState ], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $realStateType = $request->input('real_state_type');
        $bathrooms =  $request->input('bathrooms');
        $isoCode = (new ISOCodeService())->validateISO3166Code($request->input('country'));
        $validated = $request->validate([
            'name' => 'required',
            'real_state_type' => 'required',
            'street' => 'required',
            'external_number' => 'required',
            'internal_number' => $realStateType === 'department'  || $realStateType === 'commercial_ground'   ? 'required' : 'nullable',
            'neighborhood' => 'required',
            'city' => 'required',
            'country' => [
                function ($attribute, $value, $fail) use($isoCode) {
                    if (empty($isoCode)) {
                        $fail('The '.$attribute.' is not ISO3166.');
                    }
                },
            ] ,
            'rooms' => 'required',
            'bathrooms' => 'required',
            'comments' => 'nullable',
        ]);
        $realState = RealState::find($id);
        $realStateRes = $realState->update($validated);
        if (empty($realStateRes)) {
            # code...
            return response()->json(['msg' => 'Error updating', 'data' => []], 403);

        }
        return response()->json(['msg' => 'successfully updated ', 'data' => $realState], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $realState = RealState::find($id);
        if (!empty($realState)){
            $realState->delete();
            return response()->json(['msg' => 'Successfully deleted', 'data' => $realState ],200);
        }

        return response()->json(['msg' => 'Error deleting this entry', 'data' => []], 403);


    }
}
