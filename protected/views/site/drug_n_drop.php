<?php
/* @var $this PeopleController */

echo "<h1>Hello!</h1>";

$sql = "select id, firstName, phone from people order by item_order";

$result = People::model()->findAllBySql($sql);
foreach($result as $r){
    echo $r['id']." ".$r['firstName']." ".$r['phone']."<br/>";
}

$items = array();
$items1 = array();
foreach($result as $row){

    if($row['phone']==1)
        $items["item_".$row['id']] = $row['firstName'];
    else
        $items1["item_".$row['id']] = $row['firstName'];

}

$this->widget('zii.widgets.jui.CJuiSortable',array(
    'id' => 'sortable1',
    'htmlOptions' => array(
        'class' => 'sort',
        'style' => 'color: red; background: #fffaaa;'
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
                            url: "/newyii/index.php?r=people/update"
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

$this->widget('zii.widgets.jui.CJuiSortable',array(
    'id' => 'sortable2',
    'htmlOptions' => array(
        'class' => 'sort',
        'style' => 'color: green; background: #fffeee'
    ),
    'items' => $items1,

    // additional javascript options for the JUI Sortable plugin
    'options'=>array(

        'cursor' => 'n-resize',
        'connectWith' => '.sort',
        'opacity' => '0.6',

    ),
));



