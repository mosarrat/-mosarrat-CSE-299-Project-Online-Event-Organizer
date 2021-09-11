<?php include('partials-front/menu.php');?>

      <!--sercice-search section starts here-->
      <section class="service-search">
        <div class="container">
        <form action="review-in.php" method="POST">
            <div class="order">
                <div class="c-details">
                    <h3 class="text-center"><b>Add reviews</b></h3>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. MS Kabir" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vi@mskabir.com" class="input-responsive" required>

                    <div class="order-label">Review</div>
                    <textarea name="review" rows="6" placeholder="Please write here your valueable review.." class="input-responsive"></textarea>

                    <input type="submit" name="submit" value="Review-Submit" class="btn btn-primary">

                </div>        
            </div>
        </form>
        </div>
    </section>
    <!--sercice-search section starts here-->

<?php include('partials-front/footer.php');?>