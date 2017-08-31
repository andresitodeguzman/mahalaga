<div class="card">
    <div class="card-content">
        <h4 class="grey-text"><?=$title?></h4>
        <br>
        <h5>Basic Information</h5>
        <table>
            <thead>
                <tr>
                    <th>Property</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Title</td>
                    <td><?=$title?></td>
                </tr>
                <tr>
                    <td>Theme Color</td>
                    <td><?=$themeColor?></td>
                </tr>
                <tr>
                    <td>Viewport</td>
                    <td><?php
                        $vp = $site->value("viewport");
                        if(!empty($vp)) $nvp = explode(",",$vp);
                        if(!empty($nvp)){
                            foreach($nvp as $val){
                                echo $val;
                            }
                        }
                    ?></td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <h5>OpenGraph</h5>
        <table>
            <thead>
                <tr>
                    <th>Property</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($openGraph as $key=>$value){
                        if(isset($value)){
                        echo "
                        <tr>
                        <td>$key</td>
                        <td>$value</td>
                        </tr>
                        ";}
                    }
                ?>
            </tbody>
        </table>
        <br>
        <br>
        <h5>Twitter</h5>
        <table>
            <thead>
                <tr>
                    <th>Property</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($twitter as $key=>$value){
                        if(isset($value)){
                        echo "
                        <tr>
                        <td>$key</td>
                        <td>$value</td>
                        </tr>
                        ";}
                    }
                ?>
            </tbody>
        </table>
        <br><br>
    </div>
</div>
