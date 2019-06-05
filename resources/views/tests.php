
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
                                                    <th scope="row">'.$inf[0].'</th>
                                                    <td>'.$inf[1].'</td>
                                                    <td>'.$inf[2].'</td>
                                                    <td>'.$inf[3].'</td>
                                                    <td>'.$inf[4].'</td>
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