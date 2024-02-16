<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

        public function index(){

            $producto = Producto::all();
        
            return view('productos.index', compact('producto'));
        
        }

       public function create(){
        
            return view("productos.create");
        
        }
        public function store(Request $request){
            $products = new Producto();
            $products->producto = $request->producto;
            $products->marca = $request->marca;
            $products->localidad = $request->localidad;
            $products->costo = $request->costo;
            $products->super = $request->super;
           $products->save();
        }
    
        public function show($id){
            $products = Producto::find($id);
          
            $productoMasBarato = Producto::table('products')
            ->where('localidad',$products->localidad)
            ->where('name',$products->producto )
            ->orderBy('costo',$products->costo)
            ->first();

        if ($productoMasBarato) {
            return view('productos.show', compact('productoMasBarato'));
        } else {
            return view('productos.show', [
                'productoMasBarato' => null,
                'mensaje' => 'No se encontró el producto en la localidad seleccionada.',
            ]);
        }   
       
     
        return redirect()->route('productos.show', $products->id);
    
        }
    
        public function edit(Producto $producto){
            return view('productos.edit', compact('products'));
        }
        
    
        public function update(Request $request, Producto $producto){
    
            $request->validate([
                'name'=> 'required',
                'super'=> 'required',
                'costo'=>'required'
            ]);
            $producto->name = $request->name;
            $producto->tipo = $request->tipo;
            $producto->costo = $request->costo;
    
            $producto->save();
            return redirect()->route('productos.show', $producto);
        }
    
        public function destroy(Producto $producto){
            $producto->delete();
            return redirect()->route('productos.index');
        }
    
     
}
