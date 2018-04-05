 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="editProfile.css" rel="stylesheet">
   </head>

<body>
<div class="container-fluid">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="profilePic.jpg" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="form-control">
		  </br>
		  <div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Change Major:
		  <span class ="caret"></span></button>
		  <ul class="dropdown-menu">
		  <select name="taskid">
                <?php foreach( $majors as $major ) : ?>
                    <option value="<?php echo $major->getMajorID(); ?>">
                        <?php echo $major->getMajorName; ?>
                    </option>
                <?php endforeach; ?>
            </select>
		  </ul>
			</div>
        </div>
      </div> 	  
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3><?php echo ($appUser->getFirstName()." ".$appUser->getLastName());?></h3>      
        <form class="form-horizontal" role="form">
		<div class="form-group">
		<label class="col-lg-3 control-label">About Me:</label>
		<div class="col-lg-8">
		<textarea class="sum" id="aboutMe" rows="4" cols="60">
			Say something interesting... 
		</textarea>
		</div>
		</div>
          <div class="form-group">
            <label class="col-lg-3 control-label">First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="firstName" type="text" value="<?php echo($appUser->getFirstName());?>">
            </div>
          </div>
          <div class="form-group">
		  <label class="col-lg-3 control-label">Last Name:</label>
            <div class="col-lg-8">
			<input class="form-control" id="lastName" type="text" value="<?php echo($appUser->getLastName());?>">
              <div class="ui-select">
              </div>
            </div>
          </div>
          <div class="form-group">
		  <label class="col-lg-3 control-label">Email:</label>
            <div class="col-md-8">
			<input class="form-control" id="email" type="text" value="<?php echo($student->getEmail());?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Old Password:</label>
            <div class="col-md-8">
              <input class="form-control" id="oldPwd" type="password" value="<?php echo($appUser->getPassword());?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">New password:</label>
            <div class="col-md-8">
              <input class="form-control" id="newPwd" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" id="saveProfile" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" id="cancel" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>