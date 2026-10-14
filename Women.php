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
					<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
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
            <div id="contents">
				<h4><span>Womens</span></h4>
				<div id="stocks">
					<ul>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/1.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> FLEX ADVANTAGE 2.0 - THE HAPPS<em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/2.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECH-FLEX 2.0 - MILWEE <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/3.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> RELAXED FIT: SKECH-FLEX 2.0 <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/4.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> BURST - DONLEN <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/5.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> D'LITES <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/6.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> D'LITES ULTRA <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
						<li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/7.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 5 - NITE OWL V.2 2017 <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
                        <li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/8.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 5 - GOTHERM 360 <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
                        <li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/13.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 600 - NITE OWL V.2 2017 <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
                        <li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/14.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 600 - REFINE <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
                        <li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/15.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 400 - DISPERSE <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
                        <li>
							<a href="product.html" class="preview" title="Preview"> <img src="images/16.jpg" alt="Img"> <span class="icon"></span></a> <span>$8.50</span> SKECHERS GORUN 600 - REVEL  <em>Quick Shop</em> <a href="checkout.php" class="btn-cart">Add to Cart</a> <a href="checkout.php" class="btn-wish">Add to Wishlist</a>
						</li>
					</ul>
				</div>
				<div class="footer">
					<h4><span>Similar Items</span></h4>
					<ul class="items">
						<li>
							<a href="product.html"> <img src="images/9.jpg" alt="Img"> <span>$8.50</span> SKECHERS GORUN ULTRA ROAD 2</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/10.jpg" alt="Img"> <span>$8.50</span> SKECHERS GOTRAIL 2</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/11.jpg" alt="Img"> <span>$8.50</span> SKECHERS GO FLEX TRAIN - CONQUER</a>
						</li>
						<li>
							<a href="product.html"> <img src="images/12.jpg" alt="Img"> <span>$8.50</span> SKECHERS GOTRAIN VORTEX</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<div class="background">
					<div id="connect">
						<h5>Get Social With us!</h5>
						<ul>
							<li>
								<a href="http://www.facebook.com" target="_blank" class="facebook"></a>
							</li>
							<li>
								<a href="http://www.twitter.com" target="_blank" class="twitter"></a>
							</li>
							<li>
								<a href="http://www.google.com" target="_blank" class="linkin"></a>
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