<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="background: #d2dae3">
   <div id="uploadcont" style="flex-direction: column;margin-top: 120px">
       <h3>Upload Item</h3>
       <form method="post" action="uploadprocess.php" enctype="multipart/form-data">
           <select name="category">
               <option>Bag</option>
               <option>Perfume</option>
           </select>
           <input name="name" type="text" placeholder="item name" required>
           <input  name="stock" type="number" placeholder="stock" required>
           <input name="price" type="number" placeholder="price" required>
           <input name="img" type="file" required>

           <button id="submit" type="submit">Upload</button>
           <a href="admin.php" style="margin-top: 50px">
               <button id="backadmin" type="button" style="padding: 10px">Back</button>
           </a>
       </form>


   </div>
</body>
</html>