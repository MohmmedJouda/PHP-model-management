<?php
class conn{
    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $conn;
    function __construct(){
        $this->host = 'localhost';
        $this->username = 'root' ;
        $this->password = '' ;
        $this->db = 'ptc' ;
        $this->connect();

    }
    private function connect(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        $this->conn->set_charset("utf8");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function getTeacher(){
        $this->connect();
        $sql = "SELECT * FROM teachers";
        $sql = $this->conn->query($sql);
        return $sql;
    }

    function updateTeacher($name, $email, $pass,$id){
        $this->connect();
        $sql = "UPDATE teachers SET name ='$name',email='$email',password='$pass' WHERE id=".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    function addTeacher($name, $email, $pass){
        $this->connect();
        $sql = "INSERT INTO teachers (name,email,password) VALUES ('$name','$email','$pass')";
        $sql = $this->conn->query($sql);
        if($sql == true){
            return $sql;
        }else{
            return false;
        }
    }
    function deleteTeacher($id){

        $this->connect();
        $sql =  "DELETE FROM teachers where id = ".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    function getTeacherData($id){
        $this->connect();
        $sql = "SELECT * FROM teachers where id =".$id;
        $sql = $this->conn->query($sql);
        $sql=$sql->fetch_assoc();
        return $sql;
    }
    /*********************** student *********************/
    function addStudent($name, $email, $pass,$avg){
        $this->connect();
        $sql = "INSERT INTO students (name,email,password,avg) VALUES ('$name','$email','$pass','$avg')";
        $sql = $this->conn->query($sql);
        if($sql == true){
            return $sql;
        }else{
    return false;
}
}
    function getStudent(){
        $sql = "SELECT * FROM students";
        $sql = $this->conn->query($sql);
        return $sql;
    }
    function getStudentData($id){
        $this->connect();
        $sql = "SELECT * FROM students where id =".$id;
        $sql = $this->conn->query($sql);
        $sql=$sql->fetch_assoc();
        return $sql;
    }
    function updateStudent($name, $email, $pass,$avg,$id){
        $this->connect();
        $sql = "UPDATE students SET name ='$name',email='$email',password='$pass',avg='$avg' WHERE id=".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    function deleteStudent($id){

        $this->connect();
        $sql =  "DELETE FROM students where id = ".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    /*********************** course *********************/
    function addCourse($name){
        $this->connect();
        $sql = "INSERT INTO courses (name) VALUES ('$name')";
        $sql = $this->conn->query($sql);
        if($sql == true){
            return $sql;
        }else{
            return false;
        }
    }
    function getCourse(){
        $sql = "SELECT * FROM courses";
        $sql = $this->conn->query($sql);
        return $sql;
    }
    function getCourseData($id){
        $this->connect();
        $sql = "SELECT * FROM courses where id =".$id;
        $sql = $this->conn->query($sql);
        $sql=$sql->fetch_assoc();
        return $sql;
    }
    function updateCourse($name,$id){
        $this->connect();
        $sql = "UPDATE courses SET name ='$name' WHERE id=".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    function deleteCourse($id){

        $this->connect();
        $sql =  "DELETE FROM courses where id = ".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }
    /*********************** Question *********************/
    function addQuestion($title,$degree,$correct_answer,$name){
        $this->connect();

        $sql = "INSERT INTO questions (title,degree,correct_answer) VALUES ('$title','$degree','$correct_answer')";
        $sql = $this->conn->query($sql);
        $selectquery="SELECT id FROM questions ORDER BY id DESC LIMIT 1";
        $result = $this->conn->query($selectquery);
        $row = $result->fetch_assoc();
        $last_id=$row['id'];

        for($x=0;$x<count($name);$x++){
            $sql1 = "INSERT INTO answers (question_id,answer) VALUES ('$last_id','$name[$x]')";
            $sql1 = $this->conn->query($sql1);
        }


        if($sql == true){
            return $sql;
        }else{
            return false;
        }
    }
    function getQuestion(){
        $sql = "SELECT * FROM questions";
        $sql = $this->conn->query($sql);
        return $sql;
    }
    function getQuestionData($id){
        $this->connect();
        $sql = "SELECT * FROM questions where id =".$id;
        $sql = $this->conn->query($sql);
        $sql=$sql->fetch_assoc();
        return $sql;
    }
    function getAnswerData($id){
        $sql = "SELECT * FROM answers where question_id =".$id;
        $sql = $this->conn->query($sql);
        return $sql;
    }
    function updateQuestion($title,$degree,$correct_answer,$name,$id){
        $this->connect();
        $sql = "UPDATE questions SET title ='$title',degree='$degree',correct_answer='$correct_answer' WHERE id=".$id;
        $sql = $this->conn->query($sql);
        $sq =  "DELETE FROM answers where question_id = ".$id;
        $sq = $this->conn->query($sq);
        for($x=0;$x<count($name);$x++){
            $sql1 = "INSERT INTO answers (question_id,answer) VALUES ('$id','$name[$x]')";
            $sql1 = $this->conn->query($sql1);
        }
        if($sql == true){
            return true;
        }else{
            return false;
        }

    }
    function deleteQuestion($id){

        $this->connect();
        $sq =  "DELETE FROM answers where question_id = ".$id;
        $sq = $this->conn->query($sq);
        $sql =  "DELETE FROM questions where id = ".$id;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        }else{
            return false;
        }
    }

}
?>
