<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Pedidos del Usuario con ID 2</h1>
    <pre>{{ json_encode($pedidosUsuario2->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Información Detallada de los Pedidos</h1>
    <pre>{{ json_encode($pedidosConUsuarios->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Pedidos en el Rango de $100 a $250</h1>
    <pre>{{ json_encode($pedidosPorRango->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Usuarios con Nombres que Comienzan con "R"</h1>
    <pre>{{ json_encode($usuariosPorNombre->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Total de Pedidos para el Usuario con ID 5</h1>
    <pre>{{ json_encode($totalPedidosUsuario5->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Pedidos Ordenados por Total Descendente</h1>
    <pre>{{ json_encode($pedidosOrdenados->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Suma Total de los Campos "Total" en Pedidos</h1>
    <pre>{{ json_encode($sumaTotales->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Pedido Más Económico</h1>
    <pre>{{ json_encode($pedidoMasEconomico->original, JSON_PRETTY_PRINT) }}</pre>

    <h1>Pedidos Agrupados por Usuario</h1>
    <pre>{{ json_encode($pedidosAgrupadosPorUsuario->original, JSON_PRETTY_PRINT) }}</pre>
</body>
</html>
