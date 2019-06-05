
<?php include 'layout/app.php' ?>

<?php startblock('nav') ?>
   <div class="container">
      
    </div>
<?php endblock() ?>

<?php startblock('content') ?>
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
                            </tr>
                            <tbody>
                                    
                                    <?php if($data != null){
                                        foreach($data as $inf){
                                            echo '<tr>
                                                    <th scope="row">'.$inf.'</th>
                                                    <td>Sample Name</td>
                                                    <td>Sample Age</td>
                                                    <td>Sample now</td>
                                                    <td>Sample null</td>
                                                </tr>';
                                            
                                        }
                                    } ?>
                                    
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        
<?php endblock() ?>  