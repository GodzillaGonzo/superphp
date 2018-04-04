<?php
	class Producto {

		//Propiedades
		public $nombre = null;
		private $precio = 0;
		private $stock = 0;
		private $disponible = false;

		//Getters & Setters
		public function getPrecio(){
			return 'u$s' . $this->precio;
		}
		public function setPrecio($value){
			$this->precio = ($value * 1.21);
		}

		public function getStock(){
			return "{$this->stock} unid.";
		}
		public function setStock($value){
			$this->stock = $value;

			if( $value >= 100 ){
				$this->disponible = true;
			} else {
				$this->disponible = false;
			}
		}

		public function getDisponible(){

			if( $this->disponible ){
				return "esta disponible!";
			} else {
				return "NO esta disponible!";
			}

		}

		//Constructor
		public function __construct($nombre = null, $precio = 0, $stock = 0){
			$this->nombre = $nombre;
			$this->setPrecio($precio);
			$this->setStock($stock);
		}

		public function __destruct(){
			//Aca podria sincronizar con una tabla y actualizar el registro
			//echo "<p>El objeto ha sido destruido</p>";
		}

		//Metodos de Instancia
		public function mostrarPrecio(){
			echo "<h2>El precio del producto es: ARS {$this->precio}</h2>";
		}

		//Metodos de Clase (Estaticos)
		public static function compararProductos($prod1, $prod2){
			if( $prod1->precio > $prod2->precio ){
				echo "El {$prod1->nombre} es más caro";
			} else {
				echo "El {$prod2->nombre} es más caro";
			}
		}

	}
?>