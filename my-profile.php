<!-- header-begin -->
<?php 
$title = "User";
include 'includes/header2.php'; ?>
<!-- header-ends -->

<!-- section dashboard begin -->
<section class="dashboard-sec">
  <div class="container">
    <div class="title">
        <h3>Dashboard</h3>
    </div>
    <div class="row">
     <div class="col-lg-3">
            <div class="user-listing-detail">
                <ul>
                    <li ><span><i class='bx bx-list-ol'></i></span><a href="javascript:;">My Listing (12)</a></li>
                    <li class="ct-active"><span><i class='bx bxs-user' ></i></span><a href="my-profile.php">My Profile</a></li>
                    <li><span><i class='bx bxs-heart' ></i></span><a href="javascript:;">Favorite Listings</a></li>
                    <li><span><i class='bx bxs-volume-full' ></i></span><a href="javascript:;">Announcements</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4">
              <div class="profile-user">
                <div class="user-img">
                 <span><i class="fa fa-user"></i></span>
                </div>
                <div class="select-profile-pic">
                    <input type="file">
                    <label for="">Select</label>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
  </section>
<!-- section dashboard end -->

<?php include 'includes/footer.php'; ?>
<!-- footer end -->