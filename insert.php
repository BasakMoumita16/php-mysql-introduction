<?php


function datainsert($firstname , $lastname , $username , $gender , $linkedin , $github , $email , $preferredLang , $avatar , $video , $quote , $quote_aut){
    
    $creatat =  date("l jS \of F Y h:i:s A");
    $db = openconnection();
    $sql = "INSERT INTO  students(first_name,
    last_name,
    username,
    gender,
    linkedin,
    github,
    email,
    preferred_language,
    Avatar,
    video,
    quote,
    quote_author,
    created_at) VALUES('$firstname','$lastname', '$username' , '$gender' , '$linkedin', '$github','$email' , '$preferredLang','$avatar' , '$video','$quote','$quote_aut','$creatat')";
    $db->query($sql);
}

    ?>