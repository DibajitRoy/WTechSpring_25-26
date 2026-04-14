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
                <input type="text" name="name">
                <?php echo $name; ?>
            </td>
        </tr>

        <tr>
            <td><label>E-mail:</label></td>
            <td>
                <input type="text" name="email">
                <?php echo $email; ?>
            </td>
        </tr>

        <tr>
            <td><label>Website:</label></td>
            <td>
                <input type="text" name="website">
                <?php echo $website; ?>
            </td>
        </tr>

        <tr>
            <td><label>Comment:</label></td>
            <td>
                <textarea name="comment"></textarea>
                <?php echo $comment; ?>
            </td>
        </tr>

        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other
                <?php echo $gender; ?>
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