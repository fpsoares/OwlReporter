<?php
require_once('function.php');
?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOAR UI</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/soarresume.css" >
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<form action=''>
  <div id="surveyinfo">

    <form id="surveyform">

    <div id="basicinfo">
      <h3>Please enter your information here to create your resume!</h3>

      <table border="0" width="100%">
        <tr>
          <td>First Name:</td>
          <td><input type="text" id="first_name" placeholder="John Doe" /></td>
        </tr>

        <tr>
          <td>Last Name:</td>
          <td><input type="text" id="last_name" placeholder="John Doe" /></td>
        </tr>

        <tr>
          <td>Z Number:</td>
          <td><input type="text" id="student_id" maxlength="8" placeholder="00000000" /></td>
        </tr>

        <tr>
          <td>Current Education:</td>
          <td>
            <select name="education">
              <option value="blank"></option>
              <option value="highschool">High School</option>
              <option value="associates">Associate's Degree</option>
              <option value="bachelors">Bachelor's Degree</option>
              <option value="masters">Master's Degree</option>
              <option value="phd">PHD or Doctorate</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Status of previous:</td>
          <td>
            <select name="status">
              <option value=""></option>
              <option value="inprogress">In Progress</option>
              <option value="completed">Completed</option>
            </select>
          </td>
        </tr>

      </table>
    </div>

    <div id="fieldsofstudy">
      <h3>Fields of Interest:</h3>

      <table border="0" width="100%">

        <tr>
          <td>Area of Study:</td>
          <td>
            <select name="areaofstudy">
              <option value=""></option>
              <option value="compsci">Computer Science</option>
              <option value="compeng">Computer Engineering</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Degree Type:</td>
          <td>
            <select name="degreetype">
              <option value="blank"></option>
              <option value="associates">Associate's Degree</option>
              <option value="bachelors">Bachelor's Degree</option>
              <option value="masters">Master's Degree</option>
              <option value="phd">PHD or Doctorate</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>School:</td>
          <td><input type="text" id="school_name" placeholder="Florida Atlantic University" /></td>
        </tr>

      </table>

      <p><button href="#" id="additionaldegrees">Click Here to Add Additional Degrees</button></p>
      <hr width="30%" />
      <p><button href="#" id="soarnext">Next</button></p>
    </div>

    <div id="skills">

      <h2>Programming/Software Skills</h2>

      <table border="0" width="100%">

        <tr>
          <td>Language/Software: </td>
          <td><input type="text" id="langsoft" /></td>
        </tr>

        <tr>
          <td>Proficiency Level:</td>
          <td>
            <select name="langprof">
              <option value="blank"></option>
            </select>
          </td>
        </tr>
      </table>

      <p><button href="#" id="addsoftskill">Add Programming/Software skill!</button></p>

      <div id="spacing">
        <h2>Hardware/Equipment Skills</h2>

        <table border="0" width="100%">

          <tr>
            <td>Hardware/Equipment:</td>
            <td><input type="text" id="hardequip" /></td>
          </tr>

          <tr>
            <td>Proficiency Level:</td>
            <td>
              <select name="hardprof">
                <option value="blank"></option>
              </select>
            </td>
          </tr>

        </table>

        <p><button href="#" id="addhardskill">Add Hardware/Equipment skill!</button></p>
      </div>
      <hr width="40%" />
      <p><button href="#" id="skillnext">Next</button></p>
    </div>

    <div id="workexperience">
      <h2>Work and Internship Experience</h2>

      <table border="0" width="100%">

        <tr>
          <td>Company Name:</td>
          <td><input type="text" id="company_name" placeholder="CompanyName" /></td>
        </tr>

        <tr>
          <td>Position:</td>
          <td><input type="text" id="job_position_name" placeholder="Position" /></td>
        </tr>

        <tr>
          <td>Start Date:</td>
          <td><input type="date" id="start_date" placeholder="mm/dd/yyyy" /></td>
        </tr>

        <tr>
          <td>End Date:</td>
          <td><input type="date" id="end_date" placeholder="mm/dd/yyyy"  /></td>
        </tr>

      </table>

      <p><button href="#" id="addexperience">Add Work or Internship Experience!</button></p>
      <hr width="20%" />
      <p><button href="#" id="worknext">Next</button></p>
    </div>

    <div id="additionalinfo">
      <h2>Additional Information</h2>
      <p>Type a quick introduction about yourself!</p>
      <p><textarea rows="10" cols="75" id="summary_text" placeholder="Quick Introduction..."></textarea></p>

      <br />

      <p>Use this area to type any additional information that you may think is relevant, including awards or extra-curricular activities!</p>
      <p><textarea rows="10" cols="75" id="additional_text" placeholder="Additional Info..."></textarea></p>

      <hr width="35%" />
      <p><button href="#" id="done">Submit Resume</button></p>
    </div>

    </form>
  </div>
</form>
</body>
</html>
