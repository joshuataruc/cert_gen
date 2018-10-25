<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <style>
    .background-color{
      background-color: #e9ecef;
      padding: 25px;
      border-radius: 5px

    }
    .background-color1{
      background-color: #e9ecef;

    }
    .act:active{
      border-left: 1px solid #ffffff;
    }

    
  </style>
</head>
<body>
  <br>
  <div class="container-fluid">
<div class="row">
  <div class="col-2">
    <div class="background-color1 rounded">
    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active act" id="v-pills-part-tab" data-toggle="pill" href="#v-pills-part" role="tab" aria-controls="v-pills-part" aria-selected="true"><p class="text-dark">Participants</p> </a>
      <a class="nav-link act" id="v-pills-facility-tab" data-toggle="pill" href="#v-pills-facility" role="tab" aria-controls="v-pills-facility" aria-selected="false act"><p class="text-dark">Facility</p></a>

      <a class="nav-link act" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false"><p class="text-dark">User</p></a>

      <a class="nav-link act" id="v-pills-modules-tab" data-toggle="pill" href="#v-pills-modules" role="tab" aria-controls="v-pills-modules act" aria-selected="false"><p class="text-dark">Modules</p></a>

<!--       <a class="nav-link act" id="v-pills-topics-tab" data-toggle="pill" href="#v-pills-topics" role="tab" aria-controls="v-pills-topics act" aria-selected="false"><p class="text-dark">Topics</p></a> -->

     <!-- <a class="nav-link act" id="v-pills-training-tab" data-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training act" aria-selected="false"><p class="text-dark">Trainings</p></a>

      <a class="nav-link act" id="v-pills-trainees-tab" data-toggle="pill" href="#v-pills-trainees" role="tab" aria-controls="v-pills-trainees act" aria-selected="false"><p class="text-dark">Trainees</p></a>

      <a class="nav-link act" id="v-pills-training_facility-tab" data-toggle="pill" href="#v-pills-training_facility" role="tab" aria-controls="v-pills-training_facility act" aria-selected="false"><p class="text-dark">Training Facility</p></a> -->

      <a class="nav-link act" id="v-pills-count-tab" data-toggle="pill" href="#v-pills-count" role="tab" aria-controls="v-pills-count act" aria-selected="false"><p class="text-dark">All Given Certificate</p></a>
    </div>
    </div>
  </div>
  <div class="col-9">
    <div class=" rounded">
    <div class="tab-content " id="v-pills-tabContent">
      <div class="tab-pane fade show active background-color" id="v-pills-part" role="tabpanel" aria-labelledby="v-pills-part-tab"><?php include 'participant_forms.php'; ?></div>
      <div class="tab-pane fade background-color" id="v-pills-facility" role="tabpanel" aria-labelledby="v-pills-facility-tab"><?php include 'facil_form.php'; ?></div>
      <div class="tab-pane fade background-color" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab"><?php include 'user_form.php'; ?></div>
      <div class="tab-pane fade" id="v-pills-modules" role="tabpanel" aria-labelledby="v-pills-modules-tab"><?php include 'add_module.php'; ?></div>
<!--       <div class="tab-pane fade" id="v-pills-topics" role="tabpanel" aria-labelledby="v-pills-topics-tab"><?php include 'add_topics.php'; ?></div> -->
      <!-- <div class="tab-pane fade background-color" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab"><?php include 'training_form.php'; ?></div>
      <div class="tab-pane fade background-color" id="v-pills-trainees" role="tabpanel" aria-labelledby="v-pills-trainees-tab"><?php include 'trainees_form.php'; ?></div>
      <div class="tab-pane fade background-color" id="v-pills-training_facility" role="tabpanel" aria-labelledby="v-pills-training_facility-tab background-color"><?php include 'training_facility_form.php'; ?></div> -->
      <div class="tab-pane fade" id="v-pills-count" role="tabpanel" aria-labelledby="v-pills-count-tab"><?php include 'all_given_cert.php'; ?></div>
    </div>
    </div>
  </div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>