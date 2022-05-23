<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alloggios')->insert(
                [
                    [               'id_alloggio' => 2,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> '30',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 1,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                    ],
                     [  'id_alloggio' => 3,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 400,
                                     'dimensione'=> 30,
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 2,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                    ],
                     [  'id_alloggio' => 4,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 4,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'etat'=> 'prova',
                    ],
                     [   'id_alloggio' => 5,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 3,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'etat'=> 'prova',
                    ]
                    
                   
                ]);
        DB::table('f_a_q_s')->insert([  
            [
                'id' => 3,
                'domanda' => 'Come funziona il sito?',
                'risposta' => 'Il sito permette la locazione di strutture da parte dei locatori, visibili poi da potenziali locatari interessati a occupare la struttura per un periodo definito.',
            ],
            [
                'id' => 4,
                'domanda' => 'Come faccio a registrarmi?',
                'risposta' => 'Per registrarsi basta accedere alla sezione "REGISTRATI" presente nella barra di navigazione in alto a destra.',
            ],
            [
                'id' => 5,
                'domanda' => 'Come contatto il locatore?',
                'risposta' => 'Sarà possibile contattare il locatore con un sistema di messaggistica, una volta registrati sul portale apposito.',
            ]
        ]);
    }
        
        // $this->call(UsersTableSeeder::class);
    
}
