<?php
//// Get URL and explode
//$url = explode("/", $_GET['url']);
//
//// Load controller method
//require'controllers/' . $url[0] .".php";
//
//// Instantiate Controller
//
//
//$controller = new $url[0];
//
//
//
//$controller_parameters = $url;
////remove first two
//unset($controller_parameters[0]);
//unset($controller_parameters[1]);
//// If a method is set, call it
//if(isset($url[2])){
//    $method = $controller->{$url[1]};
//    call_user_func_array($method, $controller_parameters);
//}else 
//if(isset($url[1])){
//    $controller->{$url[1]}();=
// This is another note (dev)
?>
<html>
    <head>

        <script>

            function add(x, y) {

                var answer = x / y;

                return answer;

            }


            function execute() {

                var x = document.getElementById("add_one").value;
                var y = document.getElementById("add_two").value;

                x = Number(x);
                y = Number(y);

                var answer = add(x, y);

                document.getElementById("answer").value = answer;

            }

        </script>

    </head>


    <body>
        <input type="text" id="add_one"/>
        <input type="text" id="add_two"/>
        <input type="button" value="/" onclick="execute()" /> 
        <input type="text" id="answer" />


    </body>

</html>

