<?php

    use Illuminate\Routing\Controller as BaseController;

    class PersController extends BaseController{

        public function view(){
            $session_id = session('perss_id');
            $pers=Pers::find($session_id);
            
            if(!isset($pers))
                return view('login');
            return view('personale');
        }

        public function orari(){
            $pers_id = session("perss_id");
            $perd = Pers::where("id", $pers_id)->first();
            if($perd->tipo == "medico"){
                $sedi = DB::table("sede_att_med")
                    ->join("pers", "pers.id", "=", "sede_att_med.codmed")
                    ->join("sedis", "sedis.id", "=", "sede_att_med.codsede")
                    ->where("codmed", $pers_id)->get([
                        'sedis.id as codsede',
                        'sedis.nome as nome',
                        'pers.tipo as tipo'
                    ]);
                return $sedi;
            }else{
                $sedi = DB::table("sedi_inf")
                ->join("pers", "pers.id", "=", "sedi_inf.codinf")
                ->join("sedis", "sedis.id", "=", "sedi_inf.codsede")
                ->where("codinf", $pers_id)->get([
                    'sedis.id as codsede',
                    'sedis.nome as nome',
                    'pers.tipo as tipo',
                    'sedi_inf.giorni_lav as giorni'
                ]);
                return $sedi;
            }
            
        }

        public function carica(){
            $pers_id = session("perss_id");
            $request= request();
            $med = Pers::where('id', $pers_id)->first();
            if($med->tipo == "medico"){
                Analisi::create([
                    'id'=>rand(2, 9999),
                    'codmed'=> $pers_id,
                    'coddona'=>$request->coddona,
                    'malinf'=>$request->malinf,
                    'valemo'=>$request->valemo
                ]);
            }
            return redirect("/personale");
        }

        public function ricerca($query){
            $pers=Pers::all()->where('nome','like', $query);
            return $pers;
        }
    }
?>