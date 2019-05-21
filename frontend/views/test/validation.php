<?php

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>
<h1>Test</h1>

<form method="post">
    <p>Test:</p>
    <div class="row">
        <div class="col-md-2">
            <input type="text" name="testAttribute"
                   class="form-control"/>
        </div>
        <div class="col-md-2">
            <input type="submit" class='form-control btn-success'/>
        </div>
    </div>
</form>
