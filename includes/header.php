<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krantikari-Study Materials</title>
    <link rel="icon" href="../assets/images/krantikari.png">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/bbs.css">
    <link rel="stylesheet" href="../assets/css/bbs-first.css">


    <link rel="stylesheet" href="../assets/css/test.css">
    <script type="text/javascript" src="../assets/js/script.js" defer></script>
</head>

<body>
    <nav>
        <div class="nav-logo">
            <a href="index.html"><img src="../assets/images/krantikari.png" alt="krantikari-logo"></a>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
        </div>

        <div id="sidebar" class="sidebar">
            <div onclick="slideOut()">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e3e3e3">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                </svg>
            </div>
            <ul>
                <li><a href="#" title="Home">Home</a></li>
                <li><a href="#" title="About">About</a></li>
                <li><a href="#" title="Contact">Contact</a></li>
                <li><a href="#" title="Contact">Contribute</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>