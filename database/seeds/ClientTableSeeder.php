<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
   		$client = new Client;
        $client->name = "Client";
        $client->email = "client@client.com";
        $client->password = bcrypt("123456");
        $client->save();
    }
}
