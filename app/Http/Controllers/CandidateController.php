<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Wallet;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{

    // index page load
    public function index(){
        // get all candidate data
        $candidates= Candidate::all();
        return response() -> json($candidates, 200);
    }

    // get coins methdo
    public function getCoins(){
        // get wallet data
        $coins = Wallet::findOrFail(1) -> coins;
        return response() -> json($coins, 200);
    }

    
    /**
     *  @todo
     *  contact with candidate
     *  reduce coins
     *  email send
     *  validation
     */
    public function contactCandidate($id){

        // get candidate data 
        $allData = Candidate::find($id);
            // dd($allData); die;

        // candidate validation checking & Update data
        if($allData -> contact == 0){

            // coins checking
            $allCoins = Wallet::find(1) -> coins;
            if($allCoins < 5){
                // respose back
                return [
                    "message"   => "You have not enough coins",
                    "type"      => "Warning"
                ];
            }

            // reduceing coin & update
            $dueCoin = $allCoins - 5;
                // dd($dueCoin); die;

            Wallet::find(1) -> update([
                'coins'     => $dueCoin 
            ]);

            // update contact status
            $allData -> contact = 1;
            $allData -> update();

            // mail message
            $email = $allData -> email;
            $messageData = [
                'name'          => $allData -> name,
                'email'         => $email,
                'msg'           => 'We want to offer You for this job',
            ];
            

            // send email
            Mail::send('email.email', $messageData, function($message) use($email) {
                $message -> to($email) -> subject('Job Offer');
            });
            
            // respose back
            return [
                "message"   => "Contact with Candidate",
                "type"      => "success"
            ];
        }else {
            // respose back
            return [
                "message"   => "This candidate on progress to hire",
                "type"      => "error"
            ];
        }

    }

    /**
     *  @todo
     *  candidate hired
     *  refill coins
     *  email send
     *  validation
     */
    public function hireCandidate($id){
        
        // get candidate data 
        $allData = Candidate::find($id);
            // dd($allData); die;

        // candidate validation checking & Update data
        if($allData -> contact == 1 && $allData -> hired == 0){

            // coins checking
            $allCoins = Wallet::find(1) -> coins;

            // refill coin & update
            $dueCoin = $allCoins + 5;
                // dd($dueCoin); die;
            Wallet::find(1) -> update([
                'coins'     => $dueCoin 
            ]);

            // update contact status
            $allData -> hired = 1;
            $allData -> update();

            // mail message
            $email = $allData -> email;
            $messageData = [
                'name'           => $allData -> name,
                'email'          => $email,
                'msg'            => 'You are hired by authority',
            ];
            

            // send email
            Mail::send('email.email', $messageData, function($message) use($email) {
                $message -> to($email) -> subject('Appointment Letter !');
            });
            
            // respose back
            return [
                "message"   => "Hired this candidate",
                "type"      => "success"
            ];
        }else if($allData -> hired == 1){
            return [
                "message"   => "Already Hired",
                "type"      => "warn"
            ];
        }else {
            // respose back
            return [
                "message"   => "Please, Contact First !",
                "type"      => "error"
            ];
        }
        
    }


}
