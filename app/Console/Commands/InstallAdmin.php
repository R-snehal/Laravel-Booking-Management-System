<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\Command;

class InstallAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install System Admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = new User([
            'name' => 'BMS Admin',
            'email' =>'bms@yopmail.com',
            'phone_no'=>'9639639655',
            'password' =>Hash::make('secret'),
            'user_type'=> 1
        ]);
        if($user->save()){
            $this->info('Account Created Successfull');
        }else{
            $this->info('Account Insert Failed');
        }
    }
}
