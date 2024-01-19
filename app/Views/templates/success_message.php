<?php if (session()->has('success')) : ?>
    <div id="successMessage" class="successMessageBg position-fixed w-100 h-100 justify-content-center align-items-center">
        <div class="rounded text-center successMessageDialog">
            <div class="dialogContent">
                <h1>Hurray!🎉</h1><br>
                <?= session()->get('success') ?>
            </div>
            <!-- Add a progress bar here -->
            <div id="progressBar"></div>
        </div>
    </div>
    <script>
        var progressBar = document.getElementById('progressBar');
        var width = 0;
        var id = setInterval(frame, 40); // Adjust this value for smoother or choppier animation
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                document.getElementById('successMessage').style.display='none';
            } else {
                width++;
                progressBar.style.width = width + '%';
            }
        }
    </script>
    <?php session()->remove('success'); ?>
<?php endif; ?>