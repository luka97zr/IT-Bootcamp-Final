<?php
session_start();

    function emptyInputSignup( $name,$username,$email,$pass, $passRepeat){
        $result=false;
            if(empty($name) || empty($username) || empty($email) || empty($pass) || empty($passRepeat))
                $result= true;
            else
                $result=false;

        return $result;
    }
    function invalidUsser($username){
        $result=false;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
                 $result= true;
            }else{
                $result=false;
            }

        return $result;

    }

    function invalidEmail($email){
        $result=false;
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                 $result= true;
            else
                $result=false;
            

        return $result;
    }

    function passMatch($pass,$passRepeat){
        $result=false;
            if($pass !== $passRepeat)
                $result=true;
            else
                $result=false;

        return $result;
    }
   
    function userExists($conn, $username) {
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
               header("location: register_form.php?error=stmtfailed");
              exit();
          }
      
          mysqli_stmt_bind_param($stmt, "ss", $username, $username);
          mysqli_stmt_execute($stmt);
      
          // "Get result" returns the results from a prepared statement
          $resultData = mysqli_stmt_get_result($stmt);
      
          if ($row = mysqli_fetch_assoc($resultData)) {
              return $row;
          }
          else {
              $result = false;
              return $result;
          }
      
          mysqli_stmt_close($stmt);
      }

    function  createUser($conn,$name,$email,$username,$pass){
        $sql="INSERT INTO users (ime_prezime,email,username,password) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:  register_form.php?error=stmfailed" );
                exit();
            }

            // $hashPwd = password_hash($pass,PASSWORD_DEFAULT); -- check again
        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username, $pass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt); 
        mysqli_close($conn);     

        header("Location:  register_form.php?error=none" );
                exit();
    }

    function emptyInputLog($username,$pwd){
        $result=false;
            if(empty($username) || empty($pwd))
                $result = true;
            else    
                $result = false;

        return $result;
    }

    function loginUser($conn, $username, $pwd) {
        $uidExists = userExists($conn, $username);
    
        if ($uidExists === false) {
            header("location: login_forma.php?error=wronglogin");
            exit();
        }
    
        //Hashing doesn't work!
        $pwdHashed = $uidExists["password"];
        $checkPwd = password_verify($pwd, $pwdHashed);
    
        if ($pwd !==  $pwdHashed) {
            header("location: login_forma.php?error=wrongpwd");
            exit();
        }
        else {
            $_SESSION["login_id"] = $uidExists["id"];
            $_SESSION["user_uid"] = $uidExists["username"];
            header("location: ../index.php");
            exit();
        }
    }