<?php

session_destroy(); // SESSION Cookie
session_write_close(); // closes off sessions

unset( $_REQUEST ); // clear data in superglobals


header("Location: /.." . $_POST['hotels']);

exit();
