<?php
    class connect{
        static connect $c;

        public function connect(){

        }

        public static function getConnect(){
            if(!isset($c)){
                $c = new connect();
            }
            return $c;
        }

        public function getConnection(){
            $conn = new mysqli("localhost", "root", "", "swedb");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }
    }
?>

<?php
class utility {
    private static utility $u;
    private static connect $c;

    private function utility() {

    }

    public static function getUtility() {
        if (!isset($u)) {
            $u = new utility();
        }
        return $u;
    }

    public function getCourseCodes() {
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $courseCodes = "";
        $sql = "SELECT course_ID FROM `course`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Concatenate course IDs with a comma and space
                $courseCodes .= '<option value="'. $row["course_ID"] .'">';
                // $courseCodes .= $row["course_ID"] . " , ";
            }
        }
        $conn->close();
        return $courseCodes;
    }

    public function getCourseNames() {
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $courseNames = "";
        $sql = "SELECT course_name FROM `course`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Concatenate course IDs with a comma and space
                $courseNames .= '<option value="'. $row["course_name"] .'">';
            }
        }
        $conn->close();
        return $courseNames;
    }

    public function getFileTypes(){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $fileTypes = "";
        $sql = "SELECT ftype FROM `file_type`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Concatenate course IDs with a comma and space
                $fileTypes .= '<option value="'. $row["ftype"] .'">';
            }
        }
        $conn->close();
        return $fileTypes;
    }
}