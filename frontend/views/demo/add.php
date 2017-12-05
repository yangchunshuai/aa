<meta charset="utf8">

<div class="right">
    <div class="search-box">
        <form action="index.php?r=demo/add_do" method="post">
            <ul>
                <li>
                    <span>请输入字段名称：</span>
                    <input class="filed-name" type="text" name="uname">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="filed-name" type="text" name="default">
                </li>
                <li>
                    <span>请选择字段类型：</span>
                    <select name="type" id="">
                        <option value="input-text">文本框</option>
                        <option value="input-radio">单选框</option>
                        <option value="input-password">密码框</option>
                        <option value="textarea">文本域</option>
                    </select>
                </li>
                <li>
                    <span>请填写字段选项：</span>
                    <input type="text" class="filed-name" placeholder="选项1" name="option">
                    <input type="text" class="filed-name" placeholder="选项2" name="option">
                </li>
                <li>
                    <span>是否必填：</span>
                    <input type="checkbox" value="1" name="fill">必填
                </li>
                <li>
                    <span>请选择验证规则：</span>
                    <select name="rule" id="">
                        <option value="">无</option>
                        <option value="phone">手机号码</option>
                        <option value="length">长度</option>
                    </select>
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    <input class="length" type="text" value="" placeholder="请输入最小长度" name="range[]">
                    ~
                    <input class="length" type="text" value="" placeholder="请输入最大长度" name="range[]">
                </li>
                <li>
                    <input type="submit" value="提交">
                </li>
            </ul>
        </form>
    </div>
</div>