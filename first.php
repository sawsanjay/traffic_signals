<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signal Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
   /////////////////////////////////// submit data ///////////////////////////////////////// 
  function myFunction() {
   
    var l1 = $('#l1').val();
    var gl1 = $('#gl1').val();
    var yl1 = $('#yl1').val();
    var l2 = $('#l2').val();
    var gl2 = $('#gl2').val();
    var yl2 = $('#yl2').val();
    var l3 = $('#l3').val();
    var gl3 = $('#gl3').val();
    var yl3 = $('#yl3').val();
    var l4 = $('#l4').val();
    var gl4 = $('#gl4').val();
    var yl4 = $('#yl4').val();
    $.ajax({
        url: "savedata.php",
        type: "POST",
        data: { l1: l1, gl1: gl1, yl1: yl1, l2: l2, gl2: gl2, yl2: yl2, l3: l3, gl3: gl3, yl3: yl3, l4: l4, gl4: gl4, yl4: yl4 },
        cache: false,
        success: function(dataResult){
        }
      });
  }

////////////////////////////////////// Get data //////////////////////////////////////////////
$(document).ready( function() {
    
    $.ajax({
        type: 'POST',
        url: 'display.php',
        data: 'id=testdata',
        dataType: 'json',
        cache: false,
        success: function(result) {
            result.forEach(myFunction);
            function myFunction(item, index) {
              var light =  item['light'];
              if(light == 'a') {
                 document.getElementById("l1").value = item['light_no'];
                 document.getElementById("gl1").value = item['g_light'];
                 document.getElementById("yl1").value = item['y_light'];
                 const element = document.getElementsByClassName('dot_r')[0];
                 element.id = item['light_no'];
              }
              if(light == 'b') {
                 document.getElementById("l2").value = item['light_no'];
                 document.getElementById("gl2").value =item['g_light'];
                 document.getElementById("yl2").value = item['y_light'];
                 const element = document.getElementsByClassName('dot_r')[1];
                 element.id = item['light_no'];
              }
              if(light == 'c') {
                 document.getElementById("l3").value = item['light_no'];
                 document.getElementById("gl3").value = item['g_light'];
                 document.getElementById("yl3").value = item['y_light'];
                 const element = document.getElementsByClassName('dot_r')[2];
                 element.id = item['light_no'];
              }
              if(light == 'd') {
                 document.getElementById("l4").value = item['light_no'];
                 document.getElementById("gl4").value = item['g_light'];
                 document.getElementById("yl4").value = item['y_light'];
                 const element = document.getElementsByClassName('dot_r')[3];
                 element.id = item['light_no'];
              }  
            }                          
        },
    });
});

function myFunction22()
{
  $.ajax({
      type: 'POST',
      url: 'display.php',
      data: 'id=testdata',
      dataType: 'json',
      cache: false,
      success: function(result) {
          result.forEach(myFunction);
          function myFunction(item, index) {
            var light =  item['light'];
            if(light == 'a') {
               document.getElementById("l1").value = item['light_no'];
               document.getElementById("gl1").value = item['g_light'];
               document.getElementById("yl1").value = item['y_light'];
               const element = document.getElementsByClassName('dot_r')[0];
               element.id = item['light_no'];
            }
            if(light == 'b') {
               document.getElementById("l2").value = item['light_no'];
               document.getElementById("gl2").value =item['g_light'];
               document.getElementById("yl2").value = item['y_light'];
               const element = document.getElementsByClassName('dot_r')[1];
               element.id = item['light_no'];
            }
            if(light == 'c') {
               document.getElementById("l3").value = item['light_no'];
               document.getElementById("gl3").value = item['g_light'];
               document.getElementById("yl3").value = item['y_light'];
               const element = document.getElementsByClassName('dot_r')[2];
               element.id = item['light_no'];
            }
            if(light == 'd') {
               document.getElementById("l4").value = item['light_no'];
               document.getElementById("gl4").value = item['g_light'];
               document.getElementById("yl4").value = item['y_light'];
               const element = document.getElementsByClassName('dot_r')[3];
               element.id = item['light_no'];
            }  
          }                          
      },
  });
}
</script>
</head>
<body>
<div class="container-fluid">
  <h1 style="text-align: center;">Signal Light</h1>
  <hr><br><br><br><br>
  <div class="row">
    <form id="myform" name="myform" method="post">
      <div class="col-sm-3" style="text-align: center;" >
        <h1>A</h1>  
        <span class="dot_r"></span>
        <br><br>
        <label >Sequence</label>
        <input type="text" name="l1" id="l1" class="form-control" placeholder="Sequance" onchange="myFunction22()" onkeyup="myFunction()" ><br>
        <label>Green Light Interval</label>
        <input type="text" name="gl1" id="gl1" class="form-control" placeholder="Green"  onkeyup="myFunction()" ><br>
        <label>Yellow Light Interval</label>
        <input type="text" name="yl1" id="yl1" class="form-control" placeholder="yellow" onkeyup="myFunction()" ><br>
      </div>
      <div class="col-sm-3" style="text-align: center;" >
        <h1>B</h1>
        <span class="dot_r" ></span>
        <br><br>
        <label>Sequence</label>
        <input type="text" name="l2" id="l2" class="form-control" placeholder="Sequance" onchange="myFunction22()" onkeyup="myFunction()" ><br>
        <label>Green Light Interval</label>
         <input type="text" name="gl2" id="gl2" class="form-control" placeholder="Green" onkeyup="myFunction()" ><br>
        <label>Yellow Light Interval</label>
        <input type="text" name="yl2" id="yl2" class="form-control" placeholder="yellow" onkeyup="myFunction()" ><br>
      </div>
      <div class="col-sm-3" style="text-align: center;" >
        <h1>C</h1>
        <span class="dot_r"></span>
        <br><br>
        <label>Sequence</label>
        <input type="text" name="l3" id="l3" class="form-control" placeholder="Sequance" onchange="myFunction22()" onkeyup="myFunction()" ><br>
        <label>Green Light Interval</label>
         <input type="text" name="gl3" id="gl3" class="form-control" placeholder="Green" onkeyup="myFunction()" ><br>
          <label>Yellow Light Interval</label>
        <input type="text" name="yl3" id="yl3" class="form-control" placeholder="yellow" onkeyup="myFunction()" ><br>
      </div>
      <div class="col-sm-3" style="text-align: center;" >
        <h1>D</h1>
        <span class="dot_r" ></span>
        <br><br>
        <label>Sequence</label>
        <input type="text" name="l4" id="l4" class="form-control" placeholder="Sequance" onchange="myFunction22()" onkeyup="myFunction()" ><br>
        <label>Green Light Interval</label>
         <input type="text" name="gl4" id="gl4" class="form-control" placeholder="Green" onkeyup="myFunction()" ><br>
          <label>Yellow Light Interval</label>
        <input type="text" name="yl4" id="yl4" class="form-control" placeholder="yellow" onkeyup="myFunction()" ><br>
      </div>
    </form>
  </div>
</div>
<div class="row" >
  <div class="col-sm-4" > </div>
  <div class="col-sm-4" style="text-align: center;"><button onclick="myFunctionn(0)" class="btn btn-success"> Start</button> &nbsp 
    <button onClick="window.location.reload();" class="btn btn-danger">Stop</button></div>
  <div class="col-sm-4" ></div>
<script>
function myFunctionn  (cancle) {
    $.ajax({
      type: 'POST',
      url: 'display.php',
      data: 'id=testdata',
      dataType: 'json',
      cache: false,
      success: function(result) {
          result.forEach(myFunction);
          function myFunction(item, index) {
              var light =  item['light'];
              var light_no =  item['light_no'];
              var g_light =  item['g_light'];
              var y_light =  item['y_light'];
              var color_green = "green";
              var color_yellow = "yellow";
              var color_red = "red";
              var interva_sum = (result[0]['g_light'] * 1000) + (result[0]['y_light'] * 1000);
              var intervb_sum = (result[1]['g_light'] * 1000) + (result[1]['y_light'] * 1000);
              var intervc_sum = (result[2]['g_light'] * 1000) + (result[2]['y_light'] * 1000);
              if(light_no == '1') {
                 var limit_o_l = 1000;
                 var limit_y_l = y_light * 1000;
                 var limit_g_l = g_light * 1000;
                 var interva = [limit_o_l, limit_y_l, limit_g_l];
                 interva.forEach((itemm, i) => {
                    if(i == 0) { setTimeout(() => { change_y();}, itemm); }
                    if(i == 1) { setTimeout(() => { change_g();}, itemm); }
                    if(i == 2) { setTimeout(() => { change_r();}, itemm); }
                  });
                  function change_y() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_yellow;
                  }
                  function change_g() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_green;
                  }
                  function change_r() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_red;
                  }
              }
              if(light_no == '2') {
                setTimeout(() => {  
                  var limit_o_l = 1000;
                  var limit_y_l = y_light * 1000;
                  var limit_g_l = g_light * 1000;
                  var intervb = [limit_o_l, limit_y_l, limit_g_l];
                  intervb.forEach((itemm, i) => {
                    if(i == 0) { setTimeout(() => { change_y();}, itemm); }
                    if(i == 1) { setTimeout(() => { change_g();}, itemm); }
                    if(i == 2) { setTimeout(() => { change_r();}, itemm); }
                  });
                  function change_y() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_yellow;
                  }
                  function change_g() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_green;
                  }
                  function change_r() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_red;
                  }
                }, interva_sum);
              }
              if(light_no == '3') {
                setTimeout(() => {
                  var limit_o_l = 1000;
                  var limit_y_l = y_light * 1000;
                  var limit_g_l = g_light * 1000;
                  var intervc = [limit_o_l, limit_y_l, limit_g_l];
                  intervc.forEach((itemm, i) => {
                    if(i == 0) { setTimeout(() => { change_y();}, itemm); }
                    if(i == 1) { setTimeout(() => { change_g();}, itemm); }
                    if(i == 2) { setTimeout(() => { change_r();}, itemm); }
                  });
                  function change_y() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_yellow;
                  }
                  function change_g() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_green;
                  }
                  function change_r() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_red;
                  }
                }, interva_sum + intervb_sum);
              }
              if(light_no == '4') {
                setTimeout(() => {
                  var limit_o_l = 1000;
                  var limit_y_l = y_light * 1000;
                  var limit_g_l = g_light * 1000;
                  var intervd = [limit_o_l, limit_y_l, limit_g_l];
                  intervd.forEach((itemm, i) => {
                    if(i == 0) { setTimeout(() => { change_y();}, itemm); }
                    if(i == 1) { setTimeout(() => { change_g();}, itemm); }
                    if(i == 2) { setTimeout(() => { change_r();}, itemm); }
                  });
                  function change_y() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_yellow;
                  }
                  function change_g() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_green;
                  }
                  function change_r() {
                    var doc = document.getElementById(light_no);
                    doc.style.backgroundColor = color_red;
                  }
                 }, interva_sum + intervb_sum + intervc_sum);
              }                            
          }
      },
  });
}
</script>
</div><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dot_r {
  height: 100px;
  width: 100px;
  background-color: red;
  border-radius: 50%;
  border: solid 3px; 
  display: inline-block;
}
</style>
</body>
</html>
