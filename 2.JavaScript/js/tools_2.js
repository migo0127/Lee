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