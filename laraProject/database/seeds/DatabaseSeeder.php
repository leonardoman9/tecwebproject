<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


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
                    [               'id_alloggio' => 1,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> '30',
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 1,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                                     'timestamp' =>  '2022-05-03 20:24:23'
                    ],
                     [  'id_alloggio' => 2,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 400,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 2,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-04 20:24:23'
                    ],
                     [  'id_alloggio' => 3,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 4,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-05 20:24:23'
                    ],
                     [   'id_alloggio' => 4,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 3,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-06 20:24:23'
                         
                    ],
                    [               'id_alloggio' => 5,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> '30',
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 1,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                                     'timestamp' =>  '2022-05-03 20:24:23'
                    ],
                     [  'id_alloggio' => 6,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 400,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 2,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-04 20:24:23'
                    ],
                     [  'id_alloggio' => 7,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 4,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-05 20:24:23'
                    ],
                     [   'id_alloggio' => 8,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 3,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-06 20:24:23'
                         
                    ],
                    [               'id_alloggio' => 9,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> '30',
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 1,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                                     'timestamp' =>  '2022-05-03 20:24:23'
                    ],
                     [  'id_alloggio' => 10,
                                    'tipologia'  =>  0, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 400,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 2,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-04 20:24:23'
                    ],
                     [  'id_alloggio' => 11,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 4,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-05 20:24:23'
                    ],
                     [   'id_alloggio' => 12,
                                    'tipologia'  =>  1, // 0 = posto letto, 1 = appartamento
                                     'data_inserimento' => '21-05-2022',
                                     'canone' => 350,
                                     'dimensione'=> 30,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'periodo_di_locazione'=> '4 mesi',
                                     'numero_posto_letto_totale' => 3,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'etat'=> 'prova',
                         
                      'timestamp' =>  '2022-05-06 20:24:23'
                         
                    ],
                    
                    
                   
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
    
        DB::table('users')->insert([
                 [
                     'id' => 1,
                     'username' => 'locatore',
                     'email_verified_at' => null,
                     'nome' => 'locatore',
                     'password' => Hash::make('locatore'),
                     'role' => 'locatore'
                 ],
            [
                     'id' => 2,
                     'username' => 'admin',
                     'email_verified_at' => null,
                     'nome' => 'admin',
                     'password' => Hash::make('admin'),
                     'role' => 'admin'
                 ],
            [
                     'id' => 3,
                     'username' => 'locatario',
                     'email_verified_at' => null,
                     'nome' => 'locatario',
                     'password' => Hash::make('locatario'),
                     'role' => 'locatario'
                 ]
                ]);

        DB::table('messaggis')->insert(
                       [
                         [
                      'id' => 0,
                      'mittente' => 'leona',
                      'destinatario' => 'ggigi',
                      'testo' => 'Buongiorno, questo è un testo di esempio',
                      'timestamp' =>  '2022-05-03 20:24:23'
                  ],
                   [
                      'id' => 3,
                      'mittente' => 'ggigi',
                      'destinatario' => 'leona',
                      'testo' => 'Salve a lei, grazie per la considerazione',
                      'timestamp' => '2022-05-03 20:25:30'
                  ],
                ]
        ); 
        
        DB::table('fotos')->insert(
                       [
                         [
                             'foto_id' => 1,
                      'path' => 'public\foto\app1.jpg',
                      'id_alloggio' => 2,
                      
                  ],
                   [
                             'foto_id' => 2,
                      'path' => 'public\foto\66671136.jpg',
                      'id_alloggio' => 2,
                      
                  ],
                           [
                             'foto_id' => 3,
                      'path' => 'public\foto\4dss.jpg',
                      'id_alloggio' => 3,
                      
                  ],
                           [
                             'foto_id' => 4,
                      'path' => 'public\foto\hi.jpg',
                      'id_alloggio' => 4,
                      
                  ],
                           [
                             'foto_id' => 5,
                      'path' => 'public\foto\huehuo.jpg',
                      'id_alloggio' => 5,
                      
                  ],
                           
                ]
        ); 
        
    }
        
        // $this->call(UsersTableSeeder::class);
    
}
