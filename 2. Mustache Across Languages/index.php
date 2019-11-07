<?php


$template = 'Hello, {{planet}}!'; 
$hash = array('planet' => 'World'); 

// echo $m->render($template, $hash); 


// $hash = array(
//    'message' => "This message was created with Mustache",
//    'title' => "Dynamic title!",
//    'close' => true, 
//    'type' => 'danger'
// ); 

//  $hash = array(
//         'alerts' => array(
//             array(
//                 'message' => 'This was created with Mustache', 
//                 'title' => 'Dynamic title!', 
//                 'close' => true,
//                 'type' => 'danger'
//             )
//         ) 
//     ); 

?>

<!DOCTYPE html> 
<!-- Created by Professor Wergeles at the University of Missouri -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ Mustache }} Across Languages</title>
                	
		<link rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
			crossorigin="anonymous">
        
        <style>
            #wrapper {
                width: 600px; 
                margin: 100px auto; 
            }
        </style>
        
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
                crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
                crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
                crossorigin="anonymous"></script>
        
        
        <script>
            
            $(function(){
            
//             	var hash = {
//                     'alerts': [
//                         {
//                             'title': 'From JavaScript', 
//                             'message': 'Mustache works with JS!!', 
//                             'type': 'info'
//                         }
//                     ]
//                 }; 
                
            }); 
        
        </script>
    </head>
    <body>         

        <div id="wrapper">

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
    			<strong>Holy guacamole!</strong> You should check in on some of those fields below.
    			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
    			</button>
			</div>
			
        </div>
    </body>    
</html>