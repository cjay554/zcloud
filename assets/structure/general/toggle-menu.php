 <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li <?php if ($title=='Home') echo 'class=\'active\' '; ?>>
                        <a href="home.php">Home</a>
                    </li>
                    <li <?php if ($title=='About') echo 'class=\'active\' '; ?>>
                        <a href="about.php">About</a>
                        <!--<ul>
                            <li>
                                <a href="#">Quisque nulla</a>
                            </li>
                            <li>
                                <a href="#">Vestibulum libero</a>
                                <ul>
                                    <li>
                                        <a href="#">Lorem</a>
                                    </li>
                                    <li>
                                        <a href="#">Dolor</a>
                                    </li>
                                    <li>
                                        <a href="#">Sit amet</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vivamus eget nibh</a>
                            </li>
                        </ul>-->
                    </li>
                    <li <?php if ($title=='Products') echo 'class=\'active\' '; ?>>
                        <a href="products.php">Products</a>
                    </li>
                    <li<?php if ($title=='Menu') echo 'class=\'active\' '; ?>>
                        <a href="menu.php">Menu</a>
                    </li>
                    <li>
                        <a href="contacts.php">Contacts</a>
                    </li>
                </ul>
            </nav>            
        </div>
