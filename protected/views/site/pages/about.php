

<style type="text/css">
    #mybox {
        width: 300px;
        height: 250px;
        border: 1px solid #999;
    }
</style>
<div id="mybox">

</div>
<div>

<?php
/* @var $this PeopleController */

//some droppable object (dropzone)
$this->beginWidget('zii.widgets.jui.CJuiDroppable', array(
		'options'=>array(
				'drop'=> 'js:function(event, ui){alert("OK");
				                                this.option1 = ui;
                                                 alert(ui.draggable[0].width);
				                                 alert(Object.keys(ui.draggable.context)); }',
		),
		'htmlOptions'=>array(
				'style'=>'height:50px;background:#fffaaa;margin:10px;border-radius: 5px;',
		)
));
echo '<p>Drop something around here</p>';

$this->endWidget();
?>
</div>
<?php
/*
for($i=0;$i<10;$i++) {

    $this->beginWidget('zii.widgets.jui.CJuiDraggable', array(
        'options'=>array(

            'revert' => 'invalid',//when not dropped, the item will revert back to its initial position
            'cursor' => 'move',

        ),
            'htmlOptions' => array(
                'style' => 'float:left;width:45px;height:45px;background:#'.$i.'aafff;margin:10px;
                					border-radius:5px;',
            ),
        ));
    echo '<p>Drag me</p>';
    $this->endWidget();
}
*/?>

<?php
$sql = "select id, firstName, phone from people order by item_order";
/*$dsn = "mysql:host=localhost;dbname = mydatabase";
$username = "root";
$password = "";
$connection = new CDbConnection($dsn, $username, $password);
$connection->active = true;
$command = $connection->createCommand($sql);
$dataReader = $command->query();
foreach($dataReader as $row){
    echo $row;
}

$connection->active = false;*/
/** @var CDbConnection $connection */
$connection = Yii::app()->db;
$command = $connection->createCommand($sql);
$dataReader = $command->query();
$items = array();
$items1 = array();
    while(($row=$dataReader->read())!==false){


        if($row['phone']==1)
         $items["item_".$row['id']] = $row['firstName'];
        else
         $items1["item_".$row['id']] = $row['firstName'];

    }
print_r($items);
?>
<div>
    <?php

$this->widget('zii.widgets.jui.CJuiSortable',array(
    'id' => 'sortable1',
    'htmlOptions' => array(
        'class' => 'sort',
    ),

    'items' => $items,
    // additional javascript options for the JUI Sortable plugin
    'options'=>array(
        'cursor' => 'n-resize',
        'connectWith' => '.sort',
        'update' => 'js:function(event, ui){
            var order = $(this).sortable("serialize");

            var request = $.ajax({
                            data: order,
                            type: "POST",
                            url: "/newyii/changeOrder.php"
                            });

            request.done(function(order){
                $("#mybox").html(order);
                });
            request.fail(function(jqXHR, textStatus){
                alert("Request failed: "+textStatus.toString());
                });
            }'
    ),
));
?>
</div>
<?php
$this->widget('zii.widgets.jui.CJuiSortable',array(
    'id' => 'sortable2',
    'htmlOptions' => array(
        'class' => 'sort',
    ),
    'items' => $items1,

    // additional javascript options for the JUI Sortable plugin
    'options'=>array(

        'cursor' => 'n-resize',
        'connectWith' => '.sort',
        'opacity' => '0.6',

    ),
));


?>

<script>
    $(function() {
        $( "#sortable1, #sortable2" ).sortable({
            connectWith: ".connectedSortable"
        }).disableSelection();
    });
</script>
</head>
<body>

<ul id="sortable1" class="connectedSortable">
    <li class="ui-state-default">Item 1</li>
    <li class="ui-state-default">Item 2</li>
    <li class="ui-state-default">Item 3</li>
    <li class="ui-state-default">Item 4</li>
    <li class="ui-state-default">Item 5</li>
</ul>

<ul id="sortable2" class="connectedSortable">
    <li class="ui-state-highlight">Item 1</li>
    <li class="ui-state-highlight">Item 2</li>
    <li class="ui-state-highlight">Item 3</li>
    <li class="ui-state-highlight">Item 4</li>
    <li class="ui-state-highlight">Item 5</li>
</ul>

