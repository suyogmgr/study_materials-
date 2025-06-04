<div class="root">
    <?php include "./includes/header.php"; ?>
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
        <?php include "./includes/footer.php"; ?>
</div>
</main>