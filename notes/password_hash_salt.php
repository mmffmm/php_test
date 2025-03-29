<?php

// password hash
// password salt

/**
 * // salt = random generated keywords by system, so attackers will need to predict more than just a common password.
 * 
 * password = testing123
 * salt = randomgenerated231
 * 
 * // the same user will have the same unique salt, generated probably by cryptographic rand func.
 * // this salt is stored, since when verifying password we will need the salt
 * 
 * password_before_hash = testing123randomgenerated231
 * password_after_hash = $2b$10$K8Fg/3fFqB5h6lO8lPQRPOaiG3TVG1z4xB5xG9e0ZB7m0YXzEoRJK
 * 
 * // this hash value will be stored in DB.
 * // when login, the same salt and password will be used, then produced same hash, then verified
 * 
 */

function hashPassword($password){
    $salt = bin2hex(random_bytes(16)); // 16-byte random salt
    $saltedPassword = $password . $salt;

    $hash = password_hash($saltedPassword, PASSWORD_BCRYPT);

    echo "password_before_hash = " . $saltedPassword . PHP_EOL;
    echo "password_after_hash = " . $hash . PHP_EOL;
    echo "stored_salt = " . $salt . PHP_EOL;
}

function verifyPassword($inputPassword, $storedSalt, $storedHash) {
    return password_verify($inputPassword . $storedSalt, $storedHash);
}

$credentials = hashPassword("testing123");

echo "Password match: " . (verifyPassword("testing123", $credentials['salt'], $credentials['hash']) ? "true" : "false") . PHP_EOL;