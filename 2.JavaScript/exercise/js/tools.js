function move(obj,attributes,target,speed,callback){
    // 第五步：在開啟定時器前，先關閉上一個定時器，obj.tomer，由物件自己來保存。
    clearInterval(obj.timer);

    // 第六步：獲取元素目前的位置，用來判斷speed應為正值或負值
    var current = parseInt(getStyle(obj,attributes));

    // 第七步：判斷速度(speed)的正負值
    // 如果從 0 向 800 移動，則speed為正
    // 如果從 800 向 0 移動，則spped為負
    if(current > target){
        // 此時數度應為負值
        speed = -speed;
    }

    // 第八步：開啟定時器，用來執行動畫效果
    obj.timer = setInterval(function(){

        // 8-2.獲取box1原始的left值，因返回的值有"px"，所以需要取整數
        var oldLeft = parseInt(getStyle(obj,attributes));

        // 8-3.在舊值的基礎上增加值
        var newLeft = oldLeft + speed;

        /*
            9-2.判斷
            向左移動時，需要判斷newLeft是否小於target
            向右移動時，需要判斷newLeft是否大於target
         */
        if((speed < 0 && newLeft < target) || (speed > 0 && newLeft > target)){
            newLeft = target;
        }

        // 8-4.將新值賦值給box1的left
        obj.style[attributes]= newLeft + "px";

        // 第九步：設置停止定時器
        // 9-1.判斷當新值等於target時，停止定時器
        if(newLeft === target){
            clearInterval(obj.timer);

            // 9-3.定時器執行完畢停止時，才執行回調函數
            callback && callback();
        }
    },30);

}

// 8-1.設定一個共用函數來調用當前樣式的原值
function getStyle(obj,styleName){
    // 其他瀏覽器
    if(window.getComputedStyle){
        return getComputedStyle(obj,null)[styleName];
    }else{
        // IE8及以下
        return obj.currentStyle[styleName];
    }
}


// class屬性的操作：新增、檢查、刪除、切換

// 2-1.新增：定義一個函數，用來向一個元素中添加指定的class屬性值。
/*
    參數：
        第一個參數：obj，要添加的class屬性的元素
        第二個參數：cn，要添加的class屬性值。
*/
function addClass(obj, cn) {

    // 判斷有沒有該class屬性值，沒有才新增，避免重覆新增同一個屬性值
    if (!hasClass(obj, cn)) {
        // 要留意多加一個空格，避免屬性名拼串
        obj.className += " " + cn;
    }
}

// 2-2.判斷(檢查)一個元素中是否含有指定的class屬性值
function hasClass(obj, cn) {
    /*
        判斷obj中有沒有cn class，要使用正則表達式。
        創建一個正則表達式。
    */
    var reg = new RegExp("\\b" + cn + "\\b");

    return reg.test(obj.className);
}

// 2-3.刪除指定的class屬性值
function removeClass(obj, cn) {
    // 創建一個正則表達式，檢查有沒有該指定要刪的屬性值
    var reg = new RegExp("\\b" + cn + "\\b");

    obj.className = obj.className.replace(reg, "");
}

// 2-4.切換函數：有指定的class屬性值時刪除，沒有就新增，最常用！
function toggleClass(obj, cn) {

    // 判斷obj中是否有cn
    if (hasClass(obj, cn)) {
        // 有，則刪除
        removeClass(obj, cn);
    } else {
        // 沒有，則添加
        addClass(obj, cn);
    }

}
