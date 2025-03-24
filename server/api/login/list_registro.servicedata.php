<?php
// list_registro.service.php

class ListRegistroService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Método para obtener todos los registros
    public function getAllRegistros() {
        $query = "SELECT * FROM registros";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener registros filtrados por algún criterio
    public function getFilteredRegistros($filtro) {
        $query = "SELECT * FROM registros WHERE condicion = :filtro";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':filtro', $filtro);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para añadir un nuevo registro
    public function addRegistro($datos) {
        $query = "INSERT INTO registros (campo1, campo2) VALUES (:valor1, :valor2)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':valor1', $datos['campo1']);
        $stmt->bindParam(':valor2', $datos['campo2']);
        return $stmt->execute();
    }

    // Método para actualizar un registro existente
    public function updateRegistro($id, $datos) {
        $query = "UPDATE registros SET campo1 = :valor1, campo2 = :valor2 WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':valor1', $datos['campo1']);
        $stmt->bindParam(':valor2', $datos['campo2']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Método para eliminar un registro
    public function deleteRegistro($id) {
        $query = "DELETE FROM registros WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
