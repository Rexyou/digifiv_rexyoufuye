<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finalResponse = [
            'status'=> true,
            'data'=> [],
            'msg' => true,
            'code' => 200
        ];

        try{

            $result = Inventory::orderByDesc('id')->paginate(5);
            if(!empty($result)){
                $randomList = [];
               foreach($result as $key => $value){
                $randomList[] = $key;
               }
               $randomKeys=array_rand($randomList, 3);
              
               foreach($randomKeys as $key2 => $value2){
                $quantity = $result[$value2]->quantity;
                $newQuantity = $quantity - 1;
                $result[$value2]->quantity = $newQuantity;
               }
            }
            $finalResponse['data'] = $result ?? [];

        }
        catch (\Exception $e){

            $finalResponse['status'] = false;
            $finalResponse['code'] = $e->getCode();
            $finalResponse['msg'] = $e->getMessage();

        }

        return response()->json($finalResponse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $finalResponse = [
            'status'=> true,
            'data'=> [],
            'msg' => true,
            'code' => 200
        ];

        try{

            // Checker
            if(count($request->all()) == 0) {
                throw new \Exception("Request empty", 501);
            }

            if($request->has('product_name') == null && $request->has('product_description') == null && $request->has('quantity') == null) {
                throw new \Exception("Input missing", 501);
            }

            $result = Inventory::create([
                'product_name' => $request['product_name'],
                'product_description' => $request['product_description'],
                'quantity' => $request['quantity']
            ]);

            $finalResponse['data']=$result;

        }
        catch (\Exception $e){

            $finalResponse['status'] = false;
            $finalResponse['code'] = $e->getCode();
            $finalResponse['msg'] = $e->getMessage();

        }

        return response()->json($finalResponse);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
