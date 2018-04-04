<?php
	require 'producto.class.php';

	$unProducto = new Producto();
	$unProducto->nombre = "Jugo";
	$unProducto->setPrecio(36.90);
	$unProducto->setStock(99);

	$unProducto->mostrarPrecio();

echo "Del producto {$unProducto->nombre} hay {$unProducto->getStock()} y entonces {$unProducto->getDisponible()}";
	
	echo "<hr>";
	
	$otroProducto = new Producto("Cafe", 100, 900);
	$otroProducto->mostrarPrecio();
	//Actualizar el precio con un setter y mostrarlo con un getter
	$otroProducto->setPrecio(95);
	echo "<p>EL NUEVO PRECIO ES <strong>{$otroProducto->getPrecio()}</strong></p>";

echo "Del producto {$otroProducto->nombre} hay {$otroProducto->getStock()} y entonces {$otroProducto->getDisponible()}";

	//Comparar usando un metodo de clase
	Producto::compararProductos($unProducto, $otroProducto);
?>