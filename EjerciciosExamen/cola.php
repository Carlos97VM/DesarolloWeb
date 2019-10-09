<<<<<<< HEAD
<?php

class cola{
    private $tipo;
    private $vcola=[];

    public function __construct($tipo){
        $tipo=strtolower($tipo);
        if(($tipo=="normal")||($tipo="dobleentrada")){
            $this->tipo=$tipo;
        }
    }

    public function insertarDelante($elemento){
        array_unshift($this->vcola,$elemento);

    }
    public function insertarDetras($elemento){
        array_push($this->vcola,$elemento);
    }
    public function eliminar(){

        $elemento=array_shift($this->vcola);
    }

    public function mostrar(&$cola){
        $elemento;
        if(count($cola)==0){
            for($i=0;$i<count($this->vcola);$i++){
                echo $this->vcola[$i].'<br>';
            }
        }else{
            echo "La cola esta vacia";
        }

    }
}


=======
<?php

class cola{
    private $tipo;
    private $vcola=[];

    public function __construct($tipo){
        $tipo=strtolower($tipo);
        if(($tipo=="normal")||($tipo="dobleentrada")){
            $this->tipo=$tipo;
        }
    }

    public function insertarDelante($elemento){
        array_unshift($this->vcola,$elemento);

    }
    public function insertarDetras($elemento){
        array_push($this->vcola,$elemento);
    }
    public function eliminar(){

        $elemento=array_shift($this->vcola);
    }

    public function mostrar(&$cola){
        $elemento;
        if(count($cola)==0){
            for($i=0;$i<count($this->vcola);$i++){
                echo $this->vcola[$i].'<br>';
            }
        }else{
            echo "La cola esta vacia";
        }

    }
}


>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
?>