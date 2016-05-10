@extends('cms.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">品牌商信息修改</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">基本信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <form action="{{URL::action('CMSController@createBrand') }}" method="post">
            <?php echo csrf_field(); ?>
            <table border="2" width="95%" height="360" style="margin: 20px;">
                <tr>
                    <th width="15%">姓名：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="username" value="" /></td>
                    <th width="15%">手机号码：</th>
                    <td width="17%"><input style="width: 98%;height: 100%;" name="mobile" value="" /></td>
                    <th width="15%">微信号：</th>
                    <td><input style="width: 98%;height: 100%;" name="weixinNo" value="" /></td>
                </tr>
                <tr>
                    <th>职位：</th>
                    <td><input style="width: 98%;height: 100%;" name="title" value="" /></td>
                    <th>公司名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="company" value="" /></td>
                    <th>品牌名称：</th>
                    <td><input style="width: 98%;height: 100%;" name="brand" value="" /></td>
                </tr>
                <tr>
                    <th>公司所在国家：</th>
                    <td><input style="width: 98%;height: 100%;" name="country" value="" /></td>
                    <th>公司所在省：</th>
                    <td><input style="width: 98%;height: 100%;" name="province" value="" /></td>
                    <th>公司所在市：</th>
                    <td><input style="width: 98%;height: 100%;" name="city" value="" /></td>
                </tr>
                <tr>
                    <th>公司所在区：</th>
                    <td><input style="width: 98%;height: 100%;" name="region" value="" /></td>
                    <th>公司详细地址：</th>
                    <td><input style="width: 98%;height: 100%;" name="address" value="" /></td>
                    <th>2015年线上销售额：</th>
                    <td><input style="width: 98%;height: 100%;" name="sales" value="" /></td>
                </tr>
                <tr>
                    <th>类目：</th>
                    <td><input style="width: 98%;height: 100%;" name="category" value="" /></td>
                    <th>是否自有工厂：</th>
                    <td><input style="width: 98%;height: 100%;" name="factory" value="" /></td>
                    <th>厂房面积：</th>
                    <td><input style="width: 98%;height: 100%;" name="factorySize" value="" /></td>
                </tr>
                <tr>
                    <th>是否有设计团队：</th>
                    <td><input style="width: 98%;height: 100%;" name="design" value="" /></td>
                    <th>主营产品：</th>
                    <td><input style="width: 98%;height: 100%;" name="product" value="" /></td>
                    <th>客单价：</th>
                    <td><input style="width: 98%;height: 100%;" name="price" value="" /></td>
                </tr>
                <tr>
                    <th>商品风格：</th>
                    <td><input style="width: 98%;height: 100%;" name="style" value="" /></td>
                    <th>客户人群定位：</th>
                    <td><input style="width: 98%;height: 100%;" name="customPosition" value="" /></td>
                    <th>客户年龄段：</th>
                    <td><input style="width: 98%;height: 100%;" name="customAge" value="" /></td>
                </tr>
                <tr>
                    <th>是否支持退换：</th>
                    <td><input style="width: 98%;height: 100%;" name="refund" value="" /></td>
                    <th>红了吗对接人：</th>
                    <td><input style="width: 98%;height: 100%;" name="contact" value="" /></td>
                    <th></th>
                    <td></td>
                </tr>
                <tr><th>备注：</th>
                    <td colspan="5"><textarea name="description" style="width: 99.3%; height: 60px; margin-top: -6px; margin-bottom: -8px;"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="保存" class="link_btn" style="float: right; margin-right: 40px;"/>
            <a href="javascript:history.back();" style="float: right; margin-right: 5px;"><input type="button" value="返回" class="link_btn"/></a>
        </form>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>

@endsection