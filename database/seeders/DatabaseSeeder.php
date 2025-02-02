<?php

namespace Database\Seeders;

use App\Models\Usuario;
use App\Models\Pedido;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creando 10 registros para la tabla usuarios
        //Usuario::factory(10)->create();
        Usuario::create(['nombre' => 'Juan Perez', 'correo' => 'juan.perez@example.com', 'telefono' => '5551234567']);
        Usuario::create(['nombre' => 'Maria Lopez', 'correo' => 'maria.lopez@example.com', 'telefono' => '5552345678']);
        Usuario::create(['nombre' => 'Carlos Garcia', 'correo' => 'carlos.garcia@example.com', 'telefono' => '5553456789']);
        Usuario::create(['nombre' => 'Laura Martinez', 'correo' => 'laura.martinez@example.com', 'telefono' => '5554567890']);
        Usuario::create(['nombre' => 'Ana Rodriguez', 'correo' => 'ana.rodriguez@example.com', 'telefono' => '5555678901']);
        Usuario::create(['nombre' => 'Luis Fernandez', 'correo' => 'luis.fernandez@example.com', 'telefono' => '5556789012']);
        Usuario::create(['nombre' => 'Sofía Sanchez', 'correo' => 'sofia.sanchez@example.com', 'telefono' => '5557890123']);
        Usuario::create(['nombre' => 'Pedro Gomez', 'correo' => 'pedro.gomez@example.com', 'telefono' => '5558901234']);
        Usuario::create(['nombre' => 'Isabel Diaz', 'correo' => 'isabel.diaz@example.com', 'telefono' => '5559012345']);
        Usuario::create(['nombre' => 'Ricardo Morales', 'correo' => 'ricardo.morales@example.com', 'telefono' => '5550123456']);
        // Creando 15 registros para la tabla pedidos
        //Pedido::factory(15)->create();
        Pedido::create(['producto' => 'Laptop Dell XPS 13', 'cantidad' => 1, 'total' => 1200.00, 'id_usuario' => 1]);
        Pedido::create(['producto' => 'Smartphone Samsung Galaxy S21', 'cantidad' => 2, 'total' => 1800.00, 'id_usuario' => 2]);
        Pedido::create(['producto' => 'Televisor LG OLED55', 'cantidad' => 1, 'total' => 1500.00, 'id_usuario' => 3]);
        Pedido::create(['producto' => 'Auriculares Bose QC35', 'cantidad' => 3, 'total' => 900.00, 'id_usuario' => 4]);
        Pedido::create(['producto' => 'Tablet Apple iPad Pro', 'cantidad' => 1, 'total' => 999.99, 'id_usuario' => 5]);
        Pedido::create(['producto' => 'Monitor ASUS 27"', 'cantidad' => 2, 'total' => 700.00, 'id_usuario' => 6]);
        Pedido::create(['producto' => 'Teclado mecanico Logitech', 'cantidad' => 1, 'total' => 150.00, 'id_usuario' => 7]);
        Pedido::create(['producto' => 'Mouse inalambrico Razer', 'cantidad' => 2, 'total' => 200.00, 'id_usuario' => 8]);
        Pedido::create(['producto' => 'Impresora HP LaserJet', 'cantidad' => 1, 'total' => 250.00, 'id_usuario' => 9]);
        Pedido::create(['producto' => 'Camara Sony Alpha', 'cantidad' => 1, 'total' => 1200.00, 'id_usuario' => 10]);
        Pedido::create(['producto' => 'Laptop HP Envy', 'cantidad' => 1, 'total' => 1300.00, 'id_usuario' => 1]);
        Pedido::create(['producto' => 'Smartwatch Apple Watch', 'cantidad' => 3, 'total' => 1200.00, 'id_usuario' => 2]);
        Pedido::create(['producto' => 'Kindle Paperwhite', 'cantidad' => 2, 'total' => 240.00, 'id_usuario' => 3]);
        Pedido::create(['producto' => 'GoPro Hero9', 'cantidad' => 1, 'total' => 400.00, 'id_usuario' => 4]);
        Pedido::create(['producto' => 'HomePod Mini', 'cantidad' => 4, 'total' => 400.00, 'id_usuario' => 5]);
    }
}
