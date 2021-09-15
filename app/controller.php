<?php
require_once 'config/include.php'; 

if( $_SERVER['REQUEST_METHOD'] === 'POST' ) { 
    resetErrorBag();

    $first_name = validateAndSanitize('first_name');
    $last_name  = validateAndSanitize('last_name');
    $email      = validateAndSanitize('email');
    $password   = validateAndSanitize('password');
    $repassword = validateAndSanitize('repassword');
    
    if ( hasErrorBag() ) {
        redirect('\signup');
    }

    if($password != $repassword){
        setErrorsBag('repassword', 'Passwords did not match');
        redirect('\signup');
    }

    session('success', 'Form submitted successfully!');
    redirect('/signup');
    // store to the database here
} else {
    redirect('/error');
}

function validateAndSanitize( $key ) {

    $messages = [
        'first_name' => 'First name is required',
        'last_name' => 'Last name is required', 
        'email' => 'Please enter valid email!',
        'password' => 'Password is required',
        'repassword' => 'Confirm password is required',
    ];

    if ( $key === 'email' ) {
        $data = filter_input(INPUT_POST, $key, FILTER_SANITIZE_EMAIL);
        $var = filter_var($data, FILTER_VALIDATE_EMAIL);
        
        if ( $var === false ) {
            //error : invalid type
            setErrorsBag($key, $messages[$key]); 
        }
    } else {
        $data = filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
        $var = trim($data);

        if ( empty($var) ) {
            //error : required
            setErrorsBag($key, $messages[$key]);
        }
    }

    return $var;
}