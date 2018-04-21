<?php
           $mysqli = new mysqli("localhost","root","","isdm");
           $query3=$mysqli->query("Select * from courses");
            ?>

<?php while($row = mysqli_fetch_row($query3)) { ?>

   <tr ><td> <?php echo $row[0] ?></td>
   <td id="data" contenteditable="false" ><a id="formAnchor" data-val="<?php echo $row[0] ?>" href="display.php?c_id=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></td>
   <td id="data" contenteditable="false"><?php echo $row[2] ?></td>
   <td id="data" contenteditable="false"><?php echo $row[3] ?></td>
   <td id="data" contenteditable="false"><?php echo $row[4] ?></td>
   <td id="data" contenteditable="false"><?php echo $row[5] ?></td>
   <td id="data" contenteditable="false"><?php echo $row[6] ?></td>
   <td id="data" contenteditable="false"><?php echo $row[7] ?></td>
   <!-- <td id="data" contenteditable="false"><?php echo $row[8] ?></td> -->
   <td id="btn" onclick="editable(this.parentNode.rowIndex )"><i class="fa fa-pencil" style="font-size:24px"></i></td>
   <!-- <td id="submit" onclick="submit()" style="display: none" >&#8594;</td> -->
   </tr>
   <?php } ?>

   <script>
  var row;
  var patientID;
  var CourseID;
  function editable(b) {
    console.log("inside editable");
    var noneditable_elements = document.querySelectorAll("[contenteditable=false]");
    // var noneditable_buttons = document.querySelectorAll("[id=btn]");
    // var editable_elements = document.querySelectorAll("[contenteditable=true]");
    // alert(b);
    document.getElementById("submit").style.display="block";
    // table tr:nth-child(b) {display : none;}
    //document.getElementById("pTable").childNodes[b].color='blue';
    row = b;
    var eles = document.querySelectorAll("[id=btn]");
    for (var i=0; i < eles.length; i++)
      eles[i].onclick = null;
    var number = 8;  //number of contenteditables
    var k, m=0;
    for(var i=0; i<noneditable_elements.length; i++){
      // console.log('i: ',i,'  b ', (b-1)*number + m)
      k = (b-1)*number + m;
     if(i == k && m <8){ //m less than 8 signifies the number of content editables
        noneditable_elements[i].setAttribute("contenteditable", true);
        m++;
     } else {
      noneditable_elements[i].setAttribute("contenteditable", false);
      noneditable_elements[i].style.color="grey";

     }
    }
//     var x = document.getElementById("data");
// if (x.contentEditable == "true") {
//    // x.contentEditable = "false";
//     // button.innerHTML = "Enable content of p to be editable!";
//     console.log("Enable content of p to be editable!")
// } else {
//    // x.contentEditable = "true";
//     // button.innerHTML = "Disable content of p to be editable!";
//     console.log("set to true");
// }
}
function submit(){
  // console.log('row: ',row);
  var x=document.getElementById("pTable").rows[row];
  CourseID=x.cells[0].innerHTML;
  console.log(patientID);
  var editable_elements = document.querySelectorAll("[contenteditable=true]");
  console.log("out: ",editable_elements[0].value);
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    var element2 = document.createElement("input");
    var element3 = document.createElement("input");

    var element4 = document.createElement("input");
    var element5 = document.createElement("input");
    var element6 = document.createElement("input");

    var element7 = document.createElement("input");
    var element8 = document.createElement("input");
    var element9 = document.createElement("input");
    form.method = "POST";
    form.action = "RESTful/update_patient.php";
    // element1.value=patientID;
    // console.log(patientID);
    element1.value=CourseID;
    console.log(CourseID);
    element1.name="Course_ID";
    form.appendChild(element1);
    element2.value=document.getElementById('formAnchor').innerHTML;
    element2.name="Course Description";
    console.log(element2.value);
    form.appendChild(element2);

    element3.value=x.cells[2].innerHTML;
    element3.name="Course Objectives";
    console.log(element3.value);
    form.appendChild(element3);

    element4.value=x.cells[3].innerHTML;
    element4.name="Course Instructor";
    console.log(element4.value);
    form.appendChild(element4);

    element5.value=x.cells[4].innerHTML;
    element5.name="Course Langugage";
    console.log(element5.value);
    form.appendChild(element5);

    element6.value=x.cells[5].innerHTML;
    element6.name="Course Category";
    console.log(element6.value);
    form.appendChild(element6);

    // element7.value=x.cells[6].innerHTML;
    // element7.name="area";
    // console.log(element7.value);
    // form.appendChild(element7);
    //
    // element8.value=x.cells[7].innerHTML;
    // element8.name="hospital";
    // console.log(element8.value);
    // form.appendChild(element8);
    //
    // element9.value=x.cells[8].innerHTML;
    // element9.name="contact";
    // console.log(element9.value);
    // form.appendChild(element9);
    document.body.appendChild(form);
    form.submit();
}
</script>
