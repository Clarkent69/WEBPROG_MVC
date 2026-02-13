<?php
include_once '../app/config/config.php';
include_once '../app/models/SubMod.php';

class SubCon {
    private $db;
    private $subject;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->subject = new SubMod($this->db);
    }

    public function index() {
        $stmt = $this->subject->read();
        $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once '../app/views/dashboard.php';
    }

    public function create() {
        require_once '../app/views/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->subject->subject_code = $_POST['subject_code'];
            $this->subject->description = $_POST['description'];
            $this->subject->student = $_POST['student'];
            $this->subject->grade = $_POST['grade'];

            if($this->subject->create()) {
                header("Location: index.php");
            } else {
                echo "Unable to create subject.";
            }
        }
    }

    public function edit() {
        if(isset($_GET['id'])) {
            $this->subject->id = $_GET['id'];
            $this->subject->readOne();
            require_once '../app/views/edit.php';
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->subject->id = $_POST['id'];
            $this->subject->subject_code = $_POST['subject_code'];
            $this->subject->description = $_POST['description'];
            $this->subject->student = $_POST['student'];
            $this->subject->grade = $_POST['grade'];

            if($this->subject->update()) {
                header("Location: index.php");
            } else {
                echo "Unable to update subject.";
            }
        }
    }

    public function delete() {
        if(isset($_GET['id'])) {
            $this->subject->id = $_GET['id'];
            if($this->subject->delete()) {
                header("Location: index.php");
            } else {
                echo "Unable to delete subject.";
            }
        }
    }

    public function show() {
        if(isset($_GET['id'])) {
            $this->subject->id = $_GET['id'];
            $this->subject->readOne();
            require_once '../app/views/show.php';
        }
    }
}
