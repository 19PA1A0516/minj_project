<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cafe Coffee Day</title>
    <link type="text/css" rel="stylesheet" href="style1.css">
</head>
<body>
    <div id="all">
        <div id="header" class="top"> <img id="logo" src="images/logo.png" alt="Logo"> <img id="phrase" src="images/phrase.png" alt="a lot can happen over coffee">
            <div id="nav">
                <ul>
                    <li class="selected" id="home"><a href="index.html">Home</a></li>
                    <li id="Beverages"><a href="beverages.html">Beverages</a></li>
                    <li><a href="form2.php" id="ordernow">Order Now</a></li>
                </ul>
            </div>
        </div>
        <div id="tableContainer">
            <div id="tableRow">
                <div id="drinks">
                    <h1>BEVERAGES</h1>
                    <p><a href="beverages.html#houseblend">House Blend, $1.49</a></p>
                    <p><a href="beverages.html#mocha">Mocha Cafe Latte, $2.35</a></p>
                    <p><a href="beverages.html#cappuccino">Cappuccino, $1.89</a></p>
                    <p><a href="beverages.html#chai">Chai Tea, $1.85</a></p>
                    <h1>ELIXIRS</h1>
                    <p> We proudly serve elixirs brewed by our friends
                        at the Head First Lounge. </p>
                    <p>Green Tea Cooler, $2.99</p>
                    <p>Raspberry Ice Concentration, $2.99</p>
                    <p>Blueberry Bliss Elixir, $2.99</p>
                    <p>Cranberry Antioxidant Blast, $2.99</p>
                    <p>Chai Chiller, $2.99</p>
                    <p>Black Brain Brew, $2.99</p>
                </div>
                <div id="main">
                    <h1>QUALITY COFFEE, QUALITY CAFFEINE</h1>
                    <p> At Cafe Coffee Day, we are dedicated to filling all your  caffeine needs through our 
                        quality coffees and teas. Sure, we want you to have a great cup of coffee and a great 
                        coffee experience as well, but we're the only company that actively monitors and 
                        optimizes caffeine levels. So stop by and fill your cup, or order online with our new Bean 
                        Machine online order form, and get that quality Cafe Coffe Day coffee that you know will meet 
                        your caffeine standards. </p>
                    <p> And, did we mention <em>caffeine</em>? We've just started funding the guys doing all 
                        the wonderful research at the Caffeine Buzz.
                        If you want the latest on coffee and other caffeine products, 
                        stop by and pay them a visit. </p>
                    <h1>OUR STORY</h1>
                    <p> "A man, a plan, a coffee bean". Okay, that doesn't make a palindrome, but it resulted
                        in a damn good cup of coffee.  Cafe Coffee Day's CEO is that man, and you already know his 
                        plan: a Cafe Coffee Day on every corner. </p>
                    <p>In only a few years he's executed that plan and today 
                        you can enjoy Cafe Coffee Day just about anywhere.  And, of course, the big news this year 
                        is that Cafe Coffee Day teamed up with Head First readers to create Cafe Coffee Day's Web presence,  
                        which is growing rapidly and helping to meet the caffeine needs of a whole new set of 
                        customers. </p>
                    <h1>COFFEE BEVERAGES</h1>
                    <p> We've got a variety of caffeinated beverages to choose
                        from at Cafe Coffee Day, including our House Blend, Mocha Cafe Latte, Cappuccino, and a favorite of our customers, Chai Tea</p>
                    <p> We also offer a variety of coffee beans, whole or ground, for you to
                        take home with you.  Order your coffee today using our online Bean Machine, and take
                        the Cafe Coffee Day Coffee experience home. </p>
                </div>
                <aside> <img id="c_bag" src="images/bag.png" alt="Bean Machine bag"> <br>
                    <p class="beanheading"> ORDER ONLINE
                        with the <a href="form2.php">BEAN MACHINE</a> <br>
                        <span class="slogan"> FAST <br>
                        FRESH <br>
                        TO YOUR DOOR <br>
                        </span> </p>
                    <p> Why wait?  You can order all our fine coffees right from the Internet with our new, 
                        automated Bean Machine.  How does it work?  Just click on the Bean Machine link, 
                        enter your order, and behind the scenes, your coffee is roasted, ground 
                        (if you want), packaged, and shipped to your door. </p>
                </aside>
            </div>
        </div>
        <footer> &copy; Cafe Coffee Day<br>
            2015 </footer>
    </div>
</body>
</html>