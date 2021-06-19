<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">

</head>
<body>


<h1 class="title">Product List</h1>
<br><br>
<div style="width:750px; margin:0 auto" >
<h3>Edit Product</h3>
<br>


<form action="<?php echo base_url();?>product/update/<?php echo $singleProduct->id ?>" method="post">
    <label style="font-weight:bold" for="name">Product Name :</label>
    <input style="width:400px" type="text" name="name" value="<?php echo $singleProduct->name ?>">
    <br><br>
    <label style="font-weight:bold" for="category">Product Category :</label>
    <input style="width:400px" type="text" name="category" value="<?php echo $singleProduct->category ?>">
    <br><br>
    <label style="font-weight:bold" for="price">Product Price :</label>
    <input style="width:400px" type="text" name="price" value="<?php echo $singleProduct->price ?>">
    <br><br>
    <input style="width:200px" type="submit" value="Update Product" class="btn btn-success">
</form>

</div>

</div>



    
</body>
</html>