<pre>
<h1>Remote Control Project</h1>
<?php
    require './class.php';

    $c = new RemoteControl;
    $c->Turnon();
    $c->MoreVolume();
    $c->OpenMenu();