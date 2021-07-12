<?php

    use Illuminate\Routing\Controller as BaseController;

    class DonorController extends BaseController{

        public function view(){
            $session_id = session('donors_id');
            $donor=Donor::find($session_id);
            
            if(!isset($donor))
                return view('login');
            return view('donatori')->with('donor', $donor);
            
        }

        public function donazioni(){
            $donor_id= session('donors_id');
            $donations = Donation::all()->where('cai', $donor_id);
            return $donations;
        }

        public function vediPren(){
            $donor_id = session('donors_id');
            $pren = Prenotation::join("sedis", "sedis.id", "=", "prenotations.codsede")
                ->where('cai', $donor_id)->get([
                    'prenotations.id',
                    'sedis.citta',
                    'sedis.via',
                    'prenotations.data'
                ]);
            return $pren;
        }

        public function effPren(){
            $sedi = Sedi::all();
            return $sedi;
        }

        public function prenota(){
            $donor_id = session('donors_id');
            $request = request();
            Prenotation::create([
                'id'=>rand(2, 9999),
                'cai'=>$donor_id,
                'data'=>$request->ndata,
                'codsede'=>$request->sede
            ]);
            return redirect ("/donatori");
        }

        public function modDati(){
            $donor_id = session('donors_id');
            $request = request();
            Donor::where("id", $donor_id)->update([
                'telefono'=>$request->telefono,
                'dataNascita'=>$request->data,
                'citta'=>$request->città,
                'via'=>$request->via,
                'peso'=>$request->peso
            ]);
            return redirect("/donatori");
        }
    }
?>