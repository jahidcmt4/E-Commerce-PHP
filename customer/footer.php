

<!-- FOOTER -->

<hr class="dropdown-divider">
<footer class="w-100 py-4 flex-shrink-0">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-4">
                <h5 class="text-black mb-3" style="font-size: 24px;font-weight: 700;margin-top: 20px;">Contact Info</h5>
                <p><b>Address: <?=$glob['address']; ?></b></p>
                <p><b>Phone: <?=$glob['phone']; ?></b></p>
                <p><b>Email: <?=$glob['email']; ?></b></p>

                <div class="social-link">
                    <a href="<?=$glob['facebook']; ?>" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="<?=$glob['twitter']; ?>" class="btn btn-primary btn-sm">Twitter</a>
                    <a href="<?=$glob['linkedin']; ?>" class="btn btn-primary btn-sm">Linkedin</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="text-black mb-3" style="font-size: 24px;font-weight: 700;margin-top: 20px;">Product Category</h5>
                <ul>
                    <?php   
                      $allcategory = mysqli_query($con,"SELECT * FROM category");
                      while($singler_row = mysqli_fetch_array($allcategory)) {
                      ?>
                    <li><a class="dropdown-item" href="category.php?show=<?=$singler_row['cid'];?>"><?=$singler_row['title']; ?></a></li>
                    
                    <?php } ?>
                    
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="text-black mb-3" style="font-size: 24px;font-weight: 700;margin-top: 20px;">location</h5>
                <?=$glob['map']; ?>
            </div>
            
        </div>
    </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>