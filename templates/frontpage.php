<?php include 'inc/header.php'; ?>
<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">

    <h1 class="text-body-emphasis">Find a job</h1>
    <form method="GET" action="index.php">
      <select name="category" class="form-select">
        <option value="0">choose Category</option>
        <?php foreach ($categories as $category) : ?>
          <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
        <?php endforeach; ?>
      </select>
      <br>
      <input type="submit" class="btn btn-lg btn-success" value="Find">
    </form>

  </div>
  <h3 class="my-3"><?= $title ?></h3>
  <?php foreach ($jobs as $job) : ?>

    <div class="row mt-4 mx-auto">
      <div class="col-md-11">
        <h4><?= $job->job_title ?></h4>
        <p><?= $job->description ?></p>
      </div>
      <div class="col-md-1 d-flex align-items-center justify-content-center">
        <a href="job.php?id=<?= $job->id; ?>" class="btn btn-secondary">View</a>
      </div>
    </div>
  <?php endforeach; ?>

</div>
</div>
<?php include 'inc/footer.php'; ?>