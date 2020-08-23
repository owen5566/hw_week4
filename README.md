# hw_week4
#### index.php
- 透過SESSION判斷使用者登入狀態
- 未登入: 顯示hello Guest, 會員專用頁會導向login.php 且給予一個flag
- 登入後: 顯示hello 使用者名稱, 登入按鈕改為登出

#### login.php
- login.php的兩個textBox有透過html設定輸入限制 只吃數字英文底線符號 不得為空
- 按下登入後，按照flag導向index.php or secret.php
- 若得到登出flag，清空session重導到index