<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // POO EN PHP

    // CLASES
    abstract class Persona{
        // propiedades
        public $nombre;
        protected $edad;
        public $altura;
        public static $activo = false;
        public static $tipo = "Persona";
        // metodos
        public function __construct(string $n1 = 'SIN NOMBRE', int $e1 = 0, float $a1 = 0.00){
            // esto se ejecuta al realizar la instancia
            // echo "se ejecutó la instancia";
            $this->nombre = $n1;
            $this->edad = $e1;
            $this->altura = $a1;
        }

        final public function caminar() : void {
            echo  $this->nombre . " esta caminando";
        }

        public static function saludar() : void {
            echo "Hola, a todos soy un/a " . static::$tipo;
            echo "<br>";
            if(self::$activo){
                echo "Me encuentro activo";
            }
        }
        // METODOS GETTERS Y SETTER
        public function getEdad() : int{
            return $this->edad;
        }

        public function setEdad(int $edad) : void{
            $this->edad = $edad;
        }

        public function saludarConEdad() : void {
            echo "Hola mi edad es " . $this->edad;
        }
    }

    // OBJETO
    // INSTANCIA DE LA CLASE
    // $persona1 = new Persona('Daniel', 29, 1.75);
    // $persona2 = new Persona('Pedro', 30, 1.8);
    // $persona3 = new Persona();
    // $persona4 = new Persona();

    // $persona3->nombre = "Juan";
    // $persona1->setEdad(45);


    
    
    // echo '<pre>';
    // var_dump($persona1);
    // echo '</pre>';
    
    
    // echo '<pre>';
    // print_r($persona2);
    // echo '</pre>';


    // echo '<pre>';
    // print_r($persona3);
    // echo '</pre>';
    // caminar(); #Esto provoca un error 500
    // $persona3->caminar();
    // echo $persona1->nombre;
    // echo $persona2->nombre;
    // $persona2->caminar();
    // $persona1->caminar();


    // $persona1->saludar();
    // $persona2->saludar();

    // function saludar($nombre = 'A TODOS'){
    //     echo "Hola, $nombre";
    // }

    // saludar();

    // PROPIEDAD O METODO STATIC
    
    // $persona1->activo;

    // var_dump(Persona::$activo);

    // Persona::saludar();


    class Estudiante extends Persona {
        public $carne;
        public static $tipo = "Estudiante";

        public function __construct($carne, $nombre, $edad, $altura)
        {
            $this->carne = $carne;

            parent::__construct($nombre, $edad, $altura);
        }

        public function estudiar(){
            echo "estoy estudiando y tengo " . $this->edad . " años" ;
        }

        // public function caminar() : void{
        //     echo "Soy un estudiante y estoy caminando";
        // }
    }

    class Profesor extends Persona {
        public $materia;
        public static $tipo = "Profesor";
        public function __construct($materia, $nombre, $edad, $altura)
        {
            $this->materia = $materia;

            parent::__construct($nombre, $edad, $altura);
        }
    }

    $estuadiante = new Estudiante('09023256', 'Juan', 25, 1.75);
    $profresor = new Profesor('Algoritmos','Diego', 30 , 1.65);
    // $estuadiante->caminar();
    // $estuadiante->saludarConEdad();

    echo $estuadiante->nombre;
    echo "<pre>";
    var_dump($estuadiante);
    echo "</pre>";

    echo "<pre>";
    var_dump($profresor);
    echo "</pre>";

    // $estuadiante->estudiar();

    // $estuadiante->caminar();
    // echo "<br>";
    // $profresor->caminar();
    
    Persona::saludar(); //HOla a todos, soy un estudiante
    echo "<br>";
    Estudiante::saludar(); //HOla a todos, soy un estudiante
    echo "<br>";
    Profesor::saludar();