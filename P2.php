
<!-- Ejercicio 1 -->




 <!-- 
 $estados = ["Me gusta", "Comentarios", "Compartir"];

 $datos = [];
 for ($i = 0; $i < 50; $i++) {
     $datos[] = $estados[array_rand($estados)];
 }

 $contador = array_count_values($datos);

 arsort($contador);

 $keys = array_keys($contador);

 $top = $keys[0];
 $last = $keys[count($keys) - 1];

 $total = count($datos);
 $avgs = [];
 foreach ($contador as $estado => $cantidad) 
 {
     $avgs[$estado] = round(($cantidad / $total) * 100);
 }

 echo "El estado más frecuente de los usuarios es '$top', se repite en $contador[$top] ocurrencias.</br>";

 echo "Promedio de estados:";

 foreach ($avgs as $estado => $avg) 
 {
     echo "<p>";
     echo "$estado: $avg%";
     echo "</p>";
 }
 echo "El estado de menor frecuencia es '$last', se repite en $contador[$last] ocurrencias.</br>";

?> -->

<!-- Ejercicio 2 -->

<!-- 

$productos = [];
$fechaActual = date('Y-m-d');

for ($i = 0; $i < 20; $i++) 
{
    $diaAleatorio = rand(1, 30);
    $fechaVencimiento = date('Y-m', strtotime($fechaActual))."-".str_pad($diaAleatorio, 2, '0', STR_PAD_LEFT);
    
    $productos[] = [
        'nombre' => "Producto $i",
        'vencimiento' => $fechaVencimiento,
    ];
}

$porVencer = 0;
foreach ($productos as $producto) {
    if ($producto['vencimiento'] <= $fechaActual) {
        $porVencer++;
    }
}
echo "Se agregaron ".count($productos)." productos al inventario.</br>";
echo "<br>";
var_dump($productos);
echo "<br>";
echo "<br>";
echo "Productos por vencer: $porVencer";

?> -->



<!-- Ejercicio 3 -->
<!--
$estudiantes = [];
for ($i = 1; $i <= 20; $i++) {
    $nombre = "Estudiante $i";
    $nota = rand(0, 100);

    if ($nota < 50) {
        $estado = "pre formal";
    } elseif ($nota >= 50 && $nota <= 60) {
        $estado = "receptivo";
    } elseif ($nota > 60 && $nota <= 70) {
        $estado = "resolutivo";
    } elseif ($nota > 70 && $nota <= 90) {
        $estado = "autónomo";
    } else {
        $estado = "estratégico";
    }

    $estudiantes[] = [
        'nombre' => $nombre,
        'nota' => $nota,
        'estado' => $estado,
    ];
}

$preFormalCount = 0;
foreach ($estudiantes as $estudiante) {
    if ($estudiante['estado'] === 'pre formal') {
        $preFormalCount++;
    }
}

$totalEstrategico = 0;
$estrategicoCount = 0;
foreach ($estudiantes as $estudiante) {
    if ($estudiante['estado'] === 'estratégico') {
        $totalEstrategico += $estudiante['nota'];
        $estrategicoCount++;
    }
}

if ($estrategicoCount > 0) {
    $promedioEstrategico = $totalEstrategico / $estrategicoCount;
} else {
    $promedioEstrategico = 0;
}

echo "Se ingresaron ".count($estudiantes)." estudiantes al sistema.</br>";
echo "<br>";
var_dump($estudiantes);
echo "<br>";
echo "<br>";
echo "Estudiantes en estado 'Pre formal': $preFormalCount (necesitan retroalimentación).</br>";
echo "Promedio de estudiantes en estado 'estratégico': ".round($promedioEstrategico, 2);
?> -->


<!-- Ejercicio 4 -->
<!--

$temperaturas = [];
for ($i = 1; $i <= 15; $i++) {
    $fecha = date('Y-m-d', strtotime("+$i days"));
    $temperatura = rand(-10, 35);
    $temperaturas[$fecha] = $temperatura;
}

$maximaTemperatura = max($temperaturas);
$minimaTemperatura = min($temperaturas);
$diaMasCaluroso = array_search($maximaTemperatura, $temperaturas);
$diaMasFrio = array_search($minimaTemperatura, $temperaturas);

$totalTemperaturas = array_sum($temperaturas);
$promedioTemperatura = $totalTemperaturas / count($temperaturas);

echo "Se generaron datos de temperaturas para 15 días.</br>";

echo "<br>";
var_dump($temperaturas);
echo "<br>";
echo "<br>";

echo "Día más caluroso: $diaMasCaluroso ({$maximaTemperatura}°C).</br>";
echo "Día más frío: $diaMasFrio ({$minimaTemperatura}°C).</br>";
echo "Promedio de temperatura: ".round($promedioTemperatura, 2)."°C";
?> -->


<!-- Ejercicio 5 -->
<?php
$vehiculos = [];
for ($i = 1; $i <= 15; $i++) {
    $nombreVehiculo = "Vehículo $i";
    $tiempoEspera = rand(10, 120); 
    $vehiculos[] = [
        'vehiculo' => $nombreVehiculo,
        'tiempo_espera' => $tiempoEspera,
    ];
}
$maxTiempoEspera = max(array_column($vehiculos, 'tiempo_espera'));
$vehiculoMasTiempo = array_filter($vehiculos, function ($vehiculo) use ($maxTiempoEspera) {
    return $vehiculo['tiempo_espera'] === $maxTiempoEspera;
});
$totalTiemposEspera = array_sum(array_column($vehiculos, 'tiempo_espera'));
$promedioTiemposEspera = $totalTiemposEspera / count($vehiculos);

echo "Se agregaron ".count($vehiculos)." vehículos al sistema.</br>";
echo "<br>";
var_dump($vehiculos);
echo "<br>";
echo "<br>";

if (!empty($vehiculoMasTiempo)) {
    echo "Vehículo que esperó más tiempo:  ({$maxTiempoEspera} segundos).</br>";
    
} else {
    echo "No se encontró ningún vehículo con el tiempo de espera máximo.</br>";
}
echo "Promedio de tiempos de espera: ".round($promedioTiemposEspera, 2)." segundos.";
?>


<!-- Ejercicio 6 -->
<!-- Ejercicio 7 -->
<!-- Ejercicio 8 -->
<!-- Ejercicio 9 -->
<!-- Ejercicio 10 -->