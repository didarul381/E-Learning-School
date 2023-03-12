<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=file], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h1>Add course</h1>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="course_name">Course Name</label>
    <input type="text" id="course_name" name="course_name" placeholder="Course Name..">
    <label for="course_desc">Course Descripation</label>
    <textarea id="course_desc" name="course_desc" row="2" placeholder="Write something.." ></textarea>
   
    <label for="author">Author</label>
    <input type="text" id="author" name="author" placeholder="Your author name..">

    <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration" placeholder="Your course_duration..">
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" placeholder="Your course_orginal_price..">
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_selling_price" placeholder="Yourcourse_selling_price..">
    <label for="course_img">Course Imges</label>
    <input type="file" id="course_img" name="course_img" class="form-control-file">
    <input type="submit" id="courseSubmitBtn" value="Submit">

    <a href="courses.php" class="btn btn-secondary">Close</a>
  </form>
</div>
</div>

</body>
</html>
