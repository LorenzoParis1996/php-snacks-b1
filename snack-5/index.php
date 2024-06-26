<?php 

$myText = "Pellentesque vel nibh tristique magna aliquet maximus ac ut ipsum. Donec ultrices, tellus eget condimentum sagittis, mauris velit fermentum felis, non eleifend magna mi et sem. In vel leo in est convallis tristique pretium vel nulla. Suspendisse eget lobortis orci. Nunc et felis tempor, elementum massa eget, scelerisque erat. Aliquam nec enim quis enim tincidunt pharetra. Phasellus gravida, justo at consectetur tincidunt, eros ante ullamcorper nulla, vitae volutpat arcu leo ac magna. Duis ullamcorper tempor malesuada. Proin auctor erat sed purus eleifend interdum sed in sapien. Morbi dignissim tempus ligula non dictum. Praesent tincidunt accumsan leo. Cras porttitor, nisl non consequat commodo, tortor magna tincidunt neque, eget tempus tellus magna vitae dolor. Duis blandit, felis ut tristique volutpat, massa neque placerat ante, a tempus leo augue cursus nisi. Suspendisse eget cursus magna. Proin ut egestas nisi. Morbi bibendum diam arcu, nec venenatis nunc dignissim id. ";

$paragrahps = explode(".", $myText);

foreach($paragrahps as $sentence) {
    echo $sentence . " | ";
}

?>