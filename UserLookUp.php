<?php
// TODO: validate email format
function getUserByEmail($conn, $email) {
    $query = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}
