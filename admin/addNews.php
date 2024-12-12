<h1>Add News</h1>
<div class="row">
 <div class="col-md-8">
  <div class="card">
   <div class="card-body">
   	<form action="TambahNews.php" method="POST">
   	<div class="form-group">
	  <label>Title News</label>
	  <input type="text" class="form-control" name="title">	
	 </div>
	 <div class="form-group">
	  <label>Content News</label>
	  <textarea class="form-control" name="Content"></textarea>
	 </div>
	 <div class="form-group">
	  <label>Link News</label>
	  <input type="text" class="form-control" name="link">	
	 </div>
	 <div class="form-group">
	  <label>Image</label>
	  <input type="file" class="form-control" name="img">	
	 </div>
	 <div class="form-group">
	  <button class="btn btn-success" type="submit">Save</button>
	  <a href="index.php?home=showNews" class="btn btn-danger">Back</a>	
	 </div>	
	</div> 	
   	</form>
   </div>	
  </div>

 <div class="col-md-4">
 	
 </div>	
</div>	

