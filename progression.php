<?php
    include_once 'header.php';
?>

<div class="progression-wrapper">
    <div class="tree-wrapper">
        <div class="tab-nav">
            <button class="tab-button" onclick="tab_chooser(event, 'kicks')" id="defaultOpen">Kicks</button>
            <button class="tab-button" onclick="tab_chooser(event, 'flips')">Flips</button>
        </div>
        <div id="kicks" class="tree">
            <ul>
                <li>
                    <a href="#">Roundhouse Kick</a>
                    <ul>
                        <li>
                            <a href="#">Tornado Kick</a>
                            <ul>
                                <li>
                                    <a href="#">540 Kick</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Hook Kick</a>
                    <ul>
                        <li>
                            <a href="#">360 Hook Kick</a>
                            <ul>
                                <li>
                                    <a href="#">Cheat 720 Kick</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Butterfly Kick</a>
                    <ul>
                        <li>
                            <a href="#">Butterfly Twist</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="flips" class="tree">
            <ul>
                <li>
                    <a href="#">Cartwheel</a>
                    <ul>
                        <li>
                            <a href="#">Left-hand cartwheel</a>
                            <ul>
                                <li>
                                    <a href="#">Right-hand cartwheel</a>
                                    <ul>
                                        <li>
                                            <a href="#">Aerial</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Gumbi</a>
                    <ul>
                        <li>
                            <a href="#">Sailormoon</a>
                            <ul>
                                <li>
                                    <a href="#">Touch-down Raiz</a>
                                    <ul>
                                        <li>
                                            <a href="#">Raiz</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="#">Backflip</a>
                    <ul>
                        <li>
                            <a href="#">Flash kick</a>
                            <ul>
                                <li>
                                    <a href="#">Layout</a>
                                    <ul>
                                        <li>
                                            <a href="#">Full</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="#">Cheat Gainer</a>
                    <ul>
                        <li>
                            <a href="#">Cork</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <script>
            document.getElementById("defaultOpen").click();
    </script>
</div>

<?php
    include_once 'footer.php';
?>

