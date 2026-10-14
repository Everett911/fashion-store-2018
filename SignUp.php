<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="Css/StyleSheet.css" rel="stylesheet" />
</head>
<body>
<form id="form1" >
    <div>
     <div id="loginform" >
            <header ID="pnlLogin" >
                <table>
                    <tr>
                        <td  style="font-size:12px; font-family: Verdana,sans-serif;">Username:</td>
                        <td ><input type="text" ID="tbUsername"  Height="15px" Width="150px"></input></td>
                        <td  style="font-size:12px; font-family: Verdana,sans-serif;">Password:</td>
                        <td ><input type="text" ID="tbPassword"  Height="15px" Width="150px"></input></td>
                        <td ><input type="submit" ID="btnLogin" Value="Sign In"  Width="75px"/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="right">
                            <td ID="lblValidation" style="font-size:12px; font-family: Verdana,sans-serif;">Validition</td>
                            <input type="checkbox" ID="cbKeepLogged" Value="Keep me logged in"/></td>
                        <br/>
                        <td style="padding: 0px 21px;"><input type="button" ID="lbtn_signup" value="Sign Up"><a href="SignUp.php">Sign Up</a></input></td>

                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>


            </header>
            <header ID="pnlLoggedin" Visible="false">
                        <table>
                            <tr>
                                <td align="right">
                                    <input type="label" ID="lblAccFname"  Text="Name"></input>
                                </td>
                                <td><img ID="imgUserLogged"  Height="50px" Width="50px" src="/images/profilepic.png" /></td>
                                <td>
                                    <input type="button" ID="btnLogout"  Value="Sign out" Width="131px"  /><br />
                                    <input type="button" ID="btnMyAcc"  Value="My Account" Width="131px" />
                                </td>
                            </tr>
                        </table>
            </header>
        </div>
        <div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="Images/Logo.png" alt="LOGO"></a>
				</div>
				<div id="navigation">
					<ul id="primary">
						<li>
							<a href="Index.php">Home</a>
						</li>
						<li>
							<a href="Men.php">Mens</a>
						</li>
						<li>
							<a href="Women.php">Womens</a>
						</li>
						<li class="selected">
							<a href="About.php">About</a>
						</li>
					</ul>
				</div>
			</div>
              <div id="Div2">
			        <table style="margin-top: 10px; width: 100%">
                        <tr>
                            <td align="right">
                                <img ID="imgUserAvatar"  Height="150px" Width="150px" src="/images/profilepic.png"  />
                                <br />
                                <input type="button" ID="fuUserAvatar" onchange="previewFile()" value="Upload File" />
                            </td>
                        </tr>

                        <tr>
                            <td align="center" class="tblHeaders">User Account</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 15px; padding-bottom: 15px">
                                <td ID="lblUAValidation" style="font-size:12px; font-family: Verdana,sans-serif;">Validition</td>
                                <br />
                                <input type="Text" ID="tbSignUsername"  Height="38px" Width="200px" value="Username"></input>
                                <input type="Text" ID="tbSignPassword"  Height="38px" Width="200px" value="Password" TextMode="Password"></input>
                                <input type="Text" ID="tbConfirmPass"  Height="38px" Width="200px" value="Confirm Password" TextMode="Password"></input>
                            </td>
                        </tr>

                        <tr>
                            <td align="center" class="tblHeaders">Personal Informations</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 15px">
                                <td ID="lblPIValidation" style="font-size:12px; font-family: Verdana,sans-serif;">Validition</td>
                                <br />
                                <input type="Text" ID="tbFirstname"  Height="38px" Width="200px" value="Firstname"></input>
                                <input type="Text" ID="tbMidlename"  Height="38px" Width="200px" value="Middlename"></input>
                                <input type="Text" ID="tbLastname"  Height="38px" Width="200px" value="Lastname"></input>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding-bottom: 15px">
                                <input type="Text" ID="tbBdate"  Height="38px" Width="200px" value="Birthdate"></input>
                                <input type="Text" ID="tbAge"  Height="38px" Width="200px" value="Age"></input>
                            </td>
                        </tr>

                        <tr>
                            <td align="center" class="tblHeaders">Contact Informations</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 15px; padding-bottom: 15px">
                                <td ID="lblCIValidation" style="font-size:12px; font-family: Verdana,sans-serif;">Validition</td>
                                <br />
                                <input type="Text" ID="tbMobile"  Height="38px" Width="200px" value="Mobile Number" TextMode="Phone"></input>
                                <input type="Text" ID="tbEmail"  Height="38px" Width="200px"  value="Email Address" TextMode="Email"></input>
                            </td>
                        </tr>

                        <tr>
                            <td align="center">
                                <input type="button" ID="btnSaveAccount" runat="server" value="Submit"  Height="40px" Width="113px" />
                            </td>
                        </tr>
			        </table>
		        </div>
            <div id="footer">
				<div class="background">
					<div id="connect">
						<h5>Get Social With us!</h5>
						<ul>
							<li>
								<a href="https://www.facebook.com/" target="_blank" class="facebook"></a>
							</li>
							<li>
								<a href="https://twitter.com/" target="_blank" class="twitter"></a>
							</li>
							<li>
								<a href="https://www.google.com" target="_blank" class="linkin"></a>
							</li>
						</ul>
					</div>
					<ul class="navigation">
						<li>
							<h5>Mens</h5>
							<a href="mens.html">Sneakers</a> <a href="mens.html">Boots</a> <a href="mens.html">Winter socks</a> <a href="mens.html">Lace-ups</a>
						</li>
						<li>
							<h5>Womens</h5>
							<a href="womens.html">Sneakers</a> <a href="womens.html">Boots</a> <a href="womens.html">Winter socks</a> <a href="womens.html">Lace-ups</a>
						</li>
						<li class="latest">
							<h5>New Arrivals</h5>
							<a href="new.html">Cheverlyn Zespax</a> <a href="new.html">Alta Ulterior</a> <a href="new.html">Mikee</a> <a href="new.html">Jeeroks Copy</a>
						</li>
						<li class="latest">
							<h5>On Sale Items</h5>
							<a href="sale.html">Cheverlyn Zespax</a> <a href="sale.html">Alta Ulterior</a> <a href="sale.html">Mikee</a> <a href="sale.html">Jeeroks Copy</a>
						</li>
					</ul>
					<p class="footnote">
						&copy; Copyirght &copy; 2011. <a href="index.html">Company name</a> all rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>