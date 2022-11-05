<!DOCTYPE html>
<h1>INSERISCI STATUS VOLO</h1>
<form action="submit" method="POST">
    @csrf
 <!-- <div class="form-group"> -->
    <label for="inputStatus">Status volo:</label>
    <input type="text" class="status" id="status" name="status" placeholder="Enter status volo">
 <!--  </div>  -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>







</html>
