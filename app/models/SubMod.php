<?php
class SubMod {
    private $conn;
    private $table_name = "subjects";

    public $id;
    public $subject_code;
    public $description;
    public $student;
    public $grade;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET subject_code=:subject_code, description=:description, student=:student, grade=:grade";
        $stmt = $this->conn->prepare($query);

        $this->subject_code = htmlspecialchars(strip_tags($this->subject_code));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->student = htmlspecialchars(strip_tags($this->student));
        $this->grade = htmlspecialchars(strip_tags($this->grade));

        $stmt->bindParam(":subject_code", $this->subject_code);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":student", $this->student);
        $stmt->bindParam(":grade", $this->grade);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {
            $this->subject_code = $row['subject_code'];
            $this->description = $row['description'];
            $this->student = $row['student'];
            $this->grade = $row['grade'];
            $this->created_at = $row['created_at'];
        }
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET subject_code = :subject_code, description = :description, student = :student, grade = :grade WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->subject_code = htmlspecialchars(strip_tags($this->subject_code));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->student = htmlspecialchars(strip_tags($this->student));
        $this->grade = htmlspecialchars(strip_tags($this->grade));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':subject_code', $this->subject_code);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':student', $this->student);
        $stmt->bindParam(':grade', $this->grade);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
