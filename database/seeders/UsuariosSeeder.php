<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'Ezequiel',
            'apellido' => 'Macke',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'titulacion_id' => null,
            'cargo_id' => 1,
            'estado_id' => 1,
            'sucursal_id' => 1,
            'nacimiento' => '2000-09-15',
        ]);
    }
}
