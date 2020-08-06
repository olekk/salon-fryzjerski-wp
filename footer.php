<?php global $dane; ?>
   
    <footer class="bg-dark">
    <?php echo $dane['nazwa'] ?>
        <span><a href="#">Website by &copy; Aleksander Cieśla - 2020</a></span>

    </footer>


    
<?php wp_footer(); ?>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script> window.onload = ()=>{ try {Array.from(document.getElementsByTagName("img")).filter(img=>img.src.search("000webhost")!=-1)[0].style="display:none";} catch {};}</script>

</body>

</html>