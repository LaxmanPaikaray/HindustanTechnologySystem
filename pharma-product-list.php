<?php
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri
    $path = explode("/",$uri)[sizeof(explode("/",$uri))-1];
    // echo $path
?>

<!-- Tabbed Links -->
<div class="sidebar-widget tabbed-links">
                            <ul class="tabbed-nav">
                            	<li <?php if($path == "tablet-metal-detector.php") echo 'class="current"'; ?>><a href="tablet-metal-detector.php">Tablet Metal Detector</a></li>
                                <li <?php if($path == "tablet-inspection-machine.php") echo 'class="current"'; ?>><a href="tablet-inspection-machine.php">Tablet Inspection Machine</a></li>
                                <li <?php if($path == "packing-conveyor.php") echo 'class="current"'; ?>><a href="packing-conveyor.php">Packing Conveyor</a></li>
                                <li <?php if($path == "de-blistering-machine.php") echo 'class="current"'; ?>><a href="de-blistering-machine.php">De Blistering Machine</a></li>
                                <li <?php if($path == "vibro-sifter-machine.php") echo 'class="current"'; ?>><a href="vibro-sifter-machine.php">Vibro Sifter Machine</a></li>
                                <li <?php if($path == "ipc-container.php") echo 'class="current"'; ?>><a href="ipc-container.php">IPC Container</a></li>
                            </ul>

                        </div>