<?php
    layout( 'header' );
?>

<?php
    if ( isset($uri) ) {
        $url = substr($uri, strpos($uri, BASE_PATH)+strlen(BASE_PATH));

        try {
            require_once isset($Routes[$url]) ? $Routes[$url] : redirect('\\');
        } catch (\Throwable $th) {
            //throw $th;
            redirect('\error');
        }
        
    }
?>


<?php
    layout( 'footer' );
?>