<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contributors;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContributorController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // dd("die");
        $contributors = Contributors::orderBy('name', 'Asc')->get();
        return $this->success(['contributors' => $contributors]);
    }

    public function show($id)
    {
        $contributors = Contributors::find($id);
        return $this->success(['contributors' => $contributors]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if (Contributors::where('name', '=', $request->name)->exists()) {

            return $this->error("data already exist");
        } else {
            $contributors = new Contributors;
            $contributors->name = $request->name;
            $contributors->save();

            return $this->success(['contributors' => $contributors]);
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if (Contributors::where('name', $request->name )->exists()) {
            return $this->error("data ready exist");
        } else {
            $contributors = Contributors::find($id);
            $contributors->name = $request->name;
            $contributors->save();

            return $this->success(['contributors' => $contributors]);
        }
    }


    public function destroy($id)
    {
      $contributors = Contributors::destroy($id);
      return $this->success(['contributors' => $contributors]);
    }


    public function search($name)
    {
        $contributors = Contributors::where('name', 'like', '%' . $name . '%')->get();
        return $this->success(['contributors' => $contributors]);
    }
}
