<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $pedidosUsuario2 = $this->get_pedidos();
        $pedidosConUsuarios = $this->get_pedidos_detail();
        $pedidosPorRango = $this->get_range_pedidos();
        $usuariosPorNombre = $this->get_r_users();
        $totalPedidosUsuario5 = $this->get_total_by_id();
        $pedidosOrdenados = $this->get_pedidos_order();
        $sumaTotales = $this->get_sum_pedidos();
        $pedidoMasEconomico = $this->get_cheaper_pedido();
        $pedidosAgrupadosPorUsuario = $this->get_all_pedidoUser();

        return view('index', compact(
            'pedidosUsuario2',
            'pedidosConUsuarios',
            'pedidosPorRango',
            'usuariosPorNombre',
            'totalPedidosUsuario5',
            'pedidosOrdenados',
            'sumaTotales',
            'pedidoMasEconomico',
            'pedidosAgrupadosPorUsuario'
        ));
    }

    // Ejercicio 2, obteniendo los pedidos con id_usuario = 2
    public function get_pedidos(){
        $pedidos = Pedido::where('id_usuario', 2)->get();

        return response()->json($pedidos, 200);
    }

    // Ejercicio 3, Obtén la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios
    public function get_pedidos_detail(){
        $pedidos = DB::table('pedidos')
                ->join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
                ->select('pedidos.producto', 'pedidos.cantidad', 'pedidos.total', 'usuarios.nombre', 'usuarios.correo')
                ->get();

        return response()->json($pedidos);
    }

    // Ejercicio 4, a todos los pedidos cuyo total esté en el rango de $100 a $250
    public function get_range_pedidos(){
        $pedidos = Pedido::whereBetween('total', [100, 250])->get();
        
        return response()->json($pedidos, 200);
    }

    // Ejercicio 5, todos los usuarios cuyos nombres comiencen con la letra "R"
    public function get_r_users(){
        $usuarios = Usuario::where('nombre', 'like', 'R%')->get();

        return response()->json($usuarios, 200);
    }

    // Ejercicio 6, calcula el total de registros en la tabla de pedidos para el usuario con ID 5
    public function get_total_by_id(){
        $totalPedidos = Pedido::where('id_usuario', 5)->count();

        return response()->json($totalPedidos, 200);
    }

    // Ejercicio 7, todos los pedidos junto con la información de los usuarios, ordenándolos
    // de forma descendente según el total del pedido
    public function get_pedidos_order() {
        $pedidos = Pedido::with('usuario')->orderBy('total', 'desc')->get();

        return response()->json($pedidos, 200);
    }

    // Ejercicio 8,  suma total del campo "total" en la tabla de pedidos
    public function get_sum_pedidos(){
        $sumaTotal = Pedido::sum('total');

        return response()->json($sumaTotal, 200);
    }

    // Ejercicio 9, pedido más económico, junto con el nombre del usuario asociado
    public function get_cheaper_pedido(){
        $pedido = Pedido::with('usuario')->orderBy('total', 'asc')->first();

        return response()->json($pedido, 200);
    }

    // Ejercicio 10, el producto, la cantidad y el total de cada pedido, agrupándolos por usuario
    public function get_all_pedidoUser(){
        $usuarios = DB::table('usuarios')
                    ->join('pedidos', 'usuarios.id', '=', 'pedidos.id_usuario')
                    ->select('usuarios.nombre', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
                    ->orderBy('usuarios.nombre')
                    ->get()
                    ->groupBy('nombre');

        return response()->json($usuarios);
    }
}
