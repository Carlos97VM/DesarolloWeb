<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';
require '../vendor/notorm-master/NotORM.php';

//require '../../vendor/autoload.php';

$app = new \Slim\App;

$dsn = "mysql:host=localhost;dbname=db_distribuidora;";
$username = "root";
$password = "";

$pdo = new PDO($dsn, $username, $password);
$db = new NotORM($pdo);


$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});


$app->get("/get_personas", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->personas());
});

$app->post('/personas',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO personas (ci_nit,nombre,direccion,telefono_celular,email) VALUES(:ci_nit,:nombre,:direccion,:telefono_celular,:email);");
    $sql->bindParam("ci_nit",$datos['ci_nit']);
    $sql->bindParam("nombre",$datos['nombre']);
    $sql->bindParam("direccion",$datos['direccion']);
    $sql->bindParam("telefono_celular",$datos['telefono_celular']);
    $sql->bindParam("email",$datos['email']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_clientes", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->clientes());
});

$app->post('/clientes',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO clientes (id_persona,fecha_registro) VALUES(:id_persona,:fecha_registro);");
    $sql->bindParam("id_persona",$datos['id_persona']);
    $sql->bindParam("fecha_registro",$datos['fecha_registro']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_empleados", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->empleados());
});

$app->post('/empleados',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO empleados (id_persona,cargo) VALUES(:id_persona,:cargo);");
    $sql->bindParam("id_persona",$datos['id_persona']);
    $sql->bindParam("cargo",$datos['cargo']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_costos", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->costos());
});

$app->post('/costos',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO personas (id_producto,precio,fecha,estado) VALUES(:id_producto,:precio,:fecha,:estado);");
    $sql->bindParam("id_producto",$datos['id_producto']);
    $sql->bindParam("precio",$datos['precio']);
    $sql->bindParam("fecha",$datos['fecha']);
    $sql->bindParam("estado",$datos['estado']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_ventas", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->ventas());
});

$app->post('/ventas',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO personas (id_cliente,id_empleado,fecha) VALUES(:id_cliente,:id_empleado,:fecha);");
    $sql->bindParam("id_cliente",$datos['id_cliente']);
    $sql->bindParam("id_empleado",$datos['id_empleado']);
    $sql->bindParam("fecha",$datos['fecha']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_productos", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->productos());
});

$app->post('/productos',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO personas (nombre,marca,medida,tipo) VALUES(:nombre,:marca,:medida,:tipo);");
    $sql->bindParam("nombre",$datos['nombre']);
    $sql->bindParam("marca",$datos['marca']);
    $sql->bindParam("medida",$datos['medida']);
    $sql->bindParam("tipo",$datos['tipo']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});

$app->get("/get_venta_detalle", function (Request $request, Response $response) use ($app, $db) {
    return $response->withJson($db->venta_detalle());
});

$app->post('/venta_detalle',function(Request $request, Response $response)use($app,$pdo)
{

    $datos = $request->getParams();
    $sql = $pdo->prepare("INSERT INTO personas (id_venta,id_costos,cantidad) VALUES(:id_venta,:id_costos,:cantidad);");
    $sql->bindParam("id_venta",$datos['id_venta']);
    $sql->bindParam("id_costos",$datos['id_costos']);
    $sql->bindParam("cantidad",$datos['cantidad']);
    $estado= $sql->execute();
    if ($estado)
    return $response->withJson(array('estado'=>true,'mensaje'=>'Datos insertados correctamente.'));
    else
    return $response->withJson(array('estado'=>false,'mensaje'=>'Error al insertar datos.'));

});
$app->run();