<?php

if (isset($_SESSION['username']) && $_SESSION['username'] == "notrack")  {
    // include "footer_nologin.php";
} else  {
    include "footer_login.php";
}

?>

<hr width=50%><center>
<table border=0 width=600><tr><td align="center"><a href="/centaur/"><img alt="Centaur" src="logo.png"></A><BR><font size=-2>Build 03/22/2021</font>
<TD>
<font size=-1>Hospital of University of Pennsylvania<BR>
Department of Radiology <BR>
Neil Chatterjee.  Original code by Po-Hao (Howard) Chen <BR><a href="https://www.gnu.org/copyleft/gpl.html">GNU Public License</A>
</font>
</center>
</tr></table>
