<?php
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri
    $path = explode("/",$uri)[sizeof(explode("/",$uri))-1];
    // echo $path
?>

<!-- Tabbed Links -->
<div class="sidebar-widget tabbed-links">
                            <ul class="tabbed-nav">
                            	<li <?php if($path == "gravity-feed-metal-detector.php") echo 'class="current"'; ?>><a href="gravity-feed-metal-detector.php">Gravity Feed Metal Detector</a></li>
                                <li <?php if($path == "chain-driver-shifting-conveyor.php") echo 'class="current"'; ?>><a href="chain-driver-shifting-conveyor.php">Chain Driver Shifting Conveyor</a></li>
                                <li <?php if($path == "food-metal-detector.php") echo 'class="current"'; ?>><a href="food-metal-detector.php">Conveyor Metal Detector</a></li>
                                <li <?php if($path == "food-industry-conveyor.php") echo 'class="current"'; ?>><a href="food-industry-conveyor.php">Food Industry Conveyor</a></li>
                            </ul>

                        </div>