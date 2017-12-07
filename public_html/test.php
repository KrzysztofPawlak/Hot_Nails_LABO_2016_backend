<?php

if($_SERVER['HTTP_USER_AGENT'] == "MyAndroid") {
	echo "Return Code for Android";
} else {
	echo "Return Code for General Platform";
}

if($_SERVER['HTTP_ACCEPT_LANGUAGE'] == "english") {
	echo "English Page";
} else {
	echo "Krzycha Page";
}

?>