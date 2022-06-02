<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'f_a_q_s';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['domanda', 'risposta'];

    
    public function returnFaqs(){
        return FAQ::all();
        }
        
    public function getFaqById (int $id) {
        $faq = Faq::where('id', $id);
        return $faq;
    }    
}


