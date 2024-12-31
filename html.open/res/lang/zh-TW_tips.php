<?php 

global $_tipsdb;

$_tipsdb['AIOBlockSize'] = new DAttrHelp("AIO Block Size", 'Specifies the sent block size for AIO. This block size multiplied by the total files being processed should be less than the physical memory of the server, otherwise, AIO will not help. If your server has enough memory, you can choose a bigger size.<br/><br/>Default value: 128K', '', '從列表中選擇', '');

$_tipsdb['CACertFile'] = new DAttrHelp("CA證書檔", '指定包含憑證授權（CA）證書的憑證連結檔。 按照優先順序，此檔只是PEM編碼的證書檔的串聯。 這可以用作替代或 除了&quot;CA憑證路徑&quot;。 這些證書用於用戶端證書身份驗證和構建伺服器憑證鏈，除了伺服器憑證之外，這些證書還將發送到流覽器。', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['CACertPath'] = new DAttrHelp("CA憑證路徑", '指定憑證授權（CA）證書的目錄。 這些證書用於用戶端證書身份驗證和構建伺服器憑證鏈，除了伺服器憑證之外，這些證書還將發送到流覽器。', '', 'path', '');

$_tipsdb['CGIPriority'] = new DAttrHelp("CGI優先順序", '指定外部應用程式進程的優先順序。數值範圍從-20到20。數值越小，優先順序越高。<br/><br/>CGI進程不能擁有比Web伺服器更高的優先順序。如果這個優先順序數值被設置為低於 伺服器的優先順序數值，則將使用伺服器優先順序作為替代。', '', 'int', '');

$_tipsdb['CPUHardLimit'] = new DAttrHelp("CPU硬限制", '以秒為單位，指定CGI進程的CPU佔用時間限制。 如果進程持續佔用CPU時間，達到硬限制，則進程將被強制殺死。如果沒有設置該限制，或者限制設為0， 作業系統的預設設置將被使用。', '', '整數', '');

$_tipsdb['CPUSoftLimit'] = new DAttrHelp("CPU軟限制(秒)", '以秒為單位，指定CGI進程的CPU佔用時間限制。當進程達到 軟限制時，將收到通知信號。如果沒有設置該限制，或者限制設為0， 將使用作業系統的預設設置。', '', '整數', '');

$_tipsdb['DHParam'] = new DAttrHelp("DH參數", '指定DH金鑰交換所需的Diffie-Hellman參數檔的位置。', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['GroupDBLocation'] = new DAttrHelp("組資料庫位置", '指定組資料庫的位置。<br/>組資訊可以在使用者資料庫或在這個獨立的組資料庫中設置。 用於使用者驗證時，將首先檢查使用者資料庫。 如果使用者資料庫同樣包含組資訊，組資料庫將不被檢查。<br/>對於類型為Password File的資料庫， 組資料庫位址應當是到達包含有組定義的平面檔的路徑。 你可以在WebAmin控制台中點擊檔案名來修改這個設置。<br/>每一行組檔應當包含一個組名， 組名後面跟一個冒號，並在冒號後面使用空格來分割組中的用戶名。 例如: <blockquote><code>testgroup: user1 user2 user3</code></blockquote>', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT,$VH_ROOT的相對路徑。', '');

$_tipsdb['HANDLER_RESTART'] = new DAttrHelp("Hook::HANDLER_RESTART Priority", 'Sets the priority for this module callback within the HTTP Handler Restart Hook.<br/>   The HTTP Handler Restart Hook is triggered when the web server needs to discard the current response and start processing from beginning, for example, when an internal redirect has been requested.<br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['HTTP_AUTH'] = new DAttrHelp("Hook::HTTP_AUTH Priority", 'Sets the priority for this module callback within the HTTP Authentication Hook.<br/>  The HTTP Authentication Hook is triggered after resource mapping and before handler processing.  It occurs after HTTP built-in authentication, and can be used to perform additional authentication checking.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['HTTP_BEGIN'] = new DAttrHelp("Hook::HTTP_BEGIN Priority", 'Sets the priority for this module callback within the HTTP Begin Hook.<br/>   The HTTP Begin Hook is triggered when the TCP/IP connection begins an HTTP Session.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['HTTP_END'] = new DAttrHelp("Hook::HTTP_END Priority", 'Sets the priority for this module callback within the HTTP Session End Hook. <br/><br/>The HTTP Session End Hook is triggered when the HTTP connection has ended.     <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['L4_BEGINSESSION'] = new DAttrHelp("Hook::L4_BEGINSESSION Priority", 'Sets the priority for this module callback within the L4 Begin Session Hook.<br/>  The L4 Begin Session Hook is triggered when the TCP/IP connection begins.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['L4_ENDSESSION'] = new DAttrHelp("Hook::L4_ENDSESSION Priority", 'Sets the priority for this module callback within the L4 End Session Hook.<br/>   The L4 End Session Hook is triggered when the TCP/IP connection ends.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['L4_RECVING'] = new DAttrHelp("Hook::L4_RECVING Priority", 'Sets the priority for this module callback within the L4 Receiving Hook.<br/>   The L4 Receiving Hook is triggered when the TCP/IP connection receives data.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['L4_SENDING'] = new DAttrHelp("Hook::L4_SENDING Priority", 'Sets the priority for this module callback within the L4 Sending Hook.<br/>  The L4 Sending Hook is triggered when the TCP/IP connection sends data.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['MAIN_ATEXIT'] = new DAttrHelp("Hook::MAIN_ATEXIT Priority", 'Sets the priority for this module callback within the Main At Exit Hook. <br/><br/>The Main At Exit Hook is triggered by the main (controller) process just prior to exiting. It is the last hook point to be called by the main process.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['MAIN_INITED'] = new DAttrHelp("Hook::MAIN_INITED Priority", 'Sets the priority for this module callback within the Main Initialized Hook. <br/><br/>The Main Initialized Hook is triggered once upon startup, after the server configuration and  initialization is completed by the main (controller) process, and before any requests are serviced.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['MAIN_POSTFORK'] = new DAttrHelp("Hook::MAIN_POSTFORK Priority", 'Sets the priority for this module callback within the Main Postfork Hook. <br/><br/>The Main Postfork Hook is triggered by the main (controller) process immediately after  a new worker process has been started (forked). This is called for each worker, and may happen during  system startup, or if a worker has been restarted.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['MAIN_PREFORK'] = new DAttrHelp("Hook::MAIN_PREFORK Priority", 'Sets the priority for this module callback within the Main Prefork Hook. <br/><br/>The Main Prefork Hook is triggered by the main (controller) process immediately before  a new worker process is started (forked). This is called for each worker, and may happen during  system startup, or if a worker has been restarted.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RCVD_REQ_BODY'] = new DAttrHelp("Hook::RCVD_REQ_BODY Priority", 'Sets the priority for this module callback within the HTTP Received Request Body Hook.  <br/><br/>The HTTP Received Request Body Hook is triggered when the web server finishes receiving request body data.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RCVD_RESP_BODY'] = new DAttrHelp("Hook::RCVD_RESP_BODY Priority", 'Sets the priority for this module callback within the HTTP Received Response Body Hook.  <br/><br/>The HTTP Received Response Body Hook is triggered when the web server backend finishes receiving the response body.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RECV_REQ_BODY'] = new DAttrHelp("Hook::RECV_REQ_BODY Priority", 'Sets the priority for this module callback within the HTTP Receive Request Body Hook.  <br/><br/>The HTTP Receive Request Body Hook is triggered when the web server receives request body data.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RECV_REQ_HEADER'] = new DAttrHelp("Hook::RECV_REQ_HEADER Priority", 'Sets the priority for this module callback within the HTTP Receive Request Header Hook.<br/>   The HTTP Receive Request Header Hook is triggered when the web server receives a request header.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RECV_RESP_BODY'] = new DAttrHelp("Hook::RECV_RESP_BODY Priority", 'Sets the priority for this module callback within the HTTP Receive Response Body Hook.  <br/><br/>The HTTP Receive Response Body Hook is triggered when the web server backend receives the response body.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['RECV_RESP_HEADER'] = new DAttrHelp("Hook::RECV_RESP_HEADER Priority", 'Sets the priority for this module callback within the HTTP Receive Response Header Hook.  <br/><br/>The HTTP Receive Response Header Hook is triggered when the web server creates the response header.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['SEND_RESP_BODY'] = new DAttrHelp("Hook::SEND_RESP_BODY Priority", 'Sets the priority for this module callback within the HTTP Send Response Body Hook. <br/><br/>The HTTP Send Response Body Hook is triggered when the web server is going to send the response body.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['SEND_RESP_HEADER'] = new DAttrHelp("Hook::SEND_RESP_HEADER Priority", 'Sets the priority for this module callback within the HTTP Send Response Header Hook. <br/><br/>The HTTP Send Response Header Hook is triggered when the web server is ready to send the response header.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['UDBgroup'] = new DAttrHelp("組", '該用戶所屬的組的逗號分隔列表。 用戶將只能訪問屬於這些組的資源。 如果在此處添加了組資訊，則此資訊將用於資源授權，並且涉及該使用者的任何組資料庫設置都將被忽略。', '', '', '');

$_tipsdb['UDBpass'] = new DAttrHelp("新密碼", '密碼可以是任意長度，可以包含任何字元。', '', '', '');

$_tipsdb['UDBpass1'] = new DAttrHelp("重新輸入密碼", '密碼可以是任意長度，可以包含任何字元。', '', '', '');

$_tipsdb['UDBusername'] = new DAttrHelp("用戶名", '僅包含字母和數位的用戶名。（無特殊字元）', '', '', '');

$_tipsdb['URI_MAP'] = new DAttrHelp("Hook::URI_MAP Priority", 'Sets the priority for this module callback within the HTTP URI Map Hook.<br/>  The HTTP URI Map Hook is triggered when the web server maps a URI request to a context.  <br/><br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['VHlsrecaptcha'] = new DAttrHelp("reCAPTCHA 保護", 'reCAPTCHA 保護是一種減輕伺服器負載的服務。在下列情況發生後，reCAPTCHA保護將啟動 啟動後,所以不受信任的用戶端(可自定)發出的請求將被重定向到reCAPTCHA驗證頁面 驗證完成後用戶端將被重定向到其所需的頁面<br/><br/>下列情況將啟用reCAPTCHA保護: 1. 伺服器或虛擬主機併發請求計數超過連接限制。<br/>2. 啟用了Anti-DDoS，並且用戶端以可疑的方式訪問了URL。 用戶端將首先重定向到reCAPTCHA，而不是在觸發時被拒絕。<br/>3. 提供了新的重寫規則，以通過重寫規則啟動reCAPTCHA。可以設置“verifycaptcha”將用戶端重定向到reCAPTCHA。可以設置一個特殊值&#039;:deny&#039;以在用戶端失敗太多次時拒絕它。例如，[E=verifycaptcha]將始終重定向到reCAPTCHA，直到通過驗證。 [E=verifycaptcha: deny]將重定向到reCAPTCHA，如果用戶端達到最大嘗試次數,將被拒絕。', '', '', '');

$_tipsdb['WORKER_ATEXIT'] = new DAttrHelp("Hook::WORKER_ATEXIT Priority", 'Sets the priority for this module callback within the Worker At Exit Hook. <br/><br/>The Worker At Exit Hook is triggered by a worker process just prior to exiting. It is the last hook point to be called by a worker.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['WORKER_POSTFORK'] = new DAttrHelp("Hook::WORKER_POSTFORK Priority", 'Sets the priority for this module callback within the Worker Postfork Hook. <br/><br/>The Worker Postfork Hook is triggered by a worker process after being created by the main (controller) process.  Note that a corresponding Main Postfork Hook may be called by the main process either before or after this callback.   <br/>It will only take effect if the module has a hook point here. If it is not set, the priority will be the default value defined in the module.', '', 'Integer value from -6000 to 6000. Lower value means higher priority.', '');

$_tipsdb['accessAllowed'] = new DAttrHelp("允許訪問列表", '指定允許訪問這個context下資源的IP位址或子網。綜合 &quot;拒絕訪問列表&quot;項的配置以及伺服器/虛擬主機級別存取控制， 可訪問性將以用戶端IP所符合的最小範圍來確定。', '', 'Comma-delimited list of IPs/sub-networks.', '網路可以寫成192.168.1.0/255.255.255.0, 192.168.1 或192.168.1.*。');

$_tipsdb['accessControl'] = new DAttrHelp("登入限制", '指定哪些子網路和/或IP位址可以訪問該伺服器。 這是影響所有的虛擬主機的伺服器級別設置。您還可以為每個虛擬主機設置登入限制。虛擬主機的設置不會覆蓋伺服器設置。<br/><br/>是否阻止/允許一個IP是由允許列表與阻止列表共同決定。 如果你想阻止某個特定IP或子網，請在&quot;允許列表&quot;中寫入* 或 ALL，並在&quot;拒絕列表&quot;中寫入需要阻止的IP或子網。 如果你想允許某個特定的IP或子網，請在&quot;拒絕列表&quot;中寫入* 或 ALL，並在&quot;允許列表&quot;中寫入需要允許的IP或子網。 單個IP位址是被允許訪問還是禁止訪問取決於該IP符合的最小限制範圍。<br/><br/>信任的IP或子網路可以在&quot;允許列表&quot;列表中添加尾碼“T”來指定。受信任的IP或子網不受連接數/流量限制。 只有伺服器級別的登入限制才可以設置受信任的IP或子網。', '[安全建議] 用此項設置適用於所有虛擬主機的常規限制。', '', '');

$_tipsdb['accessControl_allow'] = new DAttrHelp("允許列表", '指定允許的IP位址或子網的列表。 可以使用{VAL}*或{VAL}ALL。', '[安全建議] 在伺服器級別設置的受信任的IP或子網不受連接/節流限制。', '逗號分隔的IP地址或子網列表。 結尾加上“T”可以用來表示一個受信任的IP或子網，如{VAL}192.168.1.*T。', '子網: 192.168.1.0/255.255.255.0, 192.168.1.0/24, 192.168.1 或 192.168.1.*. <br/>IPv6 地址: ::1 或 [::1] <br/>IPv6 子網: 3ffe:302:11:2:20f:1fff:fe29:717c/64 或  [3ffe:302:11:2:20f:1fff:fe29:717c]/64.');

$_tipsdb['accessControl_deny'] = new DAttrHelp("拒絕列表", '指定不允許的IP位址或子網的列表。', '', '逗號分隔的IP地址或子網列表。 可以使用{VAL}*或{VAL}ALL。', '子網: 192.168.1.0/255.255.255.0, 192.168.1.0/24, 192.168.1 或 192.168.1.*. <br/>IPv6 地址: ::1 或 [::1] <br/>IPv6 子網: 3ffe:302:11:2:20f:1fff:fe29:717c/64 或  [3ffe:302:11:2:20f:1fff:fe29:717c]/64.');

$_tipsdb['accessDenied'] = new DAttrHelp("拒絕訪問列表", '指定哪個IP位址或子網不被允許訪問這個context下的資源。 綜合&quot;允許訪問列表&quot;項的配置以及伺服器/虛擬主機級別存取控制， 可訪問性將以用戶端IP所符合的最小範圍來確定。', '', 'Comma-delimited list of IPs/sub-networks.', '子網路可以寫成192.168.1.0/255.255.255.0, 192.168.1 或192.168.1.*。');

$_tipsdb['accessDenyDir'] = new DAttrHelp("拒絕訪問的目錄", '指定應該拒絕訪問的目錄。 將包含敏感性資料的目錄加入到這個清單，以防止向用戶端意外洩露敏感檔。 在路徑後加一個“*”，可包含所有子目錄。 如果&quot;跟隨符號連結&quot;和&quot;檢查符號連結&quot;都被啟用， 符號連結也將被檢查是否在被拒絕訪問目錄中。', '[安全建議] 至關重要: 此設置只能防止服務這些目錄中的靜態檔。 這不能防止外部腳本如PHP、Ruby、CGI造成的洩露。', 'Comma-delimited list of directories', '');

$_tipsdb['accessLog_bytesLog'] = new DAttrHelp("位元組記錄", '指定頻寬位元組日誌檔的路徑。設置後，將創建一份相容cPanel面板的頻寬日誌。這將記錄 一個請求傳輸的總位元組數，包括請求內容和回應內容。', '[性能建議] 將日誌檔放置在一個單獨的磁片上。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['accessLog_fileName'] = new DAttrHelp("檔案名", '指定訪問日誌檔的檔案名。', '[性能建議] 將訪問日誌檔放置在一個單獨的磁片上。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['accessLog_logFormat'] = new DAttrHelp("日誌格式", ' 指定訪問日誌的格式。 設置之後，它將覆蓋&quot;記錄頭部&quot; 的設定。', '', '字串。日誌格式的語法與Apache 2.0自訂 <a href="http://httpd.apache.org/docs/current/mod/mod_log_config.html#formats" target="_blank" rel="noopener noreferrer">log format</a>.', '<b>一般日誌格式（CLF）</b><br/>    &quot;%h %l %u %t \&quot;%r\&quot; %>s %b&quot;<br/><br/><b>支援虛擬主機的一般日誌格式</b><br/>    &quot;%v %h %l %u %t \&quot;%r\&quot; %>s %b&quot;<br/><br/><b>NCSA擴展/組合日誌格式</b><br/>    &quot;%h %l %u %t \&quot;%r\&quot; %>s %b \&quot;%{Referer}i\&quot; \&quot;%{User-agent}i\&quot; <br/><br/><b>記錄Foobar的cookie值</b><br/>    &quot;%{Foobar}C&quot;');

$_tipsdb['accessLog_logHeader'] = new DAttrHelp("記錄頭部", '指定是否記錄HTTP請求頭: Referer、 UserAgent和Host。', '[性能建議] 如果你不需要在訪問日誌中記錄這些頭部資訊，關閉這個功能。', '從核取方塊中選擇', '');

$_tipsdb['accessLog_pipedLogger'] = new DAttrHelp("管道日誌記錄", '指定外部應用程式，該應用程式將通過其STDIN流（檔案控制代碼為0）上的pipe接收LiteSpeed發送的訪問日誌資料。 指定此欄位後，訪問日誌將僅發送到記錄器應用程式，而不發送到上一個條目中指定的訪問日誌檔。<br/><br/>首先必須在&quot;外部應用&quot;中定義記錄器應用程式。 伺服器級別的訪問日誌記錄只能使用在伺服器級別定義的外部記錄器應用程式。 虛擬主機級別的訪問日誌記錄只能使用在虛擬主機級別定義的記錄器應用程式。<br/><br/>記錄器進程的啟動方式與其他外部進程相同 (CGI/FastCGI/LSAPI)過程。這意味著它將作為 在虛擬主機的&quot;外部應用程式設置UID模式&quot;設置中指定的用戶ID，並且永遠不會以特權用戶運行。<br/><br/>如果配置了多個記錄器的實例，LiteSpeed web server將在多個記錄器之間執行簡單的負載均衡。LiteSpeed伺服器始終嘗試將記錄器應用程式的數量保持在盡可能低的水準。只有當一個記錄器應用程式未能及時處理訪問日誌條目時，伺服器才會嘗試開機記錄器的另一個實例。<br/><br/>如果記錄器崩潰，Web伺服器將啟動另一個實例，但是流緩衝區中的日誌資料將丟失。 如果外部記錄器無法跟上日誌流的速度和數量，則可能會丟失日誌資料。', '', '從列表中選擇', '');

$_tipsdb['aclogUseServer'] = new DAttrHelp("日誌管理", '指定寫入訪問日誌的地點。這裡有三個選項： <ol> <li>寫入到伺服器的訪問日誌；</li> <li>為虛擬主機創建一個訪問日誌；</li> <li>禁用訪問日誌記錄</li> </ol>', '', '從列表中選擇', '');

$_tipsdb['addDefaultCharset'] = new DAttrHelp("添加默認的字元集", 'S指定當內容類別型是&quot;text/html&quot;或&quot;text/plain&quot;且沒有參數時，是否添加字元集標記到&quot;Content-Type&quot;回應報頭中。當設置為Off時，該功能禁用。當設置為On時，將添加&quot;自訂默認字元集&quot;中指定的字元集，如果沒有指定，將添加默認的&quot;iso-8859-1&quot;字元集。', '', '從單選框選擇', '');

$_tipsdb['addMIMEType'] = new DAttrHelp("MIME類型", '為此context指定的其他MIME類型的映射.  新映射將覆蓋此context及其子context下的現有映射。<br/>	   如果要將PHP腳本顯示為文字檔而不是作為腳本執行，則只需覆蓋.php映射到MIME類型&quot;text/plain&quot;', '', 'MIME-type1 extension extension ..., MIME-type2 extension ... 		Use comma to separate between MIME types, use space to 		separate multiple extensions.', 'image/jpg jpeg jpg, image/gif gif');

$_tipsdb['addonmodules'] = new DAttrHelp("附加模組", '選擇您想使用的附加模組。 如果你想使用一個沒有在這裡列出的版本，你可以手動更新原始程式碼。(原始程式碼的位置會在PHP構建的這一步中顯示出來。)', '', '從核取方塊中選擇', '');

$_tipsdb['adminEmails'] = new DAttrHelp("管理員電子郵箱", '指定伺服器管理員的電子郵箱位址。 如果設置了電子郵箱位址，管理員將收到重要事件的電子郵件通知（例如， LiteSpeed服務因崩潰而自動重啟或者授權即將過期）。', '電子郵件提醒功能只有在伺服器有活動的MX伺服器（如postfix、exim或sendmail）的情況下才會生效。', 'Comma delimited list of email address.', '');

$_tipsdb['adminUser'] = new DAttrHelp("網路系統管理員用戶", 'Change the username and password for the WebAdmin Console.  The old password must be entered and verified in order to save changes.', '', '', '');

$_tipsdb['allowBrowse'] = new DAttrHelp("存取權限", '指定是否可以訪問此context 。 設置為否以拒絕訪問。 您可以使用此功能來防止訪問指定目錄。 您可以在更新此context內容或此目錄中有特殊資料時使用它。', '', '從單選框選擇', '');

$_tipsdb['allowQuic'] = new DAttrHelp("打開HTTP3/QUIC (UDP) 埠", '允許對映射到該監聽器的虛擬主機使用HTTP3/QUIC網路通訊協定. 為了使此設置生效，還必須在伺服器級別將&quot;啟用HTTP3/QUIC&quot;設置為是。 預設值為是。', '當此設置設置為是時，仍可以通過&quot;Enable HTTP3/QUIC&quot;設置在虛擬主機級別禁用HTTP3/QUIC。', '', '');

$_tipsdb['allowSetUID'] = new DAttrHelp("允許設置UID", '指定CGI腳本是否允許設置UID。如果允許，並且為CGI腳本啟用了設置UID，那麼無論CGI腳本是代表哪個使用者啟動的，CGI進程的使用者ID都將切換為CGI腳本所有者的用戶ID。<br/>預設值是 &quot;關&quot', '[安全建議] 盡可能不要允許CGI腳本設置UID,因為這存在著安全風險', '從單選框選擇', '');

$_tipsdb['allowSymbolLink'] = new DAttrHelp("跟隨符號連結", '指定在這個虛擬主機內是否要跟隨符號連結。 If Owner Match選項啟用後，只有在連結和目標屬主一致時才跟蹤符號連結。 此設置將覆蓋默認的伺服器級設置。', '[性能和安全性建議] 為了更好的安全性，請禁用此功能。為了獲得更好的性能，啟用它。', '從列表中選擇', '');

$_tipsdb['antiddos_blocked_ip'] = new DAttrHelp("Anti-DDoS Blocked IP", 'A comma-separated list of IP addresses blocked by Anti-DDoS protection, each ending with a semi-colon and reason code indicating why the IP address was blocked.<br/><br/>Potential Reason Codes: <ul>   <li>A: BOT_UNKNOWN</li>   <li>B: BOT_OVER_SOFT</li>   <li>C: BOT_OVER_HARD</li>   <li>D: BOT_TOO_MANY_BAD_REQ</li>   <li>E: BOT_CAPTCHA</li>   <li>F: BOT_FLOOD</li>   <li>G: BOT_REWRITE_RULE</li>   <li>H: BOT_TOO_MANY_BAD_STATUS</li>   <li>I: BOT_BRUTE_FORCE</li> </ul><br/><br/>The full list of blocked IPs is also available in the Real-Time Stats report file set in &quot;統計輸出目錄&quot;.', '', '&lt;blocked_ip_address&gt;;&lt;reason_code&gt;', '1.0.100.50;E, 1.0.100.60;D, 1.0.100.70;F');

$_tipsdb['appServerContext'] = new DAttrHelp("App Server Context", 'An App Server Context provides an easy way to configure a Ruby Rack/Rails, WSGI, or Node.js application. To add a an application through an App Server Context, only mounting the URL and the application&#039;s root directory is required. There is no need to go through all the trouble to define an external application, add a 404 handler, and rewrite rules, etc.', '', '', '');

$_tipsdb['appType'] = new DAttrHelp("應用類型", '用於此context的應用程式類型。 支持Rack/Rails, WSGI, 和 Node.js。', '', '', '');

$_tipsdb['appserverEnv'] = new DAttrHelp("運行模式", '指定Rack/Rails的運行模式:&quot;發展&quot;,  &quot;生產&quot;或者是&quot;預發佈&quot;. 默認為 &quot;生產&quot;.', '', '從列表中選擇', '');

$_tipsdb['as_location'] = new DAttrHelp("Location", '指定此context在檔案系統中的對應位置。<br/><br/>Default value: $DOC_ROOT + &quot;URI&quot;', '', 'It can be an absolute path or path relative to $SERVER_ROOT, $VH_ROOT, or $DOC_ROOT. $DOC_ROOT is the default relative path, and can be omitted.<br/><br/>If the &quot;URI&quot; is a regular expression, then the matched sub-string can be used to form the &quot;Root&quot; string. The matched sub-string can be referenced with the values &quot;$1&quot; - &quot;$9&quot;. &quot;$0&quot; and &quot;&&quot; can be used to reference the whole matched string. Additionally, a query string can be set by appending a &quot;?&quot; followed by the query string. Be careful. &quot;&&quot; should be escaped as &quot;\&&quot; in the query string.', 'A plain URI like /examples/ with &quot;位置&quot; set to /home/john/web_examples will map the request &quot;/examples/foo/bar.html&quot; to file &quot;/home/john/web_examples/foo/bar.html&quot;.<br/>To simulate Apache&#039;s mod_userdir, set URI to exp: ^/~([A-Za-z0-9]+)(.*), set &quot;位置&quot; to /home/$1/public_html$2. With these settings, a request of URI /~john/foo/bar.html will map to file /home/john/public_html/foo/bar.html.');

$_tipsdb['as_startupfile'] = new DAttrHelp("開機檔案", '用於啟動應用程式的檔,路徑應相對于應用程式根目錄。<br/><br/>默認的開機檔案包括Rack/Rails的&#039;config.ru&#039;, WSGI的&#039;wsgi.py&#039;和&#039;passenger_wsgi.py&#039;, NodeJS的&#039;app.js&#039;.', '', 'Path relative to application root directory', '');

$_tipsdb['authName'] = new DAttrHelp("認證名稱", '為當前context下的realm認證指定一個替代的名稱。 如果沒有指定，原realm名稱將被使用。 認證名稱將顯示在流覽器登陸快顯視窗。', '', '', '');

$_tipsdb['autoFix503'] = new DAttrHelp("自動修復503錯誤", '指定是否嘗試通過平滑重啟LiteSpeed修復“503 服務不可用”錯誤。“503”錯誤通常是由 發生故障的外部應用程式引起的，Web伺服器重新啟動往往可以臨時修復 錯誤。如果啟用，當30秒內出現超過30次“503”錯誤時，伺服器將自動 重新啟動。此功能是默認啟用的。', '', '從單選框選擇', '');

$_tipsdb['autoIndex'] = new DAttrHelp("自動索引", '在目錄中，當&quot;索引檔&quot;中所列的索引檔不可用時，指定運行時是否即時生成目錄索引。<br/>此選項可以在虛擬主機級別和context級別中設置，並可以順著目錄樹繼承，直到被覆蓋。 您可以自訂生成的索引頁面。請訪問線上百科瞭解如何操作。', '[安全建議] 建議關閉自動索引，從而盡可能防止洩露機密資料。', '從單選框選擇', '');

$_tipsdb['autoIndexURI'] = new DAttrHelp("自動索引URI", '在目錄中，當&quot;索引檔&quot;中所列出的索引檔（index）不可用時，指定用來生成索引頁面的URI。 LiteSpeed Web伺服器使用一個外部腳本來生成索引頁面，從而為定制提供最大的靈活性。 預設的腳本生成一個類似於Apache的索引頁面。 定制生成的索引頁，請訪問線上百科。 被索引的目錄通過一個環境變數 &quot;LS_AI_PATH&quot;來傳遞給腳本。', '', 'URI', '');

$_tipsdb['autoLoadHtaccess'] = new DAttrHelp("自動載入.htaccess", '如果使用<b>rewritefile</ b>指令的目錄的HttpContext不存在，則在初次訪問該目錄時自動載入.htaccess檔中包含的重寫規則。 最初載入後，必須執行正常重啟才能使對該.htaccess檔的修改生效。<br/><br/>虛擬主機級別設置將覆蓋伺服器級別設置。 預設值：<br/><br/><b>Server-level:</b> No<br/><br/><b>VH-Level:</b> Inherit Server-level setting', '', '從單選框選擇', '');

$_tipsdb['autoStart'] = new DAttrHelp("開機自啟", '指定是否要Web伺服器自動啟動應用程式。只有運行在同一台機器上的FastCGI和LSAPI應用程式才能自動啟動。 &quot;地址&quot;中的IP必須是本地IP. 通過LiteSpeed CGI守護進程而不是主要伺服器進程啟動,有助於減少系統開銷。<br/><br/>Default value: Yes (Through CGI Daemon)', '', '從列表中選擇', '');

$_tipsdb['backlog'] = new DAttrHelp("Back Log", 'Specifies the backlog of the listening socket.  Required if &quot;開機自啟&quot; is enabled.', '', '整數', '');

$_tipsdb['banPeriod'] = new DAttrHelp("禁止期（秒）", '指定在&quot;寬限期（秒）&quot;之後，如果連接數仍然高於 &quot;連接軟限制&quot;，來自該IP的新連接將被拒絕多長時間。如果IP 經常被遮罩，我們建議您延長禁止期以更強硬地懲罰濫用.', '', '整數', '');

$_tipsdb['binPath'] = new DAttrHelp("二進位檔案路徑", 'App Server的二進位檔案的位置。', '', '', '');

$_tipsdb['blockBadReq'] = new DAttrHelp("封鎖壞請求", '封鎖持續發送壞HTTP請求的IP&quot;禁止期（秒）&quot;所設置的時長。默認為{VAL}Yes。 這有助於封鎖反復發送垃圾請求的僵屍網路攻擊。', '', '從單選框選擇', '');

$_tipsdb['brStaticCompressLevel'] = new DAttrHelp("Brotli 壓縮等級 (靜態檔)", '指定Brotli壓縮靜態內容的級別。 範圍從1 (最低)到9 (最高)。<br/><br/>當設置為 0時, brotli壓縮將在全域禁用。<br/><br/>Default value: 5', '[性能建議] 壓縮可以用來節省網路頻寬。  基於文本的回應（例如html，css和javascript檔）效果最好，平均可以將其壓縮為原始大小的一半。', 'Number between 0 and 11.', '');

$_tipsdb['bubbleWrap'] = new DAttrHelp("Bubblewrap Container", 'Set to On if you wish to start CGI processes (including PHP programs) in a bubblewrap sandbox. See <a href="   https://wiki.archlinux.org/title/Bubblewrap " target="_blank" rel="noopener noreferrer">   https://wiki.archlinux.org/title/Bubblewrap </a> for details on using bubblewrap. Bubblewrap must be installed on your system prior to using this setting.<br/><br/>This setting cannot be turned on at the Virtual Host level if set to &quot;Disabled&quot; at the Server level.<br/><br/>Default values:<br/><b>Server level:</b> Disabled<br/><b>VH level:</b> Inherit Server level setting', '', '從列表中選擇', '');

$_tipsdb['bubbleWrapCmd'] = new DAttrHelp("Bubblewrap Command", 'bubblewraps使用的完整的命令, 包括bubblewrap程式本身。 有關配置此命令的更多資訊，請參見： <a href="   https://openlitespeed.org/kb/bubblewrap-in-openlitespeed/ " target="_blank" rel="noopener noreferrer">   https://openlitespeed.org/kb/bubblewrap-in-openlitespeed/ </a>. 如果未指定，將使用下面列出的默認命令。<br/><br/>預設值: /bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --dir /tmp --proc /proc --symlink../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /home/$USER /home/$USER --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock  --unshare-all --share-net --die-with-parent --dir /run/user/$UID ‘$PASSWD 65534’ ‘$GROUP 65534’', '', '', '');

$_tipsdb['certChain'] = new DAttrHelp("憑證連結", '指定證書是否為憑證連結。 存儲憑證連結的檔必須為PEM格式， 並且證書必須按照從最低級別（實際的用戶端或伺服器憑證）到最高級別（Root）CA的連結順序。', '', '從單選框選擇', '');

$_tipsdb['certFile'] = new DAttrHelp("證書文件", 'SSL證書文件的檔案名。', '[安全建議] 私密金鑰檔應放在一個安全的目錄中，該目錄應 允許對運行伺服器的用戶具有唯讀的存取權限。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['cgiContext'] = new DAttrHelp("CGI Context", 'A CGI context defines scripts in a particular directory as CGI scripts. This directory can be inside or outside of the document root. When a file under this directory is requested, the server will always try to execute it as a CGI script, no matter if it&#039;s executable or not. In this way, file content under a CGI Context is always protected and cannot be read as static content. It is recommended that you put all your CGI scripts in a directory and set up a CGI Context to access them.', '', '', '');

$_tipsdb['cgiResource'] = new DAttrHelp("CGI Settings", 'The following settings control CGI processes. Memory and process limits also serve as the default for other external applications if limits have not been set explicitly for those applications.', '', '', '');

$_tipsdb['cgi_path'] = new DAttrHelp("路徑", '指定CGI腳本的位置.', '', 'The path can be a directory that contains a group of CGI scripts, like $VH_ROOT/myapp/cgi-bin/. In this case, the context &quot;URI&quot; must end with &quot;/&quot;, like /app1/cgi/. The Path can also specify only one CGI script, like $VH_ROOT/myapp/myscript.pl. This script should have the corresponding &quot;URI&quot; /myapp/myscript.pl.', '');

$_tipsdb['cgidSock'] = new DAttrHelp("CGI守護進程通訊端", '用於與CGI守護進程溝通的唯一通訊端位址。為了 最佳性能和安全性，LiteSpeed伺服器使用一個獨立的CGI 守護進程來產生CGI腳本的子進程。 默認通訊端是uds://$SERVER_ROOT/admin/lscgid/.cgid.sock。 如果你需要放置在另一個位置，在這裡指定一個Unix域通訊端。', '', 'UDS://path', 'UDS://tmp/lshttpd/cgid.sock');

$_tipsdb['cgroups'] = new DAttrHelp("cgroups", '如果當前作業系統支援(目前支援RedHat/Centos Linux v7.5+和Ubuntu 18.04+)，則將cgroup設置應用於此CGI進程。 。 當前執行的用戶將用於確定要應用的cgroup配置。<br/>在伺服器級別將此設置為Disabled將在伺服器範圍內禁用此設置。 在其他情況下，可以在虛擬主機級別覆蓋伺服器級別的設置。<br/><br/>預設值:<br/><b>伺服器級別:</b> Off<br/><b>虛擬主機級別:</b> 繼承伺服器級別設置', '', '從列表中選擇', '');

$_tipsdb['checkSymbolLink'] = new DAttrHelp("檢查符號連結", '指定在啟用了&quot;跟隨符號連結&quot;時，是否檢查符號連結在不在&quot;拒絕訪問的目錄&quot;中。 如果啟用檢查，將檢查網址對應的真正的資源路徑是否在配置的禁止訪問目錄中。 如果在禁止訪問目錄中，訪問將被禁止。', '[性能和安全] 要獲得最佳的安全性，啟用該選項。要獲得最佳性能，禁用該選項。', '從單選框選擇', '');

$_tipsdb['ciphers'] = new DAttrHelp("密碼套件", 'Specifies the cipher suite to be used when negotiating the SSL handshake. LSWS supports cipher suites implemented in SSL v3.0, TLS v1.0, TLS v1.2, and TLS v1.3.', ' We recommend leaving this field blank to use our default cipher which follows SSL cipher best practices.', 'Colon-separated string of cipher specifications.', 'ECDHE-RSA-AES128-SHA256:RC4:HIGH:!MD5:!aNULL:!EDH');

$_tipsdb['clientVerify'] = new DAttrHelp("Client Verification", ' Specifies the type of client certifcate authentication. Available types are: <ul> <li><b>None:</b> No client certificate is required.</li> <li><b>Optional:</b> Client certificate is optional.</li> <li><b>Require:</b> The client must has valid certificate.</li> <li><b>Optional_no_ca:</b> Same as optional.</li> </ul> The default is &quot;None&quot;.', '&quot;None&quot; or &quot;Require&quot; are recommended.', '從列表中選擇', '');

$_tipsdb['compilerflags'] = new DAttrHelp("編譯器標誌", '添加其他編譯器標誌，例如優化的編譯器選項。', '', '支援的標誌有CFLAGS, CXXFLAGS, CPPFLAGS, LDFLAGS.使用空格分隔不同的標誌。 對於標誌值，請使用單引號（而不是雙引號）', 'CFLAGS=&#039;-O3 -msse2 -msse3 -msse4.1 -msse4.2 -msse4 -mavx&#039;');

$_tipsdb['compressibleTypes'] = new DAttrHelp("壓縮類型", '指定允許壓縮哪些MIME類型。 保留此設置不變，或輸入default以使用伺服器內置的默認列表，該列表已經涵蓋了大多數mime類型。<br/>Default value: text/*,application/x-javascript,application/javascript,application/xml,image/svg+xml,application/rss+xml, application/json,application/vnd.ms-fontobject,application/x-font,application/x-font-opentype, application/x-font-truetype,application/x-font-ttf,font/eot,font/opentype,font/otf,font/ttf,image/x-icon, image/vnd.microsoft.icon,application/xhtml+xml', '[性能建議] 只允許特定類型進行GZIP壓縮。 二進位檔案如gif/png/jpeg圖片檔及flash檔無法從壓縮中獲益。', 'MIME type list separated by commas. Wild card &quot;*&quot; and negate sign &quot;!&quot; are allowed, such as text/*, !text/js.', 'If you want to compress text/* but not text/css, you can have a rule like text/*, !text/css. &quot;!&quot; will exclude that MIME type.');

$_tipsdb['configFile'] = new DAttrHelp("設定檔", '指定虛擬主機的設定檔名稱。 設定檔必須位於$SERVER_ROOT/conf/vhosts/目錄下。', '推薦使用$SERVER_ROOT/conf/vhosts/$VH_NAME/vhconf.conf。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['configureparams'] = new DAttrHelp("配置參數", '為PHP構建配置參數。當您按一下下一步時，Apache特定的參數和“--prefix”值將被自動刪除，並且“--with-litespeed”將自動追加。（首碼可以在上面的欄位中設置）通過這種方式，您可以簡單地複製並粘貼現有PHP的phpinfo()輸出的配置參數。', '', '空格分隔多個選項(帶或不帶雙引號）', '');

$_tipsdb['connTimeout'] = new DAttrHelp("連接逾時時間(secs)", '指定一個請求允許的最大連接閒置時間。 如果在這段時間內連接一直處於空閒狀態(即沒有I/O活動），則它將被關閉。', '[安全建議] 將值設置得盡可能低，在可能的拒絕服務攻擊中，這可以幫助釋放無效連接所佔用的連接數。', '整數', '');

$_tipsdb['consoleSessionTimeout'] = new DAttrHelp("會話超時時長（秒）", '自訂WebAdmin控制台會話超時時間。 如果未設置任何值，則預設值60秒生效。', '[安全建議] 在生產環境中一般設置一個不超過300秒的合適值。', '整數', '');

$_tipsdb['cpuAffinity'] = new DAttrHelp("處理器親和性", 'CPU關聯將進程綁定到一個或多個CPU（核心）。 始終使用同一CPU對進程來說是有益的，因為這樣進程可以利用CPU緩存中剩餘的資料。 如果進程移至其他CPU，則不會使用CPU緩存，並且會產生不必要的開銷。<br/><br/>CPU Affinity設置控制一個伺服器進程將與多少個CPU（核心）相關聯。 最小值為0，它將禁用此功能。 最大值是伺服器具有的核心數。 通常，1是最佳設置，因為它會最嚴格地使用CPU親和力，從而最大程度地利用CPU緩存。<br/><br/>Default value: 0', '', 'Integer value from 0 to 64. (0 will disable this feature)', '');

$_tipsdb['crlFile'] = new DAttrHelp("用戶端吊銷文件", ' Specifies the file containing PEM-encoded CA CRL files enumerating revoked client certificates. This can be used as an alternative or in addition to &quot;用戶端吊銷路徑&quot;.', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['crlPath'] = new DAttrHelp("用戶端吊銷路徑", ' Specifies the directory containing PEM-encoded CA CRL files for revoked client certificates. The files in this directory have to be PEM-encoded. These files are accessed through hash filenames, hash-value.rN. Please refer to openSSL or Apache mod_ssl documentation regarding creating the hash filename.', '', 'path', '');

$_tipsdb['ctxType'] = new DAttrHelp("Context類型", 'The type of context created determines it&#039;s usage.<br><br><b>Static</b> context can be used to map a URI to a directory either outside document root or within it.<br> <b>Java Web App</b> context is used to automatically import a predefined Java Application in an AJPv13 compilant Java servlet engine.<br> <b>Servlet</b> context is used to import a specific servlet under a web application.<br> <b>Fast CGI</b> context is a mount point of Fast CGI application.<br> <b>LiteSpeed SAPI</b> context can be used to associate a URI with an LSAPI application.<br> <b>Proxy</b> context enables this virtual host to serve as a transparant reverse proxy server to an external web server or application server.<br> <b>CGI</b> context can be used to specify a directory only contains CGI scripts.<br> <b>Load Balancer</b> context can be used to assign a different cluster for that context.<br> <b>Redirect</b> context can set up an internal or external redirect URI.<br> <b>App Server</b> context is specifically used for Rack/Rails, WSGI, and Node.js applications.<br> <b>Module handler</b> context is a mount point of hander type modules.<br>', '', '', '');

$_tipsdb['defaultCharsetCustomized'] = new DAttrHelp("自訂默認字元集", '指定一個字元集當&quot;添加默認的字元集&quot;是On時使用。這是可選的。預設值是iso-8859-1。當&quot;添加默認的字元集&quot;是Off時本設置將不生效。', '', 'Name of a character set.', 'utf-8');

$_tipsdb['defaultType'] = new DAttrHelp("默認MIME類型", '定後，當MIME類型映射不能由文檔的尾碼確定或沒有尾碼時，將使用此類型。如果未指定，將使用預設值application/octet-stream。', '', 'MIME-type', '');

$_tipsdb['destinationuri'] = new DAttrHelp("目標URI", '指定重定向的目標位置。 如果被重定向的URI映射到另一個重定向URI時，將再次被重定向。', '', '這個URI可以是一個在同一個網站上以&quot;/&quot;開始的相對URI， 或者是一個指向其他網站以&quot;http(s): //&quot;開始的絕對URI。 如果&quot;URI&quot;包含規則運算式，目標位址可以匹配變數，如$1或$2。', '');

$_tipsdb['disableInitLogRotation'] = new DAttrHelp("禁用初始日誌輪換", '指定在啟動時是否啟用/禁用伺服器錯誤日誌檔的輪換。 使用值為“未設置”時，預設啟用初始日誌輪轉。', '', '從單選框選擇', '');

$_tipsdb['docRoot'] = new DAttrHelp("文檔根目錄", '指定此虛擬主機的文檔根目錄。 推薦使用$VH_ROOT/html。在context中，此目錄可以用$DOC_ROOT來引用。', '', '可以說絕對路徑,也可以是相對於$SERVER_ROOT或$VH_ROOT的相對路徑。', '');

$_tipsdb['domainName'] = new DAttrHelp("功能變數名稱", '指定映射功能變數名稱。功能變數名稱不區分大小寫,如果帶有&quot;www.&quot;, &quot;www.&quot;則會移除,允許使用萬用字元&quot;*&quot;和&quot;?&quot; &quot;?&quot;僅代表一個字元,&quot;*&quot;代表任意數量的字元, 不允許出現重複功能變數名稱', ' If a listener is dedicated to one virtual host, always use * for the domain name to avoid unnecessary checking. Domain names with wildcard characters  (other than the catchall domain) should be avoided whenever possible.', 'Comma-separated list.', 'www?.example.com<br/>&quot;*.mydomain.com&quot; will match all subdomains of mydomain.com.<br/>&quot;*&quot; by itself is the catchall domain and will match any unmatched domain names.');

$_tipsdb['dynReqPerSec'] = new DAttrHelp("動態請求/秒", '指定每秒可處理的來自單個IP的動態請求的數量（無論與該IP之間建立了多少個連接） 當達到此限制時，所有後來的請求將被延滯到下一秒。<br/><br/>靜態內容的請求限制與此限制無關。 可以在伺服器或虛擬主機級別設置每個用戶端請求的限制。 虛擬主機級別的設置將覆蓋伺服器級別的設置。', '[安全] 受信任的IP或子網不受影響。', '整數', '');

$_tipsdb['enableCoreDump'] = new DAttrHelp("啟用Core Dump", '指定當服務由root使用者啟動時是否啟用core dump。 對大多數現代的Unix系統，會更改使用者ID或組ID的進程出於安全考慮不被允許產生core檔。但是core dump檔對於排查故障非常有用。 這個選項只能在Linux Kernel 2.4或更高版本中可用。 Solaris用戶應當使用coreadm命令來控制這個功能。', '[安全建議] 僅在當你在伺服器日誌中看到沒有創建core檔時啟用。當產生core檔後立即關閉。Core文件產生後請提交bug報告。', '從單選框選擇', '');

$_tipsdb['enableDHE'] = new DAttrHelp("啟用DH金鑰交換", '允許使用Diffie-Hellman金鑰交換進行進一步的SSL加密。', '[安全建議] DH金鑰交換比僅使用RSA金鑰更安全。 ECDH和DH金鑰安全性相同。<br/><br/>[x性能] 啟用DH金鑰交換將增加CPU負載，並且比ECDH金鑰交換和RSA都慢。 如果可用，則首選ECDH金鑰交換。', '從單選框選擇', '');

$_tipsdb['enableDynGzipCompress'] = new DAttrHelp("啟用GZIP動態壓縮", '控制動態HTTP回應的GZIP壓縮。 &quot;啟用GZIP壓縮&quot;必須設置為Yes來開啟動態GZIP壓縮。<br/>Default value: Yes', '[性能建議] 壓縮動態回應將增加CPU和記憶體的使用，但可以節省網路頻寬。', '從單選框選擇', '');

$_tipsdb['enableECDHE'] = new DAttrHelp("啟用ECDH金鑰交換", '允許使用Diffie-Hellman金鑰交換進行進一步的SSL加密。', '[安全建議] ECDH金鑰交換比僅使用RSA金鑰更安全。 ECDH和DH金鑰交換安全性相同。<br/><br/>[性能] 啟用ECDH金鑰交換會增加CPU負載，並且比僅使用RSA金鑰要慢。', '從單選框選擇', '');

$_tipsdb['enableExpires'] = new DAttrHelp("啟用過期", '指定是否為靜態檔生成Expires頭。如果啟用，將根據 &quot;默認過期&quot;和&quot;按類型過期&quot;生成Expires頭。<br/><br/>這可以在伺服器，虛擬主機和Context級別設置。低級別的設置將 覆蓋高級別的設置。例如，Context級別的設置將覆蓋虛擬主機級別的設置， 虛擬主機級別的設置將覆蓋伺服器級別的設置。', '', '從單選框選擇', '');

$_tipsdb['enableGzipCompress'] = new DAttrHelp("啟用GZIP壓縮", '制靜態或動態HTTP回應的GZIP壓縮。<br/><br/>Default value: Yes', '[性能建議] 開啟該功能可以節省網路頻寬。 針對基於文本的回應如html、css和javascript檔最有效果，一般可以壓縮到原文件大小的一半大小。', '從單選框選擇', '');

$_tipsdb['enableIpGeo'] = new DAttrHelp("啟用IP地理定位", '指定是否啟用IP地理定位查找。 可以在伺服器級別，虛擬主機級別，或context級別設置。', '', '從單選框選擇', '');

$_tipsdb['enableLVE'] = new DAttrHelp("Cloud-Linux", '指定當CloudLinux存在時是否啟用CloudLinux的羽量級虛擬 環境（LVE）。您可以搭配使用Litespeed與LVE實現更好的資源管理。 欲瞭解更多資訊，請訪問 <a href="http://www.cloudlinux.com" target="_blank" rel="noopener noreferrer">http://www.cloudlinux.com</a>。', '', '從列表中選擇', '');

$_tipsdb['enableRecaptcha'] = new DAttrHelp("啟用reCAPTCHA", '必須先在伺服器級別將此設置設置為是,才能在當前級別啟用並使用reCAPTCHA保護功能。 <br/><br/>預設值:<br/><b>伺服器級別:</b> 是<br/><b>虛擬主機級別:</b> 繼承伺服器級別設置', '', '從單選框選擇', '');

$_tipsdb['enableRewrite'] = new DAttrHelp("啟用重寫", '指定是否啟用LiteSpeed的URL重寫. 可以在虛擬主機或context級別上自訂此選項， 並且沿目錄樹繼承該選項，直到被其他選項覆。', '', '從單選框選擇', '');

$_tipsdb['enableScript'] = new DAttrHelp("啟用腳本", '指定在這個虛擬主機中是否允許運行腳本（非靜態頁面）。 如果禁用，CGI, FastCGI, LSAPI, Servlet引擎 和其他指令碼語言都將在這個虛擬機器中不被允許使用。 因此如果你希望使用一個腳本處理常式，你需要啟用本項。', '', '從單選框選擇', '');

$_tipsdb['enableSpdy'] = new DAttrHelp("啟用 SPDY/HTTP2/HTTP3", '有選擇地啟用HTTP/3，HTTP/2和SPDY HTTP網路通訊協定。<br/><br/>如果要禁用SPDY，HTTP/2和HTTP3，請選中“無”，並取消選中所有其他框。<br/>Default value: All enabled', '可以在偵聽器和虛擬主機級別上設置此設置。', '從核取方塊中選擇', '');

$_tipsdb['enableStapling'] = new DAttrHelp("啟用 OCSP 裝訂", '確定是否啟用OCSP裝訂，這是一種更有效的驗證公開金鑰證書的方式。', '', '從單選框選擇', '');

$_tipsdb['enableh2c'] = new DAttrHelp("啟用 明文TCP上的HTTP/2", '指定是否通過非加密TCP連接啟用HTTP/2。 默認設置為禁用。', '', '從單選框選擇', '');

$_tipsdb['env'] = new DAttrHelp("環境", '為外部應用程式指定額外的環境變數。', '', 'Key=value. Multiple variables can be separated by &quot;ENTER&quot;', '');

$_tipsdb['errCode'] = new DAttrHelp("錯誤代碼", '指定錯誤頁面的HTTP狀態碼。 只有特定的HTTP狀態碼才可以自訂錯誤頁面。', '', '從列表中選擇', '');

$_tipsdb['errPage'] = new DAttrHelp("自訂錯誤頁面", '當伺服器在處理請求時遇到問題， 伺服器將向網路用戶端端返回錯誤代碼和html頁面作為錯誤消息。 錯誤代碼在HTTP協定中定義（請參閱RFC 2616）。 LiteSpeed Web伺服器為每個錯誤代碼都有一個內置的預設錯誤頁面，但是也可以為每個錯誤代碼配置一個自訂頁面。 甚至可以進一步自訂這些錯誤頁面，以使其對於每個虛擬主機都是唯獨特的。', '', '', '');

$_tipsdb['errURL'] = new DAttrHelp("URL", '指定自訂錯誤頁的URL。 當返回相應HTTP狀態時伺服器會將請求轉發到該URL。 如果此URL指向一個不存在的位址，自帶的錯誤頁面將被使用。 該URL可以是一個靜態檔，動態生成的頁面，或者其他網站的頁面 （網址開頭為&quot;http(s): //&quot;）。 當轉發到在其他網站上的頁面時，用戶端會收到一個重定向狀態碼 來替代原本的狀態碼。', '', 'URL', '');

$_tipsdb['expWSAddress'] = new DAttrHelp("位址", '外部網路服務器使用的HTTP,HTTPS或Unix域通訊端(UDS)地址。', '[安全建議] 如果代理到同一台機器上運行的另一台Web伺服器，請將IP位址設置為localhost或127.0.0.1，這樣從其他機器上就無法訪問外部應用程式。', 'IPv4 或 IPV6 地址(:埠),UDS://path或unix:path 如果外部Web伺服器使用HTTPS，則在前面加上 &quot;https://&quot;。  如果外部Web伺服器使用標準埠80或443，則埠是可選的。', '192.168.0.10<br/>127.0.0.1:5434<br/>https://10.0.8.9<br/>https://127.0.0.1:5438<br/>UDS://tmp/lshttpd/php.sock<br/>unix:/tmp/lshttpd/php.sock');

$_tipsdb['expiresByType'] = new DAttrHelp("按類型過期", '為各個MIME類型分別指定Expires頭設置。', '', '逗號分隔的“MIME-類型=A|M秒數”的列表。 檔將在基準時間（A|M）加指定秒數的時間後失效。<br/><br/>“A”代表基準時間為用戶端的存取時間，“M”代表檔的最後修改時間。 MIME-類型可使用萬用字元“*”，如image/*。', '');

$_tipsdb['expiresDefault'] = new DAttrHelp("默認過期", '指定生成Expires頭的默認設置。該設置在&quot;啟用過期&quot; 設為“啟用”時有效。它可以被&quot;按類型過期&quot;覆蓋。 除非必要，否則不要在伺服器或虛擬主機級別設置該預設值。 因為它會為所有網頁生成Expires頭。大多數時候，應該是 為不常變動的某些目錄在Context級別設置。如果沒有默認設置，&quot;按類型過期&quot;中未指定的類型不會生成Expires頭。', '', 'A|Mseconds<br/>檔將在基準時間（A|M）加指定秒數的時間後失效。 “A”代表基準時間為用戶端的存取時間，“M”代表檔的最後修改時間。', '');

$_tipsdb['expuri'] = new DAttrHelp("URI", 'Specifies the URI for this context.', '', '指定此context下的URI。這個URI應該以&quot;/&quot;開始。 如果一個URI以&quot;/&quot;結束，那麼該context將包含這個URI下的所有下級URI。如果context類型映射到系統目錄上,則必須添加結尾的&quot;/&quot;', '');

$_tipsdb['extAppAddress'] = new DAttrHelp("位址", '外部應用程式使用的唯一通訊端位址。 支持IPv4/IPv6通訊端和Unix域通訊端（UDS）。 IPv4/IPv6通訊端可用於網路通信。 只有當外部應用程式與伺服器在同一台機器上時，才能使用UDS。', '[安全建議] 如果外部應用程式在同一台機器上運行，則首選UDS。如果必須使用IPv4|IPV6, 將IP位址設置為localhost或127.0.0.1，這樣外部應用就無法從其他機器上訪問。 [性能建議] Unix域通訊端一般比IPv4通訊端擁有更高的性能。', 'IPv4 或 IPV6 address:port 或者 UDS://path', '127.0.0.1:5434<br/>UDS://tmp/lshttpd/php.sock.');

$_tipsdb['extAppName'] = new DAttrHelp("名稱", '此外部應用程式的唯一名稱。 在配置的其他部分中使用該名稱時，將使用該名稱進行引用。', '', '', '');

$_tipsdb['extAppPath'] = new DAttrHelp("命令", '指定包含外部應用程式的執行參數在內的完整命令列。  需要&quot;開機自啟&quot;的值為enable.如果參數中包含空格或定位字元,應使用雙引號或單引號將其引起。', '', 'Full path to the executable with optional parameters.', '');

$_tipsdb['extAppPriority'] = new DAttrHelp("優先順序", '指定外部應用的優先順序,值的範圍是-20到20.  一個小的數字意味著高優先順序.外部應用進程的優先順序不能比Web伺服器高. 如果該優先順序設置一個比伺服器的優先順序小的數字，則將使用伺服器的優先順序。', '', 'int', '');

$_tipsdb['extAppType'] = new DAttrHelp("類型", '指定外部應用程式的類型。 應用程式類型根據它們提供的服務或與伺服器通信所使用的協定而有所不同。 從中選擇 <ul>   <li>FastCGI: a FastCGI application with a Responder role.</li>   <li>FastCGI Authorizer: a FastCGI application with an Authorizer role</li>   <li>Servlet Engine: a servlet engine with an AJPv13 connector, such as Tomcat.</li>   <li>Web Server: a web server or application server that supports HTTP protocol.</li>   <li>LiteSpeed SAPI App: an application that communicates with the web server using LSAPI protocol.</li>   <li>Load Balancer: a virtual application that can balance load among worker applications.</li>   <li>Piped Logger: an application that can process access log entries received on its STDIN stream.</li> </ul>', 'Most applications will use either LSAPI or FastCGI protocol. LSAPI supports PHP, Ruby, and Python. Perl can be used with FastCGI. (PHP, Ruby, and Python can also be set up to run using FastCGI, but they run faster using LSAPI.) Java uses servlet engines.', '從列表中選擇', '');

$_tipsdb['extAuthorizer'] = new DAttrHelp("Authorizer", '指定可用于生成授權/未授權 decisions的外部應用程式。 目前,僅FastCGI授權器可用。 有關FastCGI授權者角色的更多詳細資訊， 請訪問<a href="https://fastcgi-archives.github.io/" target="_blank" rel="noopener noreferrer">https://fastcgi-archives.github.io/</a>。', '', '從列表中選擇', '');

$_tipsdb['extGroup'] = new DAttrHelp("以特定組運行", '外部應用程式將作為此指定的組名運行。如果未設置，將繼承虛擬主機級別的設置。<br/><br/>Default value: Not Set', '', 'Valid group name.', '');

$_tipsdb['extMaxIdleTime'] = new DAttrHelp("最大閒置時間", '指定伺服器停止外部應用之前的最大閒置時間，以釋放空閒資源。 當設置為&quot;-1&quot;時，伺服器將不會停止外部應用，除非在ProcessGroup模式下運行, 而在ProcessGroup模式下,閒置的外部應用將在30秒後停止.<br/><br/>預設值為: -1{/val}', ' This feature is especially useful in the mass hosting environment where, in order to prevent files owned by one virtual host from being accessed by the external application scripts of another virtual host, many different applications are run at the same time in SetUID mode. Set this value low to prevent these external applications from idling unnecessarily.', 'Integer number', '');

$_tipsdb['extUmask'] = new DAttrHelp("umask", 'Sets default umask for this external application&#039;s processes. See  man 2 umask  for details. The default value taken from the server-level &quot;umask&quot; setting.', '', 'value valid range [000]-[777].', '');

$_tipsdb['extUser'] = new DAttrHelp("Run As User", 'The external application will run as this specified user name. If not set, Virtual Host level settings will be inherited.<br/><br/>Default value: Not Set', '', 'Valid username.', '');

$_tipsdb['extWorkers'] = new DAttrHelp("Workers", 'List of worker groups previously defined in the external load balancer.', '', 'A comma-separated list in the form ExternalAppType::ExternalAppName', 'fcgi::localPHP, proxy::backend1');

$_tipsdb['externalredirect'] = new DAttrHelp("外部重定向", '指定此重定向是否為外部重定向。 對於外部重定向,可以指定&quot;狀態碼&quot;，並且&quot;目標URI&quot;可以以“/”或“ http(s)://”開頭。 對於內部重定向, &quot;目標URI&quot;必須以&quot;/&quot;開始', '', '', '');

$_tipsdb['extraHeaders'] = new DAttrHelp("標頭控制", '指定要添加的附加回應/請求頭。可以添加每行一個來添加多個頭指令。&quot;NONE &quot;可以用來禁止父頭繼承。如果沒有提供，則假定為 &quot;Header&quot;。', ' 語法和用法類似於 <a href="https://httpd.apache.org/docs/2.2/mod/mod_headers.html#header" target="_blank" rel="noopener noreferrer">Apache&#039;s mod_headers directives</a><br/><br/> The &#039;Header&#039; directive is is optional and can be excluded or left in when copying rules from elsewhere without issue.', '[Header]|RequestHeader [condition] set|append|merge|add|unset header [value] [early|env=[!]variable]', 'set Cache-control no-cache<br/>append Cache-control no-store<br/>Header set My-header cust_header_val<br/>RequestHeader set My-req-header cust_req_header_val');

$_tipsdb['extrapathenv'] = new DAttrHelp("額外的PATH環境變數", '將其他用於構建腳本的路徑附加到當前PATH環境變數中。', '', '多個路徑以“:”分隔', '');

$_tipsdb['fcgiContext'] = new DAttrHelp("FastCGI Context", 'FastCGI applications cannot be used directly. A FastCGI application must be either configured as a script handler or mapped to a URL through FastCGI context. A FastCGI context will associate a URI with a FastCGI application.', '', '', '');

$_tipsdb['fcgiapp'] = new DAttrHelp("FastCGI 應用程式", '指定FastCGI應用程式的名稱。 必須在伺服器或虛擬主機級別的&quot;外部應用&quot;中定義此應用程式。', '', '從列表中選擇', '');

$_tipsdb['fileETag'] = new DAttrHelp("檔ETag", '指定是否使用一個檔的索引節點、最後修改時間和大小屬性 生成靜態檔的ETag HTTP回應頭。 所有這三個屬性是預設啟用的。 如果您打算使用鏡像伺服器服務相同的檔，您應該不勾選索引節點。 否則，為同一個檔生成的ETag在不同的伺服器上是不同的。', '', '從核取方塊中選擇', '');

$_tipsdb['fileUpload'] = new DAttrHelp("檔上傳", '通過使用請求正文解析器將檔解析到伺服器本地目錄中來上傳檔時，提供了附加的安全功能。協力廠商模組可以輕鬆地在檔本地目錄中掃描檔是否存在危害。 當啟用&quot;通過檔路徑傳遞上傳資料&quot;或模組在LSI_HKPT_HTTP_BEGIN級別調用LSIAPI的set_parse_req_body時，將使用請求正文解析器。 原始程式碼包中提供的API示例。', '', '', '');

$_tipsdb['followSymbolLink'] = new DAttrHelp("跟隨符號連結", '指定服務靜態檔時跟蹤符號連結的伺服器級別預設設置。<br/><br/>選項有Yes、If Owner Match和No。<br/><br/>Yes設置伺服器始終跟蹤符號連結。 If Owner Match設置伺服器只有在連結和目標屬主一致時才跟蹤符號連結。 No表示伺服器永遠不會跟蹤符號連結。 該設置可以在虛擬主機配置中覆蓋，但不能通過.htaccess文件覆蓋。', '[性能和安全建議] 要獲得最佳安全性，選擇{VAL}No或If Owner Match。 要獲得最佳性能，選擇{VAL}Yes。', '從列表中選擇', '');

$_tipsdb['forceGID'] = new DAttrHelp("強制GID", '指定一組ID，以用於所有在suEXEC模式下啟動的外部應用程式。 當設置為非零值時，所有suEXEC的外部應用程式（CGI、FastCGI、 LSAPI）都將使用該組ID。這可以用來防止外部應用程式訪問其他用 戶擁有的文件。<br/><br/>例如，在共用主機環境，LiteSpeed以“www-data”用戶、“www-data”組 身份運行。每個檔根目錄是由使用者帳戶所有，屬組為“www-data”，許可權 為0750。如果強制GID被設置為“nogroup”（或“www-data”之外的任何一 個組），所有suEXEC外部應用程式都將以特定使用者身份運行，但屬組為 “nogroup”。這些外部應用程式的進程依然能夠訪問屬於相應用戶的檔（ 因為他們的用戶ID），但沒有組許可權訪問其他人的檔。另一方面，伺服器 仍然可以服務在任何使用者檔根目錄下的檔（因為它的組ID）。', '[安全建議] 設置足夠高的值以排除所有系統使用者所在的組。', '整數', '');

$_tipsdb['forceStrictOwnership'] = new DAttrHelp("強制嚴格屬主檢查", '指定是否執行嚴格的檔所有權檢查。 如果啟用，Web伺服器將檢查正在服務的檔的所有者與虛擬主機的所有者是否相同。 如果不同，將返回403拒絕訪問錯誤。 該功能默認是關閉的。', '[安全建議] 對於共用主機，啟用此檢查以得到更好的安全性。', '從單選框選擇', '');

$_tipsdb['forceType'] = new DAttrHelp("強制MIME類型", '指定後，無論檔尾碼如何， 此context下的所有檔都將用作具有指定MIME類型的靜態檔。  設置為NONE時，將禁用強制MIME類型。', '', 'MIME type or NONE.', '');

$_tipsdb['gdb_groupname'] = new DAttrHelp("組名", '組名，僅包含字母和數位（無特殊字元）。', '', 'string', '');

$_tipsdb['gdb_users'] = new DAttrHelp("用戶", '屬於該組的用戶,用空格分隔。', '', '', '');

$_tipsdb['generalContext'] = new DAttrHelp("靜態Context", 'Context settings are used to specify special settings for files in a certain location. These settings can be used to bring in files outside of the document root (like Apache&#039;s Alias or AliasMatch directives), to protect a particular directory using authorization realms, or to block or restrict access to a particular directory within the document root.', '', '', '');

$_tipsdb['geoipDBFile'] = new DAttrHelp("資料庫檔路徑", '指定MaxMind GeoIP資料庫路徑。', '', '絕對路徑', '/usr/local/share/GeoIP/GeoLite2-Country.mmdb');

$_tipsdb['geoipDBName'] = new DAttrHelp("資料庫名稱", 'MaxMind GeoIP資料庫名稱。從GeoIP2起，此設置是必需的。<br/><br/>從GeoIP升級到GeoIP2時，為此設置“ COUNTRY_DB”，“CITY_DB”或“ ASN_DB”的值會自動使用一些與GeoIP相容的條目（在下面的“資料庫名稱”值中列出）填充PHP的$ _SERVER變數，以簡化此操作的過渡。<br/><b>CITY_DB:</b> &#039;GEOIP_COUNTRY_CODE&#039;, &#039;GEOIP_COUNTRY_NAME&#039;, &#039;GEOIP_CONTINENT_CODE&#039;, &#039;GEOIP_COUNTRY_CONTINENT&#039;, &#039;GEOIP_DMA_CODE&#039;, &#039;GEOIP_METRO_CODE&#039;, &#039;GEOIP_LATITUDE&#039;, &#039;GEOIP_LONGITUDE&#039;, &#039;GEOIP_POSTAL_CODE&#039;, and &#039;GEOIP_CITY&#039;.<br/><b>COUNTRY_DB:</b> &#039;GEOIP_COUNTRY_CODE&#039;, &#039;GEOIP_COUNTRY_NAME&#039;, &#039;GEOIP_CONTINENT_CODE&#039;, and &#039;GEOIP_COUNTRY_CONTINENT&#039;.<br/><b>ASN_DB:</b> &#039;GEOIP_ORGANIZATION&#039; and &#039;GEOIP_ISP&#039;.', '', '', 'COUNTRY_DB');

$_tipsdb['geolocationDB'] = new DAttrHelp("IP地理定位資料庫", '多個MaxMind地理定位資料庫可以在這裡指定。MaxMind有以下資料庫類型: 國家，地區，城市，組織，ISP和NETSPEED。如果混合配置“國家”，“地區”，和“城市”類型資料庫，則最後一項將會生效。', '', '', '');

$_tipsdb['gracePeriod'] = new DAttrHelp("寬限期（秒）", '指定來自一個IP的連接數超過&quot;連接軟限制&quot;之後， 多長時間之內可以繼續接受新連接。在此期間，如果總連接數仍然 低於&quot;連接硬限制&quot;，將繼續接受新連接。之後，如果連接數 仍然高於&quot;連接軟限制&quot;，相應的IP將被封鎖&quot;禁止期（秒）&quot;裡設置的時長。', '[性能與安全建議] 設置為足夠大的數量，以便下載完整網頁， 但也要足夠低以防範蓄意攻擊。', '整數', '');

$_tipsdb['gracefulRestartTimeout'] = new DAttrHelp("平滑重啟超時時長(secs)", '平滑重啟時，即使新的伺服器實例已經啟動，舊的實例仍將繼續 處理現有的請求。此項超時設置定義了舊實例等待多長時間後中止。 預設值是300秒。 -1表示永遠等待。 0表示不等待，立即中止。', '', 'int', '');

$_tipsdb['groupDBCacheTimeout'] = new DAttrHelp("組資料庫緩存超時時長(secs)", '指定多長時間後臺組資料庫將檢查一次變更。 查看更多詳細資訊查看&quot;使用者資料庫緩存超時 (secs)&quot;。', '', '整數', '');

$_tipsdb['groupDBMaxCacheSize'] = new DAttrHelp("組資料庫最大緩存大小", '指定組資料庫的最大緩存大小。', '[性能建議] 由於更大的緩存會消耗更多的記憶體， 更高的值可能會也可能不會提供更好的性能。 請根據你的使用者資料庫大小和網站使用情況來設置合適的大小。', '整數', '');

$_tipsdb['gzipAutoUpdateStatic'] = new DAttrHelp("自動更新靜態檔", '指定是否由LiteSpeed自動創建/更新可壓縮靜態檔的GZIP壓縮版本。 如果設置為Yes，當請求檔MIME屬於&quot;壓縮類型&quot;時， LiteSpeed會根據壓縮的檔時間戳記來創建/更新檔的壓縮版本。 壓縮的文檔會創建在&quot;靜態緩存目錄&quot;目錄下。 檔案名稱根據原文件的MD5散列創建。<br/><br/>預設值: Yes', '', '從單選框選擇', '');

$_tipsdb['gzipCacheDir'] = new DAttrHelp("靜態緩存目錄", '指定目錄路徑來存儲靜態內容的壓縮檔。默認是&quot;交換目錄&quot;。', '', 'Directory Path', '');

$_tipsdb['gzipCompressLevel'] = new DAttrHelp("GZIP壓縮層級（動態內容）", '指定壓縮動態態內容的級別。 範圍從1 (最低)到9 (最高)。<br/>改設置盡在&quot;啟用GZIP壓縮&quot;和&quot;啟用GZIP動態壓縮&quot;啟用時生效<br/><br/>預設值: 6', '[性能建議] 更高的壓縮層級將消耗更多的記憶體和CPU資源。 如果您的機器有額外的資源您可以設置更高的級別。 級別9與級別6沒有太大的區別，但是級別9會佔用多得多的CPU資源。', 'Number between 1 and 9.', '');

$_tipsdb['gzipMaxFileSize'] = new DAttrHelp("靜態檔最大尺寸(bytes)", '指定LiteSpeed可以自動創建壓縮檔的靜態檔最大尺寸。<br/><br/>預設值為 10M', '[性能建議] 不建議使用LiteSpeed創建/更新較大檔的壓縮檔。 壓縮操作會佔用整個伺服器進程並且在壓縮結束前新請求都無法被處理。', 'Number in bytes not less than 1K.', '');

$_tipsdb['gzipMinFileSize'] = new DAttrHelp("靜態檔最小尺寸 (bytes)", '指定LiteSpeed創建相應壓縮檔的靜態檔最小尺寸。<br/><br/>Default value: 200', 'It is not necessary to compress very small files as the bandwidth saving is negligible.', 'Number in bytes not less than 200.', '');

$_tipsdb['gzipStaticCompressLevel'] = new DAttrHelp("GZIP壓縮層級（靜態內容）", '指定GZIP壓縮靜態內容的級別。 範圍從1 (最低)到9 (最高)。。<br/><br/>該選項僅在 &quot;啟用GZIP壓縮&quot;和&quot;自動更新靜態檔&quot; 啟用後才會生效<br/><br/>預設值是6', '', 'Number between 1 and 9.', '');

$_tipsdb['hardLimit'] = new DAttrHelp("連接硬限制", '指定來自單個IP的併發連接的硬限制。 此限制是永遠執行的，用戶端將永遠無法超過這個限制。 HTTP/1.0用戶端通常會嘗試建立盡可能多的連接，因為它們需要同時下載嵌入的內容。此限制應設置得足夠高，以使HTTP/1.0用戶端仍然可以訪問相應的網站。 使用&quot;連接軟限制&quot;設置期望的連接限制。<br/><br/>建議根據你的網頁內容和流量負載，限制在20與50之間。', '[安全] 一個較低的數位將使得伺服器可以服務更多獨立的客戶。<br/>[安全] 受信任的IP或子網不受影響。<br/>[性能] 使用大量併發用戶端進行基準測試時，設置一個較高的值。', '整數', '');

$_tipsdb['httpdWorkers'] = new DAttrHelp("工具人(Workers)的數量", '指定httpd工作程式的數量.', '[性能] 設置適當的數位以滿足您的需求。 增加更多的數量不一定意味著更好的效果。', 'Integer value between 1 and 16.', '');

$_tipsdb['inBandwidth'] = new DAttrHelp("入口頻寬 (bytes/sec)", '指定對單個IP位址允許的最大傳入輸送量（無論與該IP之間建立了多少個連接）。 為提高效率，真正的頻寬可能最終會略高於設定值。 頻寬是按1KB單位分配。設定值為0可禁用限制。 每個用戶端的頻寬限制（位元組/秒）可以在伺服器或虛擬主機級別設置。 虛擬主機級別的設置將覆蓋伺服器級別的設置。', '[安全] 受信任的IP或子網不受影響。', '整數', '');

$_tipsdb['inMemBufSize'] = new DAttrHelp("最大的讀寫緩衝區大小", '指定用於存儲請求內容和相應的動態回應的最大緩衝區大小。達到此限制時， 伺服器將在&quot;交換目錄&quot;中創建臨時交換檔。', '[性能] 設置足夠大的緩衝區，以容納所有併發 請求/回應，避免記憶體和磁片資料交換。如果交換目錄（預設為/tmp/lshttpd/swap/）存在頻繁的讀寫活動，說明緩衝區太小，LiteSpeed正在使用交換檔。', '整數', '');

$_tipsdb['indexFiles'] = new DAttrHelp("索引檔", '指定URL映射到目錄時順序查找的索引檔案名稱。 您可以在伺服器、虛擬主機和Context級別對其進行自訂。', '[性能建議] 只設置你需要的索引檔。', 'Comma-delimited list of index filenames.', '');

$_tipsdb['indexUseServer'] = new DAttrHelp("使用伺服器索引檔", '指定是否使用伺服器的索引檔。 如果設置為Yes，那麼只有伺服器的設置將被使用。 如果設置為No，那麼伺服器的設置將不會被使用。 如果設置為Addition，那麼附加的索引檔可以被添加到此虛擬主機伺服器的索引檔清單中。 如果想要禁用此虛擬主機的索引檔，您可以將該值設置為No，並將索引檔欄留空。 field empty.', '', '從列表中選擇', '');

$_tipsdb['initTimeout'] = new DAttrHelp("初次請求超時時間 (secs)", '指定伺服器等待外部應用回應新建立的連接的第一個請求的最大時間  如果伺服器在這個限制時間內沒有收到外部應用的任何資料，它將把這個連接標記為壞(Bad)。這有助於識別與外部應用程式的通信問題。 這有助於儘快發現與外部應用的通信問題。如果某些請求的處理時間較長，則增加這個限制以避免503錯誤資訊。', '', '整數', '');

$_tipsdb['installpathprefix'] = new DAttrHelp("安裝路徑首碼", '設置“--prefix”配置選項的值。 預設安裝位置在LiteSpeed Web伺服器的安裝目錄。', 'LiteSpeed Web Server可以同時使用多個PHP版本。 如果要安裝多個版本，則 應該給他們不同的首碼。', '路徑', '/usr/local/lsws/lsphp5');

$_tipsdb['instances'] = new DAttrHelp("實例數", '指定伺服器創建的外部應用的最大實例數。這個選項需要&quot;開機自啟&quot;的值為enable. 大多數FastCGI/LSAPI應用程式每個進程實例只能處理一個請求，對於這種類型的應用，實例數應與&quot;最大連接數&quot;的值相匹配。  而有些FastCGI/LSAPI應用程式可以生成多個子進程以同時處理多個請求. 對於這種類型的應用，應將實例設置為 &quot;1&quot;，並使用環境變數來控制應用可以生成多少個子進程。', '', '整數', '');

$_tipsdb['internalmodule'] = new DAttrHelp("內部的", '指定模組是否為內部模組（靜態連結），而不是動態連結程式庫。', '', '布林值', '');

$_tipsdb['ip2locDBCache'] = new DAttrHelp("資料庫緩存類型", '使用的緩存方法。 預設值為Memory。', '', '從列表中選擇', '');

$_tipsdb['ip2locDBFile'] = new DAttrHelp("IP2Location資料庫檔路徑", '有效資料庫檔的位置。', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['javaServletEngine'] = new DAttrHelp("Servlet Engine", '指定為該Web應用程式提供服務的Servlet Engine的名稱。 Servlet引擎必須在伺服器或虛擬主機級別的&quot;外部應用&quot;中定義。', '', '從列表中選擇', '');

$_tipsdb['javaWebAppContext'] = new DAttrHelp("Java Web App Context", 'Many people running Java applications use the servlet engine to serve static content as well. But no servlet engine is nearly as efficient as LiteSpeed Web Server for these processes. In order to improve the overall performance, LiteSpeed Web Server can be configured as a gateway server, which serves static content and forwards dynamic Java page requests to the servlet engine.<br/><br/>LiteSpeed Web Server requires certain contexts to be defined in order to run a Java application. A Java Web App Context automatically creates all required contexts based on the Java web application&#039;s configuration file (WEB-INF/web.xml).<br/><br/>There are a few points you need to keep in mind when setting up a Java Web App Context:<br/><ul> <li>A Servlet Engine external application must be set up in &quot;外部應用&quot; before Java Web App Context can be set up.</li> <li>A &quot;腳本處理常式&quot; for .jsp files should be defined as well.</li> <li>If the web application is packed into a .war file, the .war file must be expanded. The server cannot access compressed archive files.</li> <li>For the same resources, the same URL should be used no matter whether it is accessed through LiteSpeed Web Server or through the servlet engine&#039;s built-in HTTP server.<br/>For example,   Tomcat 4.1 is installed under /opt/tomcat. Files for the &quot;examples&quot; web application are   located at /opt/tomcat/webapps/examples/. Through Tomcat&#039;s built-in HTTP server,   the &quot;examples&quot; web application is thus accessed with a URI like &quot;/examples/***&quot;.   The corresponding Java Web App Context should thus be configured:   &quot;URI&quot; = /examples/, &quot;偽造&quot; = /opt/tomcat/webapps/examples/.</li>   </ul>', '', '', '');

$_tipsdb['javaWebApp_location'] = new DAttrHelp("偽造", '指定包含此Web應用程式的目錄。 應包含以下檔 &quot;WEB-INF/web.xml&quot;.<br/><br/>預設值：$DOC_ROOT + &quot;URI&quot;', '', 'path', '');

$_tipsdb['jsonReports'] = new DAttrHelp("Output JSON reports", 'Output additional JSON formatted report files, with the .json extension, to the /tmp/lshttpd directory.<br/><br/>Default value: No', ' This is useful for application developers who may want to integrate LiteSpeed status and real-time reports into their applications using standard JSON processing tools built-in to most programming languages.', '從單選框選擇', 'When set to Yes, .status.json and .rtreport.json, .rtreport.2.json, etc report files will be created in addition to the usual .status and .rtreport, .rtreport.2, etc report files.');

$_tipsdb['keepAliveTimeout'] = new DAttrHelp("持續連接逾時時長", '指定持續連接請求的最長閒置時間。 如果在這段時間內沒有接收到新的請求，該連接將被關閉。 這個設置只適用於HTTP/1.1連接。HTTP/2連接有較長的閒置時間，不受此設置影響。', '[安全和性能建議] 我們建議您將值設置得剛好足夠處理單個頁面 視圖的所有請求。沒有必要延長持續連線時間。較小的值可以減少閒置 連接，提高能力，以服務更多的使用者，並防範拒絕服務攻擊。2-5秒 對大多數應用是合理範圍。Litespeed在非持續連接環境是非常高效的。', '整數', '');

$_tipsdb['keyFile'] = new DAttrHelp("私密金鑰檔", 'SSL私密金鑰檔的檔案名。 金鑰檔不應被加密。', '[安全建議] 私密金鑰檔應放在一個安全的目錄中，該目錄應 允許對運行伺服器的用戶具有唯讀的存取權限。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['lbContext'] = new DAttrHelp("負載均衡 Context", 'Like other external applications, load balancer worker applications cannot be used directly. They must be mapped to a URL through a context. A Load Balancer Context will associate a URI to be load balanced by the load balancer workers.', '', '', '');

$_tipsdb['lbapp'] = new DAttrHelp("負載均衡", '指定要與此context關聯的負載等化器。 此負載均衡是一個虛擬應用程式，必須在伺服器或虛擬主機級別的&quot;外部應用&quot;中定義。', '', '從列表中選擇', '');

$_tipsdb['listenerBinding'] = new DAttrHelp("綁定", '指定偵聽器分配給哪個lshttpd子進程。 通過手動將偵聽器與進程相關聯，可以使用不同的子進程來處理對不同偵聽器的請求。 預設情況下，將偵聽器分配給所有子進程。', '', '從核取方塊中選擇', '');

$_tipsdb['listenerIP'] = new DAttrHelp("IP Address", '指定此監聽器的IP地址.所有可用的IP地址都列出了. IPv6位址應包含&quot;[ ]&quot;.<br/><br/>如果要監聽所有IPV4位址, 選擇 ANY. 要監聽所有IPV4和IPV6位址,選擇 [ANY].<br/><br/>為了同時為IPv4和IPv6用戶端提供服務，應使用IPv4映射的IPv6位址代替純IPv4位址。  IPv4映射的IPv6位址應寫為[::FFFF:x.x.x.x].', '[安全建議] 如果您的電腦在不同的子網中具有多個IP, 您可以選擇特定的IP以僅允許來自相應子網的流量。', '從列表中選擇', '');

$_tipsdb['listenerModules'] = new DAttrHelp("Listener Modules", 'Listener module configuration data is, by default inherited from the Server module configuration.   The Listener Modules are limited to the TCP/IP Layer 4 hooks.', '', '', '');

$_tipsdb['listenerName'] = new DAttrHelp("偵聽器名稱", '此偵聽器的唯一名稱。', '', '', '');

$_tipsdb['listenerPort'] = new DAttrHelp("埠", '指定偵聽器的TCP埠。 只有超級用戶（root）可以使用低於1024的埠。 埠80是默認的HTTP埠。 埠443是默認的HTTPS埠。', '', '整數', '');

$_tipsdb['listenerSecure'] = new DAttrHelp("安全", '指定這是否是安全（SSL）偵聽器。 對於安全的偵聽器，需要正確設置其他SSL設置。', '', '從單選框選擇', '');

$_tipsdb['lmap'] = new DAttrHelp("Virtual Hosts Mappings", 'Shows currently established mappings to virtual hosts from a particular listener.  The virtual host name appears in brackets and is followed by the matching domain name(s) for this listener.', 'If a virtual host has not been loaded successfully (fatal errors in the  virtual host configuration), the mapping to that virtual host will not be displayed.', '', '');

$_tipsdb['lname'] = new DAttrHelp("Name - Listener", 'The unique name that identifies this listener. This is the  &quot;偵聽器名稱&quot; you specified when setting up the listener.', '', '', '');

$_tipsdb['location'] = new DAttrHelp("位置", '指定此context在檔案系統中的對應位置。<br/><br/>Default value: $DOC_ROOT + &quot;URI&quot;', '', 'It can be an absolute path or path relative to $SERVER_ROOT, $VH_ROOT, or $DOC_ROOT. $DOC_ROOT is the default relative path, and can be omitted.<br/><br/>If the &quot;URI&quot; is a regular expression, then the matched sub-string can be used to form the &quot;Root&quot; string. The matched sub-string can be referenced with the values &quot;$1&quot; - &quot;$9&quot;. &quot;$0&quot; and &quot;&&quot; can be used to reference the whole matched string. Additionally, a query string can be set by appending a &quot;?&quot; followed by the query string. Be careful. &quot;&&quot; should be escaped as &quot;\&&quot; in the query string.', 'A plain URI like /examples/ with &quot;位置&quot; set to /home/john/web_examples will map the request &quot;/examples/foo/bar.html&quot; to file &quot;/home/john/web_examples/foo/bar.html&quot;.<br/>To simulate Apache&#039;s mod_userdir, set URI to exp: ^/~([A-Za-z0-9]+)(.*), set &quot;位置&quot; to /home/$1/public_html$2. With these settings, a request of URI /~john/foo/bar.html will map to file /home/john/public_html/foo/bar.html.');

$_tipsdb['logUseServer'] = new DAttrHelp("使用伺服器日誌", '指定是否將虛擬主機的日誌資訊放置到伺服器日誌檔中，而不是創建獨自的日誌檔。', '', '從單選框選擇', '');

$_tipsdb['log_compressArchive'] = new DAttrHelp("壓縮存檔", '指定是否壓縮回滾日誌以節省磁碟空間。', '日誌檔是高度可壓縮的，建議採取壓縮以減少舊日志的磁片占用量。', '從單選框選擇', '');

$_tipsdb['log_debugLevel'] = new DAttrHelp("調試級別", '指定調試日誌級別。 要使用此功能，&quot;日誌級別&quot;必須設置為DEBUG。 在“調試級別”設置為NONE時，即使&quot;日誌級別&quot; 設置為DEBUG，調試日誌也是被禁用的。 在正在運行的伺服器上，&quot;Toggle Debug Logging&quot;可以被用於 控制調試級別而無需重啟。', '[性能建議] 重要！如果你不需要詳細的調試日誌記錄， 應始終將其設置為NONE。啟用調試日誌記錄將嚴重降低服務性能 ，且可能在很短時間耗盡磁碟空間。 調試日誌記錄包括每個請求和回應的詳細資訊。<br/><br/>我們推薦將日誌級別設置為DEBUG，調試級別設置為NONE。 這些設置意味著你的磁片不會被調試日誌塞滿， 但是你可以使用&quot;Toggle Debug Logging&quot; 控制調試輸出。這個動作可以即時啟用或關閉調試記錄， 對於調試繁忙的生產伺服器非常有用。', '從列表中選擇', '');

$_tipsdb['log_enableStderrLog'] = new DAttrHelp("啟用標準錯誤日誌（stderr）", '指定在接受到伺服器啟動的進程輸出的標準錯誤時，是否寫入到日誌。 如果啟用，標準錯誤資訊將記錄到伺服器日誌所在目錄內的固定名為“stderr.log”的文件。如果禁用，所有的標準錯誤輸出都將被丟棄。 棄。<br/>諸如PHP的error_log()之類的函數不會直接寫入標準錯誤日誌(檔案控制代碼2)，所以不會受到此設置的影響，它們會寫入PHP ini指令&#039;error_log&#039;中設置的檔或帶有標籤“ error.log”的檔中 如果未設置該指令，則為“[STDERR]”。', '如果您需要調試配置的外部應用程式，如PHP、Ruby、Java、Python、Perl，請開啟該功能。', '從單選框選擇', '');

$_tipsdb['log_fileName'] = new DAttrHelp("檔案名", '指定日誌檔的路徑。', '[性能建議] 將日誌檔放置在一個單獨的磁片上。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['log_keepDays'] = new DAttrHelp("保留天數", '指定訪問日誌檔將被保存在磁片上多少天。 只有超出指定天數的回滾日誌檔會被刪除。 當前的日誌檔不會被刪除，無論它包含了多少天的資料。 如果你不想自動刪除過時的、很舊的日誌檔， 將該值設置為0。', '', '整數', '');

$_tipsdb['log_logLevel'] = new DAttrHelp("日誌級別", '指定日誌檔中記錄的日誌級別。 可用級別（由高到低）為: ERROR、 WARNING、NOTICE、INFO和DEBUG。 只有級別與當前設置相同或更高的消息將被記錄（級別越低記錄越詳細）。 be logged.', '[性能建議] 使用DEBUG日誌級別對 性能沒有任何影響，除非&quot;調試級別&quot;沒有被設置為NONE.。我們推薦將日誌級別設置為DEBUG，將 調試級別值設置為NONE。這樣設置意味著你的磁片不會被調試日誌塞滿，但是你可以使用&quot;Toggle Debug Logging&quot; 控制調試輸出。這個操作可以即時啟用或關閉調試記錄， 對於調試繁忙的生產伺服器非常有用。', '從列表中選擇', '');

$_tipsdb['log_rollingSize'] = new DAttrHelp("回滾大小 (bytes)", '指定何時日誌檔需要回滾，也稱為日誌迴圈。 當檔大小超過回滾限制後，在使用的日誌檔將在同一目錄中被重命名 為log_name.mm_dd_yyyy(.sequence)，一個新的日誌檔將被創建。 回滾的日誌檔的實際大小有時會比限制值稍微大一些。 將值設置為0將禁用日誌迴圈。', '請用“K”，“M”，“G”代表千位元組，百萬位元組和千百萬位元組。', '整數', '');

$_tipsdb['lsapiContext'] = new DAttrHelp("LiteSpeed SAPI Context", 'External applications cannot be used directly. They must be either configured as a script handler or mapped to a URL through a context. An LiteSpeed SAPI Context will associate a URI with an LSAPI (LiteSpeed Server Application Programming Interface) application. Currently PHP, Ruby and Python have LSAPI modules. LSAPI, as it is developed specifically for LiteSpeed web server, is the most efficient way to communicate with LiteSpeed web server.', '', '', '');

$_tipsdb['lsapiapp'] = new DAttrHelp("LiteSpeed SAPI App", '指定要連接到此context的LiteSpeed SAPI應用程式。 此應用程式必須在伺服器或虛擬主機級別的 &quot;外部應用&quot;中定義。', '', '從列表中選擇', '');

$_tipsdb['lsrecaptcha'] = new DAttrHelp("reCAPTCHA保護", 'reCAPTCHA 保護是一種減輕伺服器負載的服務。在下列情況發生後，reCAPTCHA保護將啟動 啟動後,所以不受信任的用戶端(可自定)發出的請求將被重定向到reCAPTCHA驗證頁面 驗證完成後用戶端將被重定向到其所需的頁面<br/><br/>下列情況將啟用reCAPTCHA保護: 1. 伺服器或虛擬主機併發請求計數超過連接限制。<br/>2. 啟用了Anti-DDoS，並且用戶端以可疑的方式訪問了URL。 用戶端將首先重定向到reCAPTCHA，而不是在觸發時被拒絕。<br/>3. 提供了新的重寫規則，以通過重寫規則啟動reCAPTCHA。可以設置“verifycaptcha”將用戶端重定向到reCAPTCHA。可以設置一個特殊值&#039;:deny&#039;以在用戶端失敗太多次時拒絕它。例如，[E=verifycaptcha]將始終重定向到reCAPTCHA，直到通過驗證。 [E=verifycaptcha: deny]將重定向到reCAPTCHA，如果用戶端達到最大嘗試次數,將被拒絕。', '', '', '');

$_tipsdb['lstatus'] = new DAttrHelp("Status - Listener", 'The current status of this listener. The status is either Running or Error.', 'If the listener is in the Error state, you can view the server log to find out why.', '', '');

$_tipsdb['mappedListeners'] = new DAttrHelp("映射的偵聽器", 'Specifies the names of all listeners that this template maps to. A listener-to-virtual host mapping for this template&#039;s member virtual hosts will be added to the listeners specified in this field. This mapping will map listeners to virtual hosts based on the domain names and aliases set in the member virtual hosts&#039; individual configurations.', '', 'comma-separated list', '');

$_tipsdb['maxCGIInstances'] = new DAttrHelp("最大CGI實例數量", 'S指定伺服器可以啟動的CGI進程最大併發數量。 對於每個對CGI腳本的請求，伺服器需要啟動一個獨立的CGI進程。 在Unix系統中，併發進程的數量是有限的。過多的併發進程會降 低整個系統的性能，也是一種進行拒絕服務攻擊的方法。 LiteSpeed伺服器將對CGI腳本的請求放入管道佇列，限制併發 CGI進程數量，以確保最優性能和可靠性。 硬限制為2000。', '[安全和性能建議] 更高的數量並不一定轉化為更快的性能。 在大多數情況下，更低的數量提供更好的性能和安全性。更高的數量 只在CGI處理過程中讀寫延遲過高時有幫助。', '整數', '');

$_tipsdb['maxCachedFileSize'] = new DAttrHelp("最大小檔緩存(bytes)", '指定預分配記憶體緩衝區中緩存的靜態檔最大尺寸。靜態檔 可以用四種不同的方式服務：記憶體緩存、記憶體映射緩存、直接讀寫和 sendfile()。 尺寸小於&quot;最大小文件緩存(bytes)&quot;的檔將使用記憶體緩存服務。尺寸大於該限制、但小於 &quot;最大MMAP文件大小(bytes)&quot;的檔，將使用記憶體映射緩存服務。 尺寸大於&quot;最大MMAP文件大小(bytes)&quot;的檔將通過直接讀寫或sendfile() 服務。使用記憶體緩存服務小於4K的檔是最佳做法。', '', '整數', '');

$_tipsdb['maxConnections'] = new DAttrHelp("最大連接數", '指定伺服器可以接受的最大併發連接數。這包括純TCP連接和SSL連接。 一旦達到此限制，伺服器將在完成活動請求時關閉“Keep-Alive”的連接。', '當伺服器由&quot;root&quot;使用者啟動時，伺服器會嘗試自動調整每個進程的檔描述符限制，但是，如果自動調整失敗，你可能需要手動增加此限制。', '整數', '');

$_tipsdb['maxConns'] = new DAttrHelp("最大連接數", '指定伺服器與外部應用之間可建立的最大併發連接數。該設置控制外部應用程式可同時處理多少個請求。 然而，真正的限制還取決於外部應用本身。如果外部的速度不夠快，或者無法處理大量的併發請求，那麼將這個值設置得更高也無濟於事。', '[性能建議] 設置一個高值並不能直接變成高性能。設置為一個不會使外部應用程式超載的值，將提供最佳的性能/輸送量。', '整數', '');

$_tipsdb['maxDynRespHeaderSize'] = new DAttrHelp("動態回應報頭最大大小(bytes)", '指定動態回應的最大報頭大小。硬限制為131072位元組或128K.<br/><br/>Default value: 32768 or 32K', '[可靠性和性能建議] 設置一個合理的低值以説明識別外部應用程式產生的 壞的動態回應。', '整數', '');

$_tipsdb['maxDynRespSize'] = new DAttrHelp("動態回應主內容最大大小(bytes)", '指定動態回應的最大主內容尺寸。硬限制是2047MB。', '[可靠性和性能建議] 設置一個合理的低值以幫助識別壞的響應。惡意腳本經常包含 無限迴圈而導致大尺寸回應。', '整數', '');

$_tipsdb['maxKeepAliveReq'] = new DAttrHelp("最大持續連接請求數", '指定通過持續連接（持久）會話處理的請求的最大數量。一旦達 到此限制，連接將被關閉。您也可以為每個虛擬主機單獨設置限制。', '[性能建議] 設置為合理的較高的值。值為“1”或“0”時將禁用持續連接。', '整數', '');

$_tipsdb['maxMMapFileSize'] = new DAttrHelp("最大MMAP檔大小(bytes)", '指定使用記憶體映射（MMAP）的最大靜態檔大小。 靜態檔可以用四種不同的方式服務：記憶體緩存、記憶體映射緩存、直接讀寫和 sendfile()。 尺寸小於&quot;最大小文件緩存(bytes)&quot;的檔將使用記憶體緩存服務。尺寸大於該限制、但小於 &quot;最大MMAP文件大小(bytes)&quot;的檔，將使用記憶體映射緩存服務。 尺寸大於&quot;最大MMAP文件大小(bytes)&quot;的檔將通過直接讀寫或sendfile() 服務。 由於伺服器有一個32位的位址空間（2GB），不建議使用記憶體映射非常大的檔。', '', '整數', '');

$_tipsdb['maxMindDBEnv'] = new DAttrHelp("環境變數", '將資料庫查找的結果分配給環境變數。', '', 'Variable_Name mapped_DB_data<br/><br/>One entry per line. Path to data can use map keys or 0-based array indexes, both being separated by /.', 'COUNTRY_CODE COUNTRY_DB/country/iso_code<br/>REGION_CODE  CITY_DB/subdivisions/0/iso_code');

$_tipsdb['maxReqBodySize'] = new DAttrHelp("最大請求主內容大小(bytes)", '指定HTTP請求主內容最大尺寸。對於32位元作業系統， 硬限制為2GB。對於64位元作業系統，幾乎是無限的。', '[安全建議] 為了防止拒絕服務攻擊，儘量將限制值設定到實際需求的大小。 交換空間的剩餘空間必須比這個限制值大。', '整數', '');

$_tipsdb['maxReqHeaderSize'] = new DAttrHelp("最大請求頭大小(bytes)", '指定請求URL中包含的HTTP請求頭最大值。  硬限制為131072 位元組或128K.<br/><br/>Default value: 32768 or 32K', '[安全和性能建議] 設置合理的低值來減少記憶體的使用並説明識別虛假請求和拒絕服務攻擊。<br/>對於大多數網站來說4000-8000已經足夠大。', '整數', '');

$_tipsdb['maxReqURLLen'] = new DAttrHelp("最大請求URL長度(bytes)", '指定請求URL的最大大小。 URL是一個純文字的位址，包含查詢字串來請求伺服器上的資源。 硬限制為65530個位元組。 大於此值的值，例如64K（大6個位元組），將被視為65530。<br/><br/>Default value: 8192 or 8K.', '[安全和性能建議] 將其設置合理的低值來以減少記憶體使用 並説明識別虛假請求和拒絕服務攻擊。<br/>對大多數網站2000-3000已經足夠大，除非使用HTTP GET而不是POST來提交大型的查詢字串。', '整數', '');

$_tipsdb['maxSSLConnections'] = new DAttrHelp("最大SSL連接數", '指定伺服器將接受的最大併發SSL連接數。 由於併發SSL和非SSL的連接總數不能超過&quot;最大連接數&quot;的限制，因此允許的最大SSL連接的數量須低於此限制。', '', '整數', '');

$_tipsdb['memHardLimit'] = new DAttrHelp("記憶體硬限制 (bytes)", '與&quot;記憶體軟限制 (bytes)&quot;非常相同，但是在一個使用者進程中，軟限制 可以被放寬到硬限制的數值。硬限制可以在伺服器級別或獨立的外部應用程式級別設 置。如果未在獨立的外部應用程式級別設定限制，將使用伺服器級別的限制。<br/><br/>如果在兩個級別都沒有設置該限制，或者限制值設為0，將使用操 作系統的預設設置。', '[注意] 不要過度調整這個限制。如果您的應用程式需要更多的記憶體， 這可能會導致503錯誤。', '整數', '');

$_tipsdb['memSoftLimit'] = new DAttrHelp("記憶體軟限制 (bytes)", '以位元組為單位指定伺服器啟動的外部應用進程或程式的記憶體佔用限制。<br/><br/>此限制的目的主要是為了防範軟體缺陷或蓄意攻擊造成的過度記憶體使用， 而不是限制正常使用。確保留有足夠的記憶體，否則您的應用程式可能故障並 返回503錯誤。限制可以在伺服器級別或獨立的外部應用程式級別設置。如 果未在獨立的外部應用程式級別設定限制，將使用伺服器級別的限制。<br/><br/>如果在兩個級別都沒有設置該限制，或者限制值設為0，將使用操 作系統的預設設置。', '[注意] 不要過度調整這個限制。如果您的應用程式需要更多的記憶體， 這可能會導致503錯誤。', '整數', '');

$_tipsdb['memberVHRoot'] = new DAttrHelp("成員虛擬主機根目錄", '指定此虛擬主機的根目錄。 如果留空，將使用此範本的預設虛擬主機根目錄.<br/><br/>Note: 這<b>不是</b>文檔根。 建議將與虛擬主機相關的所有檔（如虛擬主機配置，日誌檔，html檔，CGI腳本等）放置在此目錄下。 虛擬主機根目錄可以以變數$VH_ROOT來引用。', '', 'path', '');

$_tipsdb['mime'] = new DAttrHelp("MIME設置", '為此伺服器指定包含MIME設置的檔。 在chroot模式中提供了絕對路徑時，該檔路徑總是相對於真正的根。 點擊檔案名可查看/編輯詳細的MIME項。', 'Click the filename to edit the MIME settings.', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['mimesuffix'] = new DAttrHelp("尾碼", '你可以列出相同MIME類型的多個尾碼，用逗號分隔。', '', '', '');

$_tipsdb['mimetype'] = new DAttrHelp("MIME類型", 'MIME類型由類型和子類型組成，格式為“類型/子類型”.', '', '', '');

$_tipsdb['minGID'] = new DAttrHelp("最小的GID", '指定外部應用程式的最小組ID。 如果組ID比這裡指定的值更小，其外部腳本的執行將被拒絕。 如果的LiteSpeed Web伺服器是由“Root”用戶啟動，它可以在“suEXEC” 模式運行外部應用程式，類似Apache（可以切換到與Web伺服器不同的用戶/組ID）。', '[安全] 設置足夠高的值以排除所有系統使用者所屬的組。', '整數', '');

$_tipsdb['minUID'] = new DAttrHelp("最小的UID", '指定外部應用程式的最小使用者ID。 如果用戶ID比這裡指定的值更低。其外部腳本的執行將被拒絕。 如果的LiteSpeed Web伺服器由“Root”用戶啟動，它可以在“suEXEC” 模式運行外部應用程式，類似Apache（可以切換到與Web伺服器不同的用戶/組ID）。', ' Set it high enough to exclude all system/privileged users.', '整數', '');

$_tipsdb['modParams'] = new DAttrHelp("模組參數", 'Set module parameters. The module parameters are defined by the module developer.<br/><br/>Set the value in the Server configuration to globally assign the default value.  The user can override this setting at the Listener, Virtual Host or Context levels. If the &#039;Not Set&#039; radio button is selected, it will be inherited from the upper level.', '', 'Specified by the module interface.', '');

$_tipsdb['moduleContext'] = new DAttrHelp("Module Handler Context", 'A module handler context will associate a URI with a registered module. Modules need to be registered at Server Module Configuration tab.', '', '', '');

$_tipsdb['moduleEnabled'] = new DAttrHelp("Enable Module", 'Enables module hooks globally. This setting can be overridden at the Listener and Virtual Host levels.<br/><br/>Default value: Yes', '', '從單選框選擇', '');

$_tipsdb['moduleEnabled_lst'] = new DAttrHelp("Enable Module", 'Enables module hooks at the Listener level. This setting will only take effect if the module has TCP/IP level hooks (L4_BEGSESSION, L4_ENDSESSION, L4_RECVING, L4_SENDING).<br/><br/>Default value: Inherit Server level setting', '', '從單選框選擇', '');

$_tipsdb['moduleEnabled_vh'] = new DAttrHelp("Enable Module", 'Enables module hooks at the Virtual Host level. This setting will only take effect if the module has HTTP level hooks.<br/><br/>Default value: Inherit Server level setting', '', '從單選框選擇', '');

$_tipsdb['moduleNameSel'] = new DAttrHelp("模組", '模組名稱。 該模組必須在“伺服器模組配置”選項卡下配置。 配置後，模組名稱將在偵聽器和虛擬主機配置的下拉清單中顯示。', '', '從列表中選擇', '');

$_tipsdb['modulename'] = new DAttrHelp("模組", '伺服器啟動時要載入的外部或內部模組的名稱。<br/><br/><b>外部模組</b><br/>用於外部模組的值必須與 $SERVER_ROOT/modules/modulename.so 下的“.so”檔案名匹配， 以便伺服器應用程式載入該檔。 在註冊新模組後需要重新開機伺服器。<br/><br/><b>內部模組</b><br/>內部模組使用的值必須與構建模組時使用的名稱匹配 例如，對於伺服器附帶的內部緩存模組，必須將其設置為“緩存”。', '', '字串', '');

$_tipsdb['namespace'] = new DAttrHelp("Namespace Container", 'Set to Enabled if you wish to start CGI processes (including PHP programs) in a namespace container sandbox. Only used when &quot;Bubblewrap Container&quot; is set to Disabled.<br/><br/>When not Disabled at the Server level, this settings value can be overridden at the Virtual Host level.<br/><br/>Default values:<br/><b>Server level:</b> Disabled<br/><b>Virtual Host Level:</b> Inherit Server level setting', '', '從列表中選擇', '');

$_tipsdb['namespaceConf'] = new DAttrHelp("Namespace Template File", 'Path to an existing configuration file containing a list of directories to be mounted along with the methods used to mount them. When &quot;Namespace Container&quot; is set to Enabled and this value is not set, the following secure default configuration settings will be used:<br/><br/> /tmp,tmp<br/>/usr,ro-bind<br/>/lib,ro-bind<br/>/lib64,ro-bind-try<br/>/bin,ro-bind<br/>/sbin,ro-bind<br/>/var,dir<br/>/var/www,ro-bind-try<br/>/proc,proc<br/>../tmp var/tmp,symlink<br/>/dev,dev<br/>/etc/localtime,ro-bind-try<br/>/etc/ld.so.cache,ro-bind-try<br/>/etc/resolv.conf,ro-bind-try<br/>/etc/ssl,ro-bind-try<br/>/etc/pki,ro-bind-try<br/>/etc/man_db.conf,ro-bind-try<br/>/usr/local/bin/msmtp /etc/alternatives/mta,ro-bind-try<br/>/usr/local/bin/msmtp /usr/sbin/exim,ro-bind-try<br/>$HOMEDIR,bind-try<br/>/var/lib/mysql/mysql.sock,bind-try<br/>/home/mysql/mysql.sock,bind-try<br/>/tmp/mysql.sock,bind-try<br/>/run/mysqld/mysqld.sock,bind-try<br/>/var/run/mysqld.sock,bind-try<br/>/run/user/$UID,dir<br/>$PASSWD<br/>$GROUP<br/>/etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc,copy-try<br/>/etc/php.ini,ro-bind-try<br/>/etc/php-fpm.conf,ro-bind-try<br/>/etc/php-fpm.d,ro-bind-try<br/>/var/run,ro-bind-try<br/>/var/lib,ro-bind-try ', '', '絕對路徑或相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['namespaceConfVhAdd'] = new DAttrHelp("Additional Namespace Template File", 'Path to an existing configuration file containing a list of directories to be mounted along with the methods used to mount them. If &quot;Namespace Template File&quot; is also set at the Server level, both files will be used.', '', '可以說絕對路徑,也可以是相對於$SERVER_ROOT或$VH_ROOT的相對路徑。', '');

$_tipsdb['nodeBin'] = new DAttrHelp("Node路徑", 'Node.js執行檔的路徑.', '', '絕對路徑', '');

$_tipsdb['nodeDefaults'] = new DAttrHelp("Node.js App Default Settings", 'Default configurations for Node.js applications. These settings can be overriden at the context level.', '', '', '');

$_tipsdb['note'] = new DAttrHelp("備註", '為你自己添加備註', '', '', '');

$_tipsdb['ocspCACerts'] = new DAttrHelp("OCSP CA證書", '指定存儲OCSP憑證授權（CA）證書的檔的位置。 這些證書用於檢查OCSP回應伺服器的回應（並確保這些回應不被欺騙或以其他方式被破壞）。 該檔應包含整個憑證連結。 如果該檔不包含根證書，則LSWS無需將根證書添加到檔中就應該能夠在系統目錄中找到該根證書， 但是，如果此驗證失敗，則應嘗試將根證書添加到此文件中。<br/><br/>This setting is optional. If this setting is not set, the server will automatically check &quot;CA證書文件&quot;.', '', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['ocspRespMaxAge'] = new DAttrHelp("OCSP回應最大有效時間（秒）", '此選項設置OCSP回應的最大有效時間。 如果OCSP回應早於該最大使用期限，則伺服器將與OCSP響應伺服器聯繫以獲取新的響應。 預設值為86400 。 通過將此值設置為-1，可以關閉最大有效時間。', '', 'Integer of seconds', '');

$_tipsdb['ocspResponder'] = new DAttrHelp("OCSP回應伺服器", '指定要使用的OCSP回應伺服器的URL。 如果未設置，則伺服器將嘗試聯繫OCSP回應伺服器 在憑證授權的頒發者證書中有詳細說明。 某些頒發者證書可能未指定OCSP伺服器URL。', '', 'URL starting with http://', 'http://rapidssl-ocsp.geotrust.com ');

$_tipsdb['outBandwidth'] = new DAttrHelp("出口頻寬 (bytes/sec)", '指定對單個IP位址允許的最大傳出輸送量（無論與該IP之間建立了多少個連接）。 為提高效率，真正的頻寬可能最終會略高於設定值。 頻寬按4KB為單位分配。設定值為0可禁用限制。 每個用戶端的頻寬限制（位元組/秒）可以在伺服器或虛擬主機級別設置。 虛擬主機級別的設置將覆蓋伺服器級別的設置。', '[性能建議] 按8KB單位設置頻寬可獲得更好的性能。<br/>[安全建議] 受信任的IP或子網不受影響。', '整數', '');

$_tipsdb['pcKeepAliveTimeout'] = new DAttrHelp("持久連接逾時時間", '指定保持持久連接的最大時間，以秒為單位。<br/><br/>如果設置成&quot;-1&quot;,連接將不會超時. 當設置成0或者更大, 連接將在這些秒數後被關閉。', '', 'int', '');

$_tipsdb['perClientConnLimit'] = new DAttrHelp("用戶端流量限制", '這些是基於用戶端IP的連接控制設置。 這些設置有助於緩解DoS（拒絕服務）和DDoS（分散式拒絕服務）攻擊。', '', '', '');

$_tipsdb['persistConn'] = new DAttrHelp("持久連接", '指定在處理完請求後是否要保持連接 持久連接可以提高性能， 但某些FastCGI外部應用程式不完全支援持久連接。默認為 &quot;On&quot;。', '', '從單選框選擇', '');

$_tipsdb['phpIniOverride'] = new DAttrHelp("php.ini 重寫", '用於覆蓋當前context（虛擬主機級別或context級別）中的php.ini設置。<br/><br/>支援的指令是：<br/>php_value<br/>php_flag<br/>php_admin_value<br/>php_admin_flag<br/><br/>所有其他行/指令將被忽略。', '', 'Override syntax is similar to Apache, a newline separated list of directives and their values with each directive being prepended by php_value, php_flag, php_admin_value, or php_admin_flag appropriately.', 'php_value include_path &quot;.:/usr/local/lib/php&quot;<br/>php_admin_flag engine on<br/>php_admin_value open_basedir &quot;/home&quot;');

$_tipsdb['pid'] = new DAttrHelp("PID", 'PID (Process ID) of the current server process.', 'The PID will change each time the server is restarted.', '', '');

$_tipsdb['procHardLimit'] = new DAttrHelp("進程硬限制", '與&quot;進程軟限制&quot;非常相同，但是，在使用者進程中軟限制 可以被放寬到硬限制的數值。硬限制可以在伺服器級別或獨立的外部應用程式級別設 置。如果未在獨立的外部應用程式級別設定限制，將使用伺服器級別的限制。 如果在兩個級別都沒有設置該限制，或者限制值設為0，將使用操 作系統的預設設置。', '', '整數', '');

$_tipsdb['procSoftLimit'] = new DAttrHelp("進程軟限制", '限制使用者可以創建的進程總數.所有現有的進程都將被計算在這個限制之內,而不僅僅是要啟動的新進程。<br/><br/>該限制可以在伺服器級別或單個外部應用級別進行設置.如果未在應用級別設置，則將使用伺服器級別的限制. 如果該值為0或伺服器級和應用級都沒有設置,將使用作業系統的預設設置', 'PHP scripts can call for forking processes. The main purpose of this limit is as a last line of defense to prevent fork bombs and other attacks caused by PHP processes creating other processes.<br/><br/>Setting this setting too low can severely hurt functionality. The setting will thus be ignored below certain levels.<br/><br/>When <b>Run On Start Up</b> is set to &quot;Yes (Daemon mode)&quot;, the actual process limit will be higher than this setting to make sure parent processes are not limited.', '整數', '');

$_tipsdb['proxyContext'] = new DAttrHelp("Proxy Context", 'A Proxy Context enables this virtual host as a transparent reverse proxy server. This proxy server can run in front of any web servers or application servers that support HTTP protocol. The External web server that this virtual host proxies for  has to be defined in &quot;外部應用&quot; before you can set up a Proxy Context.', '', '', '');

$_tipsdb['proxyProtocol'] = new DAttrHelp("PROXY protocol", 'List of IPs/subnets for front-end proxies that communicate with this server using PROXY protocol. Once set, the server will use PROXY protocol for incoming connections from listed IPs/subnets or fall back to a regular connection if PROXY protocol is unavailable.<br/><br/>Applies to HTTP, HTTPS, HTTP2, and websocket connections.', '', 'Comma delimited list of IP addresses or sub-networks.', '');

$_tipsdb['proxyWebServer'] = new DAttrHelp("Web伺服器", '指定外部Web伺服器的名稱。 此外部Web伺服器必須在伺服器或虛擬主機級別的&quot;外部應用&quot;中定義', '', '從列表中選擇', '');

$_tipsdb['quicBasePLPMTU'] = new DAttrHelp("PLPMTU 預設值", 'QUIC默認使用的PLPMTU (無報頭的最大資料包大小,以位元組為單位)的預設值. 設置為0將會允許QUIC設置大小.<br/><br/>這個設置必須低於 &quot;PLPMTU的最大值&quot; 的值.<br/><br/>Default value: 0', '', '0或1200至65527之間的整數', '');

$_tipsdb['quicCfcw'] = new DAttrHelp("流連接視窗控制", '為QUIC連接分配的緩衝區的初始大小。 預設值為 1.5M 。', '更大的視窗大小將使用更多的記憶體。', 'Number between 64K and 512M', '');

$_tipsdb['quicCongestionCtrl'] = new DAttrHelp("擁塞控制", '使用的擁塞控制演算法。 可以手動設置，也可以選擇“預設”選項，將其保留到的QUIC庫中。<br/><br/>預設值:: Default', '', '從列表中選擇', '');

$_tipsdb['quicEnable'] = new DAttrHelp("啟用HTTP3/QUIC", '在整個伺服器範圍內啟用HTTP3/QUIC網路通訊協定。 預設值為是。', '當此設置設置為是時，仍然可以通過&quot;打開HTTP3/QUIC (UDP) 埠&quot;設置在偵聽器級別 或通過&quot;Enable HTTP3/QUIC&quot;設置在虛擬主機級別禁用HTTP3/QUIC', '從單選框選擇', '');

$_tipsdb['quicEnableDPLPMTUD'] = new DAttrHelp("啟用 DPLPMTUD", '啟用 Datagram Packetization Layer Path Maximum Transmission Unit Discovery (DPLPMTUD).<br/><br/><b><a href="https://tools.ietf.org/html/rfc8899" target="_blank" rel="noopener noreferrer">Background on DPLPMTUD (RFC 8899)</a></b><br/><br/>Default value: Yes', '', '從單選框選擇', '');

$_tipsdb['quicHandshakeTimeout'] = new DAttrHelp("握手超時時間", '給出新的QUIC連接完成其握手的時間（以秒為單位），超過限制時間後連接將中止。 預設值為10。', '', 'Integer number between 1 and 15', '');

$_tipsdb['quicIdleTimeout'] = new DAttrHelp("空閒超時時間（秒）", '空閒的QUIC連接將被關閉的時間（以秒為單位）。 預設值為 30 。', '', 'Integer number between 10 and 30', '');

$_tipsdb['quicMaxCfcw'] = new DAttrHelp("最大連接流量視窗值設置", '指定由於連接流控制視窗緩衝區的最大大小 auto-tuning.<br/><br/>預設值為 0 ，這意味著將使用&quot;流連接視窗控制&quot;的值，並且不會自動調整。', '更大的視窗大小將使用更多的記憶體。', '0 or a number between 64K and 512M', '');

$_tipsdb['quicMaxPLPMTU'] = new DAttrHelp("PLPMTU的最大值", 'PLPMTU(無報頭的最大資料包,以位元組為單位)的上限. 此設置用於限制 在DPLPMTUD search space中&quot;最大資料包大小&quot;.  設置為0將會允許QUIC設置大小. (預設情況下LSQUIC暫定MTU為1,500 位元組 (乙太網)).<br/><br/>這個設置應該比&quot;PLPMTU 預設值&quot;的值高.<br/>Default value: 0', '', '0或1200至65527之間的整數', '');

$_tipsdb['quicMaxSfcw'] = new DAttrHelp("最大流量視窗值設置", '指定由於自動調整而允許流控制視窗達到的最大大小。<br/><br/>預設值為0，這意味著將使用&quot;連接流量視窗值&quot;的值，並且不會自動調整', '更大的視窗大小將使用更多的記憶體。', '0 or a number between 64K and 128M', '');

$_tipsdb['quicMaxStreams'] = new DAttrHelp("每個連接的最大併發數", '每個QUIC連接的最大併發數。 預設值為100。', '', 'Integer number between 10 and 1000', '');

$_tipsdb['quicSfcw'] = new DAttrHelp("連接流量視窗值", 'QUIC願意為每個流接收的初始資料量。 預設值為1M。', '更大的視窗大小將使用更多的記憶體。', 'Number between 64K and 128M', '');

$_tipsdb['quicShmDir'] = new DAttrHelp("QUIC SHM 目錄", '指定用於將QUIC資料保存到共用記憶體的目錄。<br/><br/>預設情況下，將使用伺服器的預設SHM目錄/dev/shm.', '建議使用基於RAM的分區(內存檔),例如 /dev/shm.', 'Path', '');

$_tipsdb['quicVersions'] = new DAttrHelp("HTTP3/QUIC版本", '啟用的HTTP3/QUIC版本的列表。 此設置僅應用於將HTTP3/QUIC支援限制為列出的版本，最好留空。', 'It is recommended to leave this setting blank to have the the best configuration applied automatically.', 'Comma-separated list', 'h3-29, h3-Q050');

$_tipsdb['railsDefaults'] = new DAttrHelp("Rack/Rails默認設置", 'Rack/Rails的預設配置. 這些設置可以被context級別覆蓋.', '', '', '');

$_tipsdb['rcvBufSize'] = new DAttrHelp("接收緩衝區大小 (bytes)", '每個TCP通訊端的接收緩衝區大小。 512K是允許的最大緩衝區大小。', '[性能建議] 建議將此值保留為“未設置”或設置為0以使用作業系統的預設緩衝區大小。<br/>[性能建議] 處理大載荷入站請求，如文件上傳時，大的接收緩衝區會提高性能。<br/>[性能建議] 將此值設置為較低的值將減少輸送量和每個通訊端的記憶體使用率，從而在記憶體成為瓶頸時允許伺服器擁有更多併發通訊端。', '整數', '');

$_tipsdb['realm'] = new DAttrHelp("域", '指定這個context下的realm授權。 當指定時，必須提供有效的用戶和用戶名來訪問這個context。 &quot;Realms授權&quot;需要在&quot;虛擬主機安全&quot;部分進行設置。 此設置使用每個realm的&quot;功能變數名稱稱&quot;。', '', '從列表中選擇', '');

$_tipsdb['realmName'] = new DAttrHelp("功能變數名稱稱", '指定授權域的唯一名稱。', '', '', '');

$_tipsdb['realms'] = new DAttrHelp("Realms授權", '列出這個虛擬主機的所有Realm。 Realm授權可以阻止未授權使用者訪問受保護的網頁。 Realm是一個用戶名錄，其中包含了用戶名、密碼、分組（可選）。授權是在context級別執行的。不同的context可以共用相同的Realm（使用者資料庫），所以Realm是與調用它的context分開定義的。你可以通過context配置中的名稱識別Realm。', '', '', '');

$_tipsdb['realtimerpt'] = new DAttrHelp("Real-Time Statistics", 'The Real-Time Statistics link leads to a page with a real-time server status report. This is a convenient tool to monitor the system.    The report shows a snapshot of your server statistics. The refresh rate for this snapshot  is controlled by the Refresh Interval drop-down list in the upper righthand corner.   The report contains the following sections: <ul><li>Server Health shows the basic server statistics, uptime, load, and anti-DDoS blocked IPs.</li>   <li>Server lists current traffic throughput, connections, and requests statistics.</li>  <li>Virtual Host shows request processing statuses and external application statuses for each virtual host.</li>  <li>External Application lists the external applications currently running and their usage statistics.   The CGI daemon process lscgid is always running as an external application.</li> </ul>   Many of the rows in the Real-Time Statistics feature a graph icon.  Clicking on this icon will open a graph of that row&#039;s statistics updated in real-time.   In the Server section, next to Requests, there is a link labeled (Details).  This link takes you to the Requests Snapshot, where you can view detailed information  on which clients are making certain kinds of requests or which aspects of your site  are bottlenecking. The fields in the blue area allow you to filter the snapshot to isolate  certain parts of your server or look for clients that are performing certain actions.', '', '', '');

$_tipsdb['recaptchaAllowedRobotHits'] = new DAttrHelp("允許的機器人點擊", '設置每10秒允許“好機器人”通過的點擊次數。 當伺服器處於高負載狀態時，僵屍程式仍會受到限制。<br/><br/>預設值是3.', '', '整數', '');

$_tipsdb['recaptchaBotWhiteList'] = new DAttrHelp("Bot白名單", '自訂允許訪問的使用者代理清單。 將受到“好機器人”的限制，包括allowedRobotHits。', '', '使用者代理清單，每行一個。 支持規則運算式。', '');

$_tipsdb['recaptchaMaxTries'] = new DAttrHelp("最大嘗試次數", '“最大嘗試次數”指定在拒絕訪客之前允許的最大reCAPTCHA次嘗試次數。<br/>預設值是 3.', '', '整數', '');

$_tipsdb['recaptchaRegConnLimit'] = new DAttrHelp("連接限制", '啟動reCAPTCHA所需的併發連接數（SSL和非SSL）。 在併發連接數高於該數位之前，將使用reCAPTCHA。<br/><br/>預設值是15000.', '', '整數', '');

$_tipsdb['recaptchaSecretKey'] = new DAttrHelp("密匙", '密匙是Google通過其reCAPTCHA服務提供的私密金鑰。 如未設置將使用默認的密匙', '', '', '');

$_tipsdb['recaptchaSiteKey'] = new DAttrHelp("網站密匙", '網站金鑰是Google通過其reCAPTCHA服務提供的公共金鑰。 如果未設置，將使用默認的網站金鑰。', '', '', '');

$_tipsdb['recaptchaSslConnLimit'] = new DAttrHelp("SSL連接限制", '啟動reCAPTCHA所需的併發SSL連接數。在併發連接數高於該數位之前，將使用reCAPTCHA。<br/><br/>預設值是 10000.', '', '整數', '');

$_tipsdb['recaptchaType'] = new DAttrHelp("reCAPTCHA類型", '指定要與金鑰對一起使用的reCAPTCHA類型。 如果未提供金鑰對，並且此設置設置為 未設置，將使用隱形類型的默認金鑰對。<br/>核取方塊將顯示一個核取方塊reCAPTCHA，以供訪問者驗證。<br/>隱形將嘗試自動驗證reCAPTCHA，如果成功，將重定向到所需的頁面。<br/><br/>預設值為隱形。', '', '從列表中選擇', '');

$_tipsdb['recaptchaVhReqLimit'] = new DAttrHelp("併發請求限制", '啟動reCAPTCHA所需的併發請求數。 當併發請求數超過該值時將啟用reCAPTCHA， 預設值為15000.', '', '整數', '');

$_tipsdb['redirectContext'] = new DAttrHelp("重定向 Context", 'A Redirect Context can be used to forward one URI or a group of URIs to another location. The destination URI can be either on the same web site (an internal redirect) or an absolute URI pointing to another web site (an external redirect).', '', '', '');

$_tipsdb['renegProtection'] = new DAttrHelp("SSL金鑰重新協商保護", '指定是否啟用SSL金鑰重新協商保護以 防禦基於SSL握手的攻擊。 預設值為“是”。', '可以在偵聽器和虛擬主機級別啟用此設置。', '從單選框選擇', '');

$_tipsdb['required'] = new DAttrHelp("Require（授權的用戶/組）", '指定哪些用戶/用戶組可以訪問此context。 這裡允許你使用一個使用者/組資料庫(在 &quot;域&quot;中指定)訪問多個context， 但只允許該資料庫下特定的使用者/組訪問這個context。', '', 'Syntax is compatible with Apache&#039;s Require directive. For example: <ul> <li>user username [username ...]<br/>Only listed users can access this context.</li> <li> group groupid [groupid ...]<br/>Only users belonging to the listed groups can access this context.</li> </ul> If this setting is not specified, all valid users will be allowed to access this resource.', '');

$_tipsdb['requiredPermissionMask'] = new DAttrHelp("必需的許可權遮罩", '為靜態檔指定必需的許可權遮罩。 例如，如果只允許所有人都可讀的檔可以被輸出，將該值設置為0004。 用man 2 stat命令瞭解所有可選值。', '', 'octal numbers', '');

$_tipsdb['respBuffer'] = new DAttrHelp("回應緩衝", '指定是否要從外部應用程式緩衝收到的回應。 如果nph-(Non-Parsed-Header)腳本被檢測到，則關閉具有完整HTTP頭的緩衝回應。', '', '從列表中選擇', '');

$_tipsdb['restart'] = new DAttrHelp("Apply Changes/Graceful Restart", 'By clicking Graceful Restart, a new server process will be started.  For Graceful Restart, the old server process will only exit after all requests  to it have been finished (or the &quot;平滑重啟超時時長(secs)&quot; limit has been reached).   Configuration changes are applied at the next restart.  Graceful Restart will apply these changes without any server downtime.', 'Graceful restart takes less than 2 seconds to generate a new server process.', '', '');

$_tipsdb['restrained'] = new DAttrHelp("訪問管制", '指定虛擬機器根($VH_ROOT)以外的檔是否可以通過這個網站訪問。 如果設置是Yes，只可以訪問$VH_ROOT下的檔， 訪問指向$VH_ROOT以外檔或目錄的符號連結或context指向都將被阻止。 儘管如此，這裡不會限制CGI腳本的訪問。 這個選項在共用主機下非常有用。 &quot;跟隨符號連結&quot;可以設置成Yes來允許用戶使用在$VH_ROOT下的符號連結， $VH_ROOT以外的則不可以。', '[安全建議] 在共用主機環境下打開該功能。', '從單選框選擇', '');

$_tipsdb['restrictedDirPermissionMask'] = new DAttrHelp("腳本目錄限制許可權遮罩", 'Specifies the restricted permission mask of parent directories of script files that the server will not serve. For example, to prohibit serving PHP scripts in a directory that is group and world writable, set the mask to 022. Default value is 000. This option can be used to prevent serving scripts under a directory of  uploaded files.<br/><br/>See man 2 stat for all values.', '', 'octal numbers', '');

$_tipsdb['restrictedPermissionMask'] = new DAttrHelp("限制許可權遮罩", '為不能輸出的靜態檔指定限制許可權遮罩。 例如，要禁止服務可執行檔，將遮罩設置為0111。<br/><br/>用man 2 stat命令瞭解所有可選值。', '', 'octal numbers', '');

$_tipsdb['restrictedScriptPermissionMask'] = new DAttrHelp("腳本限制許可權遮罩", '為不能服務的指令檔指定限制許可權遮罩。 例如，要禁止服務屬組可寫和全域可寫的PHP腳本， 設置遮罩為022。預設值是000。<br/><br/>用man 2 stat命令瞭解所有可選值。', '', 'octal numbers', '');

$_tipsdb['retryTimeout'] = new DAttrHelp("重試超時時間 (secs)", '指定伺服器在重試之前，等待出現通信問題的外部應用程式的時間。', '', '整數', '');

$_tipsdb['reusePort'] = new DAttrHelp("啟用REUSEPORT", '使用SO_REUSEPORT通訊端選項將傳入流量分配給多個工作進程。 此設置僅對multi-worker可證有效。 啟用後，所有工作程式都將自動綁定到此偵聽器，並且將忽略“綁定”配置。<br/><br/>Default value: On', '', '從單選框選擇', '');

$_tipsdb['rewriteBase'] = new DAttrHelp("重寫基準", '指定重寫規則的基準URL。', '', 'URL', '');

$_tipsdb['rewriteInherit'] = new DAttrHelp("重寫繼承", '指定是否從父級context繼承重寫規則。 如果啟用重寫但不繼承，將啟用本context的重寫基準及重寫規則。', '', '從單選框選擇', '');

$_tipsdb['rewriteLogLevel'] = new DAttrHelp("日誌級別", '指定重寫調試輸出的詳細程度。 此值的範圍是0-9。 設置為0將禁用日誌記錄。 設置為9將產生 最詳細的日誌。 伺服器和虛擬主機的錯誤日誌&quot;日誌級別&quot; 至少設置為INFO才能使此選項生效。 這對測試重寫規則很有説明。', '', '整數', '');

$_tipsdb['rewriteMapLocation'] = new DAttrHelp("Location", 'Specifies the location of the rewrite map using the syntax MapType:MapSource.<br/>LiteSpeed&#039;s rewrite engine supports three types of rewrite maps: <ul> 	<li><b>Standard Plain Text</b> <blockquote> 		<b>MapType:</b> txt; <br/>		<b>MapSource:</b> file path to a valid plain ASCII file.  </blockquote> 		Each line of this file should contain two elements separated  		by blank spaces. The first element is the key and the second 		element is the value. Comments can be added with a leading &quot;#&quot; 		sign.  	</li> 	<li><b>Randomized Plain Text</b> <blockquote> 		<b>MapType:</b> rnd;<br/>		<b>MapSource:</b> file path of a valid plain ASCII file. </blockquote> 		File format is similar to the Standard Plain Text file, except that the 		second element can contain multiple choices separated by a &quot;|&quot; 		sign and chosen randomly by the rewrite engine. 	</li> 	<li><b>Internal Function</b> <blockquote> 	    <b>MapType:</b> int;<br/>		<b>MapSource:</b> Internal string function  </blockquote> 		4 functions are available: 		<ul> 			<li><b>toupper:</b> converts lookup key to upper cases.</li> 			<li><b>tolower:</b> converts lookup key to lower cases.</li> 			<li><b>escape:</b> perform URL encoding on lookup key.</li> 			<li><b>unescape:</b> perform URL decoding on lookup key.</li> 		</ul> 	</li> 	The following map types available in Apache 	have not been implemented in LiteSpeed:<br/>Hash File and External Rewriting Program. </ul> The implementation of LiteSpeed&#039;s rewrite engine follows the specifications of Apache&#039;s rewrite engine. For more details about rewrite map, please refer to <a href="   http://httpd.apache.org/docs/current/mod/mod_rewrite.html " target="_blank" rel="noopener noreferrer">   Apache&#039;s mod_rewrite document </a>.', '', 'String', '');

$_tipsdb['rewriteMapName'] = new DAttrHelp("名稱", 'Specifies a unique name for the rewrite map at the virtual host  level. This name will be used by a mapping-reference in rewrite rules. When referencing this name, one of the following syntaxes should be used: <blockquote><code> $\{MapName:LookupKey\}<br/>$\{MapName:LookupKey|DefaultValue\} </code></blockquote><br/>The implementation of LiteSpeed&#039;s rewrite engine follows the specifications of Apache&#039;s rewrite engine. For more details about rewrite maps, please refer to <a href="   http://httpd.apache.org/docs/current/mod/mod_rewrite.html " target="_blank" rel="noopener noreferrer">   Apache&#039;s mod_rewrite document </a>.', '', 'string', '');

$_tipsdb['rewriteRules'] = new DAttrHelp("重寫規則", '指定虛擬主機級別的重寫規則。<br/><br/>請勿在此處添加任何目錄級重寫規則。 如果您在.htaccess有任何目錄級的重寫規則，則應該使用uri&quot;/&quot;創建一個靜態context， 並在那裡添加重寫規則。 <br/><br/>重寫規則由一個RewriteRule組成，並可哥以在多個RewriteCond之後。 <ul>   <li>每行僅能有一條規則</li>   <li>     RewriteCond 和 RewriteRule 遵循Apache的rewrite語法。 只需從Apache設定檔中複製並粘貼重寫規則即可。   </li>   <li>     LiteSpeed和Apache mod_rewrite之間有細微差別：     <ul>       <li>         %\{LA-U:variable\} and %\{LA-F:variable\} 在Litespeed 重寫中將被忽略       </li>       <li>         Litespeed中加入了兩個新變數:         %\{CURRENT_URI\}表示正在處理的URL         %\{SCRIPT_NAME\}表示為相應的CGI環境變數。       </li>       <li>         Litespeed在遇到[L]後為了避免迴圈將停止處理此及此後的重寫規則         而Apache mod_rewrite將僅停止處理該條重寫規則。此行為類似於apachemod_rewrite中的[END]標誌。       </li>     </ul>   </li> </ul><br/>LiteSpeed的重寫規則遵循Apache的重寫規範。  有關重寫規則的更多詳細資訊，請參閱 <a href="   http://httpd.apache.org/docs/current/mod/mod_rewrite.html " target="_blank" rel="noopener noreferrer">   Apache&#039;s mod_rewrite document(英文文檔) </a> 和 <a href="   http://httpd.apache.org/docs/current/rewrite/ " target="_blank" rel="noopener noreferrer">   Apache&#039;s URL rewriting guide(英文文檔) </a>.', '', 'string', '');

$_tipsdb['rubyBin'] = new DAttrHelp("Ruby路徑", 'Ruby可執行檔的路徑。 通常是 /usr/bin/ruby 或 /usr/local/bin/ruby (取決於Ruby的安裝文章)', '', '絕對路徑', '');

$_tipsdb['runOnStartUp'] = new DAttrHelp("開機自啟", '指定是否在伺服器啟動時啟動外部應用程式.  只適用於可以管理自己子進程的外部應用程式，並且&quot;實例數&quot;值設置為&quot;1&quot;。<br/><br/>如果啟用，將在伺服器啟動時而不是運行時創建外部進程.<br/><br/>When selecting &quot;Yes (Detached mode)&quot;, all detached process can be restarted at the Server level or Virtual Host level by touching the &#039;.lsphp_restart.txt&#039; file under the $SERVER_ROOT/admin/tmp/ or $VH_ROOT/ directory respectively.<br/><br/>Default value: Yes (Detached mode)', '[性能建議] 如果配置的外部進程有很大的啟動開銷，比如Rails，那麼應該啟用這個選項來減少首頁回應時間。', '從單選框選擇', '');

$_tipsdb['runningAs'] = new DAttrHelp("運行方式", '指定伺服器進程運行的使用者/組。 在安裝之前運行configure命令時，使用參數“--with-user”和“ --with-group”進行設置。 要重置這些值，必須重新運行configure命令並重新安裝。', '[安全] 伺服器不應該以特權用戶列如&quot;root&quot;來運行. 將伺服器配置為以非特權使用者/組運行非常重要 沒有登入和Shell的許可權 nobody用戶(組)通常是個不錯的選擇.', '', '');

$_tipsdb['servAction'] = new DAttrHelp("Actions", 'Six actions are available from this menu: Graceful Restart, Toggle Debug Logging, Server Log Viewer, Real-Time Statistics,  Version Manager, and Compile PHP.  <ul><li>&quot;Apply Changes/Graceful Restart&quot; restarts server process gracefully without interrupting requests in process.</li> 	<li>&quot;Toggle Debug Logging&quot; turns debug logging on or off.</li> 	<li>&quot;Server Log Viewer&quot; allows you to view the server log through the log viewer.</li> 	<li>&quot;Real-Time Statistics&quot; allows you to view real-time server status.</li> 	<li>&quot;Version Management&quot; allows you to download new versions of LSWS and switch between different versions. 	<li>Compile PHP allows you to compile PHP for LiteSpeed Web Server. </ul>', 'The shell utility $SERVER_ROOT/bin/lswsctrl can be used to control the server processes as well,  but requires a login shell.', '', '');

$_tipsdb['servModules'] = new DAttrHelp("Server Modules", 'The Server module configuration globally defines the module configuration data.  Once defined, the Listeners and Virtual Hosts have access to the modules and module configurations. <br/><br/>All modules that are to be processed must be registered in the Server configuration. The Server configuration also  defines the default values for module parameter data.  These values can be inherited  or overridden by the Listener and Virtual Host configuration data.<br/><br/>Module priority is only defined at server level and is inherited by the Listener and Virtual Host configurations.', '', '', '');

$_tipsdb['serverName'] = new DAttrHelp("伺服器名稱", '該伺服器的唯一名稱。您可以在此填寫 $HOSTNAME 。', '', '', '');

$_tipsdb['serverPriority'] = new DAttrHelp("優先順序", '指定服務進程的優先順序。數值範圍從 -20 到 20。數值越小，優先順序越高。', '[性能] 通常，較高的優先順序會導致繁忙的伺服器上的Web性能稍有提高。 不要將優先順序設置為高於資料庫進程的優先順序。', 'Integer number', '');

$_tipsdb['servletContext'] = new DAttrHelp("Servlet Context", 'Servlets can be imported individually through Servlet Contexts. A Servlet Context just specifies the URI for the servlet and the name of the servlet engine. You only need to use this when you do not want to import the whole web application or you want to protect different servlets with different authorization realms. This URI has the same requirements as for a &quot;Java Web App Context&quot;.', '', '', '');

$_tipsdb['servletEngine'] = new DAttrHelp("Servlet Engine", '指定為該Web應用程式提供服務的Servlet Engine的名稱。 Servlet引擎必須在伺服器或虛擬主機級別的&quot;外部應用&quot;中定義。', '', '從列表中選擇', '');

$_tipsdb['setUidMode'] = new DAttrHelp("外部應用程式設置UID模式", '定如何為外部程式進程設置使用者ID。可以選擇下面三種方式： <ul><li>Server UID: 為外部應用程式設置與伺服器使用者/組ID相同的用戶/組ID。</li>     <li>CGI File UID: 為外部應用CGI程式設置基於可執行檔的使用者/組ID。該選項僅適用於CGI，不適用於FastCGI或LSPHP。</li>     <li>Doc Root UID: 為外部應用程式設置基於當前虛擬機器根目錄的使用者/組ID。</li> </ul><br/><br/>Default value: Server UID', '[安全建議] 在共用主機環境中，建議使用CGI File UID  或 Doc Root UID模式來防止一個虛擬主機下的檔被另一個虛擬主機的外部應用程式訪問。', '從列表中選擇', '');

$_tipsdb['shHandlerName'] = new DAttrHelp("處理器名稱", '當處理器類型為FastCGI，Web伺服器，LSAPI，負載等化器或Servlet引擎時， 指定處理指令檔的外部程式名稱。', '', '從列表中選擇', '');

$_tipsdb['shType'] = new DAttrHelp("類型", '指定處理這些指令檔的外部程式類型。 可用類型有：CGI, FastCGI, Web伺服器, LSAPI應用程式, 負載等化器, 或 Servlet引擎。 對於FastCGI, Web伺服器和Servlet引擎，需要指定&quot;處理器名稱&quot;。 這是在&quot;外部應用&quot;部分預設定的外部程式名稱。', '', '從列表中選擇', '');

$_tipsdb['shmDefaultDir'] = new DAttrHelp("預設SHM目錄", '將共用記憶體的預設目錄更改為指定的路徑。 如果該目錄不存在，則將創建該目錄。除非另有說明，否則所有SHM資料都將存儲在此目錄中。', '', 'path', '');

$_tipsdb['showVersionNumber'] = new DAttrHelp("伺服器簽名", '指定是否在響應頭的Server參數中顯示伺服器簽名和版本號。 有三個選項: 當設置為Hide Version時、只顯示LiteSpeed。當設置為 Show Version，顯示LiteSpeed和版本號。  設置為Hide Full Header時，整個Server頭都不會顯示在回應報頭中。', '[安全建議] 如果你不想暴露伺服器的版本號，設置為Hide Version。', '從列表中選擇', '');

$_tipsdb['sname'] = new DAttrHelp("Name - Server", 'The unique name that identifies this server. This is the  &quot;伺服器名稱&quot; specified in the general configuration.', '', '', '');

$_tipsdb['sndBufSize'] = new DAttrHelp("發送緩衝區大小", '每個TCP通訊端的發送緩衝區的大小。設定值為0使用 作業系統預設的緩衝區大小。65535是允許的最大緩衝區大小。', '[性能建議] 建議將此值保留為“未設置”或設置為0以使用作業系統的預設緩衝區大小。<br/>[性能建議] 如果您的網站服務大量的靜態檔，增加發送緩衝區 大小來提高性能。<br/>[性能建議] 將此值設置為較低的值將減少輸送量和每個通訊端的記憶體使用率，從而在記憶體成為瓶頸時允許伺服器擁有更多併發通訊端。', '整數', '');

$_tipsdb['softLimit'] = new DAttrHelp("連接軟限制", '指定來自單個IP的併發連接的軟限制。 併發連接數低於&quot;連接硬限制&quot;時，此軟限制可以在&quot;寬限期（秒）&quot;期間臨時超過， 但Keep-Alive連接將被儘快斷開，直到連接數低於軟限制。 如果&quot;寬限期（秒）&quot;之後，連接數仍然超過軟限制，相應的IP將被封鎖 &quot;禁止期（秒）&quot;所設置的時長。<br/>例如，如果頁面包含許多小圖像，流覽器可能會嘗試同時建立許多連接，尤其是HTTP/1.0用戶端。你應當在短時間內允許這些連接。<br/><br/>HTTP/1.1用戶端還可能建立多個連接，以加快下載，另外SSL需要為非SSL連接建立單獨的連接。確保限制設置正確， 以免影響正常服務。建議限制在5與10之間。', '安全建議] 一個較低的數位將使得伺服器可以服務更多獨立的客戶。<br/>[安全建議] 受信任的IP或子網不受影響。<br/>[性能建議] 使用大量併發用戶端進行性能評測時，請設置一個較高的值。', '整數', '');

$_tipsdb['sslCert'] = new DAttrHelp("SSL私密金鑰和證書", '每個SSL偵聽器都需要成對的SSL私密金鑰和SSL證書。 多個SSL偵聽器可以共用相同的金鑰和證書。<br/>您可以使用SSL套裝軟體自行生成SSL私密金鑰， 例如OpenSSL。 SSL證書也可以從授權憑證授權（如VeriSign或Thawte）購買。 您也可以自己簽署證書。 自簽章憑證將不受Web流覽器的信任，並且不應在公共網站上使用。 但是，自簽章憑證足以供內部使用，例如 用於加密到LiteSpeed Web伺服器的WebAdmin控制台的流量。', '', '', '');

$_tipsdb['sslDefaultCiphers'] = new DAttrHelp("預設密碼套件", 'SSL證書的預設密碼套件。<br/><br/>Default value: Server Internal Default (Based on current best practices)', '', 'Colon-separated string of cipher specifications.', '');

$_tipsdb['sslEnableMultiCerts'] = new DAttrHelp("啟用多個SSL證書", '允許偵聽器/虛擬主機設置多個SSL證書。 如果啟用了多個證書，則證書/金鑰應遵循命名方案。 如果證書名為server.crt，則其他可能的證書名稱為server.crt.rsa， server.crt.dsa，server.crt.ecc。 如果為“未設置”，則默認為“否”。', '', '從單選框選擇', '');

$_tipsdb['sslOCSP'] = new DAttrHelp("OCSP裝訂", '線上證書狀態協定（OCSP）是更加有效的檢查數位憑證是否有效的方式。 它通過與另一台伺服器（OCSP回應伺服器）通信，以獲取證書有效的驗證，而不是通過憑證撤銷清單（CRL）進行檢查。<br/><br/>OCSP裝訂是對該協議的進一步改進，允許伺服器以固定的時間間隔而不是每次請求證書時與OCSP回應程式進行檢查。 有關更多詳細資訊，請參見<a href="   https://zh.wikipedia.org/wiki/%E5%9C%A8%E7%BA%BF%E8%AF%81%E4%B9%A6%E7%8A%B6%E6%80%81%E5%8D%8F%E8%AE%AE " target="_blank" rel="noopener noreferrer">   OCSP Wikipedia頁面 </a>。', '', '', '');

$_tipsdb['sslOcspProxy'] = new DAttrHelp("OCSP Proxy", 'Socket address used as the proxy server address for OCSP verification. Leave this setting unset If not using a proxy.<br/><br/>Default value: not set', '', 'Socket Address', '');

$_tipsdb['sslProtocolSetting'] = new DAttrHelp("SSL協議", '自訂偵聽器接受的SSL協議。', '', '', '');

$_tipsdb['sslSessionCache'] = new DAttrHelp("啟用SSL會話緩存", '使用OpenSSL的默認設置啟用會話ID緩存。 伺服器級別設置必須設置為“是”才能使虛擬主機設置生效。<br/>預設值:<br/><b>伺服器級別:</b> Yes<br/><b>虛擬主機級別:</b> Yes', '', '從單選框選擇', '');

$_tipsdb['sslSessionCacheSize'] = new DAttrHelp("會話緩存大小 (bytes)", '設置要存儲在緩存中的SSL會話ID的最大數量。 預設值為1,000,000。', '', 'Integer number', '');

$_tipsdb['sslSessionCacheTimeout'] = new DAttrHelp("會話緩存過期時間 (secs)", '此值確定需要重新握手之前，會話ID在緩存中有效的時間。 預設值為 3,600.', '', 'Integer number', '');

$_tipsdb['sslSessionTicketKeyFile'] = new DAttrHelp("SSL會話記錄單金鑰檔", 'Allows the SSL Ticket Key to be created/maintained by an administrator. The file must be 48 bytes long. If this option is left empty, the load balancer will generate and rotate its own set of keys.<br/><br/>IMPORTANT: To maintain forward secrecy, it is strongly recommended to change the key every <b>SSL Session Ticket Lifetime</b> seconds. If this cannot be done, it is recommended to leave this field empty.', '', 'Path', '');

$_tipsdb['sslSessionTicketLifetime'] = new DAttrHelp("SSL會話記錄單生存時間(secs)", '此值確定需要重新握手之前會話記錄單有效的時間。 預設值為3600。', '', 'Integer number', '');

$_tipsdb['sslSessionTickets'] = new DAttrHelp("啟用會話記錄單", '使用OpenSSL的默認會話票證設置啟用會話記錄單。 伺服器級別設置必須設置為“是”才能使虛擬主機設置生效。<br/>預設值:<br/><b>伺服器級別:</b> Yes<br/><b>虛擬主機級別:</b> Yes', '', '從單選框選擇', '');

$_tipsdb['sslStrictSni'] = new DAttrHelp("Strict SNI Certificate", 'Specifies whether to strictly require a dedicated virtual host certificate configuration. When enabled, SSL connections to virtual hosts without a dedicated certificate configuration will fail instead of using a default catch-all certificate.<br/><br/>Default value: No', '', '從單選框選擇', '');

$_tipsdb['sslStrongDhKey'] = new DAttrHelp("SSL強DH金鑰", '指定是使用2048位還是1024位DH金鑰進行SSL握手。 如果設置為“是”，則2048位DH金鑰將用於2048位SSL金鑰和證書。 在其他情況下，仍將使用1024位DH金鑰。 預設值為“是”。 Java的早期版本不支援大於1024位的DH金鑰大小。 如果需要Java用戶端相容性，則應將其設置為“否”。', '', 'radio', '');

$_tipsdb['statDir'] = new DAttrHelp("統計輸出目錄", '即時統計報告檔將寫入的目錄。 預設目錄是 <b>/tmp/lshttpd/</b> .', '在伺服器操作期間，.rtreport檔將每秒寫入一次。 為避免不必要的磁片寫入，請將其設置為RAM磁片。<br/>.rtreport檔可以與協力廠商監控軟體一起使用，以跟蹤伺服器的運行狀況。', '絕對路徑', '');

$_tipsdb['staticReqPerSec'] = new DAttrHelp("靜態請求/秒", '指定每秒可處理的來自單個IP的靜態內容請求數量（無論與該IP之間建立了多少個連接）。<br/><br/>當達到此限制時，所有後來的請求將被延滯到下一秒。 對於動態內容請求的限制與本限制無關。 每個用戶端的請求限制可以在伺服器或虛擬主機級別設置。 虛擬主機級別的設置將覆蓋伺服器級別的設置。', '[安全] 受信任的IP或子網不受影響。', '整數', '');

$_tipsdb['statuscode'] = new DAttrHelp("狀態碼", '指定外部重定向回應狀態碼。 如果狀態碼在300和399之間，可以指定&quot;目標URI&quot;。', '', '從列表中選擇', '');

$_tipsdb['suexecGroup'] = new DAttrHelp("suEXEC組", '在當前context 級別，以該組身份運行。 必須將虛擬主機級別的<b>suEXEC使用者</b>或外部應用程式級別的<b>使用者運行身份</b>設置為<b>suEXEC Group</b>才能生效。<br/><br/>可以使用<b>運行方式組</b>設置在外部應用程式級別覆蓋此配置。<br/>Default value: <b>suExec User</b> setting value', '', 'Valid group name or uid', '');

$_tipsdb['suexecUser'] = new DAttrHelp("suEXEC 用戶", '在當前context 級別，以該用戶身份運行。 如果設置了該項，則該值將覆蓋虛擬主機級別<b>外部應用程式設置UID模式</b>的設置。<br/><br/>此配置可被外部應用程式級別的<b>以使用者身份運行</b>設置覆蓋。<br/><br/>Default value: Not Set', '', 'Valid user name or uid.', '');

$_tipsdb['suffix'] = new DAttrHelp("尾碼", '指定將由此腳本處理常式處理的指令檔尾碼。 尾碼必須是唯一的。', '伺服器將為列表中的第一個尾碼自動添加特殊的MIME類型 (&quot;application/x-httpd-[suffix]&quot;) 。 例如，將為尾碼“ php53”添加MIME類型“ application/x-httpd-php53”。 首先需要在&quot;MIME設置&quot;設置中設置尾碼。<br/>儘管我們在此欄位中列出了尾碼，但是腳本處理常式使用MIME類型而非尾碼來確定要處理的腳本。<br/>[性能和安全建議] 僅指定您真正需要的尾碼。', 'Comma delimited list with period &quot;.&quot; character prohibited.', '');

$_tipsdb['swappingDir'] = new DAttrHelp("交換目錄", '指定交換檔的存放目錄。 伺服器在chroot模式啟動時，該路徑相對於新的根目錄， 否則，它相對於真正的根目錄。<br/><br/>Litespeed使用自己的虛擬記憶體 以降低系統的記憶體使用量。虛擬記憶體和磁片交換會用來存儲大的請求內容和 動態回應。交換目錄應設置在有足夠剩餘空間的磁片上。<br/><br/>預設值: /tmp/lshttpd/swap', '[性能建議] 將交換目錄設置在一個單獨的磁片上，或者增加最大讀寫緩衝區大小以避免交換。', '絕對路徑', '');

$_tipsdb['templateFile'] = new DAttrHelp("範本檔", '指定此範本設定檔的路徑。 該檔必須位於$SERVER_ROOT/conf/templates/中，且檔案名帶有“ .conf”。 如果您指定的檔不存在，則在嘗試保存範本後，將出現錯誤，為“CLICK TO CREATE”。  點擊該連結將生成一個新的空範本檔。 當您刪除範本時，該條目將從您的配置中刪除，但實際的範本設定檔不會被刪除。', '', 'path', '');

$_tipsdb['templateFileRef'] = new DAttrHelp("範本中的檔案名", 'Specifies a path for the file to be used for member virtual hosts.   Variable $VH_NAME or $VH_ROOT must appear in the path so  each member virtual host will have its own file.', '', 'string', '');

$_tipsdb['templateName'] = new DAttrHelp("範本名稱", '範本的唯一名稱。', '', '', '');

$_tipsdb['templateVHAliases'] = new DAttrHelp("別名", '指定虛擬主機的備用名稱。 所有可能的主機名稱和IP位址都應添加到此列表中。 名稱中允許使用萬用字元 * 和 ?。 為不在埠80上的網站附加:<port>。<br/><br/>別名將在以下情況下使用： <ol>   <li>在處理請求時匹配主機標頭中的主機名稱。</li>   <li>作為諸如FrontPage或AWstats之類的功能變數名稱配置.</li>  <li>基於虛擬主機範本配置偵聽器到虛擬主機的映射。</li> </ol>', '', 'Comma-separated list of domain names.', '');

$_tipsdb['templateVHConfigFile'] = new DAttrHelp("Instantiated VHost Config file", 'Specifies the location of the config file generated when you instantiate a member virtual host.  Variable $VH_NAME must appear in the path so each virtual host will have its own file. Must be located under  $SERVER_ROOT/conf/vhosts/. This config file will be created only after you move a member vhost out of the template  through instantiation.', '$VH_NAME/vhconf.conf is recommended for easy management.', 'String with $VH_NAME variable and .conf suffix', '');

$_tipsdb['templateVHDocRoot'] = new DAttrHelp("檔根目標", 'Specifies the unique path for each member virtual host&#039;s document root.   Variable $VH_NAME or $VH_ROOT must appear in the path so  each member virtual host will have its own document root.', '', 'path with $VH_NAME or $VH_ROOT variable', '$VH_ROOT/public_html/ or $SERVER_ROOT/$VH_NAME/public_html.');

$_tipsdb['templateVHDomain'] = new DAttrHelp("功能變數名稱", '指定該成員虛擬主機的主功能變數名稱。 如果留白，將使用成員虛擬主機名稱, 這應該是符合標準的功能變數名稱,但是您也可以使用IP位址。 對於不在埠80上的網站，建議附加:<port> 對於包含功能變數名稱的配置，可以使用變數$VH_DOMAIN來引用此域。<br/><br/>該功能變數名稱將在以下情況下使用： <ol>   <li>在處理請求時匹配主機標頭中的主機名稱。</li>   <li>作為諸如FrontPage或AWstats之類的功能變數名稱配置.</li>  <li>基於虛擬主機範本配置偵聽器到虛擬主機的映射。</li> </ol>', '', 'domain name', '');

$_tipsdb['templateVHName'] = new DAttrHelp("虛擬主機名稱", '此虛擬主機的唯一名稱。 該名稱在所有的虛擬主機範本和虛擬主機中不得重複。 在目錄路徑配置中，此名稱可以由變數$VH_NAME引用。<br/><br/>如果還配置了具有相同名稱的虛擬主機，則虛擬主機的配置將被忽略。', '', '', '');

$_tipsdb['templateVHRoot'] = new DAttrHelp("預設虛擬主機根", '指定使用此範本的成員虛擬主機的預設根目錄。.  Variable $VH_NAME must appear in the path. This will allow each member template  to be automatically assigned a separate root directory based on its name.', '', 'path', '');

$_tipsdb['toggleDebugLog'] = new DAttrHelp("Toggle Debug Logging", 'Toggle Debug Logging toggles the value of &quot;調試級別&quot; between NONE and HIGH.  As debug logging has an impact on performance and can fill up the hard drive quickly, so &quot;調試級別&quot; should usually be set to NONE on a production server.  This feature can be used instead to turn debug logging on and off quickly  in order to debug a problem on a production server. Debug logging turned on or  off in this way will not change anything shown in your server configurations.', '&quot;Toggle Debug Logging&quot; will only work if &quot;日誌級別&quot;  is set to DEBUG.   Important! Debug logging includes detailed information for each  request and response. Active debug logging will severely degrade service performance and potentially saturate disk space in a very short time. This feature should only be  used for a short period of time when trying to diagnose server issues.', '', '');

$_tipsdb['totalInMemCacheSize'] = new DAttrHelp("小文件緩存總大小 (bytes)", '指定分配用於緩存/服務小靜態檔的總記憶體。', '', '整數', '');

$_tipsdb['totalMMapCacheSize'] = new DAttrHelp("總MMAP緩存大小 (bytes)", '指定分配用於緩存/服務中等大小靜態檔的總記憶體。', '', '整數', '');

$_tipsdb['umask'] = new DAttrHelp("umask", '設置CGI進程預設的umask。 通過 man 2 umask命令瞭解詳細資訊。這也可作為外部應用程式&quot;umask&quot;的預設值。', '', '數值有效範圍為[000] - [777]', '');

$_tipsdb['uploadPassByPath'] = new DAttrHelp("通過檔路徑傳遞上傳資料", '指定是否按檔路徑傳遞上傳資料。 如果啟用，則上傳時檔路徑以及其他一些資訊將發送到後端處理常式，而不是檔本身。 這樣可以節省CPU資源和檔案傳輸時間，但需要一些更新才能實現。 如果禁用，則檔內容將傳輸到後端處理常式，請求主體仍解析為檔。', '[性能] 如果向下相容不是問題，啟用此功能可加快檔上傳處理速度。', '從單選框選擇', '');

$_tipsdb['uploadTmpDir'] = new DAttrHelp("暫存檔案路徑", '在掃描請求正文工作時，上傳到伺服器的檔將存放在臨時目錄中  預設值為/tmp/lshttpd/.', '', 'Absolute path or path starting with $SERVER_ROOT (for Server and VHost levels) or $VH_ROOT (for VHost levels).', '');

$_tipsdb['uploadTmpFilePermission'] = new DAttrHelp("暫存檔案許可權", '設置<b>暫存檔案路徑</b>目錄中的檔許可權。 伺服器級別是全域設置，可以被虛擬主機級別的設置覆蓋。', '', '3 digits octet number. Default value is 666.', '');

$_tipsdb['uri'] = new DAttrHelp("URI", '指定此context下的URI。這個URI應該以&quot;/&quot;開始。 如果一個URI以&quot;/&quot;結束，那麼該context將包含這個URI下的所有下級URI。', '', 'URI', '');

$_tipsdb['useAIO'] = new DAttrHelp("Use AIO", 'Specifies whether to use asynchronous I/O to serve static files along with the AIO implementation to use. Options LINUX AIO and io_uring are only available on Linux machines.<br/><br/>Default value: No', ' AIO can help improve performance in servers with a high I/O wait.<br/> When io_uring is selected but not supported on the current machine, Linux AIO will be used instead.', '從列表中選擇', '');

$_tipsdb['useIpInProxyHeader'] = new DAttrHelp("使用報頭中的用戶端IP", '指定是否將在HTTP請求報頭中的X-Forwarded-For參數列出的IP位址，用於 所有的IP位址相關的功能，包括 連接/頻寬限制、存取控制和IP地理定位。<br/><br/>如果你的Web伺服器放置在負載等化器或代理伺服器之後，此功能非常有用。 如果您選擇了“僅限受信任的IP”，只有在請求來自受信任IP時，X-Forwarded-For 中的IP才會被使用。受信任IP可在伺服器級別的&quot;允許列表&quot;中定義。<br/><br/>來自受信任IP的保留標頭與僅受信任IP 相同，但是用於後端的X-Forwarded-For標頭不會被修改為包括連接對等位址。<br/><br/>使用最後一個IP (對與 AWS ELB)將使用 &quot;X-Forwarded-For &quot;列表中的最後一個 IP 位址。如果您正在使用 AWS Elastic Load Balancer 或期望將真實 IP 附加到 &quot;X-Forwarded-For &quot;清單的末尾，請選擇此選項。', '', '從列表中選擇', '');

$_tipsdb['useSendfile'] = new DAttrHelp("使用sendfile()", '指定是否使用sendfile()系統調用來服務靜態檔。靜態檔 可以用四種不同的方式服務：記憶體緩存、記憶體映射緩存、直接讀寫和 sendfile()。 尺寸小於&quot;最大小文件緩存(bytes)&quot;的檔將使用記憶體緩存服務。尺寸大於該限制、但小於 &quot;最大MMAP文件大小(bytes)&quot;的檔，將使用記憶體映射緩存服務。 尺寸大於&quot;最大MMAP文件大小(bytes)&quot;的檔將通過直接讀寫或sendfile() 服務。Sendfile()是一個“零拷貝”系統調用，可在服務非常大的 檔時大大減少CPU的使用率。Sendfile()需要一個優化的網卡內核驅動， 因此可能不適合某些小廠商的網路介面卡。', '', '從單選框選擇', '');

$_tipsdb['userDBCacheTimeout'] = new DAttrHelp("使用者資料庫緩存超時 (secs)", '指定多久檢查一次後端使用者資料庫變更。 在緩存中每個條目都有一個時間戳記。 當緩存日期超過指定的超時時間時，將檢查後端資料庫是否有變化。 如果沒有，時間戳記將被重置為當前時間，否則會將新的資料載入。 伺服器重載和平滑重啟會立即清除緩存。', '[性能建議] 如果後端資料庫不經常發生變更，設置較長的緩存時間來獲得更好的性能。', '整數', '');

$_tipsdb['userDBLocation'] = new DAttrHelp("使用者資料庫位址", '指定使用者資料庫的位置。 建議將資料庫存儲在$ SERVER_ROOT / conf / vhosts / $ VH_NAME /目錄下。<br/><br/>對於類型為Password File的資料庫，應設置為包含用戶名/密碼的展平檔的路徑。 您可以在WebAdmin控制台中點擊檔案名來進行修改。<br/>用戶檔的每一行都包含一個用戶名，後跟一個冒號，然後是一個crypt()加密的密碼，後面還可以跟一個冒號和用戶所屬的組。多個組名用逗號隔開。<br/><br/>Example:<blockquote><code>john:HZ.U8kgjnMOHo:admin,user</code></blockquote>', '', 'Path to user DB file.', '');

$_tipsdb['userDBMaxCacheSize'] = new DAttrHelp("使用者資料庫最大緩存大小", '指定使用者資料庫的最大緩存大小。 最近訪問的使用者認證資訊會被緩存在記憶體中以提供最佳性能。', '[性能建議] 由於更大的緩存會消耗更多的記憶體，更高的值可能會也可能不會提供更好的性能。 請根據您的使用者資料庫大小和網站使用情況來設定一個合適的大小。', '整數', '');

$_tipsdb['vaction'] = new DAttrHelp("Actions - Virtual Host", 'This field shows buttons to disable, enable, or restart the virtual host.   Actions taken on one virtual host do not affect the rest of the web server.', 'It is good idea to disable a virtual host temporarily when updating its content.', '', '');

$_tipsdb['vdisable'] = new DAttrHelp("Disable", 'The Disable action stops a running virtual host. New requests will not be accepted, but requests being processed will finish as usual.', '', '', '');

$_tipsdb['venable'] = new DAttrHelp("Enable", 'The Enable action starts up a stopped virtual host.   This allows new requests to be accepted.', '', '', '');

$_tipsdb['verifyDepth'] = new DAttrHelp("驗證深度", ' Specifies how deeply a certificate should be verified before determining that the client does not have a valid certificate. The default is &quot;1&quot;.', '', '從列表中選擇', '');

$_tipsdb['vhEnableBr'] = new DAttrHelp("Brotli 壓縮", '指定是否為此虛擬主機啟用Brotli壓縮。 這個設置僅在伺服器級&quot;Brotli 壓縮等級 (靜態檔)&quot;設置為一個非零值時有效.', '', '從單選框選擇', '');

$_tipsdb['vhEnableGzip'] = new DAttrHelp("啟用 GZIP 壓縮", '指定是否為此虛擬主機啟用GZIP壓縮。 這個設置僅在伺服器級&quot;啟用GZIP壓縮&quot; 設置為 Yes時有效.', '', '從單選框選擇', '');

$_tipsdb['vhEnableQuic'] = new DAttrHelp("Enable HTTP3/QUIC", 'Enables the HTTP3/QUIC network protocol for this virtual host. For this setting to take effect, both &quot;啟用HTTP3/QUIC&quot; and &quot;打開HTTP3/QUIC (UDP) 埠&quot; must also be set to Yes at the server and listener levels respectively. Default value is Yes.', 'When this setting is set to No, the HTTP3/QUIC advertisement will no longer be sent. If a browser still contains cached HTTP3/QUIC information and HTTP3/QUIC is still enabled at the server and listener levels, an HTTP3/QUIC connection will continue to be used until this information is no longer cached or an HTTP3/QUIC protocol error is encountered.', '從單選框選擇', '');

$_tipsdb['vhMaxKeepAliveReq'] = new DAttrHelp("最大Keep-Alive請求數", '指定通過keep-alive(永久)連接服務的最大請求數量。當該限制值達到時連接將被斷開。你可以為不同虛擬主機設置不同的數值。這個數值不能超過伺服器級別的&quot;最大持續連接請求數&quot;限制值。', '[性能建議] 設置為一個合理的高數值。設置為1或比1更小的值將禁用keep-alive連接。', '整數', '');

$_tipsdb['vhModuleUrlFilters'] = new DAttrHelp("Virtual Host Module Context", 'It&#039;s a centralized place to customize module settings for virtual host contexts. Settings for a context URI will override the virtual host or the server level settings.', '', '', '');

$_tipsdb['vhModules'] = new DAttrHelp("Virtual Host Modules", 'Virtual Host module configuration data is, by default inherited from the Server module configuration.   The Virtual Host Modules are limited to the HTTP level hooks.', '', '', '');

$_tipsdb['vhName'] = new DAttrHelp("虛擬主機名稱", '為虛擬主機的唯一名稱。建議使用虛擬主機的功能變數名稱作為虛擬主機名稱。 虛擬主機名稱參數可以使用$VH_NAME變數來引用。', '', '', '');

$_tipsdb['vhRoot'] = new DAttrHelp("虛擬主機根", '指定虛擬主機的根目錄。 注：這<b>不是</b>目錄根。 建議將所有與該虛擬主機相關的檔 (像日誌檔，html檔，CGI腳本等)都放置在這個目錄下。 虛擬主機根參數可以使用$VH_ROOT變數來引用。.', '[性能建議] 將不同的虛擬主機放在不同的硬碟驅動器上。', '絕對路徑或相對於$SERVER_ROOT的相對路徑。', '');

$_tipsdb['vhaccessLog_fileName'] = new DAttrHelp("檔案名", '訪問日誌的檔案名', '[性能建議] 將訪問日誌檔放在單獨的磁片上。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT,$VH_ROOT的相對路徑。', '');

$_tipsdb['vhadminEmails'] = new DAttrHelp("管理員郵箱", '指定這個虛擬主機管理員的電子郵箱位址。', '', 'Comma separated list of email addresses', '');

$_tipsdb['vhlog_fileName'] = new DAttrHelp("檔路徑", '指定日誌檔的路徑。', '[性能建議] 將日誌檔放在單獨的磁片上。', '檔案名可以是絕對路徑,也可以是相對於$SERVER_ROOT,$VH_ROOT的相對路徑。', '');

$_tipsdb['vhlog_logLevel'] = new DAttrHelp("日誌級別", '指定日誌記錄級別。可用級別（從高到低）為ERROR,  WARNING, NOTICE, INFO, 和 DEBUG。 只有當消息等級高於或與當前設置相同時才被記錄。 如果您希望將此設置為DEBUG，您也需要設置伺服器日誌級別為DEBUG。 調試的級別只能在伺服器級別通過&quot;調試級別&quot;控制。', '[性能建議] 除非&quot;調試級別&quot;設置為NONE以外的日誌級別, 否則DEBUG級別不會對性能產生任何影響，推薦採用。', '從列表中選擇', '');

$_tipsdb['viewlog'] = new DAttrHelp("Server Log Viewer", 'The Server Log Viewer is a convenient tool for browsing the  current server log to check for errors or problems.  The log viewer  searches the server log file in blocks for the specified log level.    The default block size is 20KB. You can use the Begin, End, Next, and Prev buttons to navigate a large log file.', 'The size of a dynamically generated page is limited by &quot;動態回應主內容最大大小(bytes)&quot;.   So if the block is too big, the page might be truncated.', '', '');

$_tipsdb['virtualHostMapping'] = new DAttrHelp("虛擬主機映射", '指定偵聽器和虛擬主機之間的關係。 偵聽器和虛擬主機通過功能變數名稱關聯。 HTTP請求將被路由到具有匹配功能變數名稱的虛擬主機。 一個偵聽器可以映射到多個虛擬主機以獲取不同的功能變數名稱。 也可以從不同的偵聽器映射一個虛擬主機。 一個偵聽器可以允許一個具有功能變數名稱值“*”的虛擬主機。 如果偵聽器的映射中沒有明確匹配的功能變數名稱， 偵聽器會將請求轉發到含有&quot;*&quot;功能變數名稱的虛擬主機。', '[性能] 僅添加必要的映射。 如果偵聽器僅映射到一個虛擬主機，則僅設置一個萬用字元映射“*”。', '', '');

$_tipsdb['virtualHostName'] = new DAttrHelp("虛擬主機", '指定虛擬主機的名稱。', '', '從列表中選擇', '');

$_tipsdb['vname'] = new DAttrHelp("Name - Virtual Host", 'The unique name that identifies this virtual host. This is the &quot;虛擬主機名稱&quot;  you specified when setting up this virtual host.', '', '', '');

$_tipsdb['vreload'] = new DAttrHelp("Restart - Virtual Host", 'The Restart action causes the web server to load the newest configuration  for this virtual host. Requests being processed will finish with the old configuration.  The new configuration will only apply for new requests. All changes to a virtual host  can be applied on the fly this way.', '', '', '');

$_tipsdb['vstatus'] = new DAttrHelp("Status - Virtual Host", 'The current status of a virtual host.   The status can be: Running, Stopped, Restart Required,   or Running - Removed from Configuration.  <ul>     <li>Running means the virtual host is loaded and in service.</li>     <li>Stopped means the virtual host is loaded but not in service (disabled). </li>     <li> Restart Required means this is a newly added virtual host and          the server has not yet loaded its configuration. </li>     <li>Running - Removed from Configuration means the virtual host has been deleted      from the server&#039;s configuration but it is still in service. </li> </ul>', '', '', '');

$_tipsdb['wsaddr'] = new DAttrHelp("位址", 'WebSocket 後端使用的唯一網路通訊端位址。 支持 IPv4 通訊端、IPv6 通訊端和 Unix 域通訊端 (UDS)。 IPv4 和 IPv6 通訊端可用於網路上的通信。 只有當 WebSocket 後端與伺服器在同一台機器上時，才能使用 UDS。', ' If the WebSocket backend runs on the same machine,  UDS is preferred. If you have to use an IPv4 or IPv6 socket,  set the IP address to localhost or 127.0.0.1, so the WebSocket backend  is inaccessible from other machines.<br/> Unix Domain Sockets generally provide higher performance than IPv4 or IPv6 sockets.', 'IPv4/IPv6 address:port, UDS://path, or unix:path', '127.0.0.1:5434 <br/>UDS://tmp/lshttpd/php.sock<br/>unix:/tmp/lshttpd/php.sock');

$_tipsdb['wsgiBin'] = new DAttrHelp("WSGI路徑", 'LiteSpeed Python Web伺服器的可執行檔（lswsgi）的路徑。<br/><br/>This 可執行檔是通過使用LiteSpeed的WSGI LSAPI模組編譯Python生成的。', '', '絕對路徑', '');

$_tipsdb['wsgiDefaults'] = new DAttrHelp("Python WSGI Default Settings", 'Default configurations for Python WSGI applications. These settings can be overriden at the context level.', '', '', '');

$_tipsdb['wsuri'] = new DAttrHelp("URI", '指定將使用此WebSocket後端的URI。 僅當該URI包含WebSocke協定升級請求時，才會將其流量轉發到WebSocket後端。<br/><br/>沒有議升級請求的流量將自動轉發到此URI所屬的Context。 如果此URI不存在任何Context，則LSWS會將該流量視為訪問位置為$DOC_ROOT/URI的靜態Context。', '', '普通URI（以“/”開頭）。 如果URI以“/”結尾，則此WebSocket後端將包括此URI下的所有子URI。', '將WebSocket代理與Context結合使用，可以使您以不同的方式在同一頁面上提供不同類型的流量，從而優化性能。 您可以將WebSocket流量發送到WebSocket後端，同時設置靜態Context以使LSWS為頁面的靜態內容服務，或者可以設置LSAPI Context以使LSWS可以為PHP內容服務（這兩個LSWS都比WebSocket後端更高效）。');


$_tipsdb['EDTP:GroupDBLocation'] = array('建議將資料庫存儲在 $SERVER_ROOT/conf/vhosts/$VH_NAME/目錄。');

$_tipsdb['EDTP:UDBgroup'] = array('如果在此處添加了組資訊，則此資訊將用於資源授權，並且涉及該使用者的任何組資料庫設置都將被忽略。','您可以使用逗號分隔多個組。 空格字元將被視為組名的一部分。');

$_tipsdb['EDTP:accessControl_allow'] = array('You can set up access control at server, virtual host and context levels. If there is access control at server level, the virtual host rules will be applied after the server rules are satisfied.','Input format can be an IP like 192.168.0.2, a sub-network like 192.168.*, or a subnet/netmask like 192.168.128.5/255.255.128.0.','If you have trusted IP or sub-network, then you must specify them in allowed list by adding a trailing &quot;T&quot; such as 192.168.1.*T. Trusted IP or sub-network is not limited by connection/throttling limit.');

$_tipsdb['EDTP:accessControl_deny'] = array('To deny access from certain address, put &quot;ALL&quot; in allowed list, and put subnet or IP in denied list. To allow only certain IP or subnet to access the site, put &quot;ALL&quot; in denied list and specify the address in the allowed list.');

$_tipsdb['EDTP:accessDenyDir'] = array('如果要拒絕對特定目錄的訪問，請輸入完整路徑。 輸入後跟*的路徑將禁用所有子目錄。','Path can be either absolute or relative to $SERVER_ROOT, 使用逗號分隔.','如果同時啟用了<b>跟隨符號連結</b>和<b>檢查符號連結</b>，則會根據拒絕訪問的目錄檢查符號連結。');

$_tipsdb['EDTP:accessLog_fileName'] = array('日誌檔路徑可以是絕對路徑，也可以是相對於$SERVER_ROOT的相對路徑。');

$_tipsdb['EDTP:aclogUseServer'] = array('如果需要，您可以禁用此虛擬主機的訪問日誌記錄以降低磁片I/O的佔用。');

$_tipsdb['EDTP:adminEmails'] = array('您可以輸入多個管理員電子郵件：使用逗號分隔。');

$_tipsdb['EDTP:adminOldPass'] = array('出於安全原因，如果忘記了管理員密碼，將無法從WebAdmin Console進行更改。 請改用以下shell命令： <br><br> /usr/local/lsws/admin/misc/admpass.sh.  <br><br> 該腳本將刪除所有輸入的管理員用戶ID，並用一個管理員用戶覆蓋它們。');

$_tipsdb['EDTP:allowBrowse'] = array('Static context can be used to map a URI to a directory either outside document root or within it. The directory can be absolute path or relative to document root(default), $VH_ROOT or $SERVER_ROOT.','Check &quot;Accessible&quot; will allow browsing static files in this context. You may want to disable it to prevent viewing static files, for e.g. when you update the content.');

$_tipsdb['EDTP:appType'] = array('','');

$_tipsdb['EDTP:as_location'] = array('The App Server context is for easy configuration of running Rack/Rails, WSGI, or Node.js applications. You only need to specify the root location of your application in the &quot;Location&quot; field.');

$_tipsdb['EDTP:as_startupfile'] = array('','');

$_tipsdb['EDTP:autoFix503'] = array('啟用<b>自動修復503錯誤</b>後，監視進程將自動啟動新的伺服器進程，並且如果檢測到崩潰，服務將立即恢復。');

$_tipsdb['EDTP:backlog'] = array('Local applications can be started by the web server. In this case, you need to specify the path, backlog and number of instances.');

$_tipsdb['EDTP:binPath'] = array('','');

$_tipsdb['EDTP:bubbleWrap'] = array('');

$_tipsdb['EDTP:bubbleWrapCmd'] = array('');

$_tipsdb['EDTP:cgi_path'] = array('CGI context可用於指定僅包含CGI腳本的目錄。 路徑可以是絕對路徑，也可以是相對於$SERVER_ROOT, $VH_ROOT的相對路徑或$DOC_ROOT（預設）。  對於cgi-bin目錄，路徑和URI必須以“ /”結尾。','If only a specific script is needed in that directory, it is recommended to create a CGI context for that script only. In this case, path and URI need not be a directory. For e.g., path can be ~/myapp/myscript.pl, URI can be /myapp/myscript.pl. All other files will not be served as CGI.');

$_tipsdb['EDTP:checkSymbolLink'] = array('檢查符號連結僅在跟隨符號連結啟用後才會生效。 這將控制是否根據禁止訪問的目錄檢查符號連結。');

$_tipsdb['EDTP:compressibleTypes'] = array('Compressible Types is a list of MIME types that are compressible, separated by commas. You can use wildcard &quot;*&quot; for MIME types, like */*, text/*. You can put &quot;!&quot; in front to exclude certain types. The order of the list is important if you use &quot;!&quot;. For e.g., a list like &quot;text/*, !text/css, !text/js&quot; will compress all text file except for css and js.');

$_tipsdb['EDTP:ctxType'] = array('<b>Static</b> context can be used to map a URI to a directory either outside document root or within it.','<b>Java Web App</b> context is used to automatically import a predefined Java Application in an AJPv13 compilant Java servlet engine.','<b>Servlet</b> context is used to import a specific servlet under a web application.','<b>Fast CGI</b> context is a mount point of Fast CGI application.','<b>LiteSpeed SAPI</b> context can be used to associate a URI with an LSAPI application.','<b>Proxy</b> context enables this virtual host to serve as a transparant reverse proxy server to an external web server or application server.','<b>CGI</b> context can be used to specify a directory only contains CGI scripts.','<b>Load Balancer</b> context can be used to assign a different cluster for that context.','<b>Redirect</b> context can set up an internal or external redirect URI.','<b>App Server</b> context is specifically used for Rack/Rails, WSGI, and Node.js applications.<br>','<b>Module handler</b> context is a mount point of hander type modules.');

$_tipsdb['EDTP:docRoot'] = array('如果文檔根目錄尚不存在，伺服器不會自動創建它。  請確保該目錄存在並且由正確的用戶擁有。','在此處設置文檔根目錄，它可以是絕對路徑，也可以相對於$SERV_ROOT或$VH_ROOT','在此虛擬主機中，文檔根目錄稱為$DOC_ROOT，可在其他路徑配置中使用。');

$_tipsdb['EDTP:domainName'] = array('輸入您希望此偵聽器回應的所有域。 使用逗號“”分隔域。','您只能選擇一個虛擬主機來處理所有未指定的域，並在域中添加“ *”。');

$_tipsdb['EDTP:enableDynGzipCompress'] = array('動態壓縮僅在啟用壓縮後才有效。');

$_tipsdb['EDTP:enableExpires'] = array('可以在伺服器/虛擬主機/Context 級別設置過期。較低級別的設置將覆蓋較高級別的設置。在覆蓋優先順序方面： <br><br> Context Level > 虛擬主機級別 > 伺服器級別 <br><br>');

$_tipsdb['EDTP:enableRecaptcha'] = array('When this setting is set to <b>Yes</b> at the Server level, reCAPTCHA Protection can still be disabled at the Virtual Host level.');

$_tipsdb['EDTP:errURL'] = array('您可以為不同的錯誤代碼設置自訂的錯誤頁面。');

$_tipsdb['EDTP:expiresByType'] = array('按類型過期將覆蓋默認設置。 每個條目的格式均為“MIME-type=A|Mseconds”， 兩者之間沒有空格。 您可以輸入多個以逗號分隔的條目。');

$_tipsdb['EDTP:expiresDefault'] = array('過期語法，“A|Mseconds”表示在基準時間（A或M）加上指定的時間（以秒為單位）之後，檔將 到期。 “ A”表示用戶端存取時間，“ M”表示檔修改時間。 您可以使用其他MIME類型覆蓋此默認設置:A86400表示檔將根據用戶端存取時間在1天后過期。','以下是一些常見的數字：1小時= 3600秒，1天= 86400秒，1周= 604800秒， 1個月= 2592000秒，1年= 31536000秒。');

$_tipsdb['EDTP:extAppAddress'] = array('位址可以是IPv4通訊端位址 &quot;IP:PORT&quot;, 像192.168.1.3:7777 和localhost:7777 或者 Unix域通訊端 地址 &quot;UDS://path&quot; 例如 UDS://tmp/lshttpd/myfcgi.sock.','UDS是在chroot環境下進行的。','對於本地應用程式，由於安全性和更好的性能，Unix域通訊端是首選。 如果你必須使用IPv4通訊端，將IP部分設置為localhost或127.0.0.1， 這樣其他機器就無法訪問應用程式。');

$_tipsdb['EDTP:extAppName'] = array('Give a name that easy to remember, other places will refer to this app by its name.');

$_tipsdb['EDTP:extAppType'] = array('You can set up external Fast CGI application and AJPv13 (Apache JServ Protocol v1.3) compatible servlet engine.');

$_tipsdb['EDTP:extWorkers'] = array('Load balancing workers must be previously defined.','Available ExtApp Types are fcgi(Fast CGI App), lsapi(LSAPI App), servlet(Servlet/JSP Engine), proxy(Web Server).','Different types of external applications can be mixed in one load balancing cluster.');

$_tipsdb['EDTP:externalredirect'] = array('在此處設置重定向URI。 如果是外部重定向，則可以指定狀態碼。 內部重定向必須以&quot;/&quot;開始, 外部重定向可以以 &quot;/&quot;或&quot;http(s)://&quot;開始.');

$_tipsdb['EDTP:extraHeaders'] = array('The Header Operations setting is backwards compatible with the old &#039;header_name: value1,value2,...&#039; syntax, which is equivalent to setting the header + values using the &#039;Header&#039; directive.');

$_tipsdb['EDTP:fcgiapp'] = array('Fast CGI context是Fast CGI應用的一個掛載點，Fast CGI應用程式必須在伺服器級或虛擬主機級預先定義。');

$_tipsdb['EDTP:followSymbolLink'] = array('如果啟用了跟隨符號連結，您仍然可以在虛擬主機級別禁用它。');

$_tipsdb['EDTP:gdb_groupname'] = array('組名應僅包含字母和數位。');

$_tipsdb['EDTP:gzipCompressLevel'] = array('壓縮動態態內容的級別,範圍從{val}1{/} (最低)到{val}9{/} (最高)');

$_tipsdb['EDTP:hardLimit'] = array('設置來自一個合理的的併發連接限制有助於抵禦DoS攻擊。');

$_tipsdb['EDTP:indexUseServer'] = array('您可以將預設伺服器級別設置用於索引檔，也可以使用自己的伺服器級別設置。','除了伺服器級別的設置之外，您還可以使用其他設置。','您可以通過選擇不使用伺服器級別設置並將虛擬主機級別設置留為空白來禁用索引檔。','您可以在context級別啟用/禁用“自動索引”。');

$_tipsdb['EDTP:javaServletEngine'] = array('如果Servlet Engine在其他電腦上運行，建議將webapps目錄複寫到本地。 否則，您必須將檔放在可訪問的公用網路磁碟中，這可能會影響性能。');

$_tipsdb['EDTP:javaWebApp_location'] = array('Java web app context is used to automatically import a predefined Java Application in an AJPv13 compilant Java servlet engine, the servlet engine should be set up in external app section (either server or virtual host level).','Location is the directory that contains web application files, which includes WEB-INF/ sub directory.','The web server will automatically import configuration file of web application, which usually is WEB-INF/web.xml under the driectory specified by &quot;location&quot;.');

$_tipsdb['EDTP:listenerIP'] = array('從列表中選擇一個IP位址，如果您未指定特定位址，則系統將綁定到該電腦上的所有可用IP地址。');

$_tipsdb['EDTP:listenerName'] = array('Give listener a name that is easy to understand and remember.');

$_tipsdb['EDTP:listenerPort'] = array('在此IP上為此偵聽器輸入一個唯一的埠號。 只有超級用戶（root）可以使用低於1024的埠。埠80是默認的HTTP埠;埠443是默認的HTTPS埠。');

$_tipsdb['EDTP:listenerSecure'] = array('為<b>安全</b>選擇“是”將使此偵聽器使用https。 然後，您必須進一步進行配置SSL settings.');

$_tipsdb['EDTP:logUseServer'] = array('如果<b>使用伺服器日誌</b>被設置為&quot;是&quot;,日誌將被寫入伺服器級別設置的伺服器檔。');

$_tipsdb['EDTP:log_enableStderrLog'] = array('Stderr日誌與伺服器日誌位於同一目錄中。 如果啟用，則所有輸出到stderr的外部程式都將記錄在此檔中。');

$_tipsdb['EDTP:log_fileName'] = array('日誌檔路徑可以是絕對路徑，也可以是相對於$SERVER_ROOT的相對路徑。');

$_tipsdb['EDTP:log_rollingSize'] = array('如果當前日誌檔超過回滾大小，將創建一個新的日誌檔。 檔大小以位元組為單位，可以有多種輸入格式：10240、10K或1M。');

$_tipsdb['EDTP:maxCGIInstances'] = array('限制CGI程式可以使用的資源,有助於抵禦DoS攻擊。','“最大CGI實例數”控制Web伺服器可以啟動多少個CGI進程。');

$_tipsdb['EDTP:maxReqHeaderSize'] = array('Numbers can be represented as 10240 or 10K.');

$_tipsdb['EDTP:mime'] = array('可以從上一頁編輯MIME設置。 您可以指定mime設定檔的位置 可以是絕對路徑，也可以是相對於$SERVER_ROOT的路徑。');

$_tipsdb['EDTP:namespace'] = array('');

$_tipsdb['EDTP:namespaceConf'] = array('');

$_tipsdb['EDTP:nodeBin'] = array('');

$_tipsdb['EDTP:phpIniOverride'] = array('');

$_tipsdb['EDTP:procSoftLimit'] = array('Process soft/hard limit controls how many processes are allowed for one user. This includes all the processes spawned by CGI application. OS level limit is used if not set.','Set to 0 or empty will use operation system default value for all soft/hard limits.','The soft limit is the value that the kernel enforces for the corresponding resource. The hard limit acts as a ceiling for the soft limit');

$_tipsdb['EDTP:proxyWebServer'] = array('代理context使此虛擬主機可用作外部Web伺服器或應用程式伺服器的透明反向代理伺服器。','External web server must be pre-defined under External App at server or virtual host level.');

$_tipsdb['EDTP:realm'] = array('A Context can be protected with a predefined realm, which is set up in the virtual host security section. Optionally, an alternative name and additional requirements can be specified.');

$_tipsdb['EDTP:realmName'] = array('在此處定義您的HT訪問域，可將其用於contexts。');

$_tipsdb['EDTP:recaptchaAllowedRobotHits'] = array('');

$_tipsdb['EDTP:recaptchaBotWhiteList'] = array('');

$_tipsdb['EDTP:recaptchaMaxTries'] = array('');

$_tipsdb['EDTP:recaptchaRegConnLimit'] = array('');

$_tipsdb['EDTP:recaptchaSecretKey'] = array('');

$_tipsdb['EDTP:recaptchaSiteKey'] = array('如果伺服器管理多個域，則必須取消勾選相應密匙的&quot;驗證 reCAPTCHA 解決方案的來源&quot;選項框。  否則，reCAPTCHA驗證將無法正常進行。');

$_tipsdb['EDTP:recaptchaSslConnLimit'] = array('');

$_tipsdb['EDTP:recaptchaType'] = array('');

$_tipsdb['EDTP:recaptchaVhReqLimit'] = array('');

$_tipsdb['EDTP:restrained'] = array('Turn on Restrained in a shared hosting enviroment.');

$_tipsdb['EDTP:reusePort'] = array('');

$_tipsdb['EDTP:rewriteMapLocation'] = array('Enter URI for location. URI must start with &quot;/&quot;.');

$_tipsdb['EDTP:rewriteRules'] = array('這裡應使用虛擬主機級別的重寫規則，例如在Apache虛擬主機設定檔中找到的規則。 請勿在此處添加任何目錄級重寫規則。 如果您在.htaccess有任何目錄級的重寫規則，則應該使用uri&quot;/&quot;創建一個靜態context， 並在那裡添加重寫規則。');

$_tipsdb['EDTP:rubyBin'] = array('<b>Ruby路徑</b>是ruby可執行檔的絕對路徑. 例如, /usr/local/bin/ruby.');

$_tipsdb['EDTP:serverName'] = array('伺服器進程的使用者和組設置無法修改。 這是在安裝過程中設置的。 您必須重新安裝才能更改此選項。');

$_tipsdb['EDTP:servletEngine'] = array('如果Servlet Engine在其他電腦上運行，建議將webapps目錄複寫到本地。 否則，您必須將檔放在可訪問的公用網路磁碟中，這可能會影響性能。');

$_tipsdb['EDTP:shHandlerName'] = array('除CGI之外，還需要在“外部應用程式”中預定義其他處理常式。');

$_tipsdb['EDTP:shType'] = array('腳本處理常式可以是CGI，FCGI應用程式，模組處理常式，Servlet引擎或Web代理伺服器。');

$_tipsdb['EDTP:sndBufSize'] = array('數值可以為10240、10K或1M。','如果發送/接收緩衝區大小設置為0，則將使用作業系統預設的TCP緩衝區大小。');

$_tipsdb['EDTP:softLimit'] = array('在此處設置IP級別的速率限制。 數值將四捨五入至4K單位。 設置為“ 0”以禁用寬頻限制。','只要沒有超過硬限制,連接數就可以在寬限期內暫時超過軟限制,超過寬限時間後,如果連接數仍然超過軟限制，相應的IP將被封鎖遮罩時長設置的時間');

$_tipsdb['EDTP:sslSessionCache'] = array('會話緩存使用戶端可以在設置的時間內恢復會話，而不必重新執行SSL握手。 您可以使用<b>啟用會話緩存</ b>為用戶端分配會話ID，或者通過創建和使用會話記錄單來做到這一點。');

$_tipsdb['EDTP:sslSessionTicketKeyFile'] = array('Session tickets will be rotated automatically if the tickets are being generated by the server. If using the <b>SSL Session Ticket Key File</b> option to create and manage your own session tickets, you must be rotate the tickets yourself using a cron job.');

$_tipsdb['EDTP:swappingDir'] = array('建議將交換目錄放置在本地磁片上，例如/tmp。 應不惜一切代價避免網路磁碟。 交換將在配置的記憶體I/O緩衝區耗盡時進行。');

$_tipsdb['EDTP:userDBLocation'] = array('建議將資料庫存儲在 $SERVER_ROOT/conf/vhosts/$VH_NAME/目錄.');

$_tipsdb['EDTP:vhRoot'] = array('所有目錄必須預先存在。這個設置不會為你創建目錄。如果你要創建一個新的虛擬主機， 你可以創建一個空的根目錄，並從頭開始設置； 也可以將套裝軟體中附帶的DEFAULT虛擬根目錄複製到這個虛擬主機根目錄中， 並修改為對應用戶所有。','虛擬主機根目錄($VH_ROOT)可以是絕對路徑,也可以是相對於$SERVER_ROOT的相對路徑.');

$_tipsdb['EDTP:vhaccessLog_fileName'] = array('日誌檔路徑可以是絕對路徑,也可以是相對於$SERVER_ROOT, $VH_ROOT的相對路徑.');

$_tipsdb['EDTP:vhadminEmails'] = array('您可以輸入多個管理員電子郵件，以逗號分隔。');

$_tipsdb['EDTP:vhlog_fileName'] = array('日誌檔路徑可以是絕對路徑,也可以是相對於$SERVER_ROOT, $VH_ROOT的相對路徑.','如果要將日誌級別設置為DEBUG，則還必須將伺服器日誌級別也設置為DEBUG。 調試級別由伺服器調試級別控制。 請僅在必要時才使用DEBUG級別，因為它會對伺服器性能產生很大影響，並且可以快速填滿磁碟空間。');

$_tipsdb['EDTP:virtualHostName'] = array('選擇要映射到此偵聽器的虛擬主機。','如果尚未設置要映射的虛擬主機，則可以跳過此步驟，稍後再進行');

$_tipsdb['EDTP:wsgiBin'] = array('');
