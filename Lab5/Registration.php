<?php session_start()
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Registration Page
    </title>
</head>

<body>
    <div id align="center">

        <form action="Reg.php" method="POST">
            <table>
                <h1>Registration</h1>
                <tr>
                    <td>
                        <fieldset>
                            <Legend><b>General Information: </b></Legend>
                            <table>
                                <tr>
                                    <th><label for="fname">First Name:</label></th>
                                    <td><Input type="text" name="fname" id="fname"></Input></td>
                                    <td>
                                        <?php

                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="lname">Last Name:</label></th>
                                    <td><Input type="text" name="lname" id="lname"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['lname'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['lname'])) {
                                            echo "Logged in as: " . $_SESSION['lname'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="faname">Father's Name:</label></th>
                                    <td><Input type="text" name="faname" id="faname"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['faname'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['faname'])) {
                                            echo "Logged in as: " . $_SESSION['faname'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="moname">Mother's Name:</label></th>
                                    <td><Input type="text" name="moname" id="moname"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['moname'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['moname'])) {
                                            echo "Logged in as: " . $_SESSION['moname'];
                                        }
                                        ?>
                                    </td>

                                </tr>
                                <tr>
                                    <th><label for="male">Gender: </label> </th>
                                    <td>
                                        <input type="radio" id="male" name="gender" value="Male">
                                        <label for="Male">Male</label>
                                        <input type="radio" id="female" name="gender" value="Female">
                                        <label for="Female">Female</label>
                                    </td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['gender'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['gender'])) {
                                            echo "Logged in as: " . $_SESSION['gender'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="date">Date of Birth</label></th>
                                    <td><input type="date" name="date" id="date"></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['date'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['date'])) {
                                            echo "Logged in as: " . $_SESSION['date'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="bgrp">Blood Group:</label> </th>
                                    <td><select name="bgrp" id="bgrp">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                        </select></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['bgrp'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['bgrp'])) {
                                            echo "Logged in as: " . $_SESSION['bgrp'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset>
                            <legend><b>Contact Information: </b></legend>
                            <table>
                                <tr>
                                    <th><label for="email">Email: </label></th>
                                    <td><Input type="text" name="email" id="email"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['email'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['email'])) {
                                            echo "Logged in as: " . $_SESSION['email'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="phn">Phone/Mobile: </label></th>
                                    <td><input type="text" name="phn" id="phn"></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['phn'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['phn'])) {
                                            echo "Logged in as: " . $_SESSION['phn'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="web">Website: </label></th>
                                    <td><input type="text" name="web" id="web"></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['web'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['web'])) {
                                            echo "Logged in as: " . $_SESSION['web'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="pad">Present Address: </label></th>
                                    <td><textarea name="pad" id="pad" cols="20" rows="2"></textarea></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['pad'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['pad'])) {
                                            echo "Logged in as: " . $_SESSION['pad'];
                                        }
                                        ?>
                                    </td>
                                </tr>

                            </table>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <fieldset>
                            <legend><b>Account Information: </b></legend>
                            <table>
                                <tr>
                                    <th><label for="Username">Username: </label></th>
                                    <td><Input type="text" name="username" id="username"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['username'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['username'])) {
                                            echo "Logged in as: " . $_SESSION['username'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="password">Password: </label></th>
                                    <td><input type="text" name="password" id="password"></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['password'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['password'])) {
                                            echo "Logged in as: " . $_SESSION['password'];
                                        }
                                        ?>
                                    </td>
                                </tr>

                            </table>
                        </fieldset>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td align="center">
                        <button name="submit" type="submit" value="Register">Register</button> <br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>