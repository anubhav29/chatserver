<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link href="./css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/js1.js"></script>
        <script type="text/javascript" src="./js/jquery-ui.js"></script>
    </head>
    <body>
        <!--div id="header">
            
        </div-->
        <div id="main-section">
        	<ul>
        		<li><a href="#">About us</a></li>
        		<li><a href="#">Contact Us</a></li>
        		<li><a href="#">Feedback</a></li>
        	</ul>
            <button name="get-started" id="get-started">Get Started Now</button>
        </div>
        <div id="login-section">
                <div id="sign-in-form">
                    <form name="login-form" id="login-form">
                        <table>
                            <tr style="height: 60px">
                                <td>Email : </td>
                                <td><input type="text" size="34px" name="email" maxlength="120"/></td>
                            </tr>
                            <tr>
                                <td>
                                    Password :
                                </td>
                                <td>
                                    <input type="password" size="34px" name="password" maxlength="30"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td> 
                                    <input type="submit" name="submit" value="login" style="font-family: monospace; font-size: 16px; font-weight: bold; margin: 30px auto auto auto; width: 150px; height: 30px"/>
                                </td>   
                            </tr>
                        </table>
                    </form>
                    <a href="#" id="needAnAccount">Need an Account</a>
            </div>
            <div id="sign-up-form">
                <form name="form" id="form">
                        <table>
                            <tr style="height: 60px">
                                <td>Name : </td>
                                <td><input type="text" size="34px" name="name" maxlength="120"/></td>
                            </tr>
                            <tr style="height: 60px">
                                <td>Email : </td>
                                <td><input type="text" size="34px" name="email" maxlength="120"/></td>
                            </tr>
                            <tr style="height: 60px">
                                <td>
                                    Password :
                                </td>
                                <td>
                                    <input type="password" size="34px" name="password" maxlength="30"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td> 
                                    <input type="submit" name="submit" value="Submit" style="font-family: monospace; font-size: 16px; font-weight: bold; margin: 30px auto auto auto; width: 150px; height: 30px"/>
                                </td>   
                            </tr>
                        </table>
                    </form>
                <a href="#" id="login">Login</a>
            </div>
        </div>
        <div id="about-us">
        	<div id="one-member">
        	</div>
        	<div id="second-member">
        	</div>
        	<div id="third-member">
        	</div>
        	<div id="fourth-member">
        	</div>
        </div>
        <div id="contact-us">
        	
        </div>
        <div id="feedback">
        	<div id="feedback-div">
        		<form name="feedback-form" id="feedback-form">
                        <table>
                            <tr style="height: 60px">
                                <td>Email : </td>
                                <td><input type="text" size="65px" name="email" maxlength="120"/></td>
                            </tr>
                            <tr>
                                <td>
                                  	Message
                                </td>
                                <td>
                                    <textarea rows="5" cols="50"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td> 
                                    <input type="submit" name="submit" value="Submit" style="font-family: monospace; font-size: 16px; font-weight: bold; margin: 30px auto auto auto; width: 150px; height: 30px"/>
                                </td>   
                            </tr>
                        </table>
                    </form>
        	</div>
        </div>
    </body>
</html>

