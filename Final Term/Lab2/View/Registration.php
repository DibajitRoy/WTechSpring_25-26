<?php
include "../Controller/RegistrationController.php";
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    <table>

        <tr>
            <td><label>Name:</label></td>
            <td>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <?php echo $nameErr; ?>
            </td>
        </tr>
        
        <tr>
            <td><label>Password:</label></td>
            <td>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <?php echo $passwordErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>E-mail:</label></td>
            <td>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <?php echo $emailErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Website:</label></td>
            <td>
                <input type="text" name="website" value="<?php echo $website; ?>">
                <?php echo $websiteErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Comment:</label></td>
            <td>
                <textarea name="comment"><?php echo $comment; ?></textarea>
                <?php echo $commentErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="female" <?php if($gender=="female") echo "checked"; ?>> Female
                <input type="radio" name="gender" value="male" <?php if($gender=="male") echo "checked"; ?>> Male
                <input type="radio" name="gender" value="other" <?php if($gender=="other") echo "checked"; ?>> Other
                <?php echo $genderErr; ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>

</body>
</html>