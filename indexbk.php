<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krantikari-Study Materials</title>
    <link rel="icon" href="./assets/krantikari.png">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js" defer></script>
</head>
<body> 
    <div class="root">
        <nav>
            <div class="nav-logo">
               <a href="index.html"><img src="./assets/krantikari.png" alt="krantikari-logo"></a> 
            </div>

            <div class="nav-links">
                <ul>
                    <li><a href="#" title="Home">Home</a></li>
                    <li><a href="#" title="About">About</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                    <li><a href="#" title="Contact">Contribute</a></li>

                </ul>
            </div>

            <div onclick="slideIn()" class="toggle-navbar">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </div>

            <div id="sidebar" class="sidebar">
                <div onclick="slideOut()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </div>
                <ul>
                    <li><a href="#" title="Home">Home</a></li>
                    <li><a href="#" title="About">About</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                    <li><a href="#" title="Contact">Contribute</a></li>

                </ul>
            </div>
        </nav>

        <main>

            <div class="main-container">
                <div class="main-title">
                    <span>NOTES</span>
                </div>

                <!-- <iframe src="Lab 1.pdf" width="100%" height="600px"></iframe> -->
     
                <div class="class-cont">
                    <div class="class" onclick="list(this)">
                        <div class="note-title">
                            <h3>Class 12</h3>
                        </div>
                        <div class="dropdown">
                            <ul class="dropdown-list">
                                <li><a href="#">Science class 12</a></li>
                                <li><a href="#">Management class 12</a></li>
                                <li><a href="#">Arts class 12</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>  
                <div class="class-cont">
                    <div class="class" onclick="list(this)">
                        <div class="note-title">
                            <h3>Bachelor</h3>
                        </div>
                        <div class="dropdown">
                            <ul class="dropdown-list">
                                <li><a href="./notes/BBS.php">BBS</a></li>
                                <li><a href="#">BBA</a></li>
                                <li><a href="#">B.ED</a></li>
                                <li><a href="#">BA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>  

            </div>

        </main>
        <footer>
            <span>Copyright © <span id="date"></span> | Suyog Rana Magar All rights reserved</span>
        </footer>
    </div>
    
</body>
</html>