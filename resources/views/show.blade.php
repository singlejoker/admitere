@extends('master')

@section('content')

        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Afisare date</div>
                <div class="panel-body">
                    <table>
                        <tr><tr/>
                        
                        <table class="table textforma">
                            <tr>
                                <td>ID</td>
                                <td>Nume</td>
                                <td>Prenume</td>
                                <td>Media</td>
                            </tr>
                            <?php 
                                foreach ($customers as $customer){
                                    
                                ?>
                                <tr>
                                    <td><?php echo $customer->id ?></td>
                                    <td><?php echo $customer->nume ?></td>
                                    <td><?php echo $customer->prenume ?></td>
                                    <td><?php echo $customer->media ?></td>
                            </tr>
                                <?php
                                
                                }
                                ?>
                            
                            </table> 
                      
            </div>
                </div>
            </div>
@endsection