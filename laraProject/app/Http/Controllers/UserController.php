<?php

namespace App\Http\Controllers;


use App\Models\User;
use Auth;
use App\Models\FAQ;
use App\Models\alloggio;
use App\Models\foto;
use App\Models\Messaggi;
use App\Models\servizio;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Http\Requests\Request;
use App\Http\Requests\MessaggioRequest;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;



class userController extends Controller {

    
    protected $_faqs;
    protected $FAQ;
    
    public function __construct() {
        $this->middleware('auth');
        $this->FAQ = new FAQ;
    }

    public function index() {
        return view('user');
    }

    public function showProfile() {
        $id = Auth::user()->id;
        
        return view('profilo')
            ->with('auth', Auth::user());
                        
    }

    //Restituisce la pagina dove si può modificare il profilo dell'utente
    public function showModificaProfilo() {
        $utente = Auth::user();
        return view('modifica_profilo')
                        ->with('utente', $utente);
                       
    }

    public function modificaProfilo(UpdateProfileRequest $request) {
        $utente = Auth::user();

        if ($request->nome != null) {
            $utente->update([
                'nome' => $request->nome,
            ]);
        }
        if ($request->password != null) {
            $utente->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect(route('profilo'));
    }
    
    public function gestioneFaq(){
        $faq = new FAQ();
        return view('adminsFaqs')
             ->with('allFaqs', $faq->returnFaqs());
    }
        
    //Metodo che crea una faq
    public function creaFaq(FaqCreateRequest $request) {
        $faq = new FAQ();
        $faq->fill($request->all());
        $faq->save();
        return view('adminsFaqs')
                ->with('allFaqs', $faq->returnFaqs());
    }
    
    public function showModificaFaq($id) {
        $faqAll= new FAQ();
        $faq = $this->FAQ->getFaqById($id)->first();
        if ($faq == null) {
            return redirect(route('faq'))->with('error', 'Non puoi modificare una faq inesistente!');
        }
        return view('modifica_faq')
                ->with('faq', $faq);
    }
   
   public function modificaFaq(FaqUpdateRequest $request, $id) {
        $faq = $this->FAQ->getFaqById($id);
        $faqAll = new FAQ();
        if ($request->domanda != null) {
            $faq->update([
                'domanda' => $request->domanda,
            ]);
        }
        if ($request->risposta != null) {
            $faq->update([
                'risposta' => $request->risposta,
            ]);
        }
        return view ('adminsFaqs')
                ->with('allFaqs', $faqAll->returnFaqs());
    }
    
    public function eliminaFaq($id) {
        $faqAll = new FAQ();
        $faq = $this->FAQ->getFaqById($id)->first();
        if ($faq == null) {
            return view ('adminsFaqs')
            ->with('allFaqs', $faqAll->returnFaqs());;
//            return redirect(route('adminsFaqs'))->with('error', 'Non puoi eliminare una faq inesistente!');
        } else {
            $faq->delete();
           return view ('adminsFaqs')
            ->with('allFaqs', $faqAll->returnFaqs());; 
//            return redirect(route('adminsFaqs'))->with('message', 'Faq eliminata con successo!');
        }
    }
   
    
    
    public function showStats(){
        return view('statsPage');
    }
    public function showMsg(){
        $messaggi = new messaggi();
        $sentMessages = $messaggi::where('mittente', '=', Auth::user()->username)
                ->orderBy('timestamp', 'desc')
                ->get();
        $receivedMessages = $messaggi::where('destinatario', '=', Auth::user()->username)
                ->orderBy('timestamp', 'desc')
                ->get();
        
        $myReceivers = $messaggi::select('destinatario')->where('mittente','=', Auth::user()->username)
                ->distinct()
                ->get();
                
                           
        return view('msgPage')
                ->with('sentMessages', $sentMessages)
                ->with('receivedMessages', $receivedMessages)
                ->with('destinatari', $myReceivers);
        ;
    }

public function showAnn($ann) {
        $alloggio = new alloggio();
        $foto = new foto();
        $servizio = new servizio();
        $toShow = $alloggio::where('id_alloggio', '=', $ann)->first();
        if($toShow === null) {
            return redirect('/');
        }
        $selectedServizio=$servizio::where('id_alloggio','=',$ann)->first();
        $poster = $alloggio::where('id_alloggio', '=', $ann);
        $selectedFoto = $foto::where('id_alloggio', '=', $toShow->id_alloggio)->first();
        if($selectedFoto === null){
            $selectedFoto=0;
        }
        return view('annuncioPage')
                ->with('ann', $toShow)
                ->with('servizi', $selectedServizio)
                ->with('poster', $poster)
                ->with('foto', $selectedFoto);
   }
   
   
   public function showFaqPage($faq) {
       $faqs = new FAQ();
       $selectedFaq= $faqs::where('id', '=', $faq)->get();
       return view('gestisciFaq')
       ->with('faq', $selectedFaq);
   }
    public function findPosterByAnnId($annId){
       $alloggio = new alloggio();
       $selected = $alloggio::where('id_alloggio', '=', $annId)->first();
       $userName = $selected->value('added_by');
       return $userName;
    }
   public function inviaMessaggio($annId){
       $username = $this->findPosterByAnnId($annId);
       return view('messaggio')
        ->with('locUsername', $username)
        ->with('annId', $annId);
   }
   public function messInviato(MessaggioRequest $request){
                        //$annId, $sender, $receiver, $mess
       $messaggi = new messaggi();
       $messaggi->mittente = $request['sender'];
       $messaggi->destinatario = $request['receiver'];
       $messaggi->testo = $request['mess'];
       $messaggi->timestamp= Carbon::now()->toDateTimeString();
       $messaggi->id_alloggio = $request['annId'];
       $messaggi->save();
       return $this->showMsg();
   }
   public function getSentMessagesByUserId($sender){
      
       $messaggi = new messaggi();
       $selectedMessaggi = $messaggi::where('mittente', '=', Auth::user()->username);
       return $selectedMessaggi;
   }
   public function getReceivedMessagesByUserId($receiver){
      
       $messaggi = new messaggi();
       $selectedMessaggi = $messaggi->where('destinatario', '=', Auth::user()->username);
       return $selectedMessaggi;
   }
 
   public function showDestMsgPage($dest){
       $auth = Auth::user();
       $messaggi = new messaggi();
       $selectedMessaggiA = $messaggi
               ->where('mittente', '=', $auth->username)
               ->where('destinatario', '=', $dest);
       $selectedMessaggiB = $messaggi
               ->where('mittente', '=', $dest)
               ->where('destinatario', '=', $auth->username)
               ->union($selectedMessaggiA)
               ->orderBy('timestamp', 'desc')
               ->get();
      return view('msgPageDest')
            ->with('msgs', $selectedMessaggiB);
   }
   public function rispondiMsg($msg){
       $messaggi = new messaggi();
       $selectedAnn = $messaggi::where('id', $msg)->first();
       if (Auth::user()->username == $selectedAnn->destinatario){
              $destinatario = $selectedAnn->mittente;
       }else  {$destinatario = $selectedAnn->destinatario;}
       return view('messaggio')
        ->with('locUsername', $destinatario)
        ->with('annId', $selectedAnn->id_alloggio);
   }
}


