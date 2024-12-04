<?php
namespace App\Models;
use Core\App;
use PDO;

class HardwareHacking {
    protected static $table = "hardwarehacking";
    public $id;
    public $name;
    public $used_for;
    public $price;

    public function __construct($data = []) {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->used_for = $data['used_for'];
        $this->price = $data['price'];}

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Actualitzem
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, used_for = :used_for, price = :price WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':used_for', $this->used_for);
            $statement->bindValue(':price', $this->price);
            $statement->execute();
        } else {
            // Creem
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, used_for, price) VALUES (:name, :used_for, :price)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':used_for', $this->used_for);
            $statement->bindValue(':price', $this->price);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $items = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $items[] = new self($result);}
        return $items;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();}
}
