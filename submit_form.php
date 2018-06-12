<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($){

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
	
	});
	</script>
	</head>
<body>
<?php
echo '<pre>';
//print_r($_POST);
echo '<pre>';
//die();
$target_dir = "images/";
$banner=$_FILES["files"]["name"];
$expbanner=explode('.',$banner);
echo $bannerexptype=$expbanner[1];
$bannername1='user_avatar' . '.' .$bannerexptype;

echo $bannerpath1="images/".$bannername1;

move_uploaded_file($_FILES["files"]["tmp_name"],$bannerpath1);
 
?>

<table class="table" id="content">
    <thead>
      <tr>
        <th colspan="2">INSPIRATION IAS ACADEMY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Name Of Candidate</td>
        <td><?php echo $_POST['field1']; ?></td>
      </tr>
	        <tr>
        <td>Registration Code</td>
        <td><?php echo $_POST['field2']; ?></td>
      </tr>
	        <tr>
        <td>Inspiration ID No.</td>
        <td><?php echo $_POST['field3'[0]]; ?></td>
      </tr>
	  <tr>
        <td>Recent Passport Size Photo</td>
        <td><img src="images/user_avatar."<?php echo $bannerexptype; ?>></td>
      </tr>
	        <tr>
        <th colspan="2">PERSONAL DETAILS</th>
      </tr>
	        <tr>
        <td>Mother's Name</td>
        <td><?php echo $_POST['field10'[0]]; ?></td>
      </tr>
	        <tr>
        <td>Father's Name</td>
        <td><?php echo $_POST['field8'[0]]; ?></td>
      </tr>
	        <tr>
        <td>Father's Occupation</td>
        <td><?php echo $_POST['field9[0]']; ?></td>
      </tr>
	        <tr>
        <td>Phone Number</td>
        <td><?php echo $_POST['field11'[0]]; ?></td>
      </tr>
	        <tr>
        <td>Email</td>
        <td><?php echo $_POST['field31']; ?></td>
      </tr>
	        <tr>
        <td>Present Address</td>
        <td><?php echo $_POST['field20']; ?></td>
      </tr>
	        <tr>
        <td>Permanent Address</td>
        <td><?php echo $_POST['field21']; ?></td>
      </tr>
	        <tr>
        <td>Sex</td>
        <td><?php echo $_POST['field25[]']; ?></td>
      </tr>
	        <tr>
        <td>Category</td>
        <td><?php echo $_POST['field25']; ?></td>
      </tr>
	        <tr>
        <td>Date Of Birth</td>
        <td><?php echo $_POST['field23']; ?></td>
      </tr>
	  	  	        <tr>
        <th colspan="2">PERSONAL DETAILS</th>
      </tr>
	        <tr>
        <td>Present State</td>
        <td><?php echo $_POST['field32']; ?></td>
      </tr>
	  	        <tr>
        <th colspan="2">EDUCATIONAL QUALIFICATIONS</th>
      </tr>
	        <tr>
        <td>Board/University/Institute</td>
        <td><?php echo $_POST['field33']; ?></td>
      </tr>
	        <tr>
        <td>Exam Passed</td>
        <td><?php echo $_POST['field34']; ?></td>
      </tr>
	        <tr>
        <td>Year Of Passing</td>
        <td><?php echo $_POST['field35']; ?></td>
      </tr>
	  	  	        <tr>
        <th colspan="2">PARTICULARS OF CIVIL SERVICES EXAMINATION(CSE)</th>
      </tr>
	        <tr>
        <td>(1) Whether earlier selected in Civil Services</td>
        <td><?php echo $_POST['field38']; ?></td>
      </tr>
	        <tr>
        <td>(2) Whether earlier qualified for CS-Personality Test
</td>
        <td><?php echo $_POST['field42']; ?></td>
      </tr>
	        <tr>
        <td>(3) Whether earlier qualified for CS-(Main) written exam</td>
        <td><?php echo $_POST['field40']; ?></td>
      </tr>
	        <tr>
        <td>(1) Year & attempt(s) in CSE</td>
        <td><?php echo $_POST['field45[0]']; ?></td>
      </tr>
	        <tr>
        <td>(2) Optional Subject For Main Exam</td>
        <td><?php echo $_POST['field46[0]']; ?></td>
      </tr>
	        <tr>
        <td>(3) Medium Of Exam</td>
        <td><?php echo $_POST['field48[0]']; ?></td>
      </tr>
	  <tr>
        <td>(4) Roll No. Of Exam</td>
        <td><?php echo $_POST['field47[0]']; ?></td>
      </tr>
	  	  <tr>
        <td>Opted Inspiration Study Programme</td>
        <td><?php echo $_POST['field49']; ?></td>
      </tr>
	  
    </tbody>
  </table
  
  <div id="editor"></div>

<button id="cmd">Generate PDF</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
</body>

</html>