<?php
/* @var $this yii\web\View */
use lukisongroup\assets\SssAsset;

SssAsset::register($this);
?>
<!DOCTYPE html>
<html>

<body>

<div ng-app="">

    <p>Input something in the input box:</p>
    <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
    <h1>Hello {{name}}</h1>

</div>

</body>
</html>

