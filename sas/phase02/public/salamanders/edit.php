<?php
require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';

if(is_post_request()){

// Handle form values sent by new.php
$salamanderName = $_POST['salamanderName'] ?? '';

echo "Salamander Name: " . $salamanderName . "<br>";
} 
?>


<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <h1>Edit Salamander</h1>

  <form action="<?php echo(url_for('/salamanders/edit.php?id=' . h(u($id))));?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="salamanderName" value="<?php echo $salamanderName; ?>">
    <input type="submit" value="Edit Salamander">
  </form>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php');?>