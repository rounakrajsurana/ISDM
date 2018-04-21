<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <title>Schedule</title>
    <style>
      .jumbotron {
        background-color: #f4511e; /* Orange */
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><b>COURSTRON</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="1Home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="2Dashbard.php"><i class="fas fa-columns"></i> Dashboard<span class="sr-only">(current)</span></a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a class="nav-link" href="contactus.html"> Contact Us <span class="sr-only">(current)</span></a>
            </li>
            <li>
              <!-- <a class="nav-link" href="logout.php">Log Out</a> -->
              <button type="button" class="btn" >
                     <a href="logout.php">Log out</a>
              </button>
            </li>
          </ul>
        </div>
    </nav>

    <section class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Schedule and Design</h1>
        <p class="lead text-muted"></p>
        <ul class="nav nav-pills" id="pills-tab" role="tablist"></ul>
      </div>
    </section>

    <!--Bloom's Taxonomy  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="#demo" data-toggle="collapse">
            <img src="1.png" class="img-circle person">
          </a>
          <div id="demo" class="collapse">
            <p>Combining parts to make a new whole</p>
            <p></p>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="#demo2" data-toggle="collapse">
            <img src="2.png" class="img-circle person">
          </a>
          <div id="demo2" class="collapse">
            <p>Judging the value of information or ideas.</p>
            <p></p>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="#demo3" data-toggle="collapse">
            <img src="3.png" class="img-circle person">
          </a>
          <div id="demo3" class="collapse">
            <p>Breaking down information into its various components.</p>
            <p></p>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="#demo4" data-toggle="collapse">
            <img src="4.png" class="img-circle person">
          </a>
          <div id="demo4" class="collapse">
            <p>Applying the facts, rules, concepts and ideas.</p>
            <p></p>
            <p</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="#demo5" data-toggle="collapse">
            <img src="5.png" class="img-circle person">
          </a>
          <div id="demo5" class="collapse">
            <p>Pertains mostly understanding concepts and hopefull explain something in their own words</p>
            <p></p>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="#demo6" data-toggle="collapse">
            <img src="6.png" class="img-circle person">
          </a>
          <div id="demo6" class="collapse">
            <p>Students will be able in the long run and decide things on their own pertaining to the topic</p>
            <p></p>
            <p></p>
          </div>
        </div>
		   </div>
		</div>

    <br><br>
    <div class="container">
      <div class="col-lg-16 well">
        <div class="row">
          <div class="form-group col">
            <?php $courseId = $_GET["id"]; ?>
            <form action="schedule.php?id=<?php echo $courseId; ?>" method="post">
              <div class="col-sm-12">

                <div class="row">
                 <!-- <div class="col-sm-2 form-group">
                   <label>Schedule ID</label>
                   <textarea placeholder="  " rows="1" class="form-control" name="scheduleid" id="scheduleid"></textarea>
                 </div> -->
                </div>
                <!-- Topic 1 -->
                <div class="row">
                  <div class="col-sm-3 form-group">
                    <label>Topics: </label>
                    <textarea placeholder="Topic 1"  class="form-control" name="topic1" id="topic1" required/></textarea>
                  </div>
                  <!-- Bloom's 1 -->
                  <div class="col-sm-2 form-group">
                    <label>Blooom's Method</label>
                    <select id="bl1" name="bl1" class="form-control" required="required">
                      <option value=""> </option>
                      <option value="Create">Create</option>
                      <option value="Evaluate">Evaluate </option>
                      <option value="Analyze">Analyze</option>
                      <option value="Apply">Apply</option>
                      <option value="Understand">Understand</option>
                      <option value="Remember">Remember</option>
                    </select>
                  </div>
                  <!-- Teaching Method 1 -->
                  <div class="col-sm-2 form-group">
                    <label>Teaching Method</label>
                    <select id="teach1" name="teach1" class="form-control" required="required">
                      <option value=""> </option>
                      <option value="Lecture">Lecture</option>
                      <option value="Group Activity">Group Activity</option>
                      <option value="Presentation">Presentation</option>
                      <option value="Debate">Debate</option>
                    </select>
                  </div>
                  <!-- Evaluation 1 -->
                  <div class="col-sm-2 form-group">
                    <label>Evaluation</label>
                    <select id="eval1" name="eval1" class="form-control" required="required">
                        <option value=""> </option>
                        <option value="Pop Quiz">Pop Quiz</option>
                        <option value="Class Activity">Class Activity</option>
                        <option value="Written Exam">Written Exam</option>
                        <option value="Assignment">Assignment</option>
                        <option value="Project">Project</option>
                    </select>
                  </div>
                  <!-- Duration 1 -->
                  <div class="col-sm-2 form-group">
                    <label for="Duration">Duration(Weeks)</label>
                    <select id="dur1" name="dur1" class="form-control" required="required">
                      <option value=""> </option>
                      <option value="1 week">1 week</option>
                      <option value="2 weeks">2 weeks</option>
                      <option value="3 weeks">3 weeks</option>
                      <option value="4 weeks">4 weeks</option>
                      <option value="5 weeks">5 weeks</option>
                      <option value="6 weeks">6 weeks</option>
                      <option value="7 weeks">7 weeks</option>
                      <option value="8 weeks">8 weeks</option>
                      <option value="9 weeks">9 weeks</option>
                      <option value="10 weeks">10 weeks</option>
                    </select>
                  </div>
                </div>

                <!-- Topic 2 -->
                <div class="row">
                  <div class="col-sm-3 form-group">
                    <label>Topics: </label>
                    <textarea placeholder="Topic 2"  class="form-control" name="topic2" id="topic2"></textarea>
                  </div>
                  <!-- Bloom's 2 -->
                  <div class="col-sm-2 form-group">
                    <label>Blooom's Method</label>
                    <select id="bl2" name="bl2" class="form-control" />
                      <option value=""> </option>
                      <option value="Create">Create</option>
                      <option value="Evaluate">Evaluate </option>
                      <option value="Analyze">Analyze</option>
                      <option value="Apply">Apply</option>
                      <option value="Understand">Understand</option>
                      <option value="Remember">Remember</option>
                    </select>
                  </div>
                  <!-- Teaching Method 2 -->
                  <div class="col-sm-2 form-group">
                    <label>Teaching Method</label>
                    <select id="teach2" name="teach2" class="form-control" />
                        <option value=""> </option>
                        <option value="Lecture">Lecture</option>
                        <option value="Group Activity">Group Activity</option>
                        <option value="Presentation">Presentation</option>
                        <option value="Debate">Debate</option>
                    </select>
                  </div>
                  <!-- Evaluation 2 -->
                  <div class="col-sm-2 form-group">
                    <label>Evaluation</label>
                    <select id="eval2" name="eval2" class="form-control" />
                        <option value=""> </option>
                        <option value="Pop Quiz">Pop Quiz</option>
                        <option value="Class Activity">Class Activity</option>
                        <option value="Written Exam">Written Exam</option>
                        <option value="Assignment">Assignment</option>
                        <option value="Project">Project</option>
                    </select>
                  </div>
                  <!-- Duration 2 -->
                  <div class="col-sm-2 form-group">
                    <label for="Duration">Duration(Weeks)</label>
                    <select id="dur2" name="dur2" class="form-control" />
                      <option value=""> </option>
                      <option value="1 week">1 week</option>
                      <option value="2 weeks">2 weeks</option>
                      <option value="3 weeks">3 weeks</option>
                      <option value="4 weeks">4 weeks</option>
                      <option value="5 weeks">5 weeks</option>
                      <option value="6 weeks">6 weeks</option>
                      <option value="7 weeks">7 weeks</option>
                      <option value="8 weeks">8 weeks</option>
                      <option value="9 weeks">9 weeks</option>
                      <option value="10 weeks">10 weeks</option>
                    </select>
                  </div>
                </div>


				       <!-- Topic 3 -->
               <div class="row">
                 <div class="col-sm-3 form-group">
                   <label>Topics: </label>
                   <textarea placeholder="Topic 3"  class="form-control" name="topic3" id="topic3" /></textarea>
                 </div>
                <!-- Bloom's 3 -->
                <div class="col-sm-2 form-group">
                  <label>Blooom's Method</label>
                  <select id="bl3" name="bl3" class="form-control" />
                        <option value=""> </option>
                        <option value="Create">Create</option>
                        <option value="Evaluate">Evaluate </option>
                        <option value="Analyze">Analyze</option>
                        <option value="Apply">Apply</option>
                        <option value="Understand">Understand</option>
                        <option value="Remember">Remember</option>
                  </select>
                </div>
                <!-- Teaching Method 3 -->
                <div class="col-sm-2 form-group">
                  <label>Teaching Method</label>
                  <select id="teach3" name="teach3" class="form-control" />
                      <option value=""> </option>
                      <option value="Lecture">Lecture</option>
                      <option value="Group Activity">Group Activity</option>
                      <option value="Presentation">Presentation</option>
                      <option value="Debate">Debate</option>
                  </select>
                </div>
                <!-- Evaluation 3 -->
                <div class="col-sm-2 form-group">
                  <label>Evaluation</label>
                  <select id="eval3" name="eval3" class="form-control" />
                      <option value=""> </option>
                      <option value="Pop Quiz">Pop Quiz</option>
                      <option value="Class Activity">Class Activity</option>
                      <option value="Written Exam">Written Exam</option>
                      <option value="Assignment">Assignment</option>
                      <option value="Project">Project</option>
                  </select>
                </div>
                <!-- Duration 3 -->
                <div class="col-sm-2 form-group">
                  <label for="Duration">Duration(Weeks)</label>
                  <select id="dur3" name="dur3" class="form-control" />
                    <option value=""> </option>
                    <option value="1 week">1 week</option>
                    <option value="2 weeks">2 weeks</option>
                    <option value="3 weeks">3 weeks</option>
                    <option value="4 weeks">4 weeks</option>
                    <option value="5 weeks">5 weeks</option>
                    <option value="6 weeks">6 weeks</option>
                    <option value="7 weeks">7 weeks</option>
                    <option value="8 weeks">8 weeks</option>
                    <option value="9 weeks">9 weeks</option>
                    <option value="10 weeks">10 weeks</option>
                  </select>
                </div>
               </div>

               <!-- Topic 4 -->
               <div class="row">
                 <div class="col-sm-3 form-group">
                   <label>Topics: </label>
                   <textarea placeholder="Topic 4"  class="form-control" name="topic4" id="topic4" /></textarea>
                 </div>
                 <!-- Bloom's 4 -->
                 <div class="col-sm-2 form-group">
                   <label>Blooom's Method</label>
                   <select id="bl4" name="bl4" class="form-control" />
                     <option value=""> </option>
                     <option value="Create">Create</option>
                     <option value="Evaluate">Evaluate </option>
                     <option value="Analyze">Analyze</option>
                     <option value="Apply">Apply</option>
                     <option value="Understand">Understand</option>
                     <option value="Remember">Remember</option>
                   </select>
                 </div>
                 <!-- Teaching Method 4 -->
                 <div class="col-sm-2 form-group">
                   <label>Teaching Method</label>
                   <select id="teach4" name="teach4" class="form-control" />
                     <option value=""> </option>
                     <option value="Lecture">Lecture</option>
                     <option value="Group Activity">Group Activity</option>
                     <option value="Presentation">Presentation</option>
                     <option value="Debate">Debate</option>
                   </select>
                 </div>
                 <!-- Evaluation 4 -->
                 <div class="col-sm-2 form-group">
                   <label>Evaluation</label>
                   <select id="eval4" name="eval4" class="form-control" />
                     <option value=" "> </option>
                     <option value="Pop Quiz">Pop Quiz</option>
                     <option value="Class Activity">Class Activity</option>
                     <option value="Written Exam">Written Exam</option>
                     <option value="Assignment">Assignment</option>
                     <option value="Project">Project</option>
                   </select>
                 </div>
                 <!-- Duration 4 -->
                 <div class="col-sm-2 form-group">
                   <label for="Duration">Duration(Weeks)</label>
                   <select id="dur4" name="dur4" class="form-control" />
                     <option value=""> </option>
                     <option value="1 week">1 week</option>
                     <option value="2 weeks">2 weeks</option>
                     <option value="3 weeks">3 weeks</option>
                     <option value="4 weeks">4 weeks</option>
                     <option value="5 weeks">5 weeks</option>
                     <option value="6 weeks">6 weeks</option>
                     <option value="7 weeks">7 weeks</option>
                     <option value="8 weeks">8 weeks</option>
                     <option value="9 weeks">9 weeks</option>
                     <option value="10 weeks">10 weeks</option>
                   </select>
                 </div>
               </div>


               <div class="row">
                 <div class = "col-sm-2 form-group">
								  <label>Total Approx. Duration</label>
								  <select id="td" name="td" class="form-control" />
                    <option value=""> </option>
                    <option value="1 Weeks">1 Weeks</option>
										<option value="2 Weeks">2 Weeks</option>
										<option value="3 Weeks">3 Weeks</option>
										<option value="4 Weeks">4 Weeks</option>
										<option value="5 Weeks">5 Weeks</option>
										<option value="6 Weeks">6 Weeks</option>
										<option value="7 Weeks">7 Weeks</option>
										<option value="8 Weeks">8 Weeks</option>
										<option value="9 Weeks">9 Weeks</option>
										<option value="10 Weeks">10 Weeks</option>
										<option value="11 Weeks">11 Weeks</option>
										<option value="12 Weeks">12 Weeks</option>
                    <option value="13 Weeks">13 Weeks</option>
                    <option value="14 Weeks">14 Weeks</option>
                    <option value="15 Weeks">15 Weeks</option>
                    
                                        
                                        
								  </select>
							   </div>
							 </div>

               <div class="row">
                 <div class="col-sm-2 form-group">
                   <label> Target Learner </label>
                   <input type="text" placeholder="  " class="form-control" name="tl" id="tl" required/>
                 </div>
               </div>
               <!-- <div class="row">
                 <div class="col-sm-2 form-group">
                    <label>Duration:</label>
                    <textarea placeholder="Duration" rows="1" class="form-control"></textarea>
                 </div>
               </div> -->

               <div class="row">
                <div class="col-sm-4 form-group">
                  <label> Problem</label>
                  <textarea placeholder="Problem" rows="1" class="form-control" name="problem" id="problem"></textarea>
                </div>

                <div class="col-sm-4 form-group">
                  <label> Solution</label>
                  <textarea placeholder="Solution" rows="1" class="form-control" name="solution" id="solution"></textarea>
                </div>
               </div>
               <br>
               <input type="submit" class="btn btn-success" value="Save" />
               <a href="ADDSCHEDULE.php" button type="submit" class="btn btn-danger" > Reset </a>

              </div>
            </form>
					</div>
          <br>
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
  </body>
</html>
