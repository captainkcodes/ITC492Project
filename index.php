<html lang="en-US">

<head>
    <title> Computer X-treme Repair </title>
    <link rel="stylesheet" type="text/css" href="/home/itsaph/Desktop/html/css/main.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');

.main {
    max-width: 600px;
    margin: 10px auto;
    padding: 25px;
    border-width: 5px;
    font-size: 14pt;
}

.container {
    position: relative;
    text-align: left;
    padding: 16px;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
    font-size: 12pt;
   /* background-color: saddlebrown;*/
}

.header {
    padding: 60px;
    text-align: center;
    background-color: lightcoral;
    background-image: url('https://media.giphy.com/media/gmmdtnbcRdDMs/giphy.gif');
    background-repeat: no-repeat;
    background-size: auto;
    color: black;
    font-size: 18pt;
}

.header ul li {
    display: inline-block;
}

.nav {

    background-color: transparent;
    overflow: hidden;
    margin-top: auto;
    text-align: center;
    float: right;
    color: black;
    padding: 10px;
    text-decoration: none;
    font-size: 14pt;
    display: inline-block;
}

.nav a {
    color: black;
    text-decoration: none;
}

.nav a:hover {
    color: white;
}

.container button {
    display: inline-block;
    border: 2px solid lightcoral;
    background: none;
    margin: 20px auto;
    text-align: center;
    padding: 14px 40px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    text-decoration: none;
    cursor: pointer;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
}

.container button:hover {
    background: lightcoral;
}

.container button a {
    text-decoration: none;
    color: black;
}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    height: 70px;
    background-color: transparent;
    width: 100%;
}

body {
    margin-bottom: 120px;
    font-family: monospace;
}

h1 {
    text-align: center;
}

.codeblocks {
    background-color: lightcoral;
    text-align: left;
}

/*For Forms*/
* {
    box-sizing: border-box;
}

input[type=email],
input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=email]:focus,
input[type=password]:focus {
    background-color: beige;
    outline: none;
}

input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus {
    background-color: beige;
    outline: none;
}

/*Pagination*/
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    text-align: center;
}

.pagination a.active {
    background-color: beige;
    color: white;
}

.pagination a:hover:not(.active) {
    background-color: palevioletred;
}

/*chat*/

#chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 25px;
    padding: 10px;
    background: beige;
    height: 270px;
    width: 430px;
    border: 1px solid palevioletred;
    overflow: auto;
}
</style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1> Computer X-treme Repair </h1>
            <p> "X gon give it to ya!" </p>
            <ul>
                <li><b>Phone: </b><br>504-420-8297</li>
                <li><b>Email: </b><br><a href="mailto:compxrep@hotmail.com?subject=Contact Us">compxrep@hotmail.com</a></li>
            </ul>
            <div class="nav">
                <a href="login.php"> Login </a>
                <a href="register.php"> Register </a>
            </div>
        </div>
        <div class="main">
            <h2> We're here to help! </h2>
            <p> Our company features top notch technicians that are available to help 24/7! Have a warranty that is expired? No worries! We also feature warranty renewal. <br> Register for a free account today to enjoy our services and personal help OR login to an existing account! </p>
           <!-- <button> <a href="warranties.php">Warranties</a> </button>
            <button> <a href="techhelp.php">Tech Help</a> </button> -->
        </div>
    </div>
</body>

</html>
