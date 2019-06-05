
<?php include 'layout/app.php' ?>

<?php startblock('nav') ?>
   <div class="container">
    </div>
<?php endblock() ?>

<?php startblock('content') ?>
        <div class="row">
            <div class="col-lg-6">
                 <form action="add" method="POST">
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="name" id="" placeholder="name" required>
                        </div>
                        <div class="col">
                            <input class="form-control" type="number" name="age" id="" placeholder="age" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">age</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">Actions</th>
                            </tr>
                            <tbody>
                                    <?php if($data != null){
                                        foreach($data as $inf){
                                            echo '<tr>
                                                    <th scope="row">'.$inf[0].'</th>
                                                    <td>'.$inf[1].'</td>
                                                    <td>'.$inf[2].'</td>
                                                    <td>'.$inf[3].'</td>
                                                    <td>'.$inf[4].'</td>
                                                    <td><button data-id="'.$inf[0].'"class="btn btn-primary">Edit</button> | <button data-id="'.$inf[0].'"class="btn btn-primary">Delete</button></td>
                                                </tr>';
                                        }
                                    }else{
                                        echo 'no data';
                                    } ?>
      
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        
<?php endblock() ?>  