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
<br>
<div style="width:750px; margin:0 auto" >

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Price / Kg</th>
                <th>operate</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
        foreach($product_details as $products):
            ?>

<tr>
    <td>
        <?php echo $products->name; ?>
    </td>
    <td>
        <?php echo $products->category; ?>
    </td>
    <td>
        <?php echo "Rs ".$products->price; ?>
    </td>
    <td>
        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>product/editProduct/<?php echo $products->id; ?>">Update</a>
        <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>product/deleteProduct/<?php echo $products->id; ?>">Delete</a>
    </td>
    
    
</tr>

<?php
        endforeach;
        ?>
        
    </tbody>

</table>

<?php if($this->session->flashdata('updated')): ?>
<div style="color:Green">
<?php echo $this->session->flashdata('updated'); ?>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('deleted')): ?>
<div style="color:red">
<?php echo $this->session->flashdata('deleted'); ?>
</div>
<?php endif; ?>
<br><br>
<form action="<?php echo base_url(); ?>product/addProduct" method="post">
    <label style="font-weight:bold" for="name">Product Name :</label>
    <input style="width:400px" type="text" name="name" placeholder="Enter Product Name">
    <br><br>
    <label style="font-weight:bold" for="category">Product Category :</label>
    <input style="width:400px" type="text" name="category" placeholder="Enter Product Category">
    <br><br>
    <label style="font-weight:bold" for="price">Product Price :</label>
    <input style="width:400px" type="text" name="price" placeholder="Enter Product Price">
    <br><br>
    <input style="width:200px" type="submit" value="Add Product" class="btn btn-success">
</form>


<?php if($this->session->flashdata('error')): ?>
<div style="color:red">
<?php echo $this->session->flashdata('error'); ?>
</div>

<?php endif; ?>

<?php if($this->session->flashdata('inserted')): ?>
<div style="color:Green">
<?php echo $this->session->flashdata('inserted'); ?>
</div>



<?php endif; ?>

</div>



    
</body>
</html>