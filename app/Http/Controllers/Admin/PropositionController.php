<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proposition;
use App\Product;
use App\User;
use App\Request as Req;
use Illuminate\Support\Facades\Auth;

class PropositionController extends Controller
{
    /**
     * show propositions
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function show($id)
    {
        $propositions = Proposition::where('user_id', $id)->get();
        $user = User::find($id);

        return view('admin.proposition', [
            'propositions' => $propositions,
            'user' => $user
        ]);
    }

    /**
     * propositions selct
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function select($id)
    {
        $products = Product::all();
        return view('admin.products-select', [
            'products' => $products,
            'id' => $id,
        ]);
    }

    /**
     * propositions add
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function add(Request $request, $id)
    {
        // dd($request->id);
        $propositions_id = $request->id;
        $request = Req::find($id);
        $request->status = 1;
        $request->save();
        foreach($propositions_id as $prop_id)
        {
            Proposition::create([
                'user_id' => $request->user_id,
                'product_id' => $prop_id,
                'request_id' => $id
            ]);
        }
        
        return redirect()->route('admin.requests.show');
    }

    /**
     * propositions selct
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function delete($id)
    {
        $proposition = Proposition::find($id);
        Proposition::find($id)->delete();

        $requestHasPropositions = Proposition::where('request_id', $proposition->request_id)->get();

        // dd(count($requestHasPropositions) === 0);
        
        if(count($requestHasPropositions) === 0)
        {
            $request = Req::find($proposition->request_id);
            $request->status = 0;
            $request->save();
        }
        return back();
    }
}
