<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    protected $signature = 'rapido:makeUserRevisor';
    
    protected $description = 'Asigna el rol de revisor a un usuario';
    
    public function __construct(){
        parent::__construct();
    }
    
    public function handle(){
        $email = $this->ask("Introducir el correo del usuario.");
        $user = User::where("Email",$email)->first();
        if (!$user) {
            $this->error("Usuario No Encontrado.");
            return;
        }
        $user->is_revisor = true;
        $user->save();
        $this->info("El usuario $user->name ya es un revisor.");
    }
    
}
