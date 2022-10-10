<form method="POST" action="validacion">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Constraseña</label>
    <input type="password" name="password">
  </div>

  {if $error}

    <div class="alert alert-danger mt-3">
      {$error}
    </div>

  {/if}

  <button type="submit" class="btn btn-primary">Submit</button>
</form>