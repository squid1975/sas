<?php 
require_once('../../private/initialize.php'); 
$test = $_GET['test'] ?? '';
if($test == '404'){
  error_404();
} elseif($test == '500') {
  error_500();
} elseif ($test == 'redirect'){
  redirect_to(url_for('/public/salamanders/index.php'));
} else {
  echo 'No Error';
}
?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <h1>Create Salamander</h1>

  <form action="<?php echo url_for('salamanders/create.php');?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="salamanderName" value="">
    <input type="submit" value="Create Salamander">
  </form>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php');

