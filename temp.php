<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js">
</script>
    <style>
      .jumbotron {
          background-color: #f4511e; /* Orange */
          color: #ffffff;
        }
    </style>

    <title>Add Course</title>

    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><b>Online Course Support System</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="Dashboard.php"> Dashboard <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="contactus.html">Contact us <span class="sr-only">(current)</span></a>
                </li>

              </ul>


			 <button type="button" class="btn btn-light">
            <a href="1Home.php">Log Out<span class="glyphicon glyphicon-user">(current)</span></a>
        </button>

          </div>

               </nav>
   <section class="jumbotron jumbotron-fluid text-center">
     <div class="container">
       <h1 class="jumbotron-heading">Add Course</h1>
       <p>Course information for adding a new course</p>
       <ul class="nav nav-pills" id="pills-tab" role="tablist">



   </section>

    <div class="container">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Please sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">
              <form>
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="username">

                  <label for="password" class="sr-only">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" required>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Please Register</h5>
        <button type="button" class="close" data-dismiss="model" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">
              <form>
                <div class="form-group">
                  <label for="username" class="sr-only">First</label>
                  <input type="text" class="form-control" placeholder="Username" id="username">

                  <label for="password" class="sr-only">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" required>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">

<div class="col-lg-12 well">
<div class="row">
      <form action="display.php" method="post">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Course Name</label>
              <input type="text" placeholder="  " class="form-control">
            </div>
            <div class="col-sm-6 form-group">
              <label>Course ID <Code></Code></label>
              <input type="text" placeholder="  " class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label>Course Description</label>
            <textarea placeholder="   " rows="3" class="form-control"></textarea>
          </div>
          <div class="row">
            <label>Learning Outcome</label>
            <textarea placeholder="   " rows="3" class="form-control"></textarea>
          </div>




<!-- Text input-->
          <div class="form-group">
            <label class="col-md-5 control-label" for="action_id">Objective</label>
            <div class="col-md-10">
              <div class="container">
                  <div class="row">

                      <div class="panel-body">
                      <form action="" >

                          <div class="input-group control-group after-add-more">
                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Objective">
                                <div class="input-group-btn">
                                  <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                          </div>

                      </form>


                      <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                      <div class="copy-fields hide">
                          <div class="control-group input-group" style="margin-top:10px">

                              <input type="text" name="addmore[]" class="form-control" placeholder="Enter Objective">
                              <div class="input-group-btn">
                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
            <br><br>
        </div>
      </div>
    </div>
  </div>
          <div class="row">
            <div class="container">
                <table id="myTable" class=" table order-list">
                  <thead>
                      <tr>
                          <td>Instructor's Name</td>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="col-sm-4">
                              <input type="text" name="name" class="form-control" />
                          </td>
                      </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="5" style="text-align: left;">
                              <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add More" />
                          </td>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <a href="2Dashbard.html" button type="button" class="btn btn-lg btn-info" >Submit</a>
            </div>
        </div>
    </div>
  </div>


      </form>
      </div>
</div>
</div>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Libraries -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>

    <!-- Custom -->

    <script>
      $(document).ready(function () {
          var $language_control = $("#subject_others");
          $language_control.hide();
          var $language_selection = $("#language");
          $language_selection.change(function() {
            if ($language_selection.val() == "Others") {
              $language_control.show();
            } else {
              $language_control.hide();
            }
          })
      });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
	//here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
	//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>

<script>$(document).ready(function () {
    var counter = 0;
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
});
function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}
function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}</script>



  </body>
</html>
