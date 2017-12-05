<?php
use yii\helpers\Url;

?>
<div class="right">
    <div class="search-box">
        <table>
            <tr class="title">
                <td>ID</td>
                <td>字段名</td>
                <td>字段类型</td>
                <td>字段默认值</td>
                <td>是否必填</td>
                <td>验证规则</td>
                <td>字符数限制</td>
                <td>操作</td>
            </tr>
            <?php foreach($data as $key =>$v):?>
            <tr>
                <td><?=$v['id']?></td>
                <td><?=$v['uname']?></td>
                <td><?=$v['type']?></td>
                <td><?=$v['default']?></td>
                <td><?=$v['fill']?></td>
                <td><?=$v['rule']?></td>
                <td><?=$v['range']?></td>
                <td>
                    <a href="<?=Url::toRoute(['demo/del','id'=>$v['id']])?>">删除</a>
                    <a href="<?=Url::toRoute(['demo/update','id'=>$v['id']])?>">编辑</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>