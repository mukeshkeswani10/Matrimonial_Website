<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <?php if (isset($_GET['error'])) { ?>
        <p> <?php echo $_GET['error']; ?></p>
        <?php
    }
    ?>
    <div class="wrapper">
        <div class="title">
            Registration Form
            <hr> <br>
        </div>

        <form action="rcode.php" method="POST">
            <div class="form">
                <div class="inputfield">
                    <label>First Name</label>
                    <input type="text" name="first" class="input">
                </div>

                <div class="inputfield">
                    <label>Last Name</label>
                    <input type="text" name="last" class="input">
                </div>

                <div class="inputfield">
                    <label>Create Profile for</label>
                    <div class="custom_select">
                        <select name="profile">
                            <option value="">Select</option>
                            <option value="self">Self</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="sister">Sister</option>
                            <option value="brother">Brother</option>
                            <option value="friend">Relative/Friend</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Email id</label>
                    <input type="text" name="email" class="input">
                </div>

                <div class="inputfield">
                    <label>Phone Number</label>
                    <input type="text" name="ph" class="input">
                </div>

                <div class="inputfield">
                    <label>Address</label>
                    <input type="text" name="address" class="input">
                </div>

                <div class="inputfield">
                    <label>Mother Tongue</label>
                    <input type="text" name="mt" class="input">
                </div>

                <div class="inputfield">
                    <label>DOB</label>
                    <input type="date" name="dob" class="input">
                </div>

                <div class="inputfield">
                    <label>Religion</label>
                    <input type="text" name="rel" class="input">
                </div>

                <div class="inputfield">
                    <label>State</label>
                    <input type="text" name="state" class="input">
                </div>

                <div class="inputfield">
                    <label>City</label>
                    <input type="text" name="city" class="input">
                </div>

                <div class="inputfield">
                    <label>Pincode</label>
                    <input type="text" name="pin" class="input">
                </div>

                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="inputfield">
                    <input type="submit" name="r_btn" value="Processed" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>