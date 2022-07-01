<?php
    include "head.php";
?>
<!-- Header -->
<header id="header">
    <h1 id="logo"><a href="<?= $home ?> "><img src="../../images/Igu.png" width="25" height="25"></a></h1>
    <nav id="nav">
        <ul>
            <li class="current"><a href="<?= $home ?>">Home</a></li>
            <li class="submenu">
                <a href="#">Layouts</a>
                <ul>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="submenu">
                        <a href="#">Submenu</a>
                        <ul>
                            <li><a href="#">Dolore Sed</a></li>
                            <li><a href="#">Consequat</a></li>
                            <li><a href="#">Lorem Magna</a></li>
                            <li><a href="#">Sed Magna</a></li>
                            <li><a href="#">Ipsum Nisl</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- <li><a href="#" class="button primary">Sign Up</a></li> -->
        </ul>
    </nav>
</header>