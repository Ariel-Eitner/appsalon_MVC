<?php 
namespace Model;
class CitaServicio extends ActiveRecord {
    protected static $tabla = 'citasservicios';
    protected static $columnasDB = ['id', 'citaid', 'servicioid'];

    public $id;
    public $citaid;
    public $servicioid;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->citaid = $args['citaid'] ?? '';
        $this->servicioid = $args['servicioid'] ?? '';
    }
}