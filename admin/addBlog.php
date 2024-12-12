<div class="row">
 <div class="col-md-8">
 <h1 class="text-left">Add Blog</h1>
 <div class="card">
 
 <div class="card-body">
  <form action="" method="POST">
  <div class="form-group">
   <label>Title Blog</label>	
   <input type="text" class="form-control" name="title">	
  </div>
  <div class="form-group">
   <label>Content Blog</label>
   <textarea class="form-control" name="content"></textarea>
  </div>
  <div class="form-group">
   <label>Kategori</label>
   <select class="form-control" name="kategori">
    <option value="bijak">Bijak</option>	
    <option value="cerdas">Cerdas</option>	
    <option value="kreatif">Kreatif</option>	
    <option value="produktif">Produktif</option>	
   </select>	
  </div>
  <div class="form-group">
   <input type="file" class="form-control" name="img">	
  </div>
  <div class="form-group">
   <button class="btn btn-success" type="submit" >Save</button>	
   <a href="index.php?home=showblog" class="btn btn-danger">Back</a>	
  </div>	
  </form>	
 </div>	
 </div>

 </div>
</div>