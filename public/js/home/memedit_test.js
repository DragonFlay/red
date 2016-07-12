// 限制用户输入的手机号合法化
function f(obj) {
    if (!obj.value.match(/^\d+$/) || obj.value.length > 11) {   // 只能输入数字且小于11位
        obj.value = obj.defaultValue;
    } else {//输入合法 则将本次的值存入任意属性中 为了下一次去取
        obj.defaultValue = obj.value;
    }
}

// 选择城市的二级联动
function city(obj) {
    //获取选择的省份
    var province = obj.value;
    //获取相应的城市
    var arr = new Array();
    arr[''] = ['-选择城市-'];
    arr['北京'] = ['昌平', '海淀', '大兴', '丰台', '房山', '朝阳', '通州', '石景山', '门头沟'];
    arr['上海'] = ['宝山', '奉贤', '普陀', '徐汇', '闵行', '嘉定', '青浦', '松江'];
    arr['安徽'] = ['合肥', '宣城', '广德', '芜湖', '安庆', '黄山', '马鞍山', '阜阳'];
    var city = arr[province];
    //组装select标签
    var sel = "<select name='cs' value=''>";
    for (var i = 0; i < city.length; i++) {
        sel += "<option value='" + city[i] + "'>" + city[i] + "</option>";
    }
    sel += "</select>";
    //在页面显示（span）
    document.getElementById("city").innerHTML = sel;
}


