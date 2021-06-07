<?php 

$options = [
    'cost' => 12,
];

echo password_hash("academy", PASSWORD_BCRYPT, $options);
echo "<br>";
echo password_hash("academy", PASSWORD_BCRYPT, $options);