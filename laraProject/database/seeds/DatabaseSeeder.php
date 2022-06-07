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
                                    'tipologia'  =>  1, // 1 = posto letto, 2 = appartamento
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 650,
                                     'dimensione'=> 5,
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'data_inizio_locazione'=> '2022-01-01',
                                     'data_fine_locazione'=> '2022-01-01', 
                                     'numero_camere'=> null,
                                     'numero_posto_letto_totale' => null,
                                     'numero_letti_nella_camera' => 3,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                        'added_by' => 'lorelore',   
                                     'timestamp' =>  '2022-05-03 20:24:23',
                                    
                    ],
                     [  'id_alloggio' => 2,
                                    'tipologia'  =>  2, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 600,
                                     'dimensione'=> 10,
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'data_inizio_locazione'=> '2023-01-06',
                                     'data_fine_locazione'=> '2023-10-10',
                                     'numero_camere'=> 3,
                                     'numero_posto_letto_totale' => 3,
                                     'numero_letti_nella_camera' => null,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'added_by' => 'locatore',
                                     
                         
                      'timestamp' =>  '2022-05-04 20:24:23'
                    ],
                     [  'id_alloggio' => 3,
                                    'tipologia'  =>  2,
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 550,
                                     'dimensione'=> 15,
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'data_inizio_locazione'=> '2022-02-03',
                                     'data_fine_locazione'=> '2023-09-03', 
                                     'numero_camere' => 3,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => null,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'added_by' => 'locatore',
                                    
                         
                      'timestamp' =>  '2022-05-05 20:24:23'
                    ],
                     [   'id_alloggio' => 4,
                                    'tipologia'  =>  1, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 500,
                                     'dimensione'=> 20,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'data_inizio_locazione'=> '2022-06-11',
                                     'data_fine_locazione'=> '2022-09-11', 
                                     'numero_camere' => 2,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => 3,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'added_by' => 'locatore',
                                    
                         
                      'timestamp' =>  '2022-05-06 20:24:23'
                         
                    ],
                    [               'id_alloggio' => 5,
                                    'tipologia'  =>  1, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 450,
                                     'dimensione'=> 25,
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'data_inizio_locazione'=> '2022-06-05',
                                     'data_fine_locazione'=> '2023-01-05', 
                                     'numero_camere' => 2,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => 2,
                                     'descrizione' => 'Comodo posto letto in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                    'added_by' => 'lorelore',
                                     'timestamp' =>  '2022-05-07 20:24:23'
                    ],             
                     [  'id_alloggio' => 6,
                                    'tipologia'  =>  2, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 400,
                                     'dimensione'=> 30,
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'data_inizio_locazione'=> '2022-01-06',
                                     'data_fine_locazione'=> '2023-01-06', 
                                     'numero_camere' => 2,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => null,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'added_by' => 'locatore',
                      'timestamp' =>  '2022-05-08 20:24:23'
                    ],
                     [  'id_alloggio' => 7,
                                    'tipologia'  =>  1, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 350,
                                     'dimensione'=> 35,
                         
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'data_inizio_locazione'=> '2022-05-04',
                                     'data_fine_locazione'=> '2023-02-05', 
                                     'numero_camere' => 4,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => null,
                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'added_by' => 'locatore',
                      'timestamp' =>  '2022-05-09 20:24:23'
                    ],
                     [   'id_alloggio' => 8,
                                    'tipologia'  =>  2,
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 300,
                                     'dimensione'=> 40,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'data_inizio_locazione'=> '2023-01-01',
                                     'data_fine_locazione'=> '2023-12-25', 
                                     'numero_camere' => 2,
                                     'numero_posto_letto_totale' => 3,
                                     'numero_letti_nella_camera' => null,

                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'added_by' => 'lorelore',
                      'timestamp' =>  '2022-05-10 20:24:23'
                         
                    ],
                    [               'id_alloggio' => 9,
                                    'tipologia'  =>  1, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 250,
                                     'dimensione'=> 45,
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Andreini 2',
                                     'data_inizio_locazione'=> '2023-04-01',
                                     'data_fine_locazione'=> '2023-09-08', 
                                     'numero_camere' => 2,
                                     'numero_posto_letto_totale' => 4,
                                     'numero_letti_nella_camera' => 3,

                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'added_by' => 'locatore',
                                     'timestamp' =>  '2022-05-11 20:24:23'
                    ],              
                     [  'id_alloggio' => 10,
                                    'tipologia'  =>  1, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 200,
                                     'dimensione'=> 50,
                         
                                     'citta' => 'Ancona',
                                     'indirizzo'=> 'Via Rossi 2',
                                     'data_inizio_locazione'=> '2023-01-01',
                                     'data_fine_locazione'=> '2023-05-04', 
                                     'numero_camere' => 1,
                                     'numero_posto_letto_totale' => 2,
                                     'numero_letti_nella_camera' => 2,
                                     'descrizione' => 'Comodo appartamento in centro, dotato di giardino e corte personale. Disponibile un posto letto.',
                                     'added_by' => 'locatore',
                         
                      'timestamp' =>  '2022-05-12 20:24:23'
                    ],
                     [  'id_alloggio' => 11,
                                    'tipologia'  =>  2, 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 150,
                                     'dimensione'=> 55,
                         
                                     'citta' => 'Milano',
                                     'indirizzo'=> 'Piazza Roma 2',
                                     'data_inizio_locazione'=> '2023-01-01',
                                     'data_fine_locazione'=> '2023-09-05', 
                                                                          'numero_camere' => 1,
                                     'numero_posto_letto_totale' => 2,
                                     'numero_letti_nella_camera' => 2,

                                     'descrizione' => 'Appartamento 4ºpiano in condivisione con altri 2/3 inquilini in altre 2 camere. Ogni camera ha la sua chiave. Cucina e bagno in comune.
Ideale per studenti o dipendenti dell ospedale.',
                                     'added_by' => 'lorelore',
                         
                      'timestamp' =>  '2022-05-13 20:24:23'
                    ],
                     [   'id_alloggio' => 12,
                                    'tipologia'  =>  2, // 
                                     'data_inserimento' => '2022-05-21',
                                     'canone' => 100,
                                     'dimensione'=> 60,
                         
                                     'citta' => 'Torino',
                                     'indirizzo'=> 'Via Scaffoldi 20',
                                     'data_inizio_locazione'=> '2022-07-12',
                                     'data_fine_locazione'=> '2022-08-05', 
                                     'numero_camere' => 1,
                                     'numero_posto_letto_totale' => 2,
                                     'numero_letti_nella_camera' => 2,
                                     'descrizione' => 'Appartamento vista mare, disponibile da subito. no perditempo. ',
                                     'added_by' => 'locatore',
                                     'timestamp' =>  '2022-05-14 20:24:23'
                         
                    ],
                    
                    
                   
                ]);
        DB::table('f_a_q_s')->insert([  
            [
                'id' => 1,
                'domanda' => 'Come funziona il sito?',
                'risposta' => 'Il sito permette la locazione di strutture da parte dei locatori, visibili poi da potenziali locatari interessati a occupare la struttura per un periodo definito.',
            ],
            [
                'id' => 2,
                'domanda' => 'Come faccio a registrarmi?',
                'risposta' => 'Per registrarsi basta accedere alla sezione "REGISTRATI" presente nella barra di navigazione in alto a destra.',
            ],
            [
                'id' => 3,
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
                     'cognome'=> 'locatelli',
                     'genere'=> 'maschio',
                     'eta'=> 18,
                     'password' => Hash::make('locatore'),
                     'role' => 'locatore'
                 ],
            [
                     'id' => 2,
                     'username' => 'admin',
                     'email_verified_at' => null,
                     'nome' => 'admin',
                     'cognome'=> 'locatelli',
                     'genere'=> 'femmina',
                     'eta'=> 18,
                     'password' => Hash::make('admin'),
                     'role' => 'admin'
                 ],
            [
                     'id' => 3,
                     'username' => 'locatario',
                     'email_verified_at' => null,
                     'nome' => 'locatario',
                     'cognome'=> 'locatelli',
                     'genere'=> 'femmina',
                     'eta'=> 18,
                     'password' => Hash::make('locatario'),
                     'role' => 'locatario'
                 ],
            
            [
                     'id' => 4,
                     'username' => 'lorelore',
                     'email_verified_at' => null,
                     'nome' => 'Locatino',
                     'cognome'=> 'locatelli',
                     'genere'=> 'maschio',
                     'eta'=> 18,
                     'password' => Hash::make('p3NRnrh2'),
                     'role' => 'locatore'
                 ],
            [
                     'id' => 5,
                     'username' => 'lariolario',
                     'email_verified_at' => null,
                     'nome' => 'Locatello',
                     'cognome'=> 'locatoris',
                     'genere'=> 'maschio',
                     'eta'=> 18,
                     'password' => Hash::make('p3NRnrh2'),
                     'role' => 'locatario'
                 ],
            [
                     'id' => 6,
                     'username' => 'adminadmin',
                     'email_verified_at' => null,
                     'nome' => 'adminario',
                     'cognome'=> 'adminelli',
                     'genere'=> 'maschio',
                     'eta'=> 18,
                     'password' => Hash::make('p3NRnrh2'),
                     'role' => 'admin'
                 ],
                ]);

        DB::table('messaggis')->insert(
                       [
                         [
                      'id' => 0,
                      'mittente' => 'leona',
                      'destinatario' => 'ggigi',
                      'testo' => 'Buongiorno, questo è un testo di esempio',
                      'timestamp' =>  '2022-05-03 20:24:23',
                             'id_alloggio' => 50,
                  ],
                   [
                      'id' => 2,
                      'mittente' => 'ggigi',
                      'destinatario' => 'leona',
                      'testo' => 'Salve a lei, grazie per la considerazione',
                      'timestamp' => '2022-05-03 20:25:30',
                       'id_alloggio' => 50,
                  ],
                           [
                      'id' => 3,
                      'mittente' => 'lariolario',
                      'destinatario' => 'lorelore',
                      'testo' => 'Sono interessato',
                      'timestamp' => '2022-05-03 20:25:30',
                       'id_alloggio' => 1,
                  ],
                            [
                      'id' => 4,
                      'mittente' => 'lorelore',
                      'destinatario' => 'lariolario',
                      'testo' => 'Mi dispiace, non sei il benvenuto',
                      'timestamp' => '2022-05-03 20:30:30',
                       'id_alloggio' => 1,
                  ],
                           [
                      'id' => 5,
                      'mittente' => 'lariolario',
                      'destinatario' => 'lorelore',
                      'testo' => 'Peccato, alla prossima.',
                      'timestamp' => '2022-05-03 20:35:30',
                       'id_alloggio' => 1,
                  ],
                ]
        ); 
        
        DB::table('fotos')->insert(
                       [
                         [
                             'foto_id' => 1,
                      'path' => 'public\foto\4dss.jpg',
                      'id_alloggio' => 1,
                      
                  ],
                   [
                             'foto_id' => 2,
                      'path' => 'public\foto\87.jpg',
                      'id_alloggio' => 2,
                      
                  ],
                           [
                             'foto_id' => 3,
                      'path' => 'public\foto\66671136.jpg',
                      'id_alloggio' => 3,
                      
                  ],
                           [
                             'foto_id' => 4,
                      'path' => 'public\foto\aHR0cHM6Ly93d3cud2ViaW1tb2JpbGlhcmUuY29tL2ZvdG8vMTgxNi8wMjMzOTA0Ni8xXzYwODA1MDlkMTUxZGIuSlBH.jpg',
                      'id_alloggio' => 4,
                      
                  ],
                           [
                             'foto_id' => 5,
                      'path' => 'public\foto\app1.jpg',
                      'id_alloggio' => 5,
                      
                  ],
                            [
                             'foto_id' => 6,
                      'path' => 'public\foto\appartamenti-04.jpg',
                      'id_alloggio' => 6,
                      
                  ],
                            [
                             'foto_id' => 7,
                      'path' => 'public\foto\appartamenti-in-vendita-roma-nord-48.jpg',
                      'id_alloggio' => 7,
                      
                  ],
                            [
                             'foto_id' => 8,
                      'path' => 'public\foto\OwkTOP0tzsPfxm8TATilld1yzIZnHwffCl8TihCN.jpg',
                      'id_alloggio' => 8,
                      
                  ],
                            [
                             'foto_id' => 9,
                      'path' => 'public\foto\HB2020_APT_90MQ_INTRODUTTIVA_PAG_20_21.jpg',
                      'id_alloggio' => 9,
                      
                  ],
                            [
                             'foto_id' => 10,
                      'path' => 'public\foto\hi.jpg',
                      'id_alloggio' => 10,
                      
                  ],
                            [
                             'foto_id' => 11,
                      'path' => 'public\foto\huehuo.jpg',
                      'id_alloggio' => 11,
                      
                  ],
                            [
                             'foto_id' => 12,
                      'path' => 'public\foto\img-6846_orig.jpg',
                      'id_alloggio' => 12,
                      
                  ],
                           
                ]
        ); 
        
        DB::table('servizios')->insert(
              [
                  [
                    'id'=>1,
                    'id_alloggio'=>1,
                    'cucina'=>true,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>2,
                    'id_alloggio'=>2,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>true,
                  ],
                  [
                    'id'=>3,
                    'id_alloggio'=>3,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>true,
                  ],
                  [
                    'id'=>4,
                    'id_alloggio'=>4,
                     'cucina'=>true,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>5,
                    'id_alloggio'=>5,
                    'cucina'=>true,
                      'localeRicreativo'=>true,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>6,
                    'id_alloggio'=>6,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>false,
                  ],[
                    'id'=>7,
                    'id_alloggio'=>7,
                     'cucina'=>true,
                      'localeRicreativo'=>true,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>8,
                    'id_alloggio'=>8,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>true,
                  ],
                  [
                    'id'=>9,
                    'id_alloggio'=>9,
                     'cucina'=>true,
                      'localeRicreativo'=>true,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>10,
                    'id_alloggio'=>10,
                     'cucina'=>false,
                      'localeRicreativo'=>true,
                      'angoloStudio'=>false,
                  ],
                  [
                    'id'=>11,
                    'id_alloggio'=>11,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>true,
                  ],
                  [
                    'id'=>12,
                    'id_alloggio'=>12,
                     'cucina'=>false,
                      'localeRicreativo'=>false,
                      'angoloStudio'=>false,
                  ],
                  
              ]  
        );
         DB::table('opzionamenti')->insert([  
            [
                'id' => 1,
                'id_alloggio' => 1,
                'id_proprietario' => 4,
                'id_opzionante' => 5,
                'data' => '2022-06-07 12:22:22'
                ],
             [
                'id' => 2,
                'id_alloggio' => 5,
                'id_proprietario' => 4,
                'id_opzionante' => 5,
                'data' => '2022-06-07 12:24:22'
                ],
            
                
       ] );
    
        
        
    }
        
        // $this->call(UsersTableSeeder::class);
    
}