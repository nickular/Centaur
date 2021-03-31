</tr>
</tbody>
</table>
<?php
if (isset($_SESSION['username'])) {
        echo "<center>Logged in as <b>" . $_SESSION['username'] . "</b>. [<a href='/centaur/logout.php'>logout</a>]</center>";
    }
    else echo <<< END
                  <form name="form1" method="post" action="checklogin.php">
                <table border="0" width="100%">
                  <col>
                  <tbody>
                    <tr>
                      <td
                      style="text-align:right;margin-left:auto;margin-right:0;"><span
                        style="font-family: Arial,Helvetica,sans-serif;font-size: 8pt"></span></td>
                    </tr>
                    <tr>
                      <td>
                        <table width="400" border="0" align="center"
                        cellpadding="0" cellspacing="1" bgcolor="#000000">
                          <tbody>
                            <tr>
                              <td>
                                <table width="100%" border="0" cellpadding="3"
                                cellspacing="1" bgcolor="#000000">
                                  <tbody>
                                    <tr>
                                      <td><font size=-1><div class="login">Username: <input name="myusername" type="text"
                                        id="myusername" size="8"></div></td>
                                      <td><font size=-1><div class="login">Password:<input name="mypassword"
                                        type="password" id="mypassword"
                                        size="8"></div></td>
                                      <td>
                                        <input type="submit" value="Login"
                                        name="Submit"></td>
                                    </tr>
                                    <tr><td><font size=2><a href="create_account.php">Create Account</a></font></td></tr>
                                    </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        </form>

      </td>
    </tr>

END;
?>

</body>
</html>
