<?php include 'inc/header.php'; ?>
<div class="container">
  <h2 class="page-header">Edit Job listing</h2>
  <form action="edit.php?id=<?= $job->id; ?>" method="post">

    <div class="mb-4">
      <label for="company">Company</label>
      <input type="text" class="form-control" name="company" value="<?= $job->company; ?>">
    </div>
    <div class="mb-4">

      <select name="category" class="form-select">
        <option value="0">choose Category</option>
        <?php foreach ($categories as $category) : ?>
          <?php if ($job->category_id == $category->id) : ?>
            <option value="<?= $category->id; ?>" selected><?= $category->name; ?></option>
          <?php else : ?>
            <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-4">
      <label for="company">Job title</label>
      <input type="text" class="form-control" name="job_title" value="<?= $job->job_title; ?>">
    </div>
    <div class="mb-4">
      <label for="company">Description</label>
      <textarea name="description" class="form-control"><?= $job->description ?></textarea>
    </div>
    <div class="mb-4">
      <label for="company">Location</label>
      <input type="text" class="form-control" name="location" value="<?= $job->location; ?>">
    </div>
    <div class="mb-4">
      <label for="company">Salary</label>
      <input type="text" class="form-control" name="salary" value="<?= $job->salary; ?>">
    </div>
    <div class="mb-4">
      <label for="company">Contact user</label>
      <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user; ?>">
    </div>
    <div class="mb-4">
      <label for="company">Contact email</label>
      <input type="text" class="form-control" name="contact_email" value="<?= $job->contact_email; ?>">
    </div>
    <input type="submit" class="btn btn-secondary" value="Submit" name="submit">


  </form>
</div>
<?php include 'inc/footer.php'; ?>