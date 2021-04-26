<style>
    table, td {
        border: 1px solid black;
    }
    
    td {
       padding: 5px 10px; 
    }
    
    h2 {
        color: #ff5050;
        margin-top: 30px;
    }
</style>
<h2>Add Category</h2>
<form action="../categories/new" method="POST">
    <input type="text" placeholder="name" name="name"> 
    <input type="text" placeholder="parent id" name="parent_id"> 
    <input type="submit" value="add">
</form>

<h2>Update Category</h2>
<form action="../categories/new" method="POST">
    <input type="text" placeholder="id" name="id">
    <input type="text" placeholder="name" name="name"> 
    <input type="text" placeholder="parent id" name="parent_id"> 
    <input type="submit" value="update">
</form>
<?php if (!empty($categories)): ?>
    <div>
        <h2>Categories list</h2>
        <table border="1">
            <tr><td>id</td><td>name</td><td>parent id</td><td>parent name</td><td>delete</td></tr>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['Category']['id'] ?></td>
                    <td><?php echo $category['Category']['name'] ?></td>
                    <td><?php echo $category['Category']['parent_id'] ?></td>
                    <td>
                        <?php 
                            if($category['Parent']['id']) {
                                echo $category['Parent']['name'];
                            } else {
                                echo 'None';
                            }
                        ?>
                    </td>
                    <td><?php echo $html->link('delete', 'categories/delete/' . $category['Category']['id'] ) ?></td>
                </tr>


            <?php endforeach ?>
        </table>
    </div>
    <?php
 endif?>
