<?php

use yii\helpers\Url;

?>
<meta charset="utf8">

<div class="right">
    <div class="search-box">
        <form action="<?php echo Url::to(['demo/save'])?>" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <ul>
                <li>
                    <span>请输入字段名称：</span>
                    <input class="filed-name" type="text" name="uname" value="<?php echo $data['uname']?>">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="filed-name" type="text" name="default" value="<?php echo $data['default']?>">
                </li>
                <li>
                    <span>请选择字段类型：</span>
                    <select name="type" id="">
                        <option value="input-text"
                                <?php if($data['type'] == 'input-text'):?>selected<?php endif; ?>
                        >文本框</option>
                        <option value="input-radio"
                                <?php if($data['type'] == 'input-radio'):?>selected<?php endif; ?>
                        >单选框</option>
                        <option value="input-password"
                                <?php if($data['type'] == 'input-password'):?>selected<?php endif; ?>
                        >密码框</option>
                        <option value="textarea"
                                <?php if($data['type'] == 'textarea'):?>selected<?php endif; ?>
                        >文本域</option>
                    </select>
                </li>
                <li>
                    <span>请填写字段选项：</span>
                    <input type="text" class="filed-name" placeholder="选项1" name="option" value="<?php echo $data['option']?>">
                    <input type="text" class="filed-name" placeholder="选项2" name="option" value="<?php echo $data['option']?>">
                </li>
                <li>
                    <span>是否必填：</span>
                    <input type="checkbox" value="1" name="fill">必填
                </li>
                <li>
                    <span>请选择验证规则：</span>
                    <select name="rule" id="">
                        <option value=""
                                <?php if($data['rule'] == "0"):?>selected<?php endif; ?>
                        >无</option>
                        <option value="phone"
                                <?php if($data['rule'] == 'phone'):?>selected<?php endif; ?>
                        >手机号码</option>
                        <option value="length"
                                <?php if($data['rule'] == 'length'):?>selected<?php endif; ?>
                        >长度</option>
                    </select>
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    <input class="length" type="text" value="" placeholder="请输入最小长度" name="range[]">
                    ~
                    <input class="length" type="text" value="" placeholder="请输入最大长度" name="range[]">
                </li>
                <li>
                    <input type="submit" value="编辑">
                </li>
            </ul>
        </form>
    </div>
</div>
