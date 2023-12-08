<?php
    $now = date("Y");
?>

        <footer style="border-top: 4px solid #0ea9cf;">
            <div class="container">
                <div class="row">
                    <div class="col mt-3">
                        <h6 class="mb-2">Media Sosial Resmi SellIt Indonesia</h6>
                        <p>
                            <i class="bi bi-twitter"></i>
                            @sellit_indonesia 
                        </p>
                        <p>
                            <i class="bi bi-instagram"></i>
                            sellit.id
                        </p>
                        <h6 class="my-5">&copysr; <?= $now; ?>, SellIt Indonesia. All rights reserved</h6>
                        <div class="d-flex" id="clock" style="color: #0ea9cf;">00:00:00</div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="bootstrap-5.3.1-dist/js/bootstrap.js"></script>
        <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
        <script src="self-folder/JS/clockcontrol.js"></script>
    </body>
</html>