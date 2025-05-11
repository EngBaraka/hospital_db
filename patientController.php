<?php
require_once '../config/database.php';

class PatientController {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function createPatient($patient_name, $address, $adm_date) {
        $stmt = $this->conn->prepare("INSERT INTO PATIENT (PATIENT_NAME, ADDRESS, ADM_DATE) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $patient_name, $address, $adm_date);
        return $stmt->execute();
    }

    public function readPatients() {
        $stmt = $this->conn->prepare("SELECT * FROM PATIENT");
        $stmt->execute();
        return $stmt->get_result();
    }

    public function updatePatient($id, $patient_name, $address, $adm_date) {
        $stmt = $this->conn->prepare("UPDATE PATIENT SET PATIENT_NAME = ?, ADDRESS = ?, ADM_DATE = ? WHERE ID = ?");
        $stmt->bind_param("sssi", $patient_name, $address, $adm_date, $id);
        return $stmt->execute();
    }

    public function deletePatient($id) {
        $stmt = $this->conn->prepare("DELETE FROM PATIENT WHERE ID = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>