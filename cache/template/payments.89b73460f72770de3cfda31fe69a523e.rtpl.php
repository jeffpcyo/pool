<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12 allcp-grid ">


                        <div class="panel of-h" id="spy1">
                                <div class="panel-heading br-b-o w-mt-15">
                                    <span class="panel-title">Last 1000 sent payments</span>
                                      </div>
                                <div class="panel-body pn mt25">
                                    <div class="table-responsive">
                                        <table class="table display datatable" id="datatable1">
                                            <thead>
                                            <tr>
<th class="va-m">ID</th>

                                                <th class="va-m">Address</th>
                                                <th class="va-m">Value</th>
                                                <th class="va-m">Transaction ID</th>
                                                
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
						<th class="va-m">ID</th>
                                                <th class="va-m">Address</th>
                                                <th class="va-m">Value</th>
                                                <th class="va-m">Transaction ID</th>
                                            
                                           </tr>
                                            </tfoot>

                                            <tbody>
<?php $counter1=-1;  if( isset($payments) && ( is_array($payments) || $payments instanceof Traversable ) && sizeof($payments) ) foreach( $payments as $key1 => $value1 ){ $counter1++; ?>
                                            <tr>
						<td><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php echo htmlspecialchars( $value1["address"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
               
                                                <td><?php echo htmlspecialchars( $value1["val"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php echo htmlspecialchars( $value1["txn"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
    
                                </div>
                            </div>
                        
</div>
</div>

