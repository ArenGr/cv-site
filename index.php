<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="./styles.css">
    <title>MyCV</title>
  </head>
  <body>
    <div class="container-fluid row mt-5">

      <!-- ------------------------------- 1 page --------------------------------- -->
      <!--start -- left side contact information block -->
      <div class="col-sm-5" id="ls-ci-block" data-page="1" style="display: block;">

        <!-- start -- left side contact information image block -->
        <div class="row col-sm-12" id="ls-ci-image-block">
          <div class="col-sm-6 text-left">
            <input type="file" id="ls-ci-ib-hidden-upload" name="hidden-upload" onchange="readURL(this)" style="display: none;" >
            <img src="./profile.jpeg" alt="Your picture here..." id="ls-ci-ib-picture" name="ls-ci-ib-picture" width="20%">
            <div class="mt-3" id="ls-ci-ib-remove-photo" style="display: none;">
              <span class="fa fa-trash" id="ls-ci-ib-trash-icon"></span>
              <span id="ls-ci-ib-trash-text">Remove Photo</span>
            </div>
          </div>
        </div>
        <!-- end -- left side contact information image block -->

        <!-- start -- left side contact information personal data block -->
        <div class="row col-sm-12 mt-5" id="ls-ci-personal-data-block">

          <!-- start -- left side contact information personal data first name block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-first-name-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-fn-input" type="text" name="ls-ci-pd-first-name-input" oninput="addInPreview(this)" placeholder="First Name">
            <p class="text-muted" id="ls-ci-pd-fn-text-helper"><i><small>e.g. John</small></i></p>
          </div>
          <!-- end -- left side contact information personal data first name block -->

          <!-- start -- left side contact information personal data last name block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-last-name-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-ln-input" type="text" name="last-name" placeholder="Last Name">
            <p class="text-muted" id="ls-ci-pd-ln-text-helper"><i><small>e.g. Smith</small></i></p>
          </div>
          <!-- end -- left side contact information personal data last name block -->

          <!-- start -- left side contact information personal data occupation block -->
          <div class="col-sm-12 mt-1" id="ls-ci-pd-occupation-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-occ-input" type="text" name="occupation" placeholder="Occupation">
            <p class="text-muted" id="ls-ci-pd-occ-text-helper"><i><small>e.g. Software Engineer</small></i></p>
          </div>
          <!-- end -- left side contact information personal data occupation block -->

          <!-- start -- left side contact information personal data nationality block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-nationality-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-nat-input" type="text" name="nationality" placeholder="Nationality">
            <p class="text-muted" id="ls-ci-pd-nat-text-helper"><i><small>e.g. Armenian</small></i></p>
          </div>
          <!-- end -- left side contact information personal data nationality block -->

          <!-- start -- left side contact information personal data date of birth block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-date-of-birth-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-db-input" type="text" name="date-of-birth" placeholder="Date of Birth">
            <p class="text-muted" id="ls-ci-pd-db-text-helper"><i><small>e.g. 01.01.1900</small></i></p>
          </div>
          <!-- end -- left side contact information personal data date of birth block -->

          <!-- start -- left side contact information personal data address block -->
          <div class="col-sm-12 mt-1" id="ls-ci-pd-address-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-add-input" type="text" name="address" placeholder="Address">
            <p class="text-muted" id="ls-ci-pd-add-text-helper"><i><small>e.g. 54 Corbett Road, San Francisco, CA 94100</small></i></p>
          </div>
          <!-- end -- left side contact information personal data address block -->

          <!-- start -- left side contact information personal data phone block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-phone-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-ph-input" type="text" name="phone" placeholder="Phone">
            <p class="text-muted" id="ls-ci-pd-ph-text-helper"><i><small>e.g. (551) 123-7676</small></i></p>
          </div>
          <!-- end -- left side contact information personal data phone block -->

          <!-- start -- left side contact information personal data email block -->
          <div class="col-sm-6 mt-1" id="ls-ci-pd-email-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-email-input" type="text" name="email" placeholder="Email">
            <p class="text-muted" id="ls-ci-pd-email-text-helper"><i><small>e.g. chloe.anderson@email.com</small></i></p>
          </div>
          <!-- end -- left side contact information personal data email block -->

          <!-- start -- left side contact information personal data link block -->
          <div class="col-sm-12 mt-1" id="ls-ci-pd-link-block">
            <input class="form-control-plaintext input-group" id="ls-ci-pd-link-input" type="text" name="link" placeholder="Link">
            <p class="text-muted" id="ls-ci-pd-link-text-helper"><i><small>e.g. linkedin.com/chloeanderson</small></i></p>
          </div>
          <!-- end -- left side contact information personal data link block -->

        </div>
        <!-- end -- left side contact information personal data block -->

      </div>
      <!--end left side contact information block-->

      <!-- ----------------------------- 2 page ---------------------------- -->

      <!-- start -- left side objectiv block -->
      <div class="col-sm-5 mt-5" id="ls-objectiv-block" data-page="2" style="display: none;">
        <div class="row col-sm-12 mt-5">
          <div class="col-sm-12 mt-1">
            <textarea class="form-control-plaintext input-group" rows="6" cols="50" type="text" name="ls-objectiv-input" style="font-family: Roboto, serif; border: none; outline: none;"></textarea>
            <p class="text-muted" id="ls-obj-text-helper"><i><small>e.g. Proactive, customer-orientated retail professional with over 4 years of experience in reputable shops. Received 3 'Passion Awards' for delivering outstanding service and have consistently surpassed my target KPIs for mystery shoppers.</small></i></p>
          </div>
        </div>
      </div>
      <!--end -- left side objectiv block -->

      <!-- ----------------------------- 3 page ---------------------------- -->

      <div class="col-sm-5 mt-5" id="ls-experience-button-block" data-page="3" style="display: none;">
        <div class="row">
          <div class="col-sm-6 mt-1" id="ls-ex-btn-block">
            <div></div>
          </div>
        </div>
      </div>
      <!-- start -- left side experience block -->
      <div class="col-sm-5 mt-5" id="ls-experience-block" data-page="" style="display: none;">
        <div class="row">
          <div class="col-sm-6 mt-1" id="ls-ex-title-block">
            <input class="form-control-plaintext input-group" id="ls-ex-position-input" type="text" name="ls-ex-position-input" placeholder="Title\Position">
            <p class="text-muted" id="ls-ex-position-text-helper"><i><small>e.g. Software Developer</small></i></p>
          </div>
          <div class="col-sm-6 mt-1" id="ls-ex-company-block">
            <input class="form-control-plaintext input-group" id="ls-ex-company-input" type="text" name="ls-ex-company-input" placeholder="Company">
            <p class="text-muted" id="ls-ex-company-text-helper"><i><small>e.g. Google, CLI</small></i></p>
          </div>
          <div class="col-sm-6 mt-1" id="ls-ex-start-date-block">
            <input class="form-control-plaintext input-group" id="ls-ex-start-date-input" type="text" name="ls-ex-start-date-input" placeholder="Start Date">
            <p class="text-muted" id="ls-ex-start-date-text-helper"><i><small>e.g. 01.01.2020</small></i></p>
          </div>
          <div class="col-sm-6 mt-1" id="ls-ex-end-date-block">
            <input class="form-control-plaintext input-group" id="ls-ex-end-date-input" type="text" name="ls-ex-end-date-input" placeholder="End Date">
            <p class="text-muted" id="ls-ex-end-date-text-helper"><i><small>e.g. 01.06.2020</small></i></p>
          </div>
          <div class="col-sm-12 mt-1" id="ls-ex-location-block">
            <input class="form-control-plaintext input-group" id="ls-ex-location-input" type="text" name="ls-ex-location-input" placeholder="Location (City, State)">
            <p class="text-muted" id="ls-ex-location-text-helper"><i><small>e.g. 01.06.2020</small></i></p>
          </div>
          <div class="col-sm-12 mt-1" id="ls-ex-responsibility-block">
            <textarea class="form-control-plaintext input-group" rows="6" cols="50" type="text" name="ls-ex-responsibility-input" style="font-family: Roboto, serif; border: none; outline: none;"></textarea>
            <p class="text-muted" id="ls-ex-responsibility-text-helper"><i><small>e.g. Proactive, customer-orientated retail professional with over 4 years of experience in reputable shops. Received 3 'Passion Awards' for delivering outstanding service and have consistently surpassed my target KPIs for mystery shoppers.</small></i></p>
          </div>
        </div>
      </div>
      <!--end -- left side experience block -->

      <!-- --------------------------------------------------------------------------------------- 4 page ---------------------------- -->
      <!--start -- left side skills block -->



      <!--end -- left side skills block -->



      <!--start -- center side -->
      <div class="col-sm-1" id="center-side-block">
        <div class="col-sm-1" id="cs-vertical-line-block">
          <div id="cs-vertical-line" style="width: 3px; height: 640px; background-color:#F0F3F5;"></div>
        </div>
      </div>
      <!--end -- center side -->

      <!--start right side -->
      <div class="col-sm-6 h-100" id="right-side-block" style="background-color: #F8F9FA;">
        <div class="row h-75 mt-5 ">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="background-color: white;">  
                <div id="rs-first-name"></div>
            </div>
            <div class="col-sm-1"></div>
        </div>
      </div>
      <!--end right side -->

      <!-- start -- buttons block -->
      <div class="row col-sm-5" id="buttons-block">
        <input type="hidden" id="page-info" data-page="1">
        <div class="col-sm-5 text-left" id="bb-previous-button-block" >
          <button class="btn btn-link" id="bb-previous-button" onclick="changePage('previous')" style="color: #41A8F5; display: none;"><i class="fas fa-angle-left m-1"></i>Previous</button>
        </div>
        <div class="col-sm-2 text-center" id="bb-preview-button-block">
          <button class="btn btn-info" id="bb-preview-button">Preview</button>
        </div>
        <div class="col-sm-5 text-right" id="bb-next-button-block">
          <button class="btn btn-warning" id="bb-next-button" onclick="changePage('next')">Next</button>
        </div>
      </div>
      <!-- end -- buttons block -->

    </div>
    <!--end container-fluid-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./scripts.js"> </script>
  </body>
</html>




<!--start objectiv block -->

<!-- <div class="col-sm-5" id="left-side-objectiv-block" style="display: none;"> -->
<!--   <div class="row col-sm-12 mt-5" id="objectiv-block"> -->
<!--     <div class="col-sm-12 mt-1"> -->
<!--       <textarea class="form-control-plaintext input-group" rows="6" cols="50" type="text" name="objectiv" style="font-family: Roboto, serif; border: none; outline: none;"></textarea> -->
<!--       <p class="text-muted"><i><small>e.g. Proactive, customer-orientated retail professional with over 4 years of experience in reputable shops. Received 3 ‘Passion Awards’ for delivering outstanding service and have consistently surpassed my target KPIs for mystery shoppers.</small></i></p> -->
<!--     </div> -->
<!--   </div> -->

<!--   <div class="row col-sm-12"> -->
<!--     <div class="col-sm-5 text-left"> -->
<!--       <button class="btn btn-link" onclick="previousPart()" style="color: #41A8F5"><i class="fas fa-angle-left m-1"></i>Previous</button> -->
<!--     </div> -->
<!--     <button class="btn btn-info col-sm-2">Preview</button> -->
<!--     <div class="col-sm-5 text-right"> -->
<!--       <button class="btn btn-warning" onclick="nextPart()">Next</button> -->
<!--     </div> -->
<!--   </div> -->
<!-- </div> -->
<!--end objectiv block -->

<!--start experience block -->
<!-- <div class="col-sm-5" id="left-side-objectiv-block" style="display: none;"> -->
<!--  <div class="row col-sm-12 mt-5" id="experience-block"> -->
<!--    <div class="col-sm-6 mt-1" id="title-position-block"> -->
<!--      <input class="form-control-plaintext input-group" type="text" name="title-position" placeholder="Title/Position"> -->
<!--      <p class="text-muted"><i><small>e.g. Software Engineer</small></i></p> -->
<!--    </div> -->
<!--    <div class="col-sm-6 mt-1" id="company-block"> -->
<!--      <input class="form-control-plaintext input-group" type="text" name="company" placeholder="Company"> -->
<!--      <p class="text-muted"><i><small>e.g. Google, CLI</small></i></p> -->
<!--    </div> -->
<!--    <div class="col-sm-6 mt-1" id="start-date-block"> -->
<!--      <input class="form-control-plaintext input-group" type="text" name="start-date" placeholder="Start Date"> -->
<!--      <p class="text-muted"><i><small>e.g. Mar 2018</small></i></p> -->
<!--    </div> -->
<!--    <div class="col-sm-6 mt-1" id="end-date-block"> -->
<!--      <input class="form-control-plaintext input-group" type="text" name="end-of-birth" placeholder="End Date"> -->
<!--      <p class="text-muted"><i><small>e.g. Sep 2020</small></i></p> -->
<!--    </div> -->
<!--    <div class="col-sm-12 mt-1" id="location-block"> -->
<!--      <input class="form-control-plaintext input-group" type="text" name="location" placeholder="Location(City, State)"> -->
<!--      <p class="text-muted"><i><small>e.g. New York</small></i></p> -->
<!--    </div> -->
<!--  </div> -->
<!--  <div class="row col-sm-12"> -->
<!--    <div class="col-sm-5"></div> -->
<!--    <button class="btn btn-info col-sm-2">Preview</button> -->
<!--    <div class="col-sm-5 text-right"> -->
<!--      <button class="btn btn-warning" onclick="nextPart()">Next</button> -->
<!--    </div> -->
<!--  </div> -->
<!-- </div> -->
<!-- </div> -->

<!--end experience block -->
