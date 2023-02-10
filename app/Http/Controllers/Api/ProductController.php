<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function index(){
        return response()->json($this->product->paginate(3));
    }

    public function show($id){
        $product = $this->product->find($id);
        $response = ApiError::errorMessage('Produto não encontrado!', 4040);
        if (!$product) return response()->json($response, 404);

        $data = ['data' => $product];
        return response()->json($data);
    }

    public function store(Request $request){

        try {
            $productData = $request->all();
            $this->product->create($productData);
            
            $response = ['data' => ['msg' => 'Produto criado com sucesso!']];
            return response()->json($response, 201);
        } catch (\Exception $e) {
            if (config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de criar.', 1010), 500);
        }
    }

    public function update(Request $request, $id){

        try {
            $productData = $request->all();
            $product = $this->product->find($id);
            $product->update($productData);
            
            $response = ['data' => ['msg' => 'Produto atualizado com sucesso!']];
            return response()->json($response, 201);
        } catch (\Exception $e) {
            if (config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1011), 500);
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de atualizar.', 1011), 500);
        }
    }

    public function delete($id){
        try {
            $product = Product::find($id);
            if(!empty($product)){
                $response = ['data' => ['msg' => 'Produto: ['.$product->name. '] removido com sucesso!']];
                $product->delete();
                return response()->json($response, 200);
            }else{
                return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de deletar.', 1012), 500);
            }
        } catch (\Exception $e) {
            if (config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1012), 500);
            }
        }
    }
}
