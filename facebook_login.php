
<?php

session_start();

require_once './config.php';
if ($userID) {
  try {
    if ($_SESSION["user_id"] == "") {
      // fetch user details.
      $user_profile = $facebook->api('/me');

      // Now check if user exist with same email ID
      $sql = "SELECT COUNT(*) AS count from users where email = :email_id";
      try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":email_id", $user_profile["email"]);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if ($result[0]["count"] > 0) {
          // User Exist 

          $_SESSION["name"] = $user_profile["name"];
          $_SESSION["email"] = $user_profile["email"];
          $_SESSION["new_user"] = "no";
        } else {
          // New user, Insert in database
          $sql = "INSERT INTO `users` (`name`, `email`) VALUES " . "( :name, :email)";
          $stmt = $DB->prepare($sql);
          $stmt->bindValue(":name", $user_profile["name"]);
          $stmt->bindValue(":email", $user_profile["email"]);
          $stmt->execute();
          $result = $stmt->rowCount();
          if ($result > 0) {
            $_SESSION["name"] = $user_profile["name"];
            $_SESSION["email"] = $user_profile["email"];
            $_SESSION["new_user"] = "yes";
          }
        }
      } catch (Exception $ex) {
        #echo $ex->getMessage();
      }

	  header("location:home.php");
    }
    $_SESSION["user_id"] = $userID;
  } catch (FacebookApiException $e) {
    $userID = NULL;
  }
} else {
	// if facebook user not authentic
	header("location:index.php");
}
?>
