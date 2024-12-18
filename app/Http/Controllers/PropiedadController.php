<?php

namespace App\Http\Controllers;

use App\Models\galeria;
use Illuminate\Support\Facades\Storage;
use App\Models\Propiedad;
use Faker\Core\Number;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        $data=$request->all();
        $objetopropiedad['titulo']=$data['titulo'];
        $objetopropiedad['tipo']=$data['tipo'];
        $objetopropiedad['operacion']=$data['operacion'];
        $objetopropiedad['forma_de_pago']=$data['forma_de_pago'];
        $objetopropiedad['metraje']=$data['metraje'];
        $objetopropiedad['habitaciones']=$data['habitaciones'];
        $objetopropiedad['baños']=$data['baños'];
        $objetopropiedad['cocheras']=$data['cochera'];
        $objetopropiedad['descripcion_detallada']=$data['descripcion_detallada'];
        $objetopropiedad['telefono_contacto']=$data['telefono_contacto'];
        $objetopropiedad['email_contacto']=$data['email_contacto'];
        $objetopropiedad['nombre_contacto']=$data['nombre_contacto'];
        
        if(isset($data['publicada'])){
            if($data['publicada']=='on'){
                $objetopropiedad['publicada']=true;
            }
        }
        else{
            $objetopropiedad['publicada']=false;
        }

            $objetopropiedad['fotos']='';

            if(isset($data['video'])){
                $file = $request->file('video');
                $filename=$file->getClientOriginalName();
                $path = $file->store('public/propiedades/');
                 $videourl = Storage::url($path);
                 $objetopropiedad['video']=$videourl;
        
                }

                $r=Propiedad::create($objetopropiedad);
                if(isset($data['fotos'])){
                    foreach($data['fotos'] as $foto){
                    $filename=$foto->getClientOriginalName();
                    $path = $foto->store('public/propiedades/');
                     $imagenurl = Storage::url($path);
                     $objetogaleria['imagen']=$imagenurl;
                     $objetogaleria['propiedad_id']=$r->id;
                     galeria::create($objetogaleria);
                     
                     
                }
                    }
        
                $propiedades = Propiedad::all(); // Obtiene todas las propiedades

                return view('dashboard',['propiedades'=>$propiedades]);
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show($propiedad_id)
    {
        $propiedad = Propiedad::where('titulo', $propiedad_id)->with('galerias')->get();
        if(isset($propiedad[0])){
            return view('propiedades.show',['propiedad'=>$propiedad[0]]);
        }else{

            return view('propiedades.error');
   
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit( $propiedad_id)
    {
        $propiedad = Propiedad::where('titulo', $propiedad_id)->with('galerias')->get();
        
        return view('propiedades.edit',['propiedad'=>$propiedad[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {
        $data=$request->all();
        $objetopropiedad['titulo']=$data['titulo'];
        $objetopropiedad['tipo']=$data['tipo'];
        $objetopropiedad['operacion']=$data['operacion'];
        $objetopropiedad['forma_de_pago']=$data['forma_de_pago'];
        $objetopropiedad['metraje']=$data['metraje'];
        $objetopropiedad['habitaciones']=$data['habitaciones'];
        $objetopropiedad['baños']=$data['baños'];
        $objetopropiedad['cocheras']=$data['cochera'];
        $objetopropiedad['descripcion_detallada']=$data['descripcion_detallada'];
        $objetopropiedad['telefono_contacto']=$data['telefono_contacto'];
        $objetopropiedad['email_contacto']=$data['email_contacto'];
        $objetopropiedad['nombre_contacto']=$data['nombre_contacto'];

        if(isset($data['publicada'])){
            if($data['publicada']=='on'){
                $objetopropiedad['publicada']=true;
            }
        }
        else{
            $objetopropiedad['publicada']=false;
        }

            $objetopropiedad['fotos']='';

            if(isset($data['video'])){
                $file = $request->file('video');
                $filename=$file->getClientOriginalName();
                $path = $file->store('public/propiedades/');
                 $videourl = Storage::url($path);
                 $objetopropiedad['video']=$videourl;
        
                }
                $propiedadseleccionada = Propiedad::find( $data['id_propiedad']);

                $r=$propiedadseleccionada->update($objetopropiedad);
                if(isset($data['fotos'])){
                    foreach($data['fotos'] as $foto){
                    $filename=$foto->getClientOriginalName();
                    $path = $foto->store('public/propiedades/');
                     $imagenurl = Storage::url($path);
                     $objetogaleria['imagen']=$imagenurl;
                     $objetogaleria['propiedad_id']=$data['id_propiedad'];
                     galeria::create($objetogaleria);
                     
                     
                }
                    }

                    $propiedad = Propiedad::where('id', $data['id_propiedad'])->with('galerias')->get();
        
                    return view('propiedades.show',['propiedad'=>$propiedad[0]]);
                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedad $propiedad)
    {
        //
    }
    
}
