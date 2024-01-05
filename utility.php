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

    public function getCourses($sem) {
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $courses = "";
        $sql = "SELECT course_ID, course_Name FROM `course` WHERE semester = '$sem'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Concatenate course IDs with a comma and space
                $courses .= '<li><a class="link-primary" href="../library/?course='. $row["course_ID"] .'">'. $row["course_ID"] .' - '. $row["course_Name"] .'</a></li>';
            }
        }
        $conn->close();
        return $courses;
    }

    public function getFiles(){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $files = "";
        $sql = 'SELECT 
                    f.date,
                    f.file_name,
                    f.file_id,
                    f.file_type,
                    u.fullName AS uploader_name,
                    f.course_id,
                    c.course_Name AS course_title
                FROM 
                    file f
                JOIN 
                    shuser u ON f.sid = u.sid
                JOIN 
                    course c ON f.course_id = c.course_ID
                ORDER BY f.date DESC;';

        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $files .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../file/?id='. $row["file_id"] .'">'. $row["file_name"] .'</a> &nbsp&nbsp<span class="badge bg-secondary jb"><a class="link-light" href="../library/?type='. $row["file_type"] .'">'.$row["file_type"] .'</a></span></td>
                        <td>'.$row["course_id"] .' - ' .$row["course_title"] .'</td>
                        <td>'. $row["uploader_name"] .'</td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $files;
    }

    public function getFilesByCourse($course){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $files = "";
        $sql = 'SELECT 
                    f.date,
                    f.file_name,
                    f.file_id,
                    f.file_type,
                    u.fullName AS uploader_name,
                    f.course_id,
                    c.course_Name AS course_title
                FROM 
                    file f
                JOIN 
                    shuser u ON f.sid = u.sid
                JOIN 
                    course c ON f.course_id = c.course_ID
                WHERE
                    f.course_id = "'.$course.'"
                ORDER BY
                    f.date DESC;';
        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $files .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../file/?id='. $row["file_id"] .'">'. $row["file_name"] .'</a> &nbsp&nbsp<span class="badge bg-secondary jb"><a class="link-light" href="../library/?type='. $row["file_type"] .'">'.$row["file_type"] .'</a></span></td>
                        <td>'.$row["course_id"] .' - ' .$row["course_title"] .'</td>
                        <td>'. $row["uploader_name"] .'</td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $files;
    }

    public function getFilebyType($type){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $files = "";
        $sql = 'SELECT 
                    f.date,
                    f.file_name,
                    f.file_id,
                    f.file_type,
                    u.fullName AS uploader_name,
                    f.course_id,
                    c.course_Name AS course_title
                FROM 
                    file f
                JOIN 
                    shuser u ON f.sid = u.sid
                JOIN 
                    course c ON f.course_id = c.course_ID
                WHERE
                    f.file_type = "'.$type.'"
                ORDER BY
                    f.date DESC;';
        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $files .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../file/?id='. $row["file_id"] .'">'. $row["file_name"] .'</a> &nbsp&nbsp<span class="badge bg-secondary jb"><a class="link-light" href="../library/?type='. $row["file_type"] .'">'.$row["file_type"] .'</a></span></td>
                        <td>'.$row["course_id"] .' - ' .$row["course_title"] .'</td>
                        <td>'. $row["uploader_name"] .'</td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $files;
    }

    public function getFilesByUser($sid){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $files = "";
        $sql = 'SELECT 
                    f.date,
                    f.file_name,
                    f.file_id,
                    f.file_type,
                    u.fullName AS uploader_name,
                    f.course_id,
                    c.course_Name AS course_title
                FROM 
                    file f
                JOIN 
                    shuser u ON f.sid = u.sid
                JOIN 
                    course c ON f.course_id = c.course_ID
                WHERE
                    f.sid = "'.$sid.'"
                ORDER BY
                    f.date DESC;';
        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $files .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../file/?id='. $row["file_id"] .'">'. $row["file_name"] .'</a> &nbsp&nbsp<span class="badge bg-secondary jb"><a class="link-light" href="../library/?type='. $row["file_type"] .'">'.$row["file_type"] .'</a></span></td>
                        <td>'.$row["course_id"] .' - ' .$row["course_title"] .'</td>
                        <td>'. $row["uploader_name"] .'</td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $files;
    }


    public function getUsers(){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $users = "";
        $sql = 'SELECT u.fullName AS user_name, u.sid, COUNT(f.file_id) AS contributed_file_count FROM shuser u LEFT JOIN file f ON u.sid = f.sid GROUP BY u.fullName, u.sid ORDER BY contributed_file_count DESC;';
        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $users .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../library/?by='. $row["sid"] .'">'. $row["user_name"] .'</a></td>
                        <td>'. $row["contributed_file_count"] .'</td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $users;
        
    }

    public function getFileEdit($sid){
        $c = connect::getConnect();
        $conn = $c->getConnection();
        $files = "";
        $sql = 'SELECT 
                    f.date,
                    f.file_name,
                    f.file_id,
                    f.file_type,
                    u.fullName AS uploader_name,
                    f.course_id,
                    c.course_Name AS course_title
                FROM 
                    file f
                JOIN 
                    shuser u ON f.sid = u.sid
                JOIN 
                    course c ON f.course_id = c.course_ID
                WHERE
                    f.sid = "'.$sid.'"
                ORDER BY
                    f.date DESC;';
        $result = $conn->query($sql);
        $ct = 1;
        while ($row = $result->fetch_assoc()) {
            $files .= '<tr>
                        <td>'. $ct .'</td>
                        <td><a href="../file/?id='. $row["file_id"] .'">'. $row["file_name"] .'</a> &nbsp&nbsp<span class="badge bg-secondary jb"><a class="link-light" href="../library/?type='. $row["file_type"] .'">'.$row["file_type"] .'</a></span></td>
                        <td>'.$row["course_id"] .' - ' .$row["course_title"] .'</td>
                        <td><a class="link-light bg-primary badge" href="edit.php?fid='. $row["file_id"] .'"><i class="uil uil-edit"></i> Edit</a>
                        <a class="link-light bg-danger badge" href="dlt.php?id='. $row["file_id"] .'"><i class="uil uil-trash-alt"></i> Delete</a>
                        </td>
                    </tr>';
            $ct++;
        }
        $conn->close();
        return $files;
    }

    public function indexHeader(){
        $head = "";
        session_start();
        if(!isset($_SESSION['sid'])){
            $head = `    `;
        }
        else{
            $head = ``;
        }

        return $head;
    }
}



