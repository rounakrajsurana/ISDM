<?php
// session_start();
// $user_id = $_SESSION['userid'];
// $courseId = $_GET["id"];

 function fetch_data()
 {
      $output = '';
      $courseId = $_GET["id"];
      $connect = mysqli_connect("localhost", "root", "", "isdm");
      $sql = "SELECT * FROM courses WHERE course_id = $courseId";
      // $query = "SELECT * FROM schedule WHERE schedule_id = 2";
      $result = mysqli_query($connect, $sql);
      // $record = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result))
      {
      $output .= '<tr>
                     <td>'.$row['course_id'].'</td>
                     <td>'.$row['course_name'].'</td>
                     <td>'.$row['course_description'].'</td>
                     <td>'.$row['course_description'].'</td>
                     <td>'.$row['course_obj1'].'</td>
                     <td>'.$row['course_obj2'].'</td>
                     <td>'.$row['course_obj3'].'</td>
                     <td>'.$row['course_instructor1'].'</td>
                     <td>'.$row['course_instructor2'].'</td>
                     <td>'.$row['course_instructor3'].'</td>
                     <td>'.$row['course_lang'].'</td>
                     <td>'.$row['course_cat'].'</td>
                  </tr>';
      }
      return $output;
  }

  function data()
  {
    $out = '';
    $courseId = $_GET["id"];
    $db = mysqli_connect('localhost','root','','isdm');
    $query = "SELECT * FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
    $record = mysqli_query($db, $query);
    while($res = mysqli_fetch_array($record))
      {
        $out .=' <tr>
                    <td>'.$res['topicname1'].'</td>
                    <td>'.$res['bm1'].'</td>
                    <td>'.$res['tm1'].'</td>
                    <td>'.$res['evaluation1'].'</td>
                    <td>'.$res['duration1'].'</td>
                  </tr>

                  <tr>
                    <td>'.$res['topicname2'].'</td>
                    <td>'.$res['bm2'].'</td>
                    <td>'.$res['tm2'].'</td>
                    <td>'.$res['evaluation2'].'</td>
                    <td>'.$res['duration2'].'</td>
                  </tr>

                  <tr>
                    <td>'.$res['topicname3'].'</td>
                    <td>'.$res['bm3'].'</td>
                    <td>'.$res['tm3'].'</td>
                    <td>'.$res['evaluation3'].'</td>
                    <td>'.$res['duration3'].'</td>
                  </tr>

                  <tr>
                    <td>'.$res['topicname4'].'</td>
                    <td>'.$res['bm4'].'</td>
                    <td>'.$res['tm4'].'</td>
                    <td>'.$res['evaluation4'].'</td>
                    <td>'.$res['duration4'].'</td>
                  </tr>';
            }
            return $out;
}

function read_data()
{
      $out1 = '';
      $courseId = $_GET["id"];
      $db = mysqli_connect('localhost','root','','isdm');
      $query2 = $query2 = "SELECT total_duration, target_learner, problem, statement FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
      $read = mysqli_query($db, $query2);
      while($rec = mysqli_fetch_array($read))
      {
        $out1 .='<tr>
                  <td>'.$rec['total_duration'].'</td>
                  <td>'.$rec['target_learner'].'</td>
                  <td>'.$rec['problem'].'</td>
                  <td>'.$rec['statement'].'</td>
                </tr>';
      }
      return $out1;
}

if(isset($_POST["create_pdf"]))
{
      require_once('tcpdf/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Course Outline");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('times', '', 8);
      $obj_pdf->AddPage();
      $content = '';
      $content .= '
      <h3 align="center">Course Outline</h3><br /><br />
      <table border="1" cellspacing="0" cellpadding="5">
           <tr>
             <!-- <th scope="col">S.No</th> -->
             <th scope="col"><strong>CourseID</strong></th>
             <th scope="col"><strong>Course Name</strong></th>
             <th scope="col"><strong>Course Description</strong></th>
             <th scope="col"><strong>Learning Outcome</strong></th>
             <!-- <th scope="col"><strong>Instructor/s</strong></th> -->
             <th scope="col"><strong>Course Obj. 1</strong></th>
             <th scope="col"><strong>Course Obj. 2</strong></th>
             <th scope="col"><strong>Course Obj. 3</strong></th>
             <th scope="col"><strong>Course Inst. 1</strong></th>
             <th scope="col"><strong>Course Inst. 2</strong></th>
             <th scope="col"><strong>Course Inst. 3</strong></th>
             <th scope="col"><strong>Course Langugage</strong></th>
             <th scope="col"><strong>Course Category</strong></th>
           </tr>
      ';
      $content .= fetch_data();
      $content .= '</table>';

      $content2 = '';
      $content2 .='
      <h3 align="center">Course Schedule</h3><br /><br />
      <table border="1" cellspacing="0" cellpadding="5">
      <tr>
        <!-- <th scope="col">S.No</th> -->
        <th scope="col"><strong>Topic</strong></th>
        <th scope="col"><strong>Blooms Method</strong></th>
        <th scope="col"><strong>Teaching Method</strong></th>
        <!-- <th scope="col">Instructor/s</th> -->
        <th scope="col"><strong>Evaluation</strong></th>
        <th scope="col"><strong>Duration</strong></th>
      </tr>';
      $content2 .= data();
      $content2 .= '</table>';

      $content3 = '';
      $content3 .='
      <h3 align="center"></h3><br /><br />
      <table border="1" cellspacing="0" cellpadding="5">
      <tr>
        <th scope="col">Total Duration</th>
        <th scope="col">Target Learner</th>
        <th scope="col">Problem</th>
        <th scope="col">Solution</th>
      </tr>';
      $content3 .= read_data();
      $content3 .= '</table>';

      $obj_pdf->writeHTML($content);
      $obj_pdf->writeHTML($content2);
      $obj_pdf->writeHTML($content3);
      $obj_pdf->Output('sample.pdf', 'I');
}
?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Course Outline and Schedule</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      </head>
      <body>
           <br /><br />
           <div class="container" style="width:700px;">
                <h3 align="center">Course Outline and Schedule</h3><br />
                <div class="table-responsive">
                     <table class="table table-bordered">
                       <tr>
                         <!-- <th scope="col">S.No</th> -->
                         <th scope="col">CourseID</th>
                         <th scope="col">Course Name</th>
                         <th scope="col">Course Description</th>
                         <th scope="col">Learning Outcome</th>
                         <!-- <th scope="col">Instructor/s</th> -->
                         <th scope="col">Course Objective 1</th>
                         <th scope="col">Course Objective 2</th>
                         <th scope="col">Course Objective 3</th>
                         <th scope="col">Course Instructor 1</th>
                         <th scope="col">Course Instructor 2</th>
                         <th scope="col">Course Instructor 3</th>
                         <th scope="col">Course Langugage</th>
                         <th scope="col">Course Category</th>
                       </tr>
                       <?php
                       echo fetch_data();
                       ?>
                       </table>

                       <table class="table table-bordered">
                         <tr>
                           <!-- <th scope="col">S.No</th> -->
                           <th scope="col">Topic</th>
                           <th scope="col">Blooom's Method</th>
                           <th scope="col">Teaching Method</th>
                           <!-- <th scope="col">Instructor/s</th> -->
                           <th scope="col">Evaluation</th>
                           <th scope="col">Duration</th>
                           <!-- <th scope="col">Problem</th> -->
                           <!-- <th scope="col">Solution</th> -->
                       </tr>
                     <?php
                     echo data();
                     ?>
                     </table>
                     <table class="table table-bordered">
                       <tr>
                         <!-- <th scope="col">S.No</th> -->
                         <th scope="col">Total Duration</th>
                         <th scope="col">Target Learner</th>
                         <th scope="col">Problem</th>
                         <th scope="col">Solution</th>
                       </tr>
                       <?php
                          echo read_data();
                        ?>
                      </table>
                     <br />
                     <form method="post">
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />
                     </form>
                </div>
           </div>
      </body>
 </html>
