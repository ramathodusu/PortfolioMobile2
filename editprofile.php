<?php
  // Start the session
  require_once('startsession.php');

  // Insert the page header
  $page_title = 'You Can Edit Members Profile ';
  require_once('header.php');

  require_once('picsize.php');
  require_once('dbconnect.php');

  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_id']))
   {
    echo '<p class="login">Please <a href="login.php">log in</a> to access this page.</p>';
    exit();
   }

  // Show the navigation menu
  require_once('navmenu.php');

  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) 
   {
    // Grab the profile data from the POST
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
    $gender = mysqli_real_escape_string($dbc, trim($_POST['gender'])); 
    $birthdate = mysqli_real_escape_string($dbc, trim($_POST['birthdate']));
    $city = mysqli_real_escape_string($dbc, trim($_POST['city']));
    $state = mysqli_real_escape_string($dbc, trim($_POST['state']));
    $old_picture = mysqli_real_escape_string($dbc, trim($_POST['old_picture']));
    $new_picture = mysqli_real_escape_string($dbc, trim($_FILES['new_picture']['name']));
    $new_picture_type = $_FILES['new_picture']['type'];
    $new_picture_size = $_FILES['new_picture']['size']; 
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
    $captcha= $_POST['captcha'];
    $error = false;
	
    // Validate and move the uploaded picture file, if necessary
    if (!empty($new_picture)) 
	 {
      if ((($new_picture_type == 'images/gif') || ($new_picture_type == 'images/jpeg') || ($new_picture_type == 'images/pjpeg') ||
        ($new_picture_type == 'images/png')) && ($new_picture_size > 0) && ($new_picture_size <= MM_MAXFILESIZE) &&
        ($new_picture_width <= MM_MAXIMGWIDTH) && ($new_picture_height <= MM_MAXIMGHEIGHT))
		 {
           if ($_FILES['file']['error'] == 0)
		    {
          // Move the file to the target upload folder
             $target = MM_UPLOADPATH . basename($new_picture);
              if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) 
		       {
            // The new picture file move was successful, now make sure any old picture is deleted
              if (!empty($old_picture) && ($old_picture != $new_picture)) 
			  {
              @unlink(MM_UPLOADPATH . $old_picture);
              }
              }
            else 
		     {
            // The new picture file move failed, so delete the temporary file and set the error flag
            @unlink($_FILES['new_picture']['tmp_name']);
            $error = true;
            echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
              }
            }
            }
      else {
        // The new picture file is not valid, so delete the temporary file and set the error flag
        @unlink($_FILES['new_picture']['tmp_name']);
        $error = true;
        echo '<p class="error">Your picture must be a GIF, JPEG, or PNG image file no greater than ' . (MM_MAXFILESIZE / 1024) .
          ' KB and ' . MM_MAXIMGWIDTH . 'x' . MM_MAXIMGHEIGHT . ' pixels in size.</p>';
          }
      }
		if ($_SESSION['pass_phrase'] != SHA1($captcha)) {
      // $phone is not valid
      echo '<p class="error">Check the value entered</p>';
      $output_form = 'yes';
	  $error = true;
	      } 

    // Update the profile data in the database
    if (!$error) 
	{
      if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($birthdate) && !empty($city) && !empty($state) && !empty($email) && !      empty($phone))
	   {
	  if (!preg_match('/^\(?[2-9]\d{2}\)?[-\s]\d{3}-\d{4}$/', $phone)) 
	  {
      // $phone is not valid
      echo '<p class="error">Your phone number is invalid.</p>';
      $output_form = 'yes';
	  } 
	else
	  {
      // Only set the picture column if there is a new picture
        if (!empty($new_picture))
		 {
          $query = "UPDATE admin SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', " .
            " birthdate = '$birthdate', city = '$city', state = '$state', picture = '$new_picture', email = '$email', phone = '$phone' WHERE user_id = '" . $_SESSION['user_id'] . "'";
         } 
        else {
          $query = "UPDATE admin SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', " .
            " birthdate = '$birthdate', city = '$city', state = '$state',email = '$email', phone = '$phone' WHERE user_id = '" . $_SESSION['user_id'] . "'";
           }
        mysqli_query($dbc, $query);

       // Confirm success with the user
        echo '<p>Your profile has been successfully updated. Would you like to <a href="viewprofile.php">view your profile</a>?</p>';

        mysqli_close($dbc);
        exit();
         }
	   }
	
      else {
		 
		  echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
         }
      }
   }// End of check for form submission
  else {
    // Grab the profile data from the database
    $query = "SELECT first_name, last_name, gender, birthdate, city, state, picture, email, phone FROM admin where user_id = " . $_SESSION['user_id'];
	//echo $query;
    $data = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($data);

    if ($row != NULL) {
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $gender = $row['gender'];
      $birthdate = $row['birthdate'];
      $city = $row['city'];
      $state = $row['state'];
      $old_picture = $row['picture'];
	  $email = $row['email'];
	  $phone = $row['phone'];
    }
    else 
	   {
      echo '<p class="error">There was a problem accessing your profile.</p>';
       }
    }

  mysqli_close($dbc);
?>

  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MM_MAXFILESIZE; ?>" />
    <fieldset>
      <legend>Personal Information</legend>
      <label for="firstname">First name:</label>
      <input type="text" id="firstname" name="firstname" value="<?php if (!empty($first_name)) echo $first_name; ?>" /><br />
      <label for="lastname">Last name:</label>
      <input type="text" id="lastname" name="lastname" value="<?php if (!empty($last_name)) echo $last_name; ?>" /><br />
      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="M" <?php if (!empty($gender) && $gender == 'M') echo 'selected = "selected"'; ?>>Male</option>
        <option value="F" <?php if (!empty($gender) && $gender == 'F') echo 'selected = "selected"'; ?>>Female</option>
      </select><br />
      <label for="birthdate">Birthdate:</label>
      <input type="text" id="birthdate" name="birthdate" value="<?php if (!empty($birthdate)) echo $birthdate; else echo 'YYYY-MM-DD'; ?>" /><br />
      <label for="city">City:</label>
      <input type="text" id="city" name="city" value="<?php if (!empty($city)) echo $city; ?>" /><br />
      <label for="state">State:</label>
      <input type="text" id="state" name="state" value="<?php if (!empty($state)) echo $state; ?>" /><br />
      <input type="hidden" name="old_picture" value="<?php if (!empty($old_picture)) echo $old_picture; ?>" />
      <label for="new_picture">Picture:</label>
      <input type="file" id="new_picture" name="new_picture" />
      <?php if (!empty($old_picture)) 
	     {
        echo '<img class="profile" src="' . MM_UPLOADPATH . $old_picture . '" alt="Profile Picture" />';
         } ?><br />
	  <label for="email">Email:</label>
      <input id="email" name="email" type="text" value="<?php if (!empty($email)) echo $email; ?>"/><br />
      <label for="phone">Phone:</label>
      <input id="phone" name="phone" type="text" value="<?php if (!empty($phone)) echo $phone; ?>"/><br />
      <label for="captcha">Enter value as shown below:</label>
	  <input id="captcha" name="captcha" type="text" value="<?php if (!empty($captcha)) echo $captcha; ?>"/><br />
    </fieldset>
    <input type="submit" value="Save Profile" name="submit" />
  </form>
  <?php
  // Insert the page footer
  //require_once('captcha.php');
  ?>
<img src="captcha.php" alt="captcha"/>
<footer>
   <script type="text/jscript" src="jquery.js"></script>
</footer>


