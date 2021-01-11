<?php

/* 判斷使用者是否有輸入 engWord 的資料 */
if (filter_has_var(INPUT_POST, 'words')) {
    /* 取得使用者所輸入的資料 */
    $words = filter_input(INPUT_POST, "words");
    $nick = filter_input(INPUT_POST, "nick");
    
    /* 設定網頁內容顯示時的編碼，以避免中文亂碼 */
    header("Content-Type:text/html; charset=utf-8");
    $db_host = 'localhost';     //資料庫主機
    $db_user = 'root';          //資料庫使用者
    $db_password = '12345';          //資料庫使用者密碼
    $db_name = 'mini_shop';      //資料庫名稱
    /* 資料庫連接 */
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    /* 以 utf8 編碼，避免中文亂碼 */
    mysqli_set_charset($link, "utf8");
    /* 檢查資料庫連接是否失敗 */
    if (!$link) {
        die("連接失敗" . mysqli_connect_error()); //輸出資料庫連接錯誤
    }
    /* 定義 SQL 查詢語法 */
    /* 表格 basic 中的第一個欄位是自動編號，所以不用資料，只需要用 null 去替代即可 */
    /* 表格 basic 中的最後一個欄位目前暫時沒有填資料 */
    $insertStr = "insert into chat values ('$words','$nick')";
    // echo $insertStr;
    /* 實際執行查詢語法，且檢查是否能正常執行 */
    if (mysqli_query($link, $insertStr)) {
        echo "新增成功！";  /* 藉由 echo 的輸出，傳送「新增成功」至前端 */
    } else {
        echo "發送失敗！";  /* 藉由 echo 的輸出，傳送「新增失敗」至前端 */
    }
    mysqli_close($link); //關閉資料庫連接
}
?>
