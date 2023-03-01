<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed using array
        $data = [  
                    [  
                        'id' => 7,
                        'email' => 'michael.lawson@reqres.in',      
                        'first_name' => 'Michael',       
                        'last_name' => 'Lawson', 
                        'password'=>Hash::make('Micheal'),      
                        'avatar' => 'https://reqres.in/img/faces/7-image.jpg',    
                    ],
                    [        
                        'id' => 8,        
                        'email' => 'lindsay.ferguson@reqres.in',        
                        'first_name' => 'Lindsay',        
                        'last_name' => 'Ferguson',      
                        'password'=>Hash::make('Lindsay'),  
                        'avatar' => 'https://reqres.in/img/faces/8-image.jpg',   
                    ],
                    [        
                        'id' => 9,        
                        'email' => 'tobias.funke@reqres.in',        
                        'first_name' => 'Tobias',        
                        'last_name' => 'Funke',        
                        'password'=>Hash::make('Tobias'),
                        'avatar' => 'https://reqres.in/img/faces/9-image.jpg',    
                    ],
                    [        
                        'id' => 10,        
                        'email' => 'byron.fields@reqres.in',        
                        'first_name' => 'Byron',        
                        'last_name' => 'Fields',  
                        'password'=>Hash::make('Byron'),      
                        'avatar' => 'https://reqres.in/img/faces/10-image.jpg',    
                    ],
                    [        
                        'id' => 11,        
                        'email' => 'george.edwards@reqres.in',        
                        'first_name' => 'George',        
                        'last_name' => 'Edwards',
                        'password'=>Hash::make('George'),        
                        'avatar' => 'https://reqres.in/img/faces/11-image.jpg',    
                    ],
                    [        
                        'id' => 12,        
                        'email' => 'rachel.howell@reqres.in',        
                        'first_name' => 'Rachel',        
                        'last_name' => 'Howell',  
                        'password'=>Hash::make('Rachel'),      
                        'avatar' => 'https://reqres.in/img/faces/12-image.jpg',    
                    ],
];

foreach ($data as $item) {
    DB::table('users')->insert($item);
}

        
    }
}
